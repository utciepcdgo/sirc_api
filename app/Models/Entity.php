<?php

declare(strict_types=1);

namespace App\Models;

use Abbasudo\Purity\Traits\Filterable;
use App\Models\Parties\Subscribed;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property-read Party|Coalition|null $entitiable
 * @property int $id
 * @property int $entitiable_id
 * @property string $entitiable_type
 */
class Entity extends Model
{
    use Filterable;

    public $timestamps = false;

    protected $fillable = [
        'entitiable_id',
        'entitiable_type',
    ];


    /**
     * @var array<int, string>
     */
    protected array $allowedToHaveBlocks = [
        Party::class,
        Coalition::class,
    ];

    protected $with = ['entitiable'];

    /**
     * @return MorphTo<Model, Entity>
     */
    public function entitiable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * @return BelongsToMany<User>
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * @return BelongsToMany<Block>
     */
    public function blocks(): BelongsToMany
    {
        return $this->belongsToMany(Block::class, 'block_entity');
    }

    /**
     * @return BelongsToMany<Subscribed>
     */
    public function subscribes(): BelongsToMany
    {
        return $this->belongsToMany(Subscribed::class, 'entity_subscribes');
    }
}
