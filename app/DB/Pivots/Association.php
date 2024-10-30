<?php

namespace App\DB\Pivots;

use Illuminate\Database\Eloquent\Relations\MorphPivot;

class Association extends MorphPivot
{
    public $timestamps = false;
    protected $table = 'associations';

}
