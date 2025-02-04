<?php

namespace App\Models\Files;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $allowed_to
 */
class FileType extends Model
{

    protected $table = 'filetypes';
    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'allowed_to' => 'array',
        ];
    }

}
