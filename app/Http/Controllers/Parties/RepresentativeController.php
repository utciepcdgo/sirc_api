<?php

declare(strict_types=1);

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
        $validated = $request->validated();
        $entityId = $validated[0]['entity_id']; // Extract entity_id

        // Fetch existing representatives for the given entity_id (max 2 records)
        $existingRepresentatives = Representative::where('entity_id', $entityId)->orderBy('id')->take(2)->get();

        // Ensure we correctly match request data to existing representatives
        $updatedRepresentatives = collect();

        foreach ($validated as $index => $data) {
            if (isset($existingRepresentatives[$index])) {
                // en: Only update if the new data is different from the existing record
                // es: Solo actualiza si los nuevos datos son diferentes al registro existente
                $rep = $existingRepresentatives[$index];

                if ($rep->name !== $data['name'] || $rep->ownership !== $data['ownership']) {
                    $rep->update($data);
                }
            } else {
                // en: Insert a new representative if no matching record exists
                // es: Inserta un nuevo representante si no existe un registro coincidente
                $rep = Representative::create($data);
            }

            $updatedRepresentatives->push($rep);
        }

        // Ensure only two representatives exist by deleting extra ones
        if ($existingRepresentatives->count() > $validated) {
            Representative::whereNotIn('id', $updatedRepresentatives->pluck('id'))->where('entity_id', $entityId)->delete();
        }

        return response()->json([
            'message' => 'Operation completed successfully',
            'data' => RepresentativeResource::collection($updatedRepresentatives)
        ]);
    }


    public function update(RepresentativeRequest $request, Representative $representative)
    {
        $representative->update($request->validated());

        return new RepresentativeResource($representative);
    }

    public function show(Representative $representative)
    {
        return new RepresentativeResource($representative);
    }

    public function destroy(Representative $representative)
    {
        $representative->delete();

        return response()->json();
    }
}
