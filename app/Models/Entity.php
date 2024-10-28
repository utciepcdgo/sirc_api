<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property int $id
 * @property string $entityable_type
 * @property string $entityable_id
 * @property int $user_id
 */

class Entity extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function entityable(): MorphTo
    {
        return $this->morphTo();
    }

    protected $fillable = [
        'entityable_type',
        'entityable_id',
        'user_id',
    ];
}
