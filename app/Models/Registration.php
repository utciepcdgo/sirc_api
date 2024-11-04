<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $second_name
 * @property Json $birthplace - Lugar y fecha de nacimiento.
 * @property Json $address_length_residence - Incluye la dirección y el tiempo de residencia.
 * @property string $occupation
 * @property string $voter_key - Clave de Elector.
 * @property string $curp
 * @property Json $voter_card - Campos extra (Núm. de emisión, OCR, CIC, Sección Electoral)
 * @property int $block_id - ID del bloque al que pertenece.
 */
class Registration extends Model
{
    use HasFactory;

    protected $fillable = array(
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
    );

    /**
     * @return BelongsTo<Block, Registration>
     */
    public function block(): BelongsTo
    {
        return $this->belongsTo(Block::class);
    }

    protected function casts(): array
    {
        return array(
            'placedate_birth' => 'json',
            'address_length_residence' => 'json',
            'voter_card' => 'json',
        );
    }
}
