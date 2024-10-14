<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Registration */
class RegistrationResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return array(
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'name' => $this->name,
            'first_name' => $this->first_name,
            'second_name' => $this->second_name,
            'placedate_birth' => $this->placedate_birth,
            'address_length_residence' => $this->address_length_residence,
            'ocupation' => $this->ocupation,
            'voter_key' => $this->voter_key,
            'curp' => $this->curp,
        );
    }
}
