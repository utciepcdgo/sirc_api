<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    public function index()
    {
        return Municipality::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'shield' => ['required'],
            'abbreviation' => ['required'],
        ]);

        return Municipality::create($data);
    }

    public function show(Municipality $municipality)
    {
        return $municipality;
    }

    public function update(Request $request, Municipality $municipality)
    {
        $data = $request->validate([
            'name' => ['required'],
            'shield' => ['required'],
            'abbreviation' => ['required'],
        ]);

        $municipality->update($data);

        return $municipality;
    }

    public function destroy(Municipality $municipality)
    {
        $municipality->delete();

        return response()->json();
    }
}
