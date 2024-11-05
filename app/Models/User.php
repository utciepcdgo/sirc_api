<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 */

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @type array<int, string>
     */
    protected $fillable = array(
        'name',
        'email',
        'password',
    );

    /**
     * The attributes that should be hidden for serialization.
     *
     * @type array<string>
     */
    protected $hidden = array(
        'password',
        'remember_token',
    );

    /**
     * @return BelongsToMany<Entity>
     */
    public function entities(): BelongsToMany
    {
        // Plantea usar una tabla pivote
        return $this->belongsToMany(Entity::class, 'entity_user');
    }

    /**
     * @return HasManyThrough<Registration>
     */
    public function registrations(): HasManyThrough
    {
        return $this->hasManyThrough(Registration::class, Entity::class);
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return array(
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        );
    }
}
