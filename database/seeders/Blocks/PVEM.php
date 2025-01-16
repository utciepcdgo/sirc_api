<?php

declare(strict_types=1);

namespace Database\Seeders\Blocks;

use App\Models\Block;
use Illuminate\Database\Seeder;

class PVEM extends Seeder
{
    public function run(): void
    {
        $blocks = [
            [
                'municipality_id' => 1,
                'entity_id' => 4,
                'votes_obtained' => '5,013',
                'valid_vote_issued' => '14,759',
                'rentability' => 33.97],
            [
                'municipality_id' => 8,
                'entity_id' => 4,
                'votes_obtained' => '4,973',
                'valid_vote_issued' => '17,146',
                'rentability' => 29.00],
            [
                'municipality_id' => 14,
                'entity_id' => 4,
                'votes_obtained' => '3,87',
                'valid_vote_issued' => '15,621',
                'rentability' => 24.77],
            [
                'municipality_id' => 22,
                'entity_id' => 4,
                'votes_obtained' => '1,751',
                'valid_vote_issued' => '10,899',
                'rentability' => 16.07],
            [
                'municipality_id' => 31,
                'entity_id' => 4,
                'votes_obtained' => '510',
                'valid_vote_issued' => '3,566',
                'rentability' => 14.30],
            [
                'municipality_id' => 4,
                'entity_id' => 4,
                'votes_obtained' => '1,221',
                'valid_vote_issued' => '13,071',
                'rentability' => 9.34],
            [
                'municipality_id' => 16,
                'entity_id' => 4,
                'votes_obtained' => '268',
                'valid_vote_issued' => '8,06',
                'rentability' => 3.33],
            [
                'municipality_id' => 38,
                'entity_id' => 4,
                'votes_obtained' => '304',
                'valid_vote_issued' => '9,836',
                'rentability' => 3.09],
            [
                'municipality_id' => 21,
                'entity_id' => 4,
                'votes_obtained' => '135',
                'valid_vote_issued' => '4,933',
                'rentability' => 2.74],
            [
                'municipality_id' => 12,
                'entity_id' => 4,
                'votes_obtained' => '1,219',
                'valid_vote_issued' => '56,362',
                'rentability' => 2.16],
            [
                'municipality_id' => 33,
                'entity_id' => 4,
                'votes_obtained' => '76',
                'valid_vote_issued' => '3,524',
                'rentability' => 2.16],
            [
                'municipality_id' => 13,
                'entity_id' => 4,
                'votes_obtained' => '215',
                'valid_vote_issued' => '10,444',
                'rentability' => 2.06],
            [
                'municipality_id' => 20,
                'entity_id' => 4,
                'votes_obtained' => '126',
                'valid_vote_issued' => '6,159',
                'rentability' => 2.05],
            [
                'municipality_id' => 27,
                'entity_id' => 4,
                'votes_obtained' => '59',
                'valid_vote_issued' => '3,033',
                'rentability' => 1.95],
            [
                'municipality_id' => 6,
                'entity_id' => 4,
                'votes_obtained' => '83',
                'valid_vote_issued' => '5,179',
                'rentability' => 1.60],
            [
                'municipality_id' => 37,
                'entity_id' => 4,
                'votes_obtained' => '45',
                'valid_vote_issued' => '3,139',
                'rentability' => 1.43],
            [
                'municipality_id' => 3,
                'entity_id' => 4,
                'votes_obtained' => '28',
                'valid_vote_issued' => '2,234',
                'rentability' => 1.25],
            [
                'municipality_id' => 9,
                'entity_id' => 4,
                'votes_obtained' => '53',
                'valid_vote_issued' => '4,673',
                'rentability' => 1.13],
            [
                'municipality_id' => 18,
                'entity_id' => 4,
                'votes_obtained' => '49',
                'valid_vote_issued' => '4,597',
                'rentability' => 1.07],
            [
                'municipality_id' => 7,
                'entity_id' => 4,
                'votes_obtained' => '1,252',
                'valid_vote_issued' => '117,988',
                'rentability' => 1.06],
            [
                'municipality_id' => 5,
                'entity_id' => 4,
                'votes_obtained' => '2,088',
                'valid_vote_issued' => '224,19',
                'rentability' => 0.93],
            [
                'municipality_id' => 19,
                'entity_id' => 4,
                'votes_obtained' => '24',
                'valid_vote_issued' => '2,761',
                'rentability' => 0.87],
            [
                'municipality_id' => 23,
                'entity_id' => 4,
                'votes_obtained' => '156',
                'valid_vote_issued' => '18,029',
                'rentability' => 0.87],
            [
                'municipality_id' => 15,
                'entity_id' => 4,
                'votes_obtained' => '55',
                'valid_vote_issued' => '6,359',
                'rentability' => 0.86],
            [
                'municipality_id' => 35,
                'entity_id' => 4,
                'votes_obtained' => '46',
                'valid_vote_issued' => '5,511',
                'rentability' => 0.83],
            [
                'municipality_id' => 2,
                'entity_id' => 4,
                'votes_obtained' => '16',
                'valid_vote_issued' => '2,037',
                'rentability' => 0.79],
            [
                'municipality_id' => 39,
                'entity_id' => 4,
                'votes_obtained' => '78',
                'valid_vote_issued' => '10,365',
                'rentability' => 0.75],
            [
                'municipality_id' => 17,
                'entity_id' => 4,
                'votes_obtained' => '23',
                'valid_vote_issued' => '3,196',
                'rentability' => 0.72],
            [
                'municipality_id' => 25,
                'entity_id' => 4,
                'votes_obtained' => '10',
                'valid_vote_issued' => '1,539',
                'rentability' => 0.65],
            [
                'municipality_id' => 30,
                'entity_id' => 4,
                'votes_obtained' => 6,
                'valid_vote_issued' => '997',
                'rentability' => 0.60],
            [
                'municipality_id' => 32,
                'entity_id' => 4,
                'votes_obtained' => '114',
                'valid_vote_issued' => '19,369',
                'rentability' => 0.59],
            [
                'municipality_id' => 26,
                'entity_id' => 4,
                'votes_obtained' => '45',
                'valid_vote_issued' => '8,024',
                'rentability' => 0.56],
            [
                'municipality_id' => 28,
                'entity_id' => 4,
                'votes_obtained' => '36',
                'valid_vote_issued' => '6,433',
                'rentability' => 0.56],
            [
                'municipality_id' => 11,
                'entity_id' => 4,
                'votes_obtained' => '12',
                'valid_vote_issued' => '2,333',
                'rentability' => 0.51],
            [
                'municipality_id' => 24,
                'entity_id' => 4,
                'votes_obtained' => '28',
                'valid_vote_issued' => '5,621',
                'rentability' => 0.50],
            [
                'municipality_id' => 36,
                'entity_id' => 4,
                'votes_obtained' => '32',
                'valid_vote_issued' => '9,192',
                'rentability' => 0.35],
            [
                'municipality_id' => 34,
                'entity_id' => 4,
                'votes_obtained' => '40',
                'valid_vote_issued' => '12,357',
                'rentability' => 0.32],
            [
                'municipality_id' => 10,
                'entity_id' => 4,
                'votes_obtained' => 2,
                'valid_vote_issued' => '2,125',
                'rentability' => 0.09],
            [
                'municipality_id' => 29,
                'entity_id' => 4,
                'votes_obtained' => 1,
                'valid_vote_issued' => '1,247',
                'rentability' => 0.08],
        ];

        foreach ($blocks as $block) {
            Block::create($block);
        }
    }
}
