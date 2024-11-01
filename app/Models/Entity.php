<?php

declare(strict_types=1);

namespace App\Models;

use App\DB\Pivots\Association;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    public function associations(): BelongsToMany
    {
        return $this->belongsToMany(Association::class);
    }
}
