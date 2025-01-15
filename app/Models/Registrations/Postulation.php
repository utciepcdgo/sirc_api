<?php

declare(strict_types=1);

namespace App\Models\Registrations;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property boolean $active
 */
class Postulation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'active'];

    protected function cast(): array
    {
        return [
            'id' => 'int',
            'name' => 'string',
            'active' => 'boolean',
        ];
    }
}
