<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\ReviewerRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property ReviewerRole $role
 * @property int $user_id
 */
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

    // Is Admin?
    public function isAdmin(): bool
    {
        return $this->role === ReviewerRole::SUPERVISOR;
    }

    protected function casts(): array
    {
        return [
            'role' => ReviewerRole::class,
        ];
    }
}
