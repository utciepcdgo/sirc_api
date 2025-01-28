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
        // Desired output:
        //        $jayParsedAry = [
        //            "data" => [
        //                [
        //                    "compensatories" => [
        //                        [
        //                            "name" => "Jane Doe",
        //                            "postulation" => "Postulation 2",
        //                            "position" => "Position 2",
        //                            "compensatory" => "Compensatory 2"
        //                        ],
        //                        [
        //                            "name" => "Jane Doe",
        //                            "postulation" => "Postulation 2",
        //                            "position" => "Position 2",
        //                            "compensatory" => "Compensatory 2"
        //                        ]
        //                    ]
        //                ],
        //                [
        //                    "municipalities" => [
        //                        ["name" => "Durango"],
        //                        ["name" => "Gómez Palacio1"]
        //                    ]
        //                ],
        //                [
        //                    "total_registrations" => 2,
        //                    "entity" => "Partido Verde Ecologista de Mèxico",
        //                    "subscriptions" => [
        //                        ["name" => "Alejandro Parra Villa"],
        //                        ["name" => "José Manuel Parra Villa"]
        //                    ]
        //                ]
        //            ]
        //        ];

        $compensatories = Registration::whereHas('block.entity', function ($query) use ($request) {
            $query->where('id', $request->query('entity_id'));
        })
            ->filter(['compensatory_id' => ['$ne' => 7]])
            ->whereDoesntHave('block.assignment', function ($query) {
                $query->where('municipality', false)
                    ->orWhere('syndic', false)
                    ->orWhere('councils', '!=', null);
            })
            ->get();
        $municipalities = Block::with('municipality')
            ->where('entity_id', '=', $request->query('entity_id'))
            ->whereHas('registrations')
            ->whereDoesntHave('assignment', function ($query) {
                $query->where('municipality', false)
                    ->orWhere('syndic', false)
                    ->orWhere('councils', '!=', null);
            })
            ->get()
            ->pluck('municipality');
        $totalRegistrations = Registration::whereHas('block.entity', function ($query) use ($request) {
            $query->where('id', $request->query('entity_id'));
        })
            ->filter(['entity_id' => ['$eq' => $request->query('entity_id')]])->count();
        $entity = Entity::find($request->query('entity_id'))->entitiable->name;
        $representantives = Representative::where('entity_id', $request->query('entity_id'))->get();

        return response()->json([
            'data' => [
                'compensatories' => FormatResource::collection($compensatories),
                'municipalities' => $municipalities,
                'total_registrations' => $totalRegistrations,
                'entity' => $entity,
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
