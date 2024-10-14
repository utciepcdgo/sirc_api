<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = array(
        'groupable_type',
        'groupable_id',
        'user_id',
    );
}
