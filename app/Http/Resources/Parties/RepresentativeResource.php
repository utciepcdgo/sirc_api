<?php

namespace App\Http\Resources\Parties;

use App\Http\Resources\EntityResource;
use App\Models\Parties\Representative;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Representative */
class RepresentativeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'ownership' => $this->ownership,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'entity_id' => $this->entity_id,

            'entity' => new EntityResource($this->whenLoaded('entity')),
        ];
    }
}
