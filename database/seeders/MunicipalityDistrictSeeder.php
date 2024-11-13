<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalityDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            ['district_id' => 1, 'municipality_id' => 5],
            ['district_id' => 2, 'municipality_id' => 5],
            ['district_id' => 3, 'municipality_id' => 5],
            ['district_id' => 4, 'municipality_id' => 5],
            ['district_id' => 5, 'municipality_id' => 5],
            ['district_id' => 6, 'municipality_id' => 5],
            ['district_id' => 7, 'municipality_id' => 2],
            ['district_id' => 7, 'municipality_id' => 9],
            ['district_id' => 7, 'municipality_id' => 19],
            ['district_id' => 7, 'municipality_id' => 26],
            ['district_id' => 7, 'municipality_id' => 32],
            ['district_id' => 7, 'municipality_id' => 34],
            ['district_id' => 7, 'municipality_id' => 36],
            ['district_id' => 7, 'municipality_id' => 37],
            ['district_id' => 8, 'municipality_id' => 1],
            ['district_id' => 8, 'municipality_id' => 3],
            ['district_id' => 8, 'municipality_id' => 8],
            ['district_id' => 8, 'municipality_id' => 39],
            ['district_id' => 8, 'municipality_id' => 20],
            ['district_id' => 8, 'municipality_id' => 21],
            ['district_id' => 8, 'municipality_id' => 28],
            ['district_id' => 9, 'municipality_id' => 10],
            ['district_id' => 9, 'municipality_id' => 11],
            ['district_id' => 9, 'municipality_id' => 12],
            ['district_id' => 9, 'municipality_id' => 13],
            ['district_id' => 9, 'municipality_id' => 15],
            ['district_id' => 9, 'municipality_id' => 17],
            ['district_id' => 9, 'municipality_id' => 18],
            ['district_id' => 9, 'municipality_id' => 24],
            ['district_id' => 9, 'municipality_id' => 25],
            ['district_id' => 9, 'municipality_id' => 29],
            ['district_id' => 9, 'municipality_id' => 30],
            ['district_id' => 9, 'municipality_id' => 26],
            ['district_id' => 10, 'municipality_id' => 7],
            ['district_id' => 11, 'municipality_id' => 7],
            ['district_id' => 12, 'municipality_id' => 7],
            ['district_id' => 13, 'municipality_id' => 12],
            ['district_id' => 14, 'municipality_id' => 4],
            ['district_id' => 14, 'municipality_id' => 6],
            ['district_id' => 14, 'municipality_id' => 16],
            ['district_id' => 14, 'municipality_id' => 22],
            ['district_id' => 14, 'municipality_id' => 27],
            ['district_id' => 14, 'municipality_id' => 31],
            ['district_id' => 14, 'municipality_id' => 38],
            ['district_id' => 15, 'municipality_id' => 14],
            ['district_id' => 15, 'municipality_id' => 23],
            ['district_id' => 15, 'municipality_id' => 33],
        ];

        DB::table('municipality_district')->insert($districts);
    }
}
