<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $second_name
 * @property array $placedate_birth
 * @property array $address_length_residence
 * @property string $occupation
 * @property string $voter_key
 * @property string $curp
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
    );

    protected function casts(): array
    {
        return array(
            'placedate_birth' => 'array',
            'address_length_residence' => 'array',
        );
    }
}
