<?php

namespace App\Models;

use App\Models\Migrants\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Migrant extends Model
{
    public function country(): HasOne
    {
        return $this->hasOne(Country::class);
    }
}
