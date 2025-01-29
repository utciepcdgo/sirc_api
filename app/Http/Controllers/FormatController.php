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

        $compensatories = Registration::whereHas('block.entity', function ($query) use ($request) {
            $query->where('id', $request->query('entity_id'));
        })
            ->filter(['compensatory_id' => ['$ne' => 7]])
            ->whereDoesntHave('block.assignment', function ($query) {
                $query->where('municipality', '!=', false)
                    ->orWhere('syndic', '!=', false)
                    ->orWhere('councils', '!=', null);
            })
            ->get();

//        $compensatories = Registration::filterByX('block.assignment', (int) $request->query('entity_id'), 'party')
//            ->filter(['compensatory_id' => ['$ne' => 7]])->get();

        $municipalities = Block::with('municipality')
            ->where('entity_id', '=', $request->query('entity_id'))
            ->whereHas('registrations')
            ->whereDoesntHave('assignment', function ($query) {
                $query->where('municipality', '!=', false)
                    ->orWhere('syndic', '!=', false)
                    ->orWhere('councils', '!=', null);
            })
            ->get()
            ->pluck('municipality');
        $totalRegistrations = Registration::whereHas('block.entity', function ($query) use ($request) {
            $query->where('id', $request->query('entity_id'));
        })->whereDoesntHave('block.assignment', function ($query) {
            $query->where('municipality', '!=', false)
                ->orWhere('syndic', '!=', false)
                ->orWhere('councils', '!=', null);
        })
            ->filter(['entity_id' => ['$eq' => $request->query('entity_id')]])->count();
        $entity = Entity::find($request->query('entity_id'))->entitiable->name;
        $representatives = Representative::where('entity_id', $request->query('entity_id'))->get() ?? [];

        return response()->json([
            'data' => [
                'compensatories' => FormatResource::collection($compensatories),
                'municipalities' => $municipalities,
                'total_registrations' => $totalRegistrations,
                'entity' => $entity,
                'subscribed' => $representatives,
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
