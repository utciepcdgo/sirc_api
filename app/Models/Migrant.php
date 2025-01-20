<?php

namespace App\Models;

use App\Models\Migrants\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $address
 * @property string $zip_code
 * @property Country $country_id
 * @property Registration $registration_id
 */
class Migrant extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'address',
        'zip_code',
        'country_id',
        'registration_id',
    ];

    /**
     * @return BelongsTo<Country, Migrant>
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return BelongsTo<Registration, Migrant>
     */
    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }
}
