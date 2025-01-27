<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\SubscribedRequest;
use App\Http\Resources\SubscribedResource;
use App\Models\Parties\Subscribed;

class SubscribedController extends Controller
{
    public function index() {}

    public function store(SubscribedRequest $request)
    {
        $validated = $request->validated();
        $subscribed = Subscribed::updateOrCreate(
            ['entity_id' => $validated['entity_id'] ?? null],
            $validated
        );

        return new SubscribedResource($subscribed);
    }

    public function show() {}

    public function update() {}
}
