<?php

namespace App\Models\Registrations;

use App\Models\Entity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name
 * @property string $path
 * @property string $hash
 * @property Entity $entity_id
 */
class Receipt extends Model
{
    protected $fillable = [
        'name',
        'path',
        'hash',
        'entity_id',
    ];

    public function entity(): BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }
}
