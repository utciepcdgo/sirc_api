<?php

declare(strict_types=1);

namespace App\Models\Registrations;

use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property int $id
 * @property string $name
 * @property bool $active
 */
class Postulation extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'active'];

    protected function casts(): array
    {
        return [
            'id' => 'string',
            'name' => 'string',
            'active' => 'boolean',
        ];
    }
}
