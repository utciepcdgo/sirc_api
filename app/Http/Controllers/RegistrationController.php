<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\Registrations\SubstitutionRequest;
use App\Http\Resources\RegistrationResource;
use App\Models\Registration;
use App\Models\Registrations\Substitution;
use App\Models\Reviewer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection|JsonResponse
    {
        $user = $request->user();

        $reviewer = Reviewer::where('user_id', $user->id)->with('entities')->first();

        if (!$reviewer) {
            return response()->json(['error' => 'Accedo denegado. El usuario identificado no es un revisor.'], 403);
        }

        // Si es un supervisor, retornar todos los registros
        if ($reviewer->isAdmin()) {
            return RegistrationResource::collection(Registration::all());
        }

        $entityIds = $reviewer->entities->pluck('id');

        return RegistrationResource::collection(Registration::where('status', '=', 'FORMALLY_PRESENTED')
            ->whereHas('block.entity', function ($query) use ($entityIds) {
                $query->whereIn('id', $entityIds);
            })
            ->join('blocks', 'registrations.block_id', '=', 'blocks.id')
            ->join('municipalities', 'blocks.municipality_id', '=', 'municipalities.id')
            ->orderBy('municipalities.id')
            ->orderBy('postulation_id')
            ->orderByRaw('
                    CASE
                        WHEN postulation_id = 5 THEN council_number
                        ELSE 0
                    END ASC
                ')
            ->orderBy('position_id') // OWNER before SUBSTITUTE
            ->select('registrations.*')
            ->get()
        );
    }

    public function store(RegistrationRequest $request)
    {
        // Assert that the registration is not already registered, since there
        // should be one for postulation and position, for this we will check
        // postulation_id and position_id.

        $registration = Registration::where(function ($query) use ($request) {
            // If postulation is 3 or 4, check postulation and position, if found, return the first one.
            if ($request->postulation_id === '3' || $request->postulation_id === '4') {
                $query->where('postulation_id', $request->postulation_id)
                    ->where('position_id', $request->position_id)
                    ->where('block_id', $request->block_id);
            }
            // If postulation is 5 check postulation, position and council number.
            if ($request->postulation_id === '5') {
                $query->where('postulation_id', $request->postulation_id)
                    ->where('position_id', $request->position_id)
                    ->where('council_number', $request->council_number)
                    ->where('block_id', $request->block_id);
            }
        })->first();

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

    public function destroy(Registration $registration)
    {
        $registration->delete();

        return response()->json();
    }

    public function substitute(SubstitutionRequest $request, Registration $registration)
    {

        DB::beginTransaction();

        try {
            // 1. Archivar la información de la persona actual en el historial
            Substitution::create(array_merge($registration->toArray(), ['registration_id' => $registration->id]))->markAsSubstituted();

            // 2. Actualizar el registro principal con la nueva información
            $registration->update($request->validated());

            // 3. Cambiar el estado del registro a "En espera de ser presentado"
            $registration->setAwaitingPresentation();

            DB::commit();

            return response()->json([
                'message' => 'La persona ha sido sustituida exitosamente.',
                'registration' => $registration,
            ]);
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json([
                'message' => 'Error al sustituir la persona.',
                'error' => $e->getMessage(),
            ], 500);
        } catch (\Throwable $e) {
            DB::rollback();

            return response()->json([
                'message' => 'Error al sustituir la persona.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function update(RegistrationRequest $request, Registration $registration)
    {
        $registration->update($request->validated());

        // Mark as pending presentation
        $registration->setAwaitingPresentation();

        // Return the updated registration
        return new RegistrationResource($registration);
    }
}
