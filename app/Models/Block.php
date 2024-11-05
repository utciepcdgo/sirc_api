<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $votes_obtained - Votos obtenidos.
 * @property int $valid_vote_issued - Votos válidos emitidos.
 * @property float $rentability - Rentabilidad.
 */
class Block extends Model
{
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = array(
        'votes_obtained',
        'valid_vote_issued',
        'rentability',
        'municipality_id',
        'entity_id',
    );

    protected $with = array('municipality', 'entity');

    /**
     * @return BelongsTo<Municipality, Block>
     */
    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }

    /**
     * @return BelongsTo<Entity, Block>
     */
    public function entity(): BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }

    /**
     * @return HasMany<Registration>
     */
    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }
}

