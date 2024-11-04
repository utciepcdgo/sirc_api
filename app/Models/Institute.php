<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @property int $id
 * @property string $name
 * @property string $acronym
 */
class Institute extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @type array<int, string>
     */
    protected $fillable = array(
        'name',
        'acronym',
    );

    /**
     * @return MorphMany<Entity>
     */
    public function entities(): MorphMany
    {
        return $this->morphMany(Entity::class, 'entitiable');
    }
}
