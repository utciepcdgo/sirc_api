<?php

declare(strict_types=1);

namespace Database\Seeders\Blocks;

use App\Models\Block;
use Illuminate\Database\Seeder;

class PAN extends Seeder
{
    public function run(): void
    {
        $blocks = [
            [
                'municipality_id' => 32,
                'entity_id' => 2,
                'votes_obtained' => '11,647',
                'valid_vote_issued' => '19,369',
                'rentability' => 60.13],
            [
                'municipality_id' => 11,
                'entity_id' => 2,
                'votes_obtained' => '1,069',
                'valid_vote_issued' => '2,333',
                'rentability' => 45.82],
            [
                'municipality_id' => 19,
                'entity_id' => 2,
                'votes_obtained' => '994',
                'valid_vote_issued' => '2,761',
                'rentability' => 36.00],
            [
                'municipality_id' => 38,
                'entity_id' => 2,
                'votes_obtained' => '3,383',
                'valid_vote_issued' => '9,836',
                'rentability' => 34.39],
            [
                'municipality_id' => 30,
                'entity_id' => 2,
                'votes_obtained' => '337',
                'valid_vote_issued' => '997',
                'rentability' => 33.80],
            [
                'municipality_id' => 15,
                'entity_id' => 2,
                'votes_obtained' => '2,14',
                'valid_vote_issued' => '6,359',
                'rentability' => 33.65],
            [
                'municipality_id' => 1,
                'entity_id' => 2,
                'votes_obtained' => '4,718',
                'valid_vote_issued' => '14,759',
                'rentability' => 31.97],
            [
                'municipality_id' => 2,
                'entity_id' => 2,
                'votes_obtained' => '638',
                'valid_vote_issued' => '2,037',
                'rentability' => 31.32],
            [
                'municipality_id' => 37,
                'entity_id' => 2,
                'votes_obtained' => '955',
                'valid_vote_issued' => '3,139',
                'rentability' => 30.42],
            [
                'municipality_id' => 6,
                'entity_id' => 2,
                'votes_obtained' => '1,439',
                'valid_vote_issued' => '5,179',
                'rentability' => 27.79],
            [
                'municipality_id' => 39,
                'entity_id' => 2,
                'votes_obtained' => '2,789',
                'valid_vote_issued' => '10,365',
                'rentability' => 26.91],
            [
                'municipality_id' => 17,
                'entity_id' => 2,
                'votes_obtained' => '831',
                'valid_vote_issued' => '3,196',
                'rentability' => 26.00],
            [
                'municipality_id' => 22,
                'entity_id' => 2,
                'votes_obtained' => '2,829',
                'valid_vote_issued' => '10,899',
                'rentability' => 25.96],
            [
                'municipality_id' => 26,
                'entity_id' => 2,
                'votes_obtained' => '2,047',
                'valid_vote_issued' => '8,024',
                'rentability' => 25.51],
            [
                'municipality_id' => 23,
                'entity_id' => 2,
                'votes_obtained' => '4,508',
                'valid_vote_issued' => '18,029',
                'rentability' => 25.00],
            [
                'municipality_id' => 36,
                'entity_id' => 2,
                'votes_obtained' => '2,25',
                'valid_vote_issued' => '9,192',
                'rentability' => 24.48],
            [
                'municipality_id' => 5,
                'entity_id' => 2,
                'votes_obtained' => '51,945',
                'valid_vote_issued' => '224,19',
                'rentability' => 23.17],
            [
                'municipality_id' => 21,
                'entity_id' => 2,
                'votes_obtained' => '1,085',
                'valid_vote_issued' => '4,933',
                'rentability' => 21.99],
            [
                'municipality_id' => 29,
                'entity_id' => 2,
                'votes_obtained' => '239',
                'valid_vote_issued' => '1,247',
                'rentability' => 19.17],
            [
                'municipality_id' => 33,
                'entity_id' => 2,
                'votes_obtained' => '589',
                'valid_vote_issued' => '3,524',
                'rentability' => 16.71],
            [
                'municipality_id' => 18,
                'entity_id' => 2,
                'votes_obtained' => '754',
                'valid_vote_issued' => '4,597',
                'rentability' => 16.40],
            [
                'municipality_id' => 8,
                'entity_id' => 2,
                'votes_obtained' => '1,892',
                'valid_vote_issued' => '17,146',
                'rentability' => 11.03],
            [
                'municipality_id' => 16,
                'entity_id' => 2,
                'votes_obtained' => '880',
                'valid_vote_issued' => '8,06',
                'rentability' => 10.92],
            [
                'municipality_id' => 20,
                'entity_id' => 2,
                'votes_obtained' => '646',
                'valid_vote_issued' => '6,159',
                'rentability' => 10.49],
            [
                'municipality_id' => 24,
                'entity_id' => 2,
                'votes_obtained' => '545',
                'valid_vote_issued' => '5,621',
                'rentability' => 9.70],
            [
                'municipality_id' => 3,
                'entity_id' => 2,
                'votes_obtained' => '198',
                'valid_vote_issued' => '2,234',
                'rentability' => 8.86],
            [
                'municipality_id' => 12,
                'entity_id' => 2,
                'votes_obtained' => '4,261',
                'valid_vote_issued' => '56,362',
                'rentability' => 7.56],
            [
                'municipality_id' => 35,
                'entity_id' => 2,
                'votes_obtained' => '403',
                'valid_vote_issued' => '5,511',
                'rentability' => 7.31],
            [
                'municipality_id' => 28,
                'entity_id' => 2,
                'votes_obtained' => '455',
                'valid_vote_issued' => '6,433',
                'rentability' => 7.07],
            [
                'municipality_id' => 7,
                'entity_id' => 2,
                'votes_obtained' => '8,293',
                'valid_vote_issued' => '117,988',
                'rentability' => 7.03],
            [
                'municipality_id' => 9,
                'entity_id' => 2,
                'votes_obtained' => '314',
                'valid_vote_issued' => '4,673',
                'rentability' => 6.72],
            [
                'municipality_id' => 4,
                'entity_id' => 2,
                'votes_obtained' => '804',
                'valid_vote_issued' => '13,071',
                'rentability' => 6.15],
            [
                'municipality_id' => 13,
                'entity_id' => 2,
                'votes_obtained' => '609',
                'valid_vote_issued' => '10,444',
                'rentability' => 5.83],
            [
                'municipality_id' => 31,
                'entity_id' => 2,
                'votes_obtained' => '197',
                'valid_vote_issued' => '3,566',
                'rentability' => 5.52],
            [
                'municipality_id' => 34,
                'entity_id' => 2,
                'votes_obtained' => '412',
                'valid_vote_issued' => '12,357',
                'rentability' => 3.33],
            [
                'municipality_id' => 14,
                'entity_id' => 2,
                'votes_obtained' => '223',
                'valid_vote_issued' => '15,621',
                'rentability' => 1.43],
            [
                'municipality_id' => 25,
                'entity_id' => 2,
                'votes_obtained' => '21',
                'valid_vote_issued' => '1,539',
                'rentability' => 1.36],
            [
                'municipality_id' => 27,
                'entity_id' => 2,
                'votes_obtained' => '20',
                'valid_vote_issued' => '3,033',
                'rentability' => 0.66],
            [
                'municipality_id' => 10,
                'entity_id' => 2,
                'votes_obtained' => '11',
                'valid_vote_issued' => '2,125',
                'rentability' => 0.52],
        ];

        foreach ($blocks as $block) {
            Block::create($block);
        }
    }
}
