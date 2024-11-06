<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Entity;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Entity */
class EntityResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return array(
            'id' => $this->id,
            'entitiable_id' => $this->entitiable_id,
            'entitiable_type' => $this->entitiable_type,
//            'blocks' => BlockResource::collection($this->whenLoaded('blocks')),
        );
    }
}
