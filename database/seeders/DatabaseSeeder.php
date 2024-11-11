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

        User::factory()->create([
            'name' => 'Alejandro Parra',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        //        $parties = array(
        //            array('name' => 'Partido Acción Nacional', 'acronym' => 'PAN', 'logo' => 'pan.png'),
        //            array('name' => 'Partido Revolucionario Institucional', 'acronym' => 'PRI', 'logo' => 'pri.png'),
        //            array('name' => 'Partido Verde Ecologista de México', 'acronym' => 'PVEM', 'logo' => 'pvem.png'),
        //            array('name' => 'Partido del Trabajo', 'acronym' => 'PT', 'logo' => 'pt.png'),
        //            array('name' => 'Movimiento Ciudadano', 'acronym' => 'MC', 'logo' => 'mc.png'),
        //            array('name' => 'Morena', 'acronym' => 'MORENA', 'logo' => 'morena.png'),
        //            array('name' => 'Partido Encuentro Solidario', 'acronym' => 'PES', 'logo' => 'pes.png'),
        //            array('name' => 'Partido Villista', 'acronym' => 'PV', 'logo' => 'pv.png'),
        //            array('name' => 'Partido Estatal Renovación', 'acronym' => 'RENOVACIÓN', 'logo' => 'renovacion.png'),
        //        );
        //
        //        foreach ($parties as $party) {
        //            Party::create($party);
        //        }

        $coalitions = [
            ['name' => 'Sigamos Haremos Historia en Durango', 'acronym' => 'JHH', 'logo' => 'shhd.png'],
            ['name' => 'Va por Durango', 'acronym' => 'VXM', 'logo' => 'vxd.png'],
        ];

        foreach ($coalitions as $coalition) {
            Coalition::create($coalition);
        }

        Institute::create(['name' => 'Instituto Electoral y de Participación Ciudadana del Estado de Durango', 'acronym' => 'IEPC']);

        $entities = [
            ['entitiable_id' => 1, 'entitiable_type' => 'App\Models\Institute'], // IEPC 1
            ['entitiable_id' => 1, 'entitiable_type' => 'App\Models\Party'], // PAN 2
            ['entitiable_id' => 2, 'entitiable_type' => 'App\Models\Party'], // PRI 3
            ['entitiable_id' => 3, 'entitiable_type' => 'App\Models\Party'], // PVEM 4
            ['entitiable_id' => 4, 'entitiable_type' => 'App\Models\Party'], // PT 5
            ['entitiable_id' => 5, 'entitiable_type' => 'App\Models\Party'], // MC 6
            ['entitiable_id' => 6, 'entitiable_type' => 'App\Models\Party'], // MORENA 7
            ['entitiable_id' => 7, 'entitiable_type' => 'App\Models\Party'], // PES 8
            ['entitiable_id' => 8, 'entitiable_type' => 'App\Models\Party'], // PV 9
            ['entitiable_id' => 9, 'entitiable_type' => 'App\Models\Party'], // RENOVACIÓN 10
            ['entitiable_id' => 1, 'entitiable_type' => 'App\Models\Coalition'], // SHHD 11
            ['entitiable_id' => 2, 'entitiable_type' => 'App\Models\Coalition'], // VXD 12
        ];

        foreach ($entities as $entity) {
            Entity::create($entity);
        }

        $postulations = [
            ['name' => 'Gubernatura'],
            ['name' => 'Diputación'],
            ['name' => 'Presidencia Municipal'],
            ['name' => 'Sindicatura'],
            ['name' => 'Regiduría'],
        ];

        foreach ($postulations as $postulation) {
            Postulation::create($postulation);
        }

        $positions = [
            ['name' => 'Propietaria/o'],
            ['name' => 'Suplencia'],
        ];

        foreach ($positions as $position) {
            Position::create($position);
        }

        $districts = [
            ['name' => 'Distrito 01', 'roman_number' => 'I', 'arabic_number' => 1],
            ['name' => 'Distrito 02', 'roman_number' => 'II', 'arabic_number' => 2],
            ['name' => 'Distrito 03', 'roman_number' => 'III', 'arabic_number' => 3],
            ['name' => 'Distrito 04', 'roman_number' => 'IV', 'arabic_number' => 4],
            ['name' => 'Distrito 05', 'roman_number' => 'V', 'arabic_number' => 5],
            ['name' => 'Distrito 06', 'roman_number' => 'VI', 'arabic_number' => 6],
            ['name' => 'Distrito 07', 'roman_number' => 'VII', 'arabic_number' => 7],
            ['name' => 'Distrito 08', 'roman_number' => 'VIII', 'arabic_number' => 8],
            ['name' => 'Distrito 09', 'roman_number' => 'IX', 'arabic_number' => 9],
            ['name' => 'Distrito 10', 'roman_number' => 'X', 'arabic_number' => 10],
            ['name' => 'Distrito 11', 'roman_number' => 'XI', 'arabic_number' => 11],
            ['name' => 'Distrito 12', 'roman_number' => 'XII', 'arabic_number' => 12],
            ['name' => 'Distrito 13', 'roman_number' => 'XIII', 'arabic_number' => 13],
            ['name' => 'Distrito 14', 'roman_number' => 'XIV', 'arabic_number' => 14],
            ['name' => 'Distrito 15', 'roman_number' => 'XV', 'arabic_number' => 15],
        ];

        foreach ($districts as $district) {
            District::create($district);
        }

        $municipalities = [
            ['name' => 'Canatlán', 'abbreviation' => 'CAN'],
            ['name' => 'Canelas', 'abbreviation' => 'CNS'],
            ['name' => 'Coneto de Comonfort', 'abbreviation' => 'COC'],
            ['name' => 'Cuencamé', 'abbreviation' => 'CME'],
            ['name' => 'Durango', 'abbreviation' => 'DGO'],
            ['name' => 'General Simón Bolívar', 'abbreviation' => 'SIM'],
            ['name' => 'Gómez Palacio', 'abbreviation' => 'GZP'],
            ['name' => 'Guadalupe Victoria', 'abbreviation' => 'GVC'],
            ['name' => 'Guanaceví', 'abbreviation' => 'GVI'],
            ['name' => 'Hidalgo', 'abbreviation' => 'HGO'],
            ['name' => 'Indé', 'abbreviation' => 'IND'],
            ['name' => 'Lerdo', 'abbreviation' => 'LDO'],
            ['name' => 'Mapimí', 'abbreviation' => 'MPI'],
            ['name' => 'Mezquital', 'abbreviation' => 'MEZ'],
            ['name' => 'Nazas', 'abbreviation' => 'NAZ'],
            ['name' => 'Nombre de Dios', 'abbreviation' => 'NOM'],
            ['name' => 'Ocampo', 'abbreviation' => 'OCA'],
            ['name' => 'El Oro', 'abbreviation' => 'ORO'],
            ['name' => 'Otáez', 'abbreviation' => 'OTA'],
            ['name' => 'Pánuco de Coronado', 'abbreviation' => 'PCO'],
            ['name' => 'Peñón Blanco', 'abbreviation' => 'PBO'],
            ['name' => 'Poanas', 'abbreviation' => 'POA'],
            ['name' => 'Pueblo Nuevo', 'abbreviation' => 'PNO'],
            ['name' => 'Rodeo', 'abbreviation' => 'RDO'],
            ['name' => 'San Bernardo', 'abbreviation' => 'SBO'],
            ['name' => 'San Dimas', 'abbreviation' => 'SDI'],
            ['name' => 'San Juan de Guadalupe', 'abbreviation' => 'SJG'],
            ['name' => 'San Juan del Río', 'abbreviation' => 'SJR'],
            ['name' => 'San Luis de Cordero', 'abbreviation' => 'SLC'],
            ['name' => 'San Pedro del Gallo', 'abbreviation' => 'SPG'],
            ['name' => 'Santa Clara', 'abbreviation' => 'SCL'],
            ['name' => 'Santiago Papasquiaro', 'abbreviation' => 'SGO'],
            ['name' => 'Súchil', 'abbreviation' => 'SUC'],
            ['name' => 'Tamazula', 'abbreviation' => 'TAM'],
            ['name' => 'Tepehuanes', 'abbreviation' => 'TEP'],
            ['name' => 'Tlahualilo', 'abbreviation' => 'TLO'],
            ['name' => 'Topia', 'abbreviation' => 'TOP'],
            ['name' => 'Vicente Guerrero', 'abbreviation' => 'VGO'],
            ['name' => 'Nuevo Ideal', 'abbreviation' => 'NVO'],
        ];

        foreach ($municipalities as $municipality) {
            Municipality::create($municipality);
        }
    }
}
