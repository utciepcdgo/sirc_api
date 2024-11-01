<?php

declare(strict_types=1);

namespace App\Models;

use App\DB\Pivots\Association;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = array(
        'name',
        'email',
        'password',
    );

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = array(
        'password',
        'remember_token',
    );

    public function associations(): BelongsToMany
    {
        return $this->belongsToMany(related: Association::class, table: 'associations_users', foreignPivotKey: 'user_id', relatedPivotKey: 'id', relatedKey: 'association_id',
        );
    }

    public function party(): BelongsToMany
    {
        return $this->belongsToMany(related: Party::class, table: 'associations_users', foreignPivotKey: 'user_id', relatedPivotKey: 'id')
            ->using(Association::class);
    }

    public function coalition(): BelongsToMany
    {
        return $this->belongsToMany(related: Coalition::class, table: 'associations_users', foreignPivotKey: 'user_id', relatedPivotKey: 'id')
            ->using(Association::class);
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

    //    public function entities(string $className): BelongsToMany
    //    {
    //        return $this->belongsToMany(match ($className) {
    //            "App\Models\Coalition" => Coalition::class,
    //            "App\Models\Party" => Party::class,
    //        }, 'associations', 'user_id');
    //    }

}
