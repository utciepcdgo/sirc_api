<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReviewerProfileResource;
use App\Models\ReviewerProfile;
use Illuminate\Http\Request;

class ReviewerProfileController extends Controller
{
    public function index()
    {
        return ReviewerProfileResource::collection(ReviewerProfile::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'role' => ['required'],
            'user_id' => ['required', 'exists:users'],
        ]);

        return new ReviewerProfileResource(ReviewerProfile::create($data));
    }

    public function show(ReviewerProfile $reviewerProfile)
    {
        return new ReviewerProfileResource($reviewerProfile);
    }

    public function update(Request $request, ReviewerProfile $reviewerProfile)
    {
        $data = $request->validate([
            'role' => ['required'],
            'user_id' => ['required', 'exists:users'],
        ]);

        $reviewerProfile->update($data);

        return new ReviewerProfileResource($reviewerProfile);
    }

    public function destroy(ReviewerProfile $reviewerProfile)
    {
        $reviewerProfile->delete();

        return response()->json();
    }
}
