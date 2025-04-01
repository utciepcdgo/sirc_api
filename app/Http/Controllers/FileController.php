<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\FilesResource;
use App\Models\File;
use App\Models\Registration;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
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
        ini_set('default_charset', '');
        mb_http_output('pass');
        mb_detect_order(['UTF-8']);
        ini_set('max_execution_time', -1);
        set_time_limit(-1);
        ini_set('memory_limit', '1G');

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

    public function downloadExcelDatabase(): StreamedResponse
    {
        ini_set('default_charset', '');
        mb_http_output('pass');
        mb_detect_order(['UTF-8']);
        ini_set('max_execution_time', -1);
        set_time_limit(-1);
        ini_set('memory_limit', '1G');

        $spreadsheet = new Spreadsheet;
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Registros');

        $headerStyle = [
            'font' => ['bold' => true, 'size' => 12],
            'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER],
        ];

        $headers = [
            'NOMBRE',
            'PRIMER APELLIDO',
            'SEGUNDO APELLIDO',
            'POSTULACIÓN',
            'CARÁCTER',
            'MEDIDA COMPENSATORIA',
            'MUNICIPIO',
            'ENTIDAD',
            'PARTIDO',
            'COALICIÓN',
            'SOBRENOMBRE',
            'REELECCIÓN',
            'SEXO',
            'GÉNERO',
            'CURP',
            'OCUPACIÓN',
            'LUGAR DE NACIMIENTO',
            'FECHA DE NACIMIENTO',
            'LUGAR DE RESIDENCIA',
            'CIUDAD/LOCALIDAD',
            'COLONIA',
            'CALLE',
            'NÚMERO EXTERIOR',
            'NÚMERO INTERIOR',
            'CÓDIGO POSTAL',
            'TIEMPO DE RESIDENCIA',
            "CIC",
            "OCR",
            "SECCIÓN ELECTORAL",
            "NÚMERO DE EMISIÓN",
            "CLAVE DE ELECTOR",
            'FECHA DE REGISTRO',
        ];

        // Write headers
        foreach ($headers as $colIndex => $title) {
            $cell = Coordinate::stringFromColumnIndex($colIndex + 1) . '1';
            $sheet->setCellValue($cell, $title);
        }

        $sheet->getStyle('A1:AF1')->applyFromArray($headerStyle);

        $row = 2;

        Registration::query()
            ->select('registrations.*')
            ->join('blocks', 'registrations.block_id', '=', 'blocks.id')
            ->join('municipalities', 'blocks.municipality_id', '=', 'municipalities.id')
            ->orderBy('municipalities.id')
            ->orderBy('blocks.entity_id')
            ->orderBy('postulation_id')
            ->orderByRaw('
                    CASE
                        WHEN postulation_id = 5 THEN council_number
                        ELSE 0
                    END ASC
                ')
            ->orderBy('position_id')
            ->with([
                'block',
                'block.municipality',
                'postulation',
                'position',
                'compensatory',
                'sex',
            ])
            ->cursor()
            ->each(function ($registration) use (&$row, $sheet) {

                $birthplaceData = json_decode($registration->birthplace, true) ?? [];
                $placeOfBirth = isset($birthplaceData['municipality'], $birthplaceData['state'])
                    ? mb_strtoupper($birthplaceData['municipality'] . ', ' . $birthplaceData['state'])
                    : 'N/A';
                $birthDate = isset($birthplaceData['birth']) ? Carbon::parse($birthplaceData['birth'])->format('d-m-Y') : 'N/A';

                $residenceData = json_decode($registration->residence, true) ?? [];
                $placeOfResidence = isset($residenceData['municipality'], $residenceData['state'])
                    ? mb_strtoupper($residenceData['municipality'] . ', ' . $residenceData['state'])
                    : 'N/A';
                $cityOfResidence = $residenceData['city'] ?? 'N/A';
                $colonyOfResidence = $residenceData['colony'] ?? 'N/A';
                $streetOfResidence = $residenceData['street'] ?? 'N/A';
                $exteriorNumber = $residenceData['outside_number'] ?? 'N/A';
                $interiorNumber = $residenceData['inside_number'] ?? 'N/A';
                $postalCode = $residenceData['postal_code'] ?? 'N/A';
                $residenceTime = isset($residenceData['length']['years'], $residenceData['length']['months'])
                    ? $residenceData['length']['years'] . ' años, ' . ($residenceData['length']['months'] ?? '0') . ' meses'
                    : 'NO ESPECIFICADO';

                $voterCardData = json_decode($registration->voter_card, true) ?? [];
                $cic = $voterCardData['cic'] ?? 'NO ESPECIFICADO';
                $ocr = $voterCardData['ocr'] ?? 'NO ESPECIFICADO';
                $section = $voterCardData['section'] ?? 'NO ESPECIFICADO';
                $emission = $voterCardData['emission_number'] ?? 'NO ESPECIFICADO';

                $data = [
                    mb_strtoupper($registration->name),
                    mb_strtoupper($registration->first_name),
                    mb_strtoupper($registration->second_name),
                    $registration->postulation_id === 5
                        ? mb_strtoupper($registration->postulation->name) . ' ' . $registration->council_number
                        : mb_strtoupper($registration->postulation->name),
                    mb_strtoupper($registration->position->name),
                    mb_strtoupper($registration->compensatory->name),
                    mb_strtoupper($registration->block->municipality->name),
                    'DURANGO',
                    mb_strtoupper($registration->block->entity->entitiable->name),
                    mb_strtoupper($registration->block->entity->entitiable->coalition->name ?? "N/A"),
                    mb_strtoupper($registration->mote ?? "NO APLICA"),
                    mb_strtoupper($registration->reelection),
                    mb_strtoupper($registration->sex->name),
                    mb_strtoupper($registration->gender->name),
                    $registration->curp,
                    mb_strtoupper($registration->occupation),
                    $placeOfBirth,
                    $birthDate,
                    $placeOfResidence,
                    $cityOfResidence,
                    $colonyOfResidence,
                    $streetOfResidence,
                    $exteriorNumber,
                    $interiorNumber,
                    $postalCode,
                    $residenceTime,
                    $cic,        // <-- column 27 (AA)
                    $ocr,        // <-- AB
                    $section,    // <-- AC
                    $emission,   // <-- AD
                    $registration->voter_key, // AE
                    $registration->created_at->format('d-m-Y H:i:s'), // AF
                ];

                foreach ($data as $colIndex => $value) {
                    $column = Coordinate::stringFromColumnIndex($colIndex + 1);
                    $cell = $column . $row;

                    // Apply explicit string formatting to sensitive fields (CIC, OCR, etc.)
                    if (in_array($colIndex, [26, 27, 28, 29, 30])) {
                        $sheet->setCellValueExplicit($cell, $value, DataType::TYPE_STRING);
                    } else {
                        $sheet->setCellValue($cell, $value);
                    }
                }

                $row++;
            });

        // Auto-size columns
        foreach (range(1, count($headers)) as $colIndex) {
            $column = Coordinate::stringFromColumnIndex($colIndex);
            $sheet->getColumnDimension($column)->setAutoSize(true);
        }

        return response()->streamDownload(function () use ($spreadsheet) {
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');
        }, 'registro_base.xlsx', [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Cache-Control' => 'no-store, no-cache',
        ]);
    }
}
