<?php

namespace App\Http\Resources;

use App\Models\Block;
use App\Models\Registration;
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

            // TODO: Not return the 'registrations' key if the relationship is not loaded.
            'registrations' => Registration::with('position', 'postulation')->where('block_id', $this->id)->get()
        ];
    }
}
