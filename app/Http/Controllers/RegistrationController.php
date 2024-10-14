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
        return new RegistrationResource(Registration::create($request->validated()));
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
