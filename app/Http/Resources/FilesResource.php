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
            'url' => $this->url,
            'format' => $this->format,
            'registration_id' => $this->registration_id,
            'created_at' => $this->created_at->format('d-m-Y H:i:s'),
            'filetype' => $this->filetype,
        ];
    }
}
