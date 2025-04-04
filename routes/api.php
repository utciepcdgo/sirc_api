<?php

declare(strict_types=1);

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AwsController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\CompensatoryController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MigrantController;
use App\Http\Controllers\Parties\RepresentativeController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SexController;
use App\Http\Resources\CountryResource;
use App\Http\Resources\FileTypeResource;
use App\Http\Resources\PostulationResource;
use App\Models\Files\FileType;
use App\Models\Migrants\Country;
use App\Models\Registrations\Postulation;
use Illuminate\Support\Facades\Route;

// Authenticaction | Autenticación
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/user', [AuthController::class, 'user'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->apiResource('/registrations', RegistrationController::class);
Route::post('/registrations/{registration}/substitute', [RegistrationController::class, 'substitute']);
Route::apiResource('/blocks', BlockController::class);

// Sexes
Route::get('/sexes', [SexController::class, 'index']);

// Genres
Route::get('/genres', [GenreController::class, 'index']);

// Compensatories | Medidas Compensatorias
Route::get('/compensatories', [CompensatoryController::class, 'index']);

// Postulations | Postulaciones
Route::get('/postulations', function () {
    return PostulationResource::collection(Postulation::all());
});

// Migrants | Migrantes
Route::apiResource('/migrants', MigrantController::class);

// Countries | Países
Route::get('/countries', function () {
    return CountryResource::collection(Country::all());
});

// Formats | Formatos
Route::get('/format', [FormatController::class, 'index']);

// Representatives | Representantes
Route::apiResource('/representatives', RepresentativeController::class);

// File Types | Tipos de Archivo
Route::get('/filetypes', function () {
    return FileTypeResource::collection(FileType::all());
});

// Files | Archivos
Route::post('/file', [FileController::class, 'store']);
Route::get('/files', [FileController::class, 'show']);
Route::delete('/file/{file_id}', [FileController::class, 'destroy']);
Route::get('/files/{registration_id}/zip', [FileController::class, 'downloadRegistrationFilesZip']);
Route::get('request-download/{file_id}', [FileController::class, 'downloadFile']);
Route::middleware('auth:sanctum')->post('/request-database', [FileController::class, 'downloadExcelDatabase']);
Route::get('/check-report-status/{report_id}', [FileController::class, 'checkReportStatus']);

// AWS
Route::post('/aws_s3_signed_url', [AwsController::class, 'index']);

// Receipt | Acuse de Recepción
Route::post('/receipt', [ReceiptController::class, 'store']);
Route::get('/receipt', [ReceiptController::class, 'index']);
Route::get('/receipt/download/{receipt}', [ReceiptController::class, 'download']);


