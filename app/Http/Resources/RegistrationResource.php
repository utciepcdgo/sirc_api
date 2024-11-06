<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Registration */
class RegistrationResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'first_name' => $this->first_name,
            'second_name' => $this->second_name,
            'birthplace' => json_decode($this->birthplace),
            'address_length_residence' => json_decode($this->address_length_residence),
            'occupation' => $this->occupation,
            'voter_key' => $this->voter_key,
            'curp' => $this->curp,
            'voter_card' => json_decode($this->voter_card),
            'block' => new BlockResource($this->whenLoaded('block')),
        );
    }
}
