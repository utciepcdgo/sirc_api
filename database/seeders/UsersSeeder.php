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
            // Parties
            [
                'name' => 'C. Germán Eulalio Campos de la Fuente',
                'email' => 'camposdelafuentegerman@gmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => 'Lic. José Manuel Parra Alanís',
                'email' => 'saedgo.pri@gmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => 'Lic. Francisco Solórzano Valles',
                'email' => 'coordinacion.electoralpv@gmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => 'Lic. José Isidro Bertín Arias Medrano',
                'email' => 'bertin_am@hotmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => 'Lic. Denis Galindo Bustamante',
                'email' => 'denisgalindo004@gmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => 'C. Víctor Antonio Ibarra Flores',
                'email' => 'victoribarragarsis@gmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => 'M.D. Roberto Omar Castañeda Rivera',
                'email' => 'castanedarobertoomar@gmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => 'M.D. Jesús José Soto Quiñonez',
                'email' => 'representacionvillista@gmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => 'C. Jhovana Consuelo Galindo Hernández',
                'email' => 'jhovanayesmeralda@hotmail.com',
                'password' => bcrypt('secret'),
            ],
        ];

        foreach ($users as $index => $user) {
            $user = User::create($user);
            // Create API Token
            $user->createToken('api_token')->plainTextToken;
            $user->entities()->attach(($index + 1));
        }
    }
}
