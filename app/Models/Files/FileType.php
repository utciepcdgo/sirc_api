<?php

namespace App\Models\Files;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property object $allowed_to
 */
class FileType extends Model
{

    protected $table = 'filetypes';
    public $timestamps = false;


}
