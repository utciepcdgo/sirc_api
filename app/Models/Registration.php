<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Registrations\Gender;
use App\Models\Registrations\Position;
use App\Models\Registrations\Postulation;
use App\Models\Registrations\Sex;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $second_name
 * @property string $birthplace - Lugar y fecha de nacimiento.
 * @property string $address_length_residence - Incluye la dirección y el tiempo de residencia.
 * @property string $occupation
 * @property string $voter_key - Clave de Elector.
 * @property string $curp
 * @property string $voter_card - Campos extra (Núm. de emisión, OCR, CIC, Sección Electoral)
 * @property int $block_id - ID del bloque al que pertenece.
 * @property Position $position_id - Cargo que ocupa.
 * @property Postulation $postulation_id - Postulación a la que pertenece Propietario|Suplente.
 * @property Sex $sex_id - Sexo de la candidatura.
 * @property Gender $gender_id - Género de la candidatura.
 */
class Registration extends Model
{
    protected $fillable = [
        'name',
        'first_name',
        'second_name',
        'birthplace',
        'address_length_residence',
        'occupation',
        'voter_key',
        'curp',
        'voter_card',
        'block_id',
        'position_id',
        'postulation_id',
        'sex_id',
        'gender_id',
    ];

    protected $with = ['sex', 'gender', 'postulation', 'position'];

    /**
     * @return BelongsTo<Block, Registration>
     */
    public function block(): BelongsTo
    {
        return $this->belongsTo(Block::class);
    }

    /**
     * @return BelongsTo<Position, Registration>
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }

    /**
     * @return BelongsTo<Postulation, Registration>
     */
    public function postulation(): BelongsTo
    {
        return $this->belongsTo(Postulation::class, 'postulation_id', 'id');
    }

    /**
     * @return BelongsTo<Sex, Registration>
     */
    public function sex(): BelongsTo
    {
        return $this->belongsTo(Sex::class, 'sex_id', 'id');
    }

    /**
     * @return BelongsTo<Gender, Registration>
     */
    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }

    protected function casts(): array
    {
        return [
            'birthplace' => 'json',
            'address_length_residence' => 'json',
            'voter_card' => 'json',
        ];
    }
}
