<?php

namespace App\Models;

use App\Models\Files\FileType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name
 * @property string $format
 * @property string $url
 * @property int $filetype_id
 * @property FileType $filetype
 */
class File extends Model
{
    public $timestamps = false;

    public function filetype(): BelongsTo
    {
        return $this->belongsTo(FileType::class, 'filetype_id');
    }
}
