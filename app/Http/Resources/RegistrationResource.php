<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Registration;
use App\Models\Registrations\Position;
use App\Models\Registrations\Postulation;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Registration */
class RegistrationResource extends JsonResource
{
    /**
     * @return array<string, BlockResource|Json|int|string>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'first_name' => $this->first_name,
            'second_name' => $this->second_name,
            'birthplace' => $this->birthplace,
            'address_length_residence' => $this->address_length_residence,
            'occupation' => $this->occupation,
            'voter_key' => $this->voter_key,
            'curp' => $this->curp,
            'voter_card' => $this->voter_card,
            'block' => new BlockResource($this->whenLoaded('block')),
            'position' => Position::find($this->position_id),
            'postulation' => Postulation::find($this->postulation_id),
        ];
    }
}
