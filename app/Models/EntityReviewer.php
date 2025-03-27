<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EntityReviewer extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'reviewer_id',
        'entity_id',
    ];


    /**
     * @return BelongsTo<Reviewer, EntityReviewer>
     */
    public function reviewer(): BelongsTo
    {
        return $this->belongsTo(Reviewer::class);
    }

    /**
     * @return BelongsTo<Entity, EntityReviewer>
     */
    public function entity(): BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }
}
