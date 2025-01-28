<?php

declare(strict_types=1);

namespace App\Models\Parties;

use App\Models\Entity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name
 * @property string $ownership - Presidencia de Partido, Secretaria/o General, Representación propietaria, etc.
 * @property Entity $entity_id
 */
class Subscribed extends Model
{
    protected $fillable = [
        'name',
        'ownership',
        'entity_id',
    ];

    protected $table = 'subscribeds';

    /**
     * @return BelongsTo<Entity, Subscribed>
     */
    public function entity(): BelongsTo
    {
        return $this->belongsTo(Entity::class, 'entity_id');
    }
}
