<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Municipality;
use App\Models\Party;
use App\Models\Position;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create(array(
            'name' => 'Test User',
            'email' => 'test@example.com',
        ));

        Party::factory()->create(array(
            array('name' => 'Partido', 'acronym' => 'PAN', 'logo' => 'pan.png'),
            array('name' => 'Partido Revolucionario Institucional', 'acronym' => 'PRI', 'logo' => 'pri.png'),
            array('name' => 'Partido de la Revolución Democrática', 'acronym' => 'PRD', 'logo' => 'prd.png'),
            array('name' => 'Partido Verde Ecologista de México', 'acronym' => 'PVEM', 'logo' => 'pvem.png'),
            array('name' => 'Partido del Trabajo', 'acronym' => 'PT', 'logo' => 'pt.png'),
            array('name' => 'Movimiento Ciudadano', 'acronym' => 'MC', 'logo' => 'mc.png'),
            array('name' => 'Morena', 'acronym' => 'MORENA', 'logo' => 'morena.png'),
            array('name' => 'Partido Encuentro Solidario', 'acronym' => 'PES', 'logo' => 'pes.png'),
        ));

        Position::factory()->create(array(
            array('name' => 'Presidente Municipal'),
            array('name' => 'Síndico'),
            array('name' => 'Regidor'),
        ));

        Municipality::factory()->create(array(
            array('Canatlán', 'shield' => '', 'abbreviation' => ''),
            array('Canelas', 'shield' => '', 'abbreviation' => ''),
            array('Coneto de Comonfort', 'shield' => '', 'abbreviation' => ''),
            array('Cuencamé', 'shield' => '', 'abbreviation' => ''),
            array('Durango ', 'shield' => '', 'abbreviation' => ''),
            array('General Simón Bolívar', 'shield' => '', 'abbreviation' => ''),
            array('Gómez Palacio ', 'shield' => '', 'abbreviation' => ''),
            array('Guadalupe Victoria', 'shield' => '', 'abbreviation' => ''),
            array('Guanaceví', 'shield' => '', 'abbreviation' => ''),
            array('Hidalgo', 'shield' => '', 'abbreviation' => ''),
            array('Indé', 'shield' => '', 'abbreviation' => ''),
            array('Lerdo', 'shield' => '', 'abbreviation' => ''),
            array('Mapimí', 'shield' => '', 'abbreviation' => ''),
            array('Mezquital', 'shield' => '', 'abbreviation' => ''),
            array('Nazas', 'shield' => '', 'abbreviation' => ''),
            array('Nombre de Dios', 'shield' => '', 'abbreviation' => ''),
            array('Nuevo Ideal', 'shield' => '', 'abbreviation' => ''),
            array('Ocampo', 'shield' => '', 'abbreviation' => ''),
            array('El Oro', 'shield' => '', 'abbreviation' => ''),
            array('Otáez', 'shield' => '', 'abbreviation' => ''),
            array('Pánuco de Coronado', 'shield' => '', 'abbreviation' => ''),
            array('Peñón Blanco', 'shield' => '', 'abbreviation' => ''),
            array('Poanas', 'shield' => '', 'abbreviation' => ''),
            array('Pueblo Nuevo', 'shield' => '', 'abbreviation' => ''),
            array('Rodeo', 'shield' => '', 'abbreviation' => ''),
            array('San Bernardo', 'shield' => '', 'abbreviation' => ''),
            array('San Dimas', 'shield' => '', 'abbreviation' => ''),
            array('San Juan de Guadalupe', 'shield' => '', 'abbreviation' => ''),
            array('San Juan del Río', 'shield' => '', 'abbreviation' => ''),
            array('San Luis del Cordero', 'shield' => '', 'abbreviation' => ''),
            array('San Pedro del Gallo', 'shield' => '', 'abbreviation' => ''),
            array('Santa Clara', 'shield' => '', 'abbreviation' => ''),
            array('Santiago Papasquiaro', 'shield' => '', 'abbreviation' => ''),
            array('Súchil', 'shield' => '', 'abbreviation' => ''),
            array('Tamazula', 'shield' => '', 'abbreviation' => ''),
            array('Tepehuanes', 'shield' => '', 'abbreviation' => ''),
            array('Tlahualilo', 'shield' => '', 'abbreviation' => ''),
            array('Topia', 'shield' => '', 'abbreviation' => ''),
            array('Vicente Guerrero', 'shield' => '', 'abbreviation' => '')
        ));
    }
}
