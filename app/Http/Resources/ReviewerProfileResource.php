<?php

namespace App\Http\Resources;

use App\Models\ReviewerProfile;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ReviewerProfile */
class ReviewerProfileResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'role' => $this->role,
            'user_id' => $this->user_id,
        ];
    }
}
