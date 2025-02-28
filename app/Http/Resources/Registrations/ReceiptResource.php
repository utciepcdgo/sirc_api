<?php

namespace App\Http\Resources\Registrations;

use App\Http\Resources\EntityResource;
use App\Models\Registrations\Receipt;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Receipt */
class ReceiptResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'path' => $this->path,
            'sha256' => $this->hash,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),

            'entity_id' => $this->entity_id,

            'entity' => new EntityResource($this->whenLoaded('entity')),
        ];
    }
}
