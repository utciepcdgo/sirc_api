<?php

declare(strict_types=1);

namespace App\Models\Blocks;

use App\Models\Block;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property bool $municipality - Si es verdadero, le corresponde al Partido en cuestión.
 * @property bool $syndic - Si es verdadero, le corresponde al Partido en cuestión.
 * @property string $councils
 */
class Assignment extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'municipality',
        'syndic',
        'councils',
        'block_id',
    ];

    protected $table = 'assignments';

    /**
     * @return BelongsTo<Block, Assignment>
     */
    public function block(): BelongsTo
    {
        return $this->belongsTo(Block::class);
    }

    protected function casts(): array
    {
        return [
            'municipality' => 'boolean',
            'syndic' => 'boolean',
            'councils' => 'array',
        ];
    }
}
