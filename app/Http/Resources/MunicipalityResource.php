<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Municipality;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Municipality */
class MunicipalityResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
//            'shield' => $this->shield,
//            'abbreviation' => $this->abbreviation,
//            'districts_count' => $this->districts_count
        );
    }
}
