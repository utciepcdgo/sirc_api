<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\FormatResource;
use App\Models\Entity;
use App\Models\Parties\Representative;
use App\Models\Registration;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FormatController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        // Obtenemos el tipo de entidad Partido, Coaliciòn o Independiente.
        $entityType = (string) $request->query('entity_type');
        $entityId = $request->query('entity_id');

        /**
         * Si el tipo de entidad es Independiente, retornamos un error dado que este tipo
         * de recurso no es válido para esa entidad.
         */
        if ($entityType === 'App\Models\Independent') {
            return response()->json([
                'error' => 'Formato no válido para esta entidad.',
            ], 400);
        }

        $registrations = Registration::whereHas('block', function ($query) use ($entityId, $entityType) {
            $query->where('entity_id', '=', $entityId)
                ->when($entityType === 'App\Models\Coalition', function ($query) {
                    // Si $entityType es "App\Models\Coalition", se utiliza whereNotNull
                    $query->whereNotNull('shared_entity_id');
                }, function ($query) {
                    // De lo contrario, se utiliza whereNull
                    $query->whereNull('shared_entity_id');
                });
        })->with(['block.municipality']);

        $totalRegistrations = $registrations->count();

        $compensatory = $registrations->filter(['compensatory_id' => ['$ne' => 7]])->get();

        $municipalities = $registrations->get()->pluck('block.municipality.name')->unique();

        $entity = $entityType === "App\Models\Coalition" ? Entity::find($entityId)->entitiable->coalition : Entity::find($entityId)->entitiable;

        $representatives = Representative::where('entity_id', $entityType === "App\Models\Coalition" ? Entity::find($entityId)->entitiable->coalition->entities->first()->id : $entityId)->get();

        return response()->json([
            'data' => [
                'compensatories' => FormatResource::collection($compensatory),
                'municipalities' => $municipalities,
                'total_registrations' => $totalRegistrations,
                'entity' => [
                    'name' => $entity->name,
                    'acronym' => $entity->acronym,
                ],
                'subscribed' => $representatives,
            ],
        ]);
    }

    public function store(Request $request) {}

    public function show($id) {}

    public function update(Request $request, $id) {}

    public function destroy($id) {}
}
