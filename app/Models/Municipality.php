<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int id
 * @property string name
 * @property string shield
 * @property string abbreviation
 */
class Municipality extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'shield',
        'abbreviation',
    ];

    public function blocks(): HasMany
    {
        return $this->hasMany(Block::class);
    }

}
