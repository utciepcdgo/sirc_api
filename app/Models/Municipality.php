<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name
 * @property string $shield
 * @property string $abbreviation
 */
class Municipality extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = array(
        'name',
        'shield',
        'abbreviation',
    );

    /**
     * @return BelongsTo<Block, Municipality>
     */
    public function blocks(): BelongsTo
    {
        return $this->belongsTo(Block::class);
    }

    /**
     * @return BelongsTo<District, Municipality>
     */
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
