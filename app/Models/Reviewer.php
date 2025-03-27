<?php

namespace App\Models;

use App\Enums\ReviewerRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reviewer extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'role',
        'user_id',
    ];


    /**
     * @return BelongsTo<User, Reviewer>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsToMany<Entity>
     */
    public function entities(): BelongsToMany
    {
        return $this->belongsToMany(Entity::class, 'entity_reviewers', 'reviewer_id', 'entity_id');
    }

    protected function casts(): array
    {
        return [
            'role' => ReviewerRole::class,
        ];
    }

}
