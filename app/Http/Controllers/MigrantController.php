<?php

namespace App\Http\Controllers;

use App\Http\Requests\MigrantRequest;
use App\Http\Resources\MigrantResource;
use App\Models\Migrant;

class MigrantController extends Controller
{
    public function index()
    {
        return MigrantResource::collection(Migrant::all());
    }

    public function store(MigrantRequest $request)
    {
        $validated = $request->validated();
        $migrant = Migrant::updateOrCreate(
            ['registration_id' => $validated['registration_id'] ?? null], // Assuming 'registration_id' is part of the validated data
            $validated
        );

        return new MigrantResource($migrant);
//        return new MigrantResource(Migrant::create($request->validated()));
    }

    public function show(Migrant $migrant)
    {
        return new MigrantResource($migrant);
    }

    public function update(MigrantRequest $request, Migrant $migrant)
    {
        $migrant->update($request->validated());

        return new MigrantResource($migrant);
    }

    public function destroy(Migrant $migrant)
    {
        $migrant->delete();

        return response()->json();
    }
}
