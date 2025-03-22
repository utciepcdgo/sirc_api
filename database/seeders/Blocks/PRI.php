<?php

declare(strict_types=1);

namespace Database\Seeders\Blocks;

use App\Models\Block;
use App\Models\Entity;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class PRI extends Seeder
{
    public function run(): void
    {

        $blocks = [
            ['municipality_id' => 9, 'entity_id' => 3, 'votes_obtained' => '3,496', 'valid_vote_issued' => '4,673', 'rentability' => 74.81, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 14, 'entity_id' => 3, 'votes_obtained' => '9,35', 'valid_vote_issued' => '15,621', 'rentability' => 59.86, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 35, 'entity_id' => 3, 'votes_obtained' => '3,201', 'valid_vote_issued' => '5,511', 'rentability' => 58.08, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 28, 'entity_id' => 3, 'votes_obtained' => '3,24', 'valid_vote_issued' => '6,433', 'rentability' => 50.37, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 7, 'entity_id' => 3, 'votes_obtained' => '56,843', 'valid_vote_issued' => '117,988', 'rentability' => 48.18, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 6, 'entity_id' => 3, 'votes_obtained' => '2,267', 'valid_vote_issued' => '5,179', 'rentability' => 43.77, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 34, 'entity_id' => 3, 'votes_obtained' => '5,332', 'valid_vote_issued' => '12,357', 'rentability' => 43.15, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 12, 'entity_id' => 3, 'votes_obtained' => '23,828', 'valid_vote_issued' => '56,362', 'rentability' => 42.28, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 29, 'entity_id' => 3, 'votes_obtained' => '476', 'valid_vote_issued' => '1,247', 'rentability' => 38.17, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 23, 'entity_id' => 3, 'votes_obtained' => '6,832', 'valid_vote_issued' => '18,029', 'rentability' => 37.89, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 17, 'entity_id' => 3, 'votes_obtained' => '1,205', 'valid_vote_issued' => '3,196', 'rentability' => 37.70, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 10, 'entity_id' => 3, 'votes_obtained' => '795', 'valid_vote_issued' => '2,125', 'rentability' => 37.41, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 18, 'entity_id' => 3, 'votes_obtained' => '1,613', 'valid_vote_issued' => '4,597', 'rentability' => 35.09, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 13, 'entity_id' => 3, 'votes_obtained' => '3,576', 'valid_vote_issued' => '10,444', 'rentability' => 34.24, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 39, 'entity_id' => 3, 'votes_obtained' => '3,495', 'valid_vote_issued' => '10,365', 'rentability' => 33.72, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 4, 'entity_id' => 3, 'votes_obtained' => '4,262', 'valid_vote_issued' => '13,071', 'rentability' => 32.61, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 20, 'entity_id' => 3, 'votes_obtained' => '1,936', 'valid_vote_issued' => '6,159', 'rentability' => 31.43, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 27, 'entity_id' => 3, 'votes_obtained' => '953', 'valid_vote_issued' => '3,033', 'rentability' => 31.42, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 11, 'entity_id' => 3, 'votes_obtained' => '682', 'valid_vote_issued' => '2,333', 'rentability' => 29.23, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 36, 'entity_id' => 3, 'votes_obtained' => '2,557', 'valid_vote_issued' => '9,192', 'rentability' => 27.82, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 31, 'entity_id' => 3, 'votes_obtained' => '946', 'valid_vote_issued' => '3,566', 'rentability' => 26.53, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 5, 'entity_id' => 3, 'votes_obtained' => '58,547', 'valid_vote_issued' => '224,19', 'rentability' => 26.11, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 21, 'entity_id' => 3, 'votes_obtained' => '1,049', 'valid_vote_issued' => '4,933', 'rentability' => 21.26, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 3, 'entity_id' => 3, 'votes_obtained' => '468', 'valid_vote_issued' => '2,234', 'rentability' => 20.95, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 8, 'entity_id' => 3, 'votes_obtained' => '3,165', 'valid_vote_issued' => '17,146', 'rentability' => 18.46, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 33, 'entity_id' => 3, 'votes_obtained' => '557', 'valid_vote_issued' => '3,524', 'rentability' => 15.81, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 22, 'entity_id' => 3, 'votes_obtained' => '1,648', 'valid_vote_issued' => '10,899', 'rentability' => 15.12, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 32, 'entity_id' => 3, 'votes_obtained' => '2,768', 'valid_vote_issued' => '19,369', 'rentability' => 14.29, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 2, 'entity_id' => 3, 'votes_obtained' => '290', 'valid_vote_issued' => '2,037', 'rentability' => 14.24, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 1, 'entity_id' => 3, 'votes_obtained' => '1,678', 'valid_vote_issued' => '14,759', 'rentability' => 11.37, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 15, 'entity_id' => 3, 'votes_obtained' => '719', 'valid_vote_issued' => '6,359', 'rentability' => 11.31, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 38, 'entity_id' => 3, 'votes_obtained' => '1,09', 'valid_vote_issued' => '9,836', 'rentability' => 11.08, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 24, 'entity_id' => 3, 'votes_obtained' => '580', 'valid_vote_issued' => '5,621', 'rentability' => 10.32, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 16, 'entity_id' => 3, 'votes_obtained' => '742', 'valid_vote_issued' => '8,06', 'rentability' => 9.21, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 26, 'entity_id' => 3, 'votes_obtained' => '572', 'valid_vote_issued' => '8,024', 'rentability' => 7.13, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 37, 'entity_id' => 3, 'votes_obtained' => '192', 'valid_vote_issued' => '3,139', 'rentability' => 6.12, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 25, 'entity_id' => 3, 'votes_obtained' => '48', 'valid_vote_issued' => '1,539', 'rentability' => 3.12, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 30, 'entity_id' => 3, 'votes_obtained' => '31', 'valid_vote_issued' => '997', 'rentability' => 3.11, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 19, 'entity_id' => 3, 'votes_obtained' => '38', 'valid_vote_issued' => '2,761', 'rentability' => 1.38, 'uuid' => Uuid::uuid4()->toString()],
        ];

        $entity = Entity::findOrFail(3);

        foreach ($blocks as $block) {
            $block = Block::create($block);

            /** @var Block $block */
            $entity->attachBlock($block);
        }

    }
}
