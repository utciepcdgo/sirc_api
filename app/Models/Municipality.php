<?php

declare(strict_types=1);

namespace App\Models;

use Abbasudo\Purity\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property string $name
 * @property string $shield
 * @property string $abbreviation
 */
class Municipality extends Model
{
    use Filterable;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'shield',
        'abbreviation',
    ];

    /**
     * @return BelongsTo<Block, Municipality>
     */
    public function blocks(): BelongsTo
    {
        return $this->belongsTo(Block::class);
    }

    /**
     * @return BelongsToMany<District>
     */
    public function districts(): BelongsToMany
    {
        return $this->belongsToMany(District::class, 'municipality_district');
    }
}
