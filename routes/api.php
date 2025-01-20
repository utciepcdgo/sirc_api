<?php

declare(strict_types=1);

use App\Http\Controllers\BlockController;
use App\Http\Controllers\CompensatoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MigrantController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SexController;
use App\Http\Resources\PostulationResource;
use App\Models\Registrations\Postulation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/registrations', RegistrationController::class);
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
