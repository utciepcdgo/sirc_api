<?php

declare(strict_types=1);

namespace Database\Seeders\Blocks;

use App\Models\Block;
use App\Models\Entity;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class PT extends Seeder
{
    public function run(): void
    {
        $blocks = [
            ['municipality_id' => 16, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '1,854', 'valid_vote_issued' => '8,06', 'rentability' => 23.00, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 38, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '1,211', 'valid_vote_issued' => '9,836', 'rentability' => 12.31, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 10, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '255', 'valid_vote_issued' => '2,125', 'rentability' => 12.00, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 5, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '25,961', 'valid_vote_issued' => '224,19', 'rentability' => 11.58, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 33, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '356', 'valid_vote_issued' => '3,524', 'rentability' => 10.10, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 15, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '564', 'valid_vote_issued' => '6,359', 'rentability' => 8.87, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 20, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '350', 'valid_vote_issued' => '6,159', 'rentability' => 5.68, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 22, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '437', 'valid_vote_issued' => '10,899', 'rentability' => 4.01, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 1, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '518', 'valid_vote_issued' => '14,759', 'rentability' => 3.51, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 3, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '72', 'valid_vote_issued' => '2,234', 'rentability' => 3.22, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 25, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '46', 'valid_vote_issued' => '1,539', 'rentability' => 2.99, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 37, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '88', 'valid_vote_issued' => '3,139', 'rentability' => 2.80, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 18, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '126', 'valid_vote_issued' => '4,597', 'rentability' => 2.74, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 30, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '24', 'valid_vote_issued' => '997', 'rentability' => 2.41, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 8, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '351', 'valid_vote_issued' => '17,146', 'rentability' => 2.05, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 4, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '263', 'valid_vote_issued' => '13,071', 'rentability' => 2.01, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 29, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '25', 'valid_vote_issued' => '1,247', 'rentability' => 2.00, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 12, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '953', 'valid_vote_issued' => '56,362', 'rentability' => 1.69, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 13, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '162', 'valid_vote_issued' => '10,444', 'rentability' => 1.55, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 28, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '95', 'valid_vote_issued' => '6,433', 'rentability' => 1.48, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 11, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '33', 'valid_vote_issued' => '2,333', 'rentability' => 1.41, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 19, 'entity_id' => 5, 'shared_entity_id' => null, 'votes_obtained' => '39', 'valid_vote_issued' => '2,761', 'rentability' => 1.41, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 35, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '74', 'valid_vote_issued' => '5,511', 'rentability' => 1.34, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 32, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '250', 'valid_vote_issued' => '19,369', 'rentability' => 1.29, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 31, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '46', 'valid_vote_issued' => '3,566', 'rentability' => 1.29, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 9, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '60', 'valid_vote_issued' => '4,673', 'rentability' => 1.28, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 2, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '26', 'valid_vote_issued' => '2,037', 'rentability' => 1.28, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 21, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '62', 'valid_vote_issued' => '4,933', 'rentability' => 1.26, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 36, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '107', 'valid_vote_issued' => '9,192', 'rentability' => 1.16, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 17, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '36', 'valid_vote_issued' => '3,196', 'rentability' => 1.13, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 39, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '113', 'valid_vote_issued' => '10,365', 'rentability' => 1.09, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 26, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '81', 'valid_vote_issued' => '8,024', 'rentability' => 1.01, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 24, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '54', 'valid_vote_issued' => '5,621', 'rentability' => 0.96, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 14, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '147', 'valid_vote_issued' => '15,621', 'rentability' => 0.94, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 27, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '25', 'valid_vote_issued' => '3,033', 'rentability' => 0.82, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 23, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '147', 'valid_vote_issued' => '18,029', 'rentability' => 0.82, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 7, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '945', 'valid_vote_issued' => '117,988', 'rentability' => 0.80, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 34, 'entity_id' => 5, 'shared_entity_id' => null, 'votes_obtained' => '80', 'valid_vote_issued' => '12,357', 'rentability' => 0.65, 'uuid' => Uuid::uuid4()->toString()],
            ['municipality_id' => 6, 'entity_id' => 5, 'shared_entity_id' => 11, 'votes_obtained' => '27', 'valid_vote_issued' => '5,179', 'rentability' => 0.52, 'uuid' => Uuid::uuid4()->toString()],
        ];

        $entity = Entity::findOrFail(5);

        foreach ($blocks as $block) {
            $block = Block::create($block);

            /** @var Block $block */
            $entity->attachBlock($block);
        }
    }
}
