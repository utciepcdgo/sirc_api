<?php

namespace App\Http\Controllers\Parties;

use App\Http\Controllers\Controller;
use App\Http\Requests\Parties\RepresentativeRequest;
use App\Http\Resources\Parties\RepresentativeResource;
use App\Models\Parties\Representative;
use Illuminate\Http\Request;

class RepresentativeController extends Controller
{
    public function index(Request $request)
    {
        $entityId = $request->query('entity_id');
        $representatives = Representative::where('entity_id', $entityId)->get();

        return RepresentativeResource::collection($representatives);
    }


    public function store(RepresentativeRequest $request)
    {
        // TODO: Check if entity_id is passed in the request
        $entityId = $request->input('entity_id');
        $existingCount = Representative::where('entity_id', $entityId)->count();

        if ($existingCount >= 2) {
            return response()->json(['message' => 'No se pueden registrar más de dos personas por Partido Polìtico/Coalición'], 400);
        }

        $representatives = collect($request->validated())->map(function ($data) {
            return Representative::create($data);
        });

        return RepresentativeResource::collection($representatives);
    }

    public function show(Representative $representative)
    {

        return new RepresentativeResource($representative);
    }

    public function update(RepresentativeRequest $request, Representative $representative)
    {
        $representative->update($request->validated());

        return new RepresentativeResource($representative);
    }

    public function destroy(Representative $representative)
    {
        $representative->delete();

        return response()->json();
    }
}
