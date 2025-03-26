<?php

namespace App\Http\Resources;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin File
 * @property mixed $created_at
 */
class FilesResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'format' => $this->format,
            'url' => $this->url,
            'filetype' => $this->filetype,
        ];
    }
}
