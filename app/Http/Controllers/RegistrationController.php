<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Http\Resources\RegistrationResource;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function index()
    {
        return RegistrationResource::collection(Registration::all());
    }

    public function store(RegistrationRequest $request)
    {
        // Assert that the registration is not already registered, since there
        // should be one for postulation and position, for this we will check
        // postulation_id and position_id.
        $registration = Registration::where('postulation_id', $request->postulation_id)
            ->where('position_id', $request->position_id)
            ->where('block_id', $request->block_id)
            ->first();

        //        dd($registration);

        if ($registration) {
            return response()->json([
                'success' => false,
                'message' => 'El registro en esta postulación y carácter ya existe.',
                'data' => $registration,
            ], 400);
        }

        return response()->json([
            'success' => true,
            'message' => 'Registro creado exitosamente.',
            'data' => new RegistrationResource(Registration::create($request->validated())),
        ], 201);
    }

    public function show(Registration $registration)
    {
        return new RegistrationResource($registration);
    }

    public function update(RegistrationRequest $request, Registration $registration)
    {
        $registration->update($request->validated());

        return new RegistrationResource($registration);
    }

    public function destroy(Registration $registration)
    {
        $registration->delete();

        return response()->json();
    }
}
