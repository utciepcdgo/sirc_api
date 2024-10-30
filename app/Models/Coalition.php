<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $name
 * @property string $acronym
 * @property string $logo
 */
class Coalition extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'acronym',
        'logo'
    ];
}
