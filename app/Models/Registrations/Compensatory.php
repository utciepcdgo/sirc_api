<?php

declare(strict_types=1);

namespace App\Models\Registrations;

use Illuminate\Database\Eloquent\Model;

class Compensatory extends Model
{
    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'id' => 'string',
        ];
    }
}
