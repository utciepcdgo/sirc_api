<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\FilesResource;
use App\Models\File;
use App\Models\Registration;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
}
