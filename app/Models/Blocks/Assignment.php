<?php

declare(strict_types=1);

namespace App\Models\Blocks;

use App\Models\Block;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property bool $municipality
 * @property array $councils
 */
class Assignment extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'municipality',
        'councils',
        'block_id',
    ];

    protected $table = 'assignments';

    public function block(): BelongsTo
    {
        return $this->belongsTo(Block::class);
    }

    protected function casts(): array
    {
        return [
            'municipality' => 'boolean',
            'councils' => 'array',
        ];
    }
}
