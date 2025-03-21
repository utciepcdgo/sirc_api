<?php

declare(strict_types=1);

namespace Database\Seeders;

use Database\Seeders\Blocks\MC;
use Database\Seeders\Blocks\MorenaSeeder;
use Database\Seeders\Blocks\PAN;
use Database\Seeders\Blocks\PES;
use Database\Seeders\Blocks\PRI;
use Database\Seeders\Blocks\PT;
use Database\Seeders\Blocks\PV;
use Database\Seeders\Blocks\PVEM;
use Database\Seeders\Blocks\REN;
use Database\Seeders\Blocks\UyG;
use Illuminate\Database\Seeder;

class BlocksSeeder extends Seeder
{
    public function run(): void
    {

        $this->call(MC::class);
        $this->call(MorenaSeeder::class);
        $this->call(PAN::class);
        $this->call(PRI::class);
        $this->call(PT::class);
        $this->call(PVEM::class);
        $this->call(PES::class);
        $this->call(REN::class);
        $this->call(PV::class);
        $this->call(UyG::class);

    }
}
