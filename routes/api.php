<?php

declare(strict_types=1);

use App\Http\Controllers\BlockController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/registrations', RegistrationController::class);
Route::apiResource('/blocks', BlockController::class);
