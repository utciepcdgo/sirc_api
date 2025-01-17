<?php

declare(strict_types=1);

namespace Database\Seeders;

use Database\Seeders\Blocks\MC;
use Database\Seeders\Blocks\MorenaSeeder;
use Database\Seeders\Blocks\PAN;
use Database\Seeders\Blocks\PES;
use Database\Seeders\Blocks\PRI;
use Database\Seeders\Blocks\PT;
use Database\Seeders\Blocks\PVEM;
use Illuminate\Database\Seeder;

class BlocksSeeder extends Seeder
{
    public function run(): void
    {

        //        $blocks = [
        //            [
        //                'municipality_id' => 1,
        //                'entity_id' => 12,
        //                'votes_obtained' => '1,819',
        //                'valid_vote_issued' => '14,759',
        //                'rentability' => 12.32],
        //        ];


        $this->call(MC::class);
        $this->call(MorenaSeeder::class);
        $this->call(PAN::class);
        $this->call(PRI::class);
        $this->call(PT::class);
        $this->call(PVEM::class);
        $this->call(PES::class);

    }
}
