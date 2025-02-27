<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Registration;
use App\Models\Registrations\Compensatory;
use App\Models\Registrations\Gender;
use App\Models\Registrations\Position;
use App\Models\Registrations\Postulation;
use App\Models\Registrations\Sex;
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
            'uuid' => $this->uuid,
            'name' => $this->name,
            'first_name' => $this->first_name,
            'second_name' => $this->second_name,
            'mote' => $this->mote ?? null,
            'birthplace' => json_decode($this->birthplace),
            'residence' => json_decode($this->residence),
            'occupation' => $this->occupation,
            'voter_key' => $this->voter_key,
            'curp' => $this->curp,
            'voter_card' => json_decode($this->voter_card),
            'block' => [
                'id' => $this->block->id,
                'municipality' => $this->block->municipality,
                'assignments' => $this->block->assignment,
                'councils' => $this->block->municipality->councils,
            ],
            'position' => Position::find($this->position_id),
            'postulation' => Postulation::find($this->postulation_id),
            'council_number' => $this->council_number,
            'sex' => Sex::find($this->sex_id),
            'gender' => Gender::find($this->gender_id),
            'compensatory' => Compensatory::find($this->compensatory_id),
            'migrant' => new MigrantResource($this->migrant),
            'entity' => [
                'name' => $this->block->entity->entitiable->name,
                'acronym' => $this->block->entity->entitiable->acronym,
            ],
            'coalition' => [
                'is_assigned' => ($this->block->assignment->municipality || $this->block->assignment->syndic || !empty(json_decode($this->block->assignment->councils ?? '{}')->list)),
                'name' => $this->block->entity->entitiable->coalition->name ?? null,
                'acronym' => $this->block->entity->entitiable->coalition->acronym ?? null,
            ],
            'reelection' => $this->reelection
        ];
    }
}
