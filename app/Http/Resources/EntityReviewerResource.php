<?php

namespace App\Http\Resources;

use App\Models\EntityReviewer;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin EntityReviewer */
class EntityReviewerResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,

            'reviewer_id' => $this->reviewer_id,
            'entity_id' => $this->entity_id,

            'reviewer' => new ReviewerResource($this->whenLoaded('reviewer')),
            'entity' => new EntityResource($this->whenLoaded('entity')),
        ];
    }
}
