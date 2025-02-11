<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index() {}

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

        return response()->json([
            'success' => true,
            'file' => $fileRecord,
        ], 201);

    }
}
