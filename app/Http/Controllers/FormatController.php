<?php

namespace App\Http\Controllers;

use App\Http\Resources\FormatResource;
use App\Models\Registration;
use Illuminate\Http\Request;

class FormatController extends Controller
{

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return FormatResource::collection(Registration::filter()->get());
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
