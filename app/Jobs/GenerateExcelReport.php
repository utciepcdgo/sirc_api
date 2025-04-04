<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Models\Registration;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Throwable;

class GenerateExcelReport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public Report $report) {}

    public function handle(): void
    {
        $this->report->update(['status' => 'processing']);

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
            'CIC',
            'OCR',
            'SECCIÓN ELECTORAL',
            'NÚMERO DE EMISIÓN',
            'CLAVE DE ELECTOR',
            'FECHA DE REGISTRO',
        ];

        // Write headers
        foreach ($headers as $colIndex => $title) {
            $cell = Coordinate::stringFromColumnIndex($colIndex + 1).'1';
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
                    ? mb_strtoupper($birthplaceData['municipality'].', '.$birthplaceData['state'])
                    : 'N/A';
                $birthDate = isset($birthplaceData['birth']) ? Carbon::parse($birthplaceData['birth'])->format('d-m-Y') : 'N/A';

                $residenceData = json_decode($registration->residence, true) ?? [];
                $placeOfResidence = isset($residenceData['municipality'], $residenceData['state'])
                    ? mb_strtoupper($residenceData['municipality'].', '.$residenceData['state'])
                    : 'N/A';
                $cityOfResidence = $residenceData['city'] ?? 'N/A';
                $colonyOfResidence = $residenceData['colony'] ?? 'N/A';
                $streetOfResidence = $residenceData['street'] ?? 'N/A';
                $exteriorNumber = $residenceData['outside_number'] ?? 'N/A';
                $interiorNumber = $residenceData['inside_number'] ?? 'N/A';
                $postalCode = $residenceData['postal_code'] ?? 'N/A';
                $residenceTime = isset($residenceData['length']['years'], $residenceData['length']['months'])
                    ? $residenceData['length']['years'].' años, '.($residenceData['length']['months'] ?? '0').' meses'
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
                        ? mb_strtoupper($registration->postulation->name).' '.$registration->council_number
                        : mb_strtoupper($registration->postulation->name),
                    mb_strtoupper($registration->position->name),
                    mb_strtoupper($registration->compensatory->name),
                    mb_strtoupper($registration->block->municipality->name),
                    'DURANGO',
                    mb_strtoupper($registration->block->entity->entitiable->name),
                    mb_strtoupper($registration->block->entity->entitiable->coalition->name ?? 'N/A'),
                    mb_strtoupper($registration->mote ?? 'NO APLICA'),
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
                    $cell = $column.$row;

                    // Apply explicit string formatting to sensitive fields (CIC, OCR, etc.)
                    if (in_array($colIndex, [26, 27, 28, 29, 30], true)) {
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

        $filename = 'REGISTROS_SIRC_'.now()->timestamp.'.xlsx';
        $path = 'reports/'.$filename;

        $writer = new Xlsx($spreadsheet);
        Storage::disk('local')->put("public/$path", '');
        $writer->save(storage_path("app/public/$path"));

        $this->report->update([
            'status' => 'ready',
            'filename' => $filename,
            'path' => $path,
        ]);
    }

    public function failed(Throwable $exception): void
    {
        $this->report->update(['status' => 'failed']);
    }
}
