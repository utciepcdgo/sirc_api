<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * show off @property, @property-read, @property-write
 *
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $second_name
 * @property Json $placedate_birth Lugar y fecha de nacimiento.
 * @property Json $address_length_residence Incluye la dirección y el tiempo de residencia.
 * @property string $occupation
 * @property string $voter_key Clave de Elector.
 * @property string $curp
 * @property string $cic_code Código CIC.
 * @property Date $expedition_date Fecha de expedición de la credencial de Elector.
 */
class Registration extends Model
{
    use HasFactory;

    protected $fillable = array(
        'name',
        'first_name',
        'second_name',
        'placedate_birth',
        'address_length_residence',
        'occupation',
        'voter_key',
        'curp',
        'cic_code',
        'expedition_date',
    );

    protected function casts(): array
    {
        return array(
            'placedate_birth' => 'json',
            'address_length_residence' => 'json',
        );
    }
}
