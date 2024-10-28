<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int votes_obtained
 * @property int valid_vote_issued
 * @property float rentability
 */
class Block extends Model
{
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = array(
        'votes_obtained',
        'valid_vote_issued',
        'rentability',
        'municipality_id',
        'party_id',
    );

    protected $with = array('municipality', 'party');

    public function municipality(): HasOne
    {
        return $this->hasOne(Municipality::class, 'id', 'municipality_id');
    }

    public function party(): BelongsTo
    {
        return $this->belongsTo(Party::class);
    }

    public function coalition(): HasOne
    {
        return $this->hasOne(Coalition::class);
    }

    /**
     * Get the parent imageable model (Pary or Coalition).
     */
    public function blockable(): MorphTo
    {
        return $this->morphTo();
    }

    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }
}
