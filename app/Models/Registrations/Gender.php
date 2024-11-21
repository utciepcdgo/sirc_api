<?php

namespace App\Models\Registrations;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 */
class Gender extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
