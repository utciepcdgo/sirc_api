<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @property int $id
 * @property string $name
 * @property string $acronym
 * @property string $logo
 */
class Party extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'acronym',
        'logo',
    ];

    public $timestamps = false;

    public function entities(): MorphMany
    {
        return $this->morphMany(Entity::class, 'entityable');
    }
}
