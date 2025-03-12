<?php

namespace Database\Seeders\Blocks;

use App\Models\Block;
use App\Models\Entity;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class PV extends Seeder
{
    public function run(): void
    {
        $blocks = [
            ['municipality_id' => 1, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 2, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 3, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 4, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 5, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 6, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 7, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 8, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 9, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 10, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 11, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 12, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 13, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 14, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 15, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 16, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 17, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 18, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 19, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 20, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 21, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 22, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 23, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 24, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 25, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 26, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 27, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 28, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 29, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 30, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 31, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 32, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 33, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 34, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 35, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 36, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 37, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 38, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 39, 'entity_id' => 9, 'shared_entity_id' => null, 'votes_obtained' => '0', 'valid_vote_issued' => '0', 'rentability' => '0', 'uuid' => Uuid::uuid4()->toString()],
        ];

        $entity = Entity::findOrFail(4);

        foreach ($blocks as $block) {
            $block = Block::create($block);

            /** @var Block $block */
            $entity->attachBlock($block);
        }
    }
}
