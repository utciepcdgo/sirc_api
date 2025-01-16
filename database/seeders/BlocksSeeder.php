<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Block;
use Illuminate\Database\Seeder;

class BlocksSeeder extends Seeder
{
    public function run(): void
    {

        $blocks = [

            // Para pruebas
            [
                'municipality_id' => 1,
                'entity_id' => 12,
                'votes_obtained' => '1,819',
                'valid_vote_issued' => '14,759',
                'rentability' => 12.32],
        ];

        foreach ($blocks as $block) {
            Block::create($block);
        }
    }
}
