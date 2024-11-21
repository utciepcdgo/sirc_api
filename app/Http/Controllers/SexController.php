<?php

namespace App\Http\Controllers;

use App\Http\Resources\SexResource;
use App\Models\Registrations\Sex;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SexController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return SexResource::collection(Sex::all());
    }
}
