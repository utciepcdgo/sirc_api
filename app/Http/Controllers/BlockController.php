<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\BlockResource;
use App\Models\Block;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function index()
    {
        return BlockResource::collection(Block::filter()->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'votes_obtained' => ['required', 'integer'],
            'valid_vote_issued' => ['required', 'integer'],
            'profitability' => ['required', 'numeric'],
            'municipality_id' => ['required'],
        ]);

        return new BlockResource(Block::create($data));
    }

    public function show(Block $block)
    {
        return new BlockResource($block);
    }

    public function update(Request $request, Block $block)
    {
        $data = $request->validate([
            'votes_obtained' => ['required', 'integer'],
            'valid_vote_issued' => ['required', 'integer'],
            'profitability' => ['required', 'numeric'],
            'municipality_id' => ['required'],
        ]);

        $block->update($data);

        return new BlockResource($block);
    }

    public function destroy(Block $block)
    {
        $block->delete();

        return response()->json();
    }
}
