<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property string $name
 * @property string $roman_number
 * @property int $arabic_number
 */
class District extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = array(
        'roman_number',
        'arabic_number',
    );

    /**
     * @return BelongsToMany<Municipality>
     */
    public function municipalities(): BelongsToMany
    {
        return $this->belongsToMany(Municipality::class, 'municipality_district');
    }
}
