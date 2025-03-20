<?php

namespace App\Models\Registrations;

use App\Models\Block;
use App\Models\Registration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $second_name
 * @property array $birthplace
 * @property array $residence
 * @property string $occupation
 * @property string $voter_key
 * @property string $curp
 * @property string $voter_card
 * @property string $reelection
 * @property string|null $mote
 * @property Block $block_id
 * @property Position $position_id
 * @property Postulation $postulation_id
 * @property Sex $sex_id
 * @property Gender $gender_id
 * @property Compensatory $compensatory_id
 * @property Registration $registration_id
 */
class Substitution extends Model
{
    protected $fillable = [
        'name',
        'first_name',
        'second_name',
        'birthplace',
        'residence',
        'occupation',
        'voter_key',
        'curp',
        'voter_card',
        'reelection',
        'mote',
        'block_id',
        'position_id',
        'postulation_id',
        'sex_id',
        'gender_id',
        'compensatory_id',
        'registration_id',
    ];

    public function block(): BelongsTo
    {
        return $this->belongsTo(Block::class);
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function postulation(): BelongsTo
    {
        return $this->belongsTo(Postulation::class);
    }

    public function sex(): BelongsTo
    {
        return $this->belongsTo(Sex::class);
    }

    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class);
    }

    public function compensatory(): BelongsTo
    {
        return $this->belongsTo(Compensatory::class);
    }

    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }

    /**
     * Set registation status to SUBSTITUTED.
     *
     * @return void
     */
    public function markAsSubstituted(): void
    {
        $this->registration->update(['status' => 'SUBSTITUTED']);
    }

    protected function casts(): array
    {
        return [
            'birthplace' => 'json',
            'residence' => 'json',
            'voter_card' => 'json',
        ];
    }
}
