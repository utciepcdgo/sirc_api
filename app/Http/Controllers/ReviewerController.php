<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReviewerResource;
use App\Models\Reviewer;
use Illuminate\Http\Request;

class ReviewerController extends Controller
{
    public function index()
    {
        return ReviewerResource::collection(Reviewer::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'role' => ['required'],
            'user_id' => ['required', 'exists:users'],
        ]);

        return new ReviewerResource(Reviewer::create($data));
    }

    public function show(Reviewer $reviewerProfile)
    {
        return new ReviewerResource($reviewerProfile);
    }

    public function update(Request $request, Reviewer $reviewerProfile)
    {
        $data = $request->validate([
            'role' => ['required'],
            'user_id' => ['required', 'exists:users'],
        ]);

        $reviewerProfile->update($data);

        return new ReviewerResource($reviewerProfile);
    }

    public function destroy(Reviewer $reviewerProfile)
    {
        $reviewerProfile->delete();

        return response()->json();
    }
}
