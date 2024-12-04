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
        return [
            'id' => $this->id,
            'votes_obtained' => $this->votes_obtained,
            'valid_vote_issued' => $this->valid_vote_issued,
            'municipality' => new MunicipalityResource($this->whenLoaded('municipality')),
            'entity' => new EntityResource($this->whenLoaded('entity')),
            'registrations' => [
                'stats' => [
                    'total' => $this->registrations->count(),
                    'women' => $this->registrations->where('sex_id', '=', 1)->count(),
                    'men' => $this->registrations->where('sex_id', '=', 2)->count(),
                ],
            ],
            'assignments' => [
                'municipality' => $this->assignment->municipality,
                'syndic' => $this->assignment->syndic,
                'councils' => (json_decode((string)$this->assignment?->councils)) ?? null,
            ],
        ];
    }
}
