<?php

namespace App\Http\Resources;

use App\Models\Files\FileType;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin FileType */
class FileTypeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'allowed_to' => $this->allowed_to,
        ];
    }
}
