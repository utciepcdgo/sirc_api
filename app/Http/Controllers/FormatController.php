<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\FormatResource;
use App\Models\Block;
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
        $entityType = Entity::find($request->query('entity_id'))->entitiable_type;

        /**
         * Si el tipo de entidad es Independiente, retornamos un error dado que este tipo
         * de recurso no es válido para esa entidad.
         */
        if ($entityType === 'App\Models\Independent') {
            return response()->json([
                'error' => 'Formato no válido para esta entidad.',
            ], 400);
        }

        $compensatories = Registration::filterByX('block.assignment', $entityType)
            ->whereHas('block.entity', function ($query) use ($request) {
                $query->where('id', $request->query('entity_id'));
            })->filter(['compensatory_id' => ['$ne' => 7]])->get();

        $municipalities = Block::filterByX('assignment', $entityType)->with('municipality')
            ->where('entity_id', '=', $request->query('entity_id'))
            ->whereHas('registrations')->get()->pluck('municipality');

        // Nos ahorramos una consulta dado que el número de municipios es igual al número de registros.
        $totalRegistrations = $municipalities->count();

        $entity = Entity::find($request->query('entity_id'));

        $representantives = Representative::where('entity_id', $request->query('entity_id'))->get();

        return response()->json([
            'data' => [
                'compensatories' => FormatResource::collection($compensatories),
                'municipalities' => $municipalities,
                'total_registrations' => $totalRegistrations,
                'entity' => [
                    'name' => $entity->entitiable->name,
                    'acronym' => $entity->entitiable->acronym,
                ],
                'subscribed' => $representantives,
            ],
        ]);
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
