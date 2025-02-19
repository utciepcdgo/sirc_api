<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\FilesResource;
use App\Models\Entity;
use App\Models\Registration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Reader;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
 * Este controlador genera el Acuse de Recepción el cual consiste en un archivo en formato XLSX que
 * contiene la información de los registros por municipio en el siguiente orden:
 * - Municipio - Como apartado para cada municipio
 * - Nombre completo (second_name + first_name + name)
 * - Cargo (postulation)
 * - Carácter (position)
 * - Medida compensatoria (compensatory)
 * - Sexo (sex)
 * - Documentos (files)
 */
class ReceiptController extends Controller
{
    public function index(Request $request)
    {

        ini_set('default_charset', '');
        mb_http_output('pass');
        mb_detect_order(['UTF-8']);

        $entityId = $request->query('entity_id');
        $partyOrigin = Entity::find($entityId)->entitiable->name;

        $registrations = Registration::whereHas('block', function ($query) use ($entityId) {
            $query->where('entity_id', '=', $entityId);
        })->with(['block.municipality', 'postulation', 'position', 'compensatory', 'sex', 'files'])->get();

        $data = [];

        foreach ($registrations as $registration) {

            $municipalityName = $registration->block->municipality->name;

            $data[$municipalityName][] = [
                'name' => ($registration->first_name.' '.$registration->second_name.' '.$registration->name),
                'postulation' => $registration->postulation_id === 5 ? ($registration->postulation->name.' '.$registration->council_number) : $registration->postulation->name,
                'position' => $registration->position->name,
                'compensatory' => $registration->compensatory->name,
                'sex' => $registration->sex->name,
                // Colocar Coalición si el registro pertenece a ella o el Partido Polìtico.
                'party' => $registration->isAssigned() ? $registration->block->sharedEntity->entitiable->name : $registration->block->entity->entitiable->name,
                'files' => FilesResource::collection($registration->files)->pluck('filetype.name')->toArray(),
            ];
        }

        // 1. Cargar la plantilla
        $templatePath = storage_path('app/templates/receipt_template.xlsx');
        $reader = new Reader\Xlsx;

        // Hoja donde guardaste los 3 estilos (fila 1, 2 y 3)
        $reader->setLoadSheetsOnly(['Styles']);

        // Obtenemos la hoja de estilos
        $spreadsheet = $reader->load($templatePath);

        // Hoja donde vas a volcar la información
        $spreadsheet1 = $spreadsheet->getActiveSheet();

        $styleArray1 = $spreadsheet1->getStyle('A1')->exportArray();
        $styleArray2 = $spreadsheet1->getStyle('A2')->exportArray();
        $styleArray3 = $spreadsheet1->getStyle('A3')->exportArray();

        $reader->setLoadSheetsOnly(['Acuse']);
        // Cambiamos de hoja
        $spreadsheet = $reader->load($templatePath);
        $spreadsheet1 = $spreadsheet->getActiveSheet()->setTitle('Acuse');

        foreach ($data as $municipality => $records) {

            $spreadsheet1->insertNewRowBefore(5);

            foreach ($records as $record) {
                $spreadsheet1->insertNewRowBefore(5);

                $spreadsheet1->setCellValue('A5', $record['name']);
                $spreadsheet1->setCellValue('B5', $record['postulation']);
                $spreadsheet1->setCellValue('C5', $record['position']);
                $spreadsheet1->setCellValue('D5', $record['compensatory']);
                $spreadsheet1->setCellValue('E5', $record['party']);
                $spreadsheet1->setCellValue('F5', $record['sex']);
                $spreadsheet1->setCellValue('G5', implode(', ', $record['files']));

                foreach (range('A', 'G') as $one) {
                    $spreadsheet1->getStyle($one.'5')->applyFromArray($styleArray3);
                }

                $spreadsheet1->getStyle('F5')->getAlignment()->setWrapText(true);

                // Ocultamos registro de los próximos acuses.
                //                DB::table('candidatos')->where('id', '=', $registro->id)->update(['reporte_id' => 1]);
            }

            $spreadsheet1->mergeCells('A2:G2');
            $spreadsheet1->mergeCells('A3:G3');
            $spreadsheet1->mergeCells('A4:G4');

            $spreadsheet1->getStyle('A2:G2')->getAlignment()->setHorizontal('right');
            $spreadsheet1->getStyle('A3:G3')->getAlignment()->setHorizontal('right');
            $spreadsheet1->getStyle('A4:G4')->getAlignment()->setHorizontal('right');

            $spreadsheet1->setCellValue('A2', $partyOrigin);

            $spreadsheet1->setCellValue('A3', 'Victoria de Durango, Dgo,. a '.Carbon::now()->format('d').' de '.Carbon::now()->monthName.' de 2025');

            $spreadsheet1->setCellValue('A4', Carbon::now()->format('H:i').' Horas');

            //Insert headers rows
            $spreadsheet1->insertNewRowBefore(5, 2);
            $spreadsheet1->mergeCells('A5:G5');

            $spreadsheet1->setCellValue('A5', $municipality);
            //Data
            $rowArray = ['NOMBRE', 'CARGO', 'CARÁCTER', 'MEDIDA COMPENSATORIA', 'PARTIDO POLITICO/COALICION', 'SEXO', 'DOCUMENTOS'];
            $spreadsheet1->fromArray($rowArray, null, 'A6'
            );

            foreach (range('A', 'G') as $one) {
                $spreadsheet1->getStyle($one.'5')->applyFromArray($styleArray1);
                $spreadsheet1->getStyle($one.'6')->applyFromArray($styleArray2);
            }
        }

        // 5. Exportar (descargar) o guardar el archivo
        $writer = new Xlsx($spreadsheet);

        $fileName = 'reporte_sirc.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment; filename=\"{$fileName}\"");
        header('Cache-Control: max-age=0');

        $writer->save(base_path().$fileName);
        $file = base_path().$fileName;

        Storage::disk('public')->putFileAS('/AcusesRecepcion', $file, $fileName.'.xlsx');
        //        dd('Archivo guardado en ' . base_path() . "/Plantillas/doc.xlsx");

        return response()->json(['message' => 'Acuse generado correctamente'], 200);

    }
}
