<?php

namespace App\Http\Controllers\Parties;

use App\Http\Controllers\Controller;
use App\Http\Requests\Parties\RepresentativeRequest;
use App\Http\Resources\Parties\RepresentativeResource;
use App\Models\Parties\Representative;

class RepresentativeController extends Controller
{
    public function index()
    {
        return RepresentativeResource::collection(Representative::all());
    }

    public function store(RepresentativeRequest $request)
    {
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
