<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Coalition;
use App\Models\District;
use App\Models\Entity;
use App\Models\Institute;
use App\Models\Municipality;
use App\Models\Party;
use App\Models\Registrations\Gender;
use App\Models\Registrations\Position;
use App\Models\Registrations\Postulation;
use App\Models\Registrations\Sex;
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

        $parties = [
            ['name' => 'Partido Acción Nacional', 'acronym' => 'PAN', 'logo' => 'pan.png'],
            ['name' => 'Partido Revolucionario Institucional', 'acronym' => 'PRI', 'logo' => 'pri.png'],
            ['name' => 'Partido Verde Ecologista de México', 'acronym' => 'PVEM', 'logo' => 'pvem.png'],
            ['name' => 'Partido del Trabajo', 'acronym' => 'PT', 'logo' => 'pt.png'],
            ['name' => 'Movimiento Ciudadano', 'acronym' => 'MC', 'logo' => 'mc.png'],
            ['name' => 'Morena', 'acronym' => 'MORENA', 'logo' => 'morena.png'],
            ['name' => 'Partido Encuentro Solidario', 'acronym' => 'PES', 'logo' => 'pes.png'],
            ['name' => 'Partido Villista', 'acronym' => 'PV', 'logo' => 'pv.png'],
            ['name' => 'Partido Estatal Renovación', 'acronym' => 'RENOVACIÓN', 'logo' => 'renovacion.png'],
        ];

        foreach ($parties as $party) {
            Party::create($party);
        }

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
            ['id' => 1, 'name' => 'Canatlán', 'abbreviation' => 'CAN', 'shield' => 'https:/aws...'],
            ['id' => 2, 'name' => 'Canelas', 'abbreviation' => 'CNS', 'shield' => 'https:/aws...'],
            ['id' => 3, 'name' => 'Coneto de Comonfort', 'abbreviation' => 'COC', 'shield' => 'https:/aws...'],
            ['id' => 4, 'name' => 'Cuencamé', 'abbreviation' => 'CME', 'shield' => 'https:/aws...'],
            ['id' => 5, 'name' => 'Durango', 'abbreviation' => 'DGO', 'shield' => 'https:/aws...'],
            ['id' => 6, 'name' => 'General Simón Bolívar', 'abbreviation' => 'SIM', 'shield' => 'https:/aws...'],
            ['id' => 7, 'name' => 'Gómez Palacio', 'abbreviation' => 'GZP', 'shield' => 'https:/aws...'],
            ['id' => 8, 'name' => 'Guadalupe Victoria', 'abbreviation' => 'GVC', 'shield' => 'https:/aws...'],
            ['id' => 9, 'name' => 'Guanaceví', 'abbreviation' => 'GVI', 'shield' => 'https:/aws...'],
            ['id' => 10, 'name' => 'Hidalgo', 'abbreviation' => 'HGO', 'shield' => 'https:/aws...'],
            ['id' => 11, 'name' => 'Indé', 'abbreviation' => 'IND', 'shield' => 'https:/aws...'],
            ['id' => 12, 'name' => 'Lerdo', 'abbreviation' => 'LDO', 'shield' => 'https:/aws...'],
            ['id' => 13, 'name' => 'Mapimí', 'abbreviation' => 'MPI', 'shield' => 'https:/aws...'],
            ['id' => 14, 'name' => 'Mezquital', 'abbreviation' => 'MEZ', 'shield' => 'https:/aws...'],
            ['id' => 15, 'name' => 'Nazas', 'abbreviation' => 'NAZ', 'shield' => 'https:/aws...'],
            ['id' => 16, 'name' => 'Nombre de Dios', 'abbreviation' => 'NOM', 'shield' => 'https:/aws...'],
            ['id' => 17, 'name' => 'Ocampo', 'abbreviation' => 'OCA', 'shield' => 'https:/aws...'],
            ['id' => 18, 'name' => 'El Oro', 'abbreviation' => 'ORO', 'shield' => 'https:/aws...'],
            ['id' => 19, 'name' => 'Otáez', 'abbreviation' => 'OTA', 'shield' => 'https:/aws...'],
            ['id' => 20, 'name' => 'Pánuco de Coronado', 'abbreviation' => 'PCO', 'shield' => 'https:/aws...'],
            ['id' => 21, 'name' => 'Peñón Blanco', 'abbreviation' => 'PBO', 'shield' => 'https:/aws...'],
            ['id' => 22, 'name' => 'Poanas', 'abbreviation' => 'POA', 'shield' => 'https:/aws...'],
            ['id' => 23, 'name' => 'Pueblo Nuevo', 'abbreviation' => 'PNO', 'shield' => 'https:/aws...'],
            ['id' => 24, 'name' => 'Rodeo', 'abbreviation' => 'RDO', 'shield' => 'https:/aws...'],
            ['id' => 25, 'name' => 'San Bernardo', 'abbreviation' => 'SBO', 'shield' => 'https:/aws...'],
            ['id' => 26, 'name' => 'San Dimas', 'abbreviation' => 'SDI', 'shield' => 'https:/aws...'],
            ['id' => 27, 'name' => 'San Juan de Guadalupe', 'abbreviation' => 'SJG', 'shield' => 'https:/aws...'],
            ['id' => 28, 'name' => 'San Juan del Río', 'abbreviation' => 'SJR', 'shield' => 'https:/aws...'],
            ['id' => 29, 'name' => 'San Luis de Cordero', 'abbreviation' => 'SLC', 'shield' => 'https:/aws...'],
            ['id' => 30, 'name' => 'San Pedro del Gallo', 'abbreviation' => 'SPG', 'shield' => 'https:/aws...'],
            ['id' => 31, 'name' => 'Santa Clara', 'abbreviation' => 'SCL', 'shield' => 'https:/aws...'],
            ['id' => 32, 'name' => 'Santiago Papasquiaro', 'abbreviation' => 'SGO', 'shield' => 'https:/aws...'],
            ['id' => 33, 'name' => 'Súchil', 'abbreviation' => 'SUC', 'shield' => 'https:/aws...'],
            ['id' => 34, 'name' => 'Tamazula', 'abbreviation' => 'TAM', 'shield' => 'https:/aws...'],
            ['id' => 35, 'name' => 'Tepehuanes', 'abbreviation' => 'TEP', 'shield' => 'https:/aws...'],
            ['id' => 36, 'name' => 'Tlahualilo', 'abbreviation' => 'TLO', 'shield' => 'https:/aws...'],
            ['id' => 37, 'name' => 'Topia', 'abbreviation' => 'TOP', 'shield' => 'https:/aws...'],
            ['id' => 38, 'name' => 'Vicente Guerrero', 'abbreviation' => 'VGO', 'shield' => 'https:/aws...'],
            ['id' => 39, 'name' => 'Nuevo Ideal', 'abbreviation' => 'NVO', 'shield' => 'https:/aws...'],
        ];

        foreach ($municipalities as $municipality) {
            Municipality::create($municipality);
        }

        Sex::insert([
            ['name' => 'Mujer'],
            ['name' => 'Hombre'],
        ]);

        Gender::insert([
            ['name' => 'Agénero'],
            ['name' => 'Asexual'],
            ['name' => 'Bisexual'],
            ['name' => 'Género Fluido'],
            ['name' => 'Heterosexual'],
            ['name' => 'Homosexual'],
            ['name' => 'Intersexual'],
            ['name' => 'No Binario'],
            ['name' => 'Pansexual'],
            ['name' => 'Queer'],
            ['name' => 'Transexual'],
            ['name' => 'Transgénero'],
            ['name' => 'Travesti'],
            ['name' => 'Prefiero no especificar'],
        ]);

        $this->call([
            BlocksSeeder::class,
            MunicipalityDistrictSeeder::class,
        ]);

    }
}
