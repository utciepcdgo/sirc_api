<?php

namespace App\Http\Resources;

use App\Models\Migrant;
use App\Models\Migrants\Country;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Migrant */
class MigrantResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'address' => $this->address,
            'zip_code' => $this->zip_code,
            'country' => Country::find($this->country_id),
            'registration_id' => $this->registration_id,
        ];
    }
}
