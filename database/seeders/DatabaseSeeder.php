<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Coalition;
use App\Models\District;
use App\Models\Entity;
use App\Models\Institute;
use App\Models\Municipality;
use App\Models\Party;
use App\Models\Registrations\Position;
use App\Models\Registrations\Postulation;
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
            'name' => 'Alejandro Parra',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ));

        $parties = array(
            array('name' => 'Partido Acción Nacional', 'acronym' => 'PAN', 'logo' => 'pan.png'),
            array('name' => 'Partido Revolucionario Institucional', 'acronym' => 'PRI', 'logo' => 'pri.png'),
            array('name' => 'Partido Verde Ecologista de México', 'acronym' => 'PVEM', 'logo' => 'pvem.png'),
            array('name' => 'Partido del Trabajo', 'acronym' => 'PT', 'logo' => 'pt.png'),
            array('name' => 'Movimiento Ciudadano', 'acronym' => 'MC', 'logo' => 'mc.png'),
            array('name' => 'Morena', 'acronym' => 'MORENA', 'logo' => 'morena.png'),
            array('name' => 'Partido Encuentro Solidario', 'acronym' => 'PES', 'logo' => 'pes.png'),
            array('name' => 'Partido Villista', 'acronym' => 'PV', 'logo' => 'pv.png'),
            array('name' => 'Partido Estatal Renovación', 'acronym' => 'RENOVACIÓN', 'logo' => 'renovacion.png'),
        );

        foreach ($parties as $party) {
            Party::create($party);
        }

        $coalitions = array(
            array('name' => 'Sigamos Haremos Historia en Durango', 'acronym' => 'JHH', 'logo' => 'shhd.png'),
            array('name' => 'Va por Durango', 'acronym' => 'VXM', 'logo' => 'vxd.png'),
        );

        foreach ($coalitions as $coalition) {
            Coalition::create($coalition);
        }

        Institute::create(array('name' => 'Instituto Electoral y de Participación Ciudadana del Estado de Durango', 'acronym' => 'IEPC'));

        $entities = array(
            array('entitiable_id' => 1, 'entitiable_type' => 'App\Models\Institute'), // IEPC
            array('entitiable_id' => 1, 'entitiable_type' => 'App\Models\Party'), // PAN
            array('entitiable_id' => 2, 'entitiable_type' => 'App\Models\Party'), // PRI
            array('entitiable_id' => 3, 'entitiable_type' => 'App\Models\Party'), // PVEM
            array('entitiable_id' => 4, 'entitiable_type' => 'App\Models\Party'), // PT
            array('entitiable_id' => 5, 'entitiable_type' => 'App\Models\Party'), // MC
            array('entitiable_id' => 6, 'entitiable_type' => 'App\Models\Party'), // MORENA
            array('entitiable_id' => 7, 'entitiable_type' => 'App\Models\Party'), // PES
            array('entitiable_id' => 8, 'entitiable_type' => 'App\Models\Party'), // PV
            array('entitiable_id' => 9, 'entitiable_type' => 'App\Models\Party'), // RENOVACIÓN
            array('entitiable_id' => 1, 'entitiable_type' => 'App\Models\Coalition'), // SHHD
            array('entitiable_id' => 2, 'entitiable_type' => 'App\Models\Coalition'), // VXD
        );

        foreach ($entities as $entity) {
            Entity::create($entity);
        }

        $postulations = array(
            array('name' => 'Gubernatura'),
            array('name' => 'Diputación'),
            array('name' => 'Presidencia Municipal'),
            array('name' => 'Sindicatura'),
            array('name' => 'Regiduría'),
        );

        foreach ($postulations as $postulation) {
            Postulation::create($postulation);
        }

        $positions = array(
            array('name' => 'Propietaria/o'),
            array('name' => 'Suplencia'),
        );

        foreach ($positions as $position) {
            Position::create($position);
        }

        $districts = array(
            array('name' => 'Distrito 01', 'roman_number' => 'I', 'arabic_number' => 1),
            array('name' => 'Distrito 02', 'roman_number' => 'II', 'arabic_number' => 2),
            array('name' => 'Distrito 03', 'roman_number' => 'III', 'arabic_number' => 3),
            array('name' => 'Distrito 04', 'roman_number' => 'IV', 'arabic_number' => 4),
            array('name' => 'Distrito 05', 'roman_number' => 'V', 'arabic_number' => 5),
            array('name' => 'Distrito 06', 'roman_number' => 'VI', 'arabic_number' => 6),
            array('name' => 'Distrito 07', 'roman_number' => 'VII', 'arabic_number' => 7),
            array('name' => 'Distrito 08', 'roman_number' => 'VIII', 'arabic_number' => 8),
            array('name' => 'Distrito 09', 'roman_number' => 'IX', 'arabic_number' => 9),
            array('name' => 'Distrito 10', 'roman_number' => 'X', 'arabic_number' => 10),
            array('name' => 'Distrito 11', 'roman_number' => 'XI', 'arabic_number' => 11),
            array('name' => 'Distrito 12', 'roman_number' => 'XII', 'arabic_number' => 12),
            array('name' => 'Distrito 13', 'roman_number' => 'XIII', 'arabic_number' => 13),
            array('name' => 'Distrito 14', 'roman_number' => 'XIV', 'arabic_number' => 14),
            array('name' => 'Distrito 15', 'roman_number' => 'XV', 'arabic_number' => 15),
        );

        foreach ($districts as $district) {
            District::create($district);
        }

        $municipalities = array(
            array('name' => 'Canatlán', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Canelas', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Coneto de Comonfort', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Cuencamé', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Durango ', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'General Simón Bolívar', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Gómez Palacio ', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Guadalupe Victoria', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Guanaceví', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Hidalgo', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Indé', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Lerdo', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Mapimí', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Mezquital', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Nazas', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Nombre de Dios', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Nuevo Ideal', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Ocampo', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'El Oro', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Otáez', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Pánuco de Coronado', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Peñón Blanco', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Poanas', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Pueblo Nuevo', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Rodeo', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'San Bernardo', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'San Dimas', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'San Juan de Guadalupe', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'San Juan del Río', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'San Luis del Cordero', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'San Pedro del Gallo', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Santa Clara', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Santiago Papasquiaro', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Súchil', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Tamazula', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Tepehuanes', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Tlahualilo', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Topia', 'shield' => '', 'abbreviation' => ''),
            array('name' => 'Vicente Guerrero', 'shield' => '', 'abbreviation' => ''),
        );

        foreach ($municipalities as $municipality) {
            Municipality::create($municipality);
        }
    }
}
