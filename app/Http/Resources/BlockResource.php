<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Block */
class BlockResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        /**
         * Include list of registrations if request includes query parameter 'include=registrations'
         */
        $includeRegistrations = $request->query('include') === 'registrations';

        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'votes_obtained' => $this->votes_obtained,
            'valid_vote_issued' => $this->valid_vote_issued,
            'municipality' => new MunicipalityResource($this->whenLoaded('municipality')),
            'entity' => new EntityResource($this->whenLoaded('entity')),
            'registrations' => [
                'stats' => [
                    'total' => $this->registrations->count(),
                    'women' => $this->registrations->where('sex_id', '=', 1)->count(),
                    'man' => $this->registrations->where('sex_id', '=', 2)->count(),
                    'compensatories' => $this->registrations->where('compensatory_id', '<', 7)->count(),
                ],
                'list' => $includeRegistrations
                    ? RegistrationResource::collection($this->whenLoaded('registrations'))
                    : null,
            ],
            'assignments' => [
                'municipality' => $this->assignment->municipality,
                'syndic' => $this->assignment->syndic,
                'councils' => (json_decode((string)$this->assignment?->councils)) ?? null,
            ],
            'shared_entity' => new EntityResource($this->whenLoaded('sharedEntity')),
        ];
    }
}
