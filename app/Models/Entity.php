<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property-read Party|Coalition|null $entitiable
 * @property int $id
 * @property int $entitiable_id
 * @property string $entitiable_type
 */
class Entity extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = array(
        'entitiable_id',
        'entitiable_type',
    );

    protected $with = array('entitiable');

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
}
