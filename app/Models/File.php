<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Files\FileType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $format
 * @property string $url
 * @property FileType $filetype_id
 * @property Registration $registration_id
 */
class File extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'filetype_id',
        'registration_id',
        'format',
        'url',
    ];

    public function filetype(): BelongsTo
    {
        return $this->belongsTo(FileType::class, 'filetype_id');
    }

    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class, 'registration_id');
    }
}
