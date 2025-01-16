<?php

declare(strict_types=1);

namespace Database\Seeders\Blocks;

use App\Models\Block;
use Illuminate\Database\Seeder;

class MorenaSeeder extends Seeder
{
    public function run(): void
    {
        $blocks = [
            [
                'municipality_id' => 37,
                'entity_id' => 7,
                'votes_obtained' => '1,674',
                'valid_vote_issued' => '3,139',
                'rentability' => 53.33],
            [
                'municipality_id' => 19,
                'entity_id' => 7,
                'votes_obtained' => '1,412',
                'valid_vote_issued' => '2,761',
                'rentability' => 51.14],
            [
                'municipality_id' => 34,
                'entity_id' => 7,
                'votes_obtained' => '6,063',
                'valid_vote_issued' => '12,357',
                'rentability' => 49.07],
            [
                'municipality_id' => 33,
                'entity_id' => 7,
                'votes_obtained' => '1,667',
                'valid_vote_issued' => '3,524',
                'rentability' => 47.30],
            [
                'municipality_id' => 2,
                'entity_id' => 7,
                'votes_obtained' => '943',
                'valid_vote_issued' => '2,037',
                'rentability' => 46.29],
            [
                'municipality_id' => 26,
                'entity_id' => 7,
                'votes_obtained' => '3,595',
                'valid_vote_issued' => '8,024',
                'rentability' => 44.80],
            [
                'municipality_id' => 13,
                'entity_id' => 7,
                'votes_obtained' => '4,539',
                'valid_vote_issued' => '10,444',
                'rentability' => 43.46],
            [
                'municipality_id' => 31,
                'entity_id' => 7,
                'votes_obtained' => '1,524',
                'valid_vote_issued' => '3,566',
                'rentability' => 42.74],
            [
                'municipality_id' => 36,
                'entity_id' => 7,
                'votes_obtained' => '3,922',
                'valid_vote_issued' => '9,192',
                'rentability' => 42.67],
            [
                'municipality_id' => 20,
                'entity_id' => 7,
                'votes_obtained' => '2,621',
                'valid_vote_issued' => '6,159',
                'rentability' => 42.56],
            [
                'municipality_id' => 25,
                'entity_id' => 7,
                'votes_obtained' => '648',
                'valid_vote_issued' => '1,539',
                'rentability' => 42.11],
            [
                'municipality_id' => 15,
                'entity_id' => 7,
                'votes_obtained' => '2,665',
                'valid_vote_issued' => '6,359',
                'rentability' => 41.91],
            [
                'municipality_id' => 4,
                'entity_id' => 7,
                'votes_obtained' => '5,473',
                'valid_vote_issued' => '13,071',
                'rentability' => 41.87],
            [
                'municipality_id' => 18,
                'entity_id' => 7,
                'votes_obtained' => '1,803',
                'valid_vote_issued' => '4,597',
                'rentability' => 39.22],
            [
                'municipality_id' => 29,
                'entity_id' => 7,
                'votes_obtained' => '484',
                'valid_vote_issued' => '1,247',
                'rentability' => 38.81],
            [
                'municipality_id' => 12,
                'entity_id' => 7,
                'votes_obtained' => '21,724',
                'valid_vote_issued' => '56,362',
                'rentability' => 38.54],
            [
                'municipality_id' => 7,
                'entity_id' => 7,
                'votes_obtained' => '43,654',
                'valid_vote_issued' => '117,988',
                'rentability' => 37.00],
            [
                'municipality_id' => 28,
                'entity_id' => 7,
                'votes_obtained' => '2,365',
                'valid_vote_issued' => '6,433',
                'rentability' => 36.76],
            [
                'municipality_id' => 21,
                'entity_id' => 7,
                'votes_obtained' => '1,794',
                'valid_vote_issued' => '4,933',
                'rentability' => 36.37],
            [
                'municipality_id' => 3,
                'entity_id' => 7,
                'votes_obtained' => '787',
                'valid_vote_issued' => '2,234',
                'rentability' => 35.23],
            [
                'municipality_id' => 38,
                'entity_id' => 7,
                'votes_obtained' => '3,228',
                'valid_vote_issued' => '9,836',
                'rentability' => 32.82],
            [
                'municipality_id' => 39,
                'entity_id' => 7,
                'votes_obtained' => '3,33',
                'valid_vote_issued' => '10,365',
                'rentability' => 32.13],
            [
                'municipality_id' => 35,
                'entity_id' => 7,
                'votes_obtained' => '1,608',
                'valid_vote_issued' => '5,511',
                'rentability' => 29.18],
            [
                'municipality_id' => 24,
                'entity_id' => 7,
                'votes_obtained' => '1,61',
                'valid_vote_issued' => '5,621',
                'rentability' => 28.64],
            [
                'municipality_id' => 23,
                'entity_id' => 7,
                'votes_obtained' => '5,083',
                'valid_vote_issued' => '18,029',
                'rentability' => 28.19],
            [
                'municipality_id' => 17,
                'entity_id' => 7,
                'votes_obtained' => '898',
                'valid_vote_issued' => '3,196',
                'rentability' => 28.10],
            [
                'municipality_id' => 27,
                'entity_id' => 7,
                'votes_obtained' => '803',
                'valid_vote_issued' => '3,033',
                'rentability' => 26.48],
            [
                'municipality_id' => 6,
                'entity_id' => 7,
                'votes_obtained' => '1,225',
                'valid_vote_issued' => '5,179',
                'rentability' => 23.65],
            [
                'municipality_id' => 22,
                'entity_id' => 7,
                'votes_obtained' => '2,295',
                'valid_vote_issued' => '10,899',
                'rentability' => 21.06],
            [
                'municipality_id' => 11,
                'entity_id' => 7,
                'votes_obtained' => '463',
                'valid_vote_issued' => '2,333',
                'rentability' => 19.85],
            [
                'municipality_id' => 5,
                'entity_id' => 7,
                'votes_obtained' => '40,491',
                'valid_vote_issued' => '224,19',
                'rentability' => 18.06],
            [
                'municipality_id' => 32,
                'entity_id' => 7,
                'votes_obtained' => '3,417',
                'valid_vote_issued' => '19,369',
                'rentability' => 17.64],
            [
                'municipality_id' => 16,
                'entity_id' => 7,
                'votes_obtained' => '1,341',
                'valid_vote_issued' => '8,06',
                'rentability' => 16.64],
            [
                'municipality_id' => 9,
                'entity_id' => 7,
                'votes_obtained' => '750',
                'valid_vote_issued' => '4,673',
                'rentability' => 16.05],
            [
                'municipality_id' => 8,
                'entity_id' => 7,
                'votes_obtained' => '2,279',
                'valid_vote_issued' => '17,146',
                'rentability' => 13.29],
            [
                'municipality_id' => 30,
                'entity_id' => 7,
                'votes_obtained' => '126',
                'valid_vote_issued' => '997',
                'rentability' => 12.64],
            [
                'municipality_id' => 1,
                'entity_id' => 7,
                'votes_obtained' => '1,819',
                'valid_vote_issued' => '14,759',
                'rentability' => 12.32],
            [
                'municipality_id' => 14,
                'entity_id' => 7,
                'votes_obtained' => '1,674',
                'valid_vote_issued' => '15,621',
                'rentability' => 10.72],
            [
                'municipality_id' => 10,
                'entity_id' => 7,
                'votes_obtained' => '112',
                'valid_vote_issued' => '2,125',
                'rentability' => 5.27],
        ];

        foreach ($blocks as $block) {
            Block::create($block);
        }
    }
}
