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
        // Si ya hay un o dos (máximo 2) representantes, actualizar información, no crear uno nuevo.
        // Si no se encuentra ningún representante, crear uno nuevo.
        $validated = $request->validated();
        $entityId = $request->all()[0]['entity_id'];

        $representatives = Representative::where('entity_id', $entityId)->get();

        if ($representatives->count() >= 1 && $representatives->count() <= 2) {
            foreach ($representatives as $index => $representative) {
                $representative->update([
                    'name' => $validated[$index]['name'],
                    'ownership' => $validated[$index]['ownership'],
                    'entity_id' => $validated[$index]['entity_id'],
                ]);
            }
        } else {
            $representatives = collect($request->validated())->map(function ($data) {
                return Representative::create($data);
            });

            RepresentativeResource::collection($representatives);
        }

        return response()->json(['message' => 'Operation completed successfully']);

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
