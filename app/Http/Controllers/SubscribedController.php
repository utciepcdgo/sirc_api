<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\SubscribedRequest;
use App\Http\Resources\SubscribedResource;
use App\Models\Parties\Subscribed;

class SubscribedController extends Controller
{
    public function index()
    {
    }

    public function store(SubscribedRequest $request)
    {
        $validated = $request->validated();
        $subscribedRecords = [];

        foreach ($validated as $data) {
            $subscribed = Subscribed::updateOrCreate(
                ['entity_id' => $data['entity_id']],
                $data
            );
            $subscribedRecords[] = $subscribed;
        }

        return SubscribedResource::collection(collect($subscribedRecords));
    }

    public function show()
    {
    }

    public function update()
    {
    }
}
