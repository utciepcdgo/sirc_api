<?php

namespace App\Models\Registrations;

use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
