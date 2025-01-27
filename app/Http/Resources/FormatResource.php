<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FormatResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name.' '.$this->first_name.' '.$this->second_name,
            'postulation' => $this->postulation->name,
            'position' => $this->position->name,
            'compensatory' => $this->compensatory->name,
        ];
    }
}
