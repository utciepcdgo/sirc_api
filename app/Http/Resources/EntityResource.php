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
        return [
            'id' => $this->id,
            'entitiable_type' => $this->entitiable_type,
            'name' => $this->entitiable->name,
            'acronym' => $this->entitiable->acronym,
            'logo' => $this->entitiable->acronym.'.png',
        ];
    }
}
