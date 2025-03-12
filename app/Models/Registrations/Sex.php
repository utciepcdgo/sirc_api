<?php

namespace App\Models\Registrations;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 */
class Sex extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    protected function casts(): array
    {
        return [
            'id' => 'string',
        ];
    }
}
