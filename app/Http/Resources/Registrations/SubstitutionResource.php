<?php

namespace App\Http\Resources\Registrations;

use App\Http\Resources\BlockResource;
use App\Http\Resources\CompensatoryResource;
use App\Http\Resources\GenderResource;
use App\Http\Resources\PostulationResource;
use App\Http\Resources\RegistrationResource;
use App\Http\Resources\SexResource;
use App\Models\Registrations\Substitution;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Substitution */
class SubstitutionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'first_name' => $this->first_name,
            'second_name' => $this->second_name,
            'birthplace' => $this->birthplace,
            'residence' => $this->residence,
            'occupation' => $this->occupation,
            'voter_key' => $this->voter_key,
            'curp' => $this->curp,
            'voter_card' => $this->voter_card,
            'reelection' => $this->reelection,
            'mote' => $this->mote,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'block_id' => $this->block_id,
            'position_id' => $this->position_id,
            'postulation_id' => $this->postulation_id,
            'sex_id' => $this->sex_id,
            'gender_id' => $this->gender_id,
            'compensatory_id' => $this->compensatory_id,
            'registration_id' => $this->registration_id,

            'block' => new BlockResource($this->whenLoaded('block')),
            'postulation' => new PostulationResource($this->whenLoaded('postulation')),
            'sex' => new SexResource($this->whenLoaded('sex')),
            'gender' => new GenderResource($this->whenLoaded('gender')),
            'compensatory' => new CompensatoryResource($this->whenLoaded('compensatory')),
            'registration' => new RegistrationResource($this->whenLoaded('registration')),
        ];
    }
}
