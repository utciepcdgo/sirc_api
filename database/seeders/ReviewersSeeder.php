<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\ReviewerRole;
use App\Models\Reviewer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewersSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name' => 'REVGP01', 'username' => 'REVGP01', 'email' => 'revgp01@iepcdurango.mx', 'password' => bcrypt('p4w9t6')],
            ['name' => 'REVGP02', 'username' => 'REVGP02', 'email' => 'revgp02@iepcdurango.mx', 'password' => bcrypt('c5x6b6')],
            ['name' => 'REVGP03', 'username' => 'REVGP03', 'email' => 'revgp03@iepcdurango.mx', 'password' => bcrypt('yzqnv8')],
            ['name' => 'REVGP04', 'username' => 'REVGP04', 'email' => 'revgp04@iepcdurango.mx', 'password' => bcrypt('fepsw5')],
            ['name' => 'REVGP05', 'username' => 'REVGP05', 'email' => 'revgp05@iepcdurango.mx', 'password' => bcrypt('qth7h2')],
            ['name' => 'REVGP06', 'username' => 'REVGP06', 'email' => 'revgp06@iepcdurango.mx', 'password' => bcrypt('jtrde3')],

            ['name' => 'SUPERVISOR', 'username' => 'SUPERV01', 'email' => 'superv01@iepcdurango.mx', 'password' => bcrypt('nkv98q')],
            ['name' => 'SUPERVISOR', 'username' => 'SUPERV02', 'email' => 'superv02@iepcdurango.mx', 'password' => bcrypt('ua3k75')],
            ['name' => 'SUPERVISOR', 'username' => 'SUPERV03', 'email' => 'superv03@iepcdurango.mx', 'password' => bcrypt('fn8vch')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        $reviewers = [
            ['user_id' => 22, 'role' => ReviewerRole::REVIEWER->value], // REVGP01 - ID 1
            ['user_id' => 23, 'role' => ReviewerRole::REVIEWER->value], // REVGP02 - ID 2
            ['user_id' => 24, 'role' => ReviewerRole::REVIEWER->value], // REVGP03 - ID 3
            ['user_id' => 25, 'role' => ReviewerRole::REVIEWER->value], // REVGP04 - ID 4
            ['user_id' => 26, 'role' => ReviewerRole::REVIEWER->value], // REVGP05 - ID 5
            ['user_id' => 27, 'role' => ReviewerRole::REVIEWER->value], // REVGP06 - ID 6
            ['user_id' => 28, 'role' => ReviewerRole::SUPERVISOR->value], // SUPERV01
            ['user_id' => 29, 'role' => ReviewerRole::SUPERVISOR->value], // SUPERV02
            ['user_id' => 30, 'role' => ReviewerRole::SUPERVISOR->value], // SUPERV03

        ];

        foreach ($reviewers as $reviewer) {
            Reviewer::create($reviewer);
        }

        $entity_reviewers = [
            ['reviewer_id' => 1, 'entity_id' => 4], // PT- PVEM - MORENA
            ['reviewer_id' => 1, 'entity_id' => 5], // PT- PVEM - MORENA
            ['reviewer_id' => 1, 'entity_id' => 7], // PT- PVEM - MORENA
            ['reviewer_id' => 2, 'entity_id' => 2], // PAN - PRI
            ['reviewer_id' => 2, 'entity_id' => 3], // PAN - PRI
            ['reviewer_id' => 2, 'entity_id' => 3], // PAN - PRI
            ['reviewer_id' => 3, 'entity_id' => 6], // MC
            ['reviewer_id' => 4, 'entity_id' => 8], // PESD
            ['reviewer_id' => 5, 'entity_id' => 9], // PV
            ['reviewer_id' => 6, 'entity_id' => 10], // PV
        ];

        foreach ($entity_reviewers as $entity_reviewer) {
            DB::table('entity_reviewers')->insert($entity_reviewer);
        }
    }
}
