<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\FilesResource;
use App\Models\File;
use App\Models\Registration;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;
use ZipArchive;

class FileController extends Controller
{
    public function index()
    {
    }

    public function store(Request $request): JsonResponse
    {
        // Validate the incoming query parameters.
        $validated = $request->validate([
            'filetype_id' => 'required|exists:filetypes,id',
            'registration_id' => 'required|exists:registrations,id',
            'format' => 'required|string',
            'url' => 'required|string',
        ]);

        // Create the file record in the database.
        $fileRecord = File::create($validated);

        // Mark registration as awaiting presentation
        $registration = Registration::find($fileRecord->registration_id);
        $registration->setAwaitingPresentation();

        return response()->json([
            'success' => true,
            'file' => $fileRecord,
        ], 201);

    }

    // Show all files from Registration
    public function show(Request $request): JsonResponse
    {
        // Validate the incoming query parameters.
        $validated = $request->validate([
            'registration_id' => 'required|exists:registrations,id',
        ]);

        // Get all files from the registration
        $files = FilesResource::collection(File::where('registration_id', $validated['registration_id'])->get());
        //        $files = File::where('registration_id', $validated['registration_id'])->get();

        return response()->json([
            'success' => true,
            'files' => $files,
        ], 200);
    }

    // Delete a file
    public function destroy(Request $request): JsonResponse
    {
        // Find the file
        $file = File::find($request->file_id);

        // Mark registration as awaiting presentation
        $registration = Registration::find($file->registration_id);
        $registration->setAwaitingPresentation();

        // Delete the file record
        $file->delete();

        return response()->json(data: [
            'success' => true,
            'message' => 'Archivo eliminado correctamente.',
        ]);
    }

    public function downloadFile($file_id)
    {
        // Buscamos el archivo en la base de datos
        $file = File::findOrFail($file_id);

        // Generamos el enlace temporal (válido por 5 minutos)
        $temporaryUrl = Storage::disk('s3')->temporaryUrl(
            $file->url, now()->addMinutes(5)
        );

        // Retornamos la respuesta en formato JSON
        return response()->json([
            'success' => true,
            'url' => $temporaryUrl,
        ]);
    }

    public function downloadRegistrationFilesZip($registration_id): StreamedResponse|JsonResponse|BinaryFileResponse
    {
        // Fetch registration and its related files
        $registration = Registration::with('files')->findOrFail($registration_id);
        $files = $registration->files;

        if ($files->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No se encontraron archivos.'], 404);
        }

        // Create a unique temporary ZIP file
        $zipFileName = $registration->name . '_' . $registration->first_name . '_' . $registration->second_name . '_' . time() . '.zip';
        $tempZipPath = storage_path('app/temp/' . $zipFileName);

        // Ensure temp folder exists
        if (!file_exists(storage_path('app/temp'))) {
            mkdir(storage_path('app/temp'), 0777, true);
        }

        $zip = new ZipArchive;

        if ($zip->open($tempZipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
            foreach ($files as $file) {
                $fileContents = Storage::disk('s3')->get($file->url); // Read file from S3
                $zip->addFromString(basename($file->url), $fileContents); // Add to zip
            }
            $zip->close();
        } else {
            return response()->json(['success' => false, 'message' => 'No se pudo crear el ZIP.'], 500);
        }

        // Stream ZIP file to user
        return response()->download($tempZipPath)->deleteFileAfterSend(true);
    }
}
