<?php

namespace App\Models\Parties;

use App\Models\Entity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name
 * @property string $ownership
 * @property Entity $entity_id
 */
class Representative extends Model
{
    protected $fillable = [
        'name',
        'ownership',
        'entity_id',
    ];

    /**
     * @return BelongsTo<Entity, Representative>
     */
    public function entity(): BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }
}
