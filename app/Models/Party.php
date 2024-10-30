<?php

declare(strict_types=1);

namespace App\Models;

use App\DB\Pivots\Association;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    public $timestamps = false;

    protected $fillable = array(
        'name',
        'acronym',
        'logo',
    );

    public function entities(): BelongsToMany
    {
        return $this->belongsToMany(Entity::class, 'associations')->using(Association::class);
    }
}
