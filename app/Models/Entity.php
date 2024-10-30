<?php

declare(strict_types=1);

namespace App\Models;

use App\DB\Pivots\Association;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * @property int $id
 * @property string $name
 * @property int $user_id
 *
 */
class Entity extends Model
{
    protected $fillable = array(
        'name',
        'user_id'
    );

    public function users(): MorphToMany
    {
        return $this->morphedByMany(User::class, 'association')->using(Association::class);
    }

    public function parties(): MorphToMany
    {
        return $this->morphedByMany(Party::class, 'association')->using(Association::class);
    }

    public function coalitions(): MorphToMany
    {
        return $this->morphedByMany(Coalition::class, 'association')->using(Association::class);
    }
}
