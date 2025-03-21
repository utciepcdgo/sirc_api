<?php

declare(strict_types=1);

namespace App\Models;

use Abbasudo\Purity\Traits\Filterable;
use App\Enums\RegistrationStatus;
use App\Models\Registrations\Compensatory;
use App\Models\Registrations\Gender;
use App\Models\Registrations\Position;
use App\Models\Registrations\Postulation;
use App\Models\Registrations\Sex;
use App\Traits\FilterableByRelation;
use App\Traits\HasRegistrationStatus;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Ramsey\Uuid\Uuid;

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
 * @property Uuid $uuid
 * @property string $name
 * @property string $first_name
 * @property string $second_name
 * @property string $mote - Mote o sobrenombre (opcional).
 * @property string $birthplace - Lugar y fecha de nacimiento.
 * @property string $residence - Incluye la dirección y el tiempo de residencia.
 * @property string $occupation
 * @property string $voter_key - Clave de Elector.
 * @property string $curp
 * @property string $voter_card - Campos extra (Núm. de emisión, OCR, CIC, Sección Electoral)
 * @property string $reelection - Reelección.
 * @property int $council_number - Número de Regiduría
 * @property int $block_id - ID del bloque al que pertenece.
 * @property Position $position_id - Cargo que ocupa.
 * @property Postulation $postulation_id - Postulación a la que pertenece Propietario|Suplente.
 * @property Sex $sex_id - Sexo de la candidatura.
 * @property Gender $gender_id - Género de la candidatura.
 * @property Compensatory $compensatory_id - Medida compensatoria.
 * @property string $status - Estado del registro.
 */
class Registration extends Model
{
    use Filterable;
    use FilterableByRelation;
    use HasUuids;
    use HasRegistrationStatus;

    protected $fillable = [
        'name',
        'first_name',
        'second_name',
        'mote',
        'birthplace',
        'residence',
        'occupation',
        'voter_key',
        'curp',
        'voter_card',
        'reelection',
        'block_id',
        'position_id',
        'postulation_id',
        'council_number',
        'sex_id',
        'gender_id',
        'compensatory_id',
        'status',
    ];

    protected $with = ['sex', 'gender', 'postulation', 'position', 'compensatory', 'migrant'];

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

    /**
     * Migrant
     *
     * @return HasOne<Migrant>
     */
    public function migrant(): HasOne
    {
        return $this->hasOne(Migrant::class);
    }

    /**
     * Get the columns that should receive a unique identifier.
     *
     * @return array<int, string>
     */
    public function uniqueIds(): array
    {
        return ['uuid'];        //your new column name
    }

    /**
     * @return HasMany<File>
     */
    public function files(): HasMany
    {
        return $this->hasMany(File::class, 'registration_id', 'id');
    }

    public function isAssigned(): bool
    {
        return $this->block->assignment->municipality || $this->block->assignment->syndic || ! empty($this->block->assignment->councils);
    }


    protected function casts(): array
    {
        return [
            'birthplace' => 'json',
            'residence' => 'json',
            'voter_card' => 'json',
            'id' => 'string',
            'status' => RegistrationStatus::class,
        ];
    }
}
