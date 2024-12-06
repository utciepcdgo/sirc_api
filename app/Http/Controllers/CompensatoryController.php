<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompensatoryResource;
use App\Models\Registrations\Compensatory;

class CompensatoryController extends Controller
{
    public function index()
    {
        return CompensatoryResource::collection(Compensatory::all());
    }
}
