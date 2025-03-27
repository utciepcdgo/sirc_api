<?php

namespace App\Http\Controllers;

use App\Http\Resources\EntityReviewerResource;
use App\Models\EntityReviewer;
use Illuminate\Http\Request;

class EntityReviewerController extends Controller
{
    public function index()
    {
        return EntityReviewerResource::collection(EntityReviewer::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'reviewer_id' => ['required', 'exists:reviewers'],
            'entity_id' => ['required', 'exists:entities'],
        ]);

        return new EntityReviewerResource(EntityReviewer::create($data));
    }

    public function show(EntityReviewer $entityReviewer)
    {
        return new EntityReviewerResource($entityReviewer);
    }

    public function update(Request $request, EntityReviewer $entityReviewer)
    {
        $data = $request->validate([
            'reviewer_id' => ['required', 'exists:reviewers'],
            'entity_id' => ['required', 'exists:entities'],
        ]);

        $entityReviewer->update($data);

        return new EntityReviewerResource($entityReviewer);
    }

    public function destroy(EntityReviewer $entityReviewer)
    {
        $entityReviewer->delete();

        return response()->json();
    }
}
