<?php

declare(strict_types=1);

namespace App\Models;

use Abbasudo\Purity\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @property int $id
 * @property string $name
 * @property string $acronym
 * @property string $logo
 */
class Coalition extends Model
{
    use Filterable;

    public $timestamps = false;

    protected $fillable = array(
        'name',
        'acronym',
        'logo',
    );

    /**
     * @return MorphMany<Entity>
     */
    public function entities(): MorphMany
    {
        return $this->morphMany(Entity::class, 'entitiable');
    }
}
