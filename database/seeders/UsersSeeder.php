<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'IEPCPAN',
                'username' => 'IEPCPAN01',
                'email' => 'adla_karam_a@outook.com',
                'password' => bcrypt('3fteejx'),
            ],
            [
                'name' => 'IEPCPAN',
                'username' => 'IEPCPAN02',
                'email' => 'iepcpan02@outook.com',
                'password' => bcrypt('0hnb5z'),
            ],
            [
                'name' => 'IEPCPRI',
                'username' => 'IEPCPRI01',
                'email' => 'miiguel.90@outlook.com',
                'password' => bcrypt('7wsncn'),
            ],
            [
                'name' => 'IEPCPRI',
                'username' => 'IEPCPRI02',
                'email' => 'iepcpri02@outlook.com',
                'password' => bcrypt('jg33az'),
            ],
            [
                'name' => 'IEPCPVEM',
                'username' => 'IEPCPVEM01',
                'email' => 'francisco_solvall@hotmail.com',
                'password' => bcrypt('9spa32'),
            ],
            [
                'name' => 'IEPCPVEM',
                'username' => 'IEPCPVEM02',
                'email' => 'iepcpvem02@hotmail.com',
                'password' => bcrypt('bni5k8'),
            ],
            [
                'name' => 'IEPCPT',
                'username' => 'IEPCPT01',
                'email' => 'bertin_am@hotmail.com',
                'password' => bcrypt('vgr8juj'),
            ],
            [
                'name' => 'IEPCPT',
                'username' => 'IEPCPT02',
                'email' => 'iepcpt02@hotmail.com',
                'password' => bcrypt('n1i800'),
            ],
            [
                'name' => 'IEPCMC',
                'username' => 'IEPCMC01',
                'email' => 'denisgalindo004@ail.com',
                'password' => bcrypt('krg85a'),
            ],
            [
                'name' => 'IEPCMC',
                'username' => 'IEPCMC02',
                'email' => 'iepcmc02@ail.com',
                'password' => bcrypt('dfsgf4'),
            ],
            [
                'name' => 'IEPCMORENA',
                'username' => 'IEPCMORENA01',
                'email' => 'registrosirc.morena@gmail.com',
                'password' => bcrypt('5edpf4'),
            ],
            [
                'name' => 'IEPCMORENA',
                'username' => 'IEPCMORENA02',
                'email' => 'iepcmorena02@gmail.com',
                'password' => bcrypt('oli4j2'),
            ],
            [
                'name' => 'IEPCRENOVACION',
                'username' => 'IEPCRENOVACION01',
                'email' => 'fiscalizacion_pesd@gmx.com',
                'password' => bcrypt('6gdf84'),
            ],
            [
                'name' => 'IEPCRENOVACION',
                'username' => 'IEPCRENOVACION02',
                'email' => 'iepcrenovacion02@gmx.com',
                'password' => bcrypt('iz874k'),
            ],
            [
                'name' => 'IEPCPES',
                'username' => 'IEPCPES01',
                'email' => 'dere.gomez22@gmail.com',
                'password' => bcrypt('ps515c'),
            ],
            [
                'name' => 'IEPCPES',
                'username' => 'IEPCPES02',
                'email' => 'iepcpes02@gmail.com',
                'password' => bcrypt('bvn5x7'),
            ],
            [
                'name' => 'IEPCPV',
                'username' => 'IEPCPV01',
                'email' => 'jhovanagalindo545@gmail.com',
                'password' => bcrypt('384lk1'),
            ],
            [
                'name' => 'IEPCPV',
                'username' => 'IEPCPV02',
                'email' => 'iepcpv02@gmail.com',
                'password' => bcrypt('84mrn2'),
            ],
            [
                'name' => 'IEPCUyG',
                'username' => 'IEPCUyG01',
                'email' => 'iepcuyg01@gmail.com',
                'password' => bcrypt('s5d61g'),
            ],
            [
                'name' => 'IEPCUyG',
                'username' => 'IEPCUyG02',
                'email' => 'iepcuyg02@gmail.com',
                'password' => bcrypt('h03jd4'),
            ],
            [
                'name' => 'IEPCUyG',
                'username' => 'IEPCUyG03',
                'email' => 'iepcuyg03@gmail.com',
                'password' => bcrypt('g68hr1'),
            ],
        ];

        foreach ($users as $index => $user) {
            $user = User::create($user);
            // Create API Token
            $user->createToken('api_token')->plainTextToken;
        }
    }
}
