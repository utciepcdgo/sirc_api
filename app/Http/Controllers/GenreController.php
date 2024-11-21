<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenderResource;
use App\Models\Registrations\Gender;

class GenreController extends Controller
{
    public function index()
    {
        return GenderResource::collection(Gender::all());
    }
}
