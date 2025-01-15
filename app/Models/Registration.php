<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Registrations\Compensatory;
use App\Models\Registrations\Gender;
use App\Models\Registrations\Position;
use App\Models\Registrations\Postulation;
use App\Models\Registrations\Sex;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * TODO:
 *  - ❌ Falta agregar el campo reelección.
 *  - ❌ Falta agregar el campo mote/sobrenombre (opcional).
 *  - ❌ Falta agregar el campo Múm. exterior (opcional).
 *  - ❌ Falta agregar el campo País y Estado y, combinarlos en un solo campo (birthplace > place).
 *  - ✅ Cambiar el campo address_length_residence por 'residence' y:
 *      - Agregarle el campo número exterior (opcional).
 */

/**
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $second_name
 * @property string $birthplace - Lugar y fecha de nacimiento.
 * @property string $residence - Incluye la dirección y el tiempo de residencia.
 * @property string $occupation
 * @property string $voter_key - Clave de Elector.
 * @property string $curp
 * @property string $voter_card - Campos extra (Núm. de emisión, OCR, CIC, Sección Electoral)
 * @property int $council_number - Número de Regiduría
 * @property int $block_id - ID del bloque al que pertenece.
 * @property Position $position_id - Cargo que ocupa.
 * @property Postulation $postulation_id - Postulación a la que pertenece Propietario|Suplente.
 * @property Sex $sex_id - Sexo de la candidatura.
 * @property Gender $gender_id - Género de la candidatura.
 * @property Compensatory $compensatory_id - Medida compensatoria.
 */
class Registration extends Model
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
        'block_id',
        'position_id',
        'postulation_id',
        'sex_id',
        'gender_id',
        'compensatory_id',
    ];

    protected $with = ['sex', 'gender', 'postulation', 'position', 'compensatory'];

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

    /**
     * @return BelongsTo<Compensatory, Registration>
     */
    public function compensatory(): BelongsTo
    {
        return $this->belongsTo(Compensatory::class, 'compensatory_id', 'id');
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
