<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Coalition;
use App\Models\District;
use App\Models\Entity;
use App\Models\Institute;
use App\Models\Municipality;
use App\Models\Party;
use App\Models\Registrations\Compensatory;
use App\Models\Registrations\Gender;
use App\Models\Registrations\Position;
use App\Models\Registrations\Postulation;
use App\Models\Registrations\Sex;
use App\Models\User;
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
            ['name' => 'Partido Acción Nacional', 'acronym' => 'PAN', 'logo' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/emblemas/PAN.svg', 'coalition_id' => null],
            ['name' => 'Partido Revolucionario Institucional', 'acronym' => 'PRI', 'logo' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/emblemas/PRI.svg', 'coalition_id' => null],
            ['name' => 'Partido Verde Ecologista de México', 'acronym' => 'PVEM', 'logo' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/emblemas/PVEM.svg', 'coalition_id' => 1],
            ['name' => 'Partido del Trabajo', 'acronym' => 'PT', 'logo' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/emblemas/PT.svg', 'coalition_id' => 1],
            ['name' => 'Movimiento Ciudadano', 'acronym' => 'MC', 'logo' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/emblemas/MC.svg', 'coalition_id' => null],
            ['name' => 'Morena', 'acronym' => 'MORENA', 'logo' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/emblemas/MORENA.svg', 'coalition_id' => 1],
            ['name' => 'Partido Encuentro Solidario', 'acronym' => 'PES', 'logo' => 'pes.png', 'coalition_id' => null],
            ['name' => 'Partido Villista', 'acronym' => 'PV', 'logo' => 'pv.png', 'coalition_id' => null],
            ['name' => 'Partido Estatal Renovación', 'acronym' => 'RENOVACIÓN', 'logo' => 'renovacion.png', 'coalition_id' => null],
        ];

        foreach ($parties as $party) {
            Party::create($party);
        }

        $coalitions = [
            ['name' => 'Sigamos Haciendo Historia en Durango', 'acronym' => 'SHHD', 'logo' => 'shhd.png'],
            ['name' => 'Va por Durango', 'acronym' => 'VXD', 'logo' => 'vxd.png'],
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
        ];

        foreach ($entities as $entity) {
            Entity::create($entity);
        }

        $postulations = [
            ['name' => 'Gubernatura', 'active' => false],
            ['name' => 'Diputación', 'active' => false],
            ['name' => 'Presidencia Municipal', 'active' => true],
            ['name' => 'Sindicatura', 'active' => true],
            ['name' => 'Regiduría', 'active' => true],
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
            ['id' => 1, 'name' => 'Canatlán', 'abbreviation' => 'CAN', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/CAN.png', 'councils' => 9],
            ['id' => 2, 'name' => 'Canelas', 'abbreviation' => 'CNS', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/CNS.png', 'councils' => 7],
            ['id' => 3, 'name' => 'Coneto de Comonfort', 'abbreviation' => 'COC', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/COC.png', 'councils' => 7],
            ['id' => 4, 'name' => 'Cuencamé', 'abbreviation' => 'CME', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/CME.png', 'councils' => 9],
            ['id' => 5, 'name' => 'Durango', 'abbreviation' => 'DGO', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/DGO.png', 'councils' => 17],
            ['id' => 6, 'name' => 'General Simón Bolívar', 'abbreviation' => 'SIM', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/SIM.png', 'councils' => 1],
            ['id' => 7, 'name' => 'Gómez Palacio', 'abbreviation' => 'GZP', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/GZP.png', 'councils' => 15],
            ['id' => 8, 'name' => 'Guadalupe Victoria', 'abbreviation' => 'GVC', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/GVC.png', 'councils' => 9],
            ['id' => 9, 'name' => 'Guanaceví', 'abbreviation' => 'GVI', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/GVI.png', 'councils' => 7],
            ['id' => 10, 'name' => 'Hidalgo', 'abbreviation' => 'HGO', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/HGO.png', 'councils' => 7],
            ['id' => 11, 'name' => 'Indé', 'abbreviation' => 'IND', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/IND.png', 'councils' => 7],
            ['id' => 12, 'name' => 'Lerdo', 'abbreviation' => 'LDO', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/LDO.png', 'councils' => 15],
            ['id' => 13, 'name' => 'Mapimí', 'abbreviation' => 'MPI', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/MPI.png', 'councils' => 9],
            ['id' => 14, 'name' => 'Mezquital', 'abbreviation' => 'MEZ', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/MEZ.png', 'councils' => 9],
            ['id' => 15, 'name' => 'Nazas', 'abbreviation' => 'NAZ', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/NAZ.png', 'councils' => 7],
            ['id' => 16, 'name' => 'Nombre de Dios', 'abbreviation' => 'NOM', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/NOM.png', 'councils' => 9],
            ['id' => 17, 'name' => 'Ocampo', 'abbreviation' => 'OCA', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/OCA.png', 'councils' => 7],
            ['id' => 18, 'name' => 'El Oro', 'abbreviation' => 'ORO', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/ORO.png', 'councils' => 7],
            ['id' => 19, 'name' => 'Otáez', 'abbreviation' => 'OTA', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/OTA.png', 'councils' => 7],
            ['id' => 20, 'name' => 'Pánuco de Coronado', 'abbreviation' => 'PCO', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/PCO.png', 'councils' => 7],
            ['id' => 21, 'name' => 'Peñón Blanco', 'abbreviation' => 'PBO', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/PBO.png', 'councils' => 7],
            ['id' => 22, 'name' => 'Poanas', 'abbreviation' => 'POA', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/POA.png', 'councils' => 9],
            ['id' => 23, 'name' => 'Pueblo Nuevo', 'abbreviation' => 'PNO', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/PNO.png', 'councils' => 9],
            ['id' => 24, 'name' => 'Rodeo', 'abbreviation' => 'RDO', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/RDO.png', 'councils' => 7],
            ['id' => 25, 'name' => 'San Bernardo', 'abbreviation' => 'SBO', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/SBO.png', 'councils' => 7],
            ['id' => 26, 'name' => 'San Dimas', 'abbreviation' => 'SDI', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/SDI.png', 'councils' => 9],
            ['id' => 27, 'name' => 'San Juan de Guadalupe', 'abbreviation' => 'SJG', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/SJG.png', 'councils' => 7],
            ['id' => 28, 'name' => 'San Juan del Río', 'abbreviation' => 'SJR', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/SJR.png', 'councils' => 7],
            ['id' => 29, 'name' => 'San Luis de Cordero', 'abbreviation' => 'SLC', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/SLC.png', 'councils' => 7],
            ['id' => 30, 'name' => 'San Pedro del Gallo', 'abbreviation' => 'SPG', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/SPG.png', 'councils' => 7],
            ['id' => 31, 'name' => 'Santa Clara', 'abbreviation' => 'SCL', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/SCL.png', 'councils' => 7],
            ['id' => 32, 'name' => 'Santiago Papasquiaro', 'abbreviation' => 'SGO', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/SGO.png', 'councils' => 9],
            ['id' => 33, 'name' => 'Súchil', 'abbreviation' => 'SUC', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/SUC.png', 'councils' => 7],
            ['id' => 34, 'name' => 'Tamazula', 'abbreviation' => 'TAM', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/TAM.png', 'councils' => 9],
            ['id' => 35, 'name' => 'Tepehuanes', 'abbreviation' => 'TEP', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/TEP.png', 'councils' => 7],
            ['id' => 36, 'name' => 'Tlahualilo', 'abbreviation' => 'TLO', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/TLO.png', 'councils' => 9],
            ['id' => 37, 'name' => 'Topia', 'abbreviation' => 'TOP', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/TOP.png', 'councils' => 7],
            ['id' => 38, 'name' => 'Vicente Guerrero', 'abbreviation' => 'VGO', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/VGO.png', 'councils' => 9],
            ['id' => 39, 'name' => 'Nuevo Ideal', 'abbreviation' => 'NVO', 'shield' => 'https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/escudos/NVO.png', 'councils' => 9],
        ];

        foreach ($municipalities as $municipality) {
            Municipality::create($municipality);
        }

        Gender::insert([
            ['name' => 'Agénero'],
            ['name' => 'Asexual'],
            ['name' => 'Bisexual'],
            ['name' => 'Género Fluido'],
            ['name' => 'Heterosexual'],
            ['name' => 'Homosexual'],
            ['name' => 'Intersexual'],
            ['name' => 'Pansexual'],
            ['name' => 'Queer'],
            ['name' => 'Transexual'],
            ['name' => 'Transgénero'],
            ['name' => 'Travesti'],
            ['name' => 'Prefiero no decirlo'],
        ]);

        Sex::insert([
            ['name' => 'Mujer'],
            ['name' => 'Hombre'],
            ['name' => 'No Binario'],
        ]);

        Compensatory::insert([
            ['name' => 'Jóven'],
            ['name' => 'Discapacidad permanente'],
            ['name' => 'Diversidad sexual'],
            ['name' => 'Persona adulta mayor'],
            ['name' => 'Migrante'],
            ['name' => 'Indígena'],
            ['name' => 'Ninguna'],
        ]);

        $this->call([
            BlocksSeeder::class,
            AssignmentsSeeder::class, // Siglados
            MunicipalityDistrictSeeder::class,
            CountriesSeeder::class,
            UsersSeeder::class,
        ]);

        $entity_user = [
            ['entity_id' => 2, 'user_id' => 2],
            ['entity_id' => 3, 'user_id' => 3],
            ['entity_id' => 4, 'user_id' => 4],
            ['entity_id' => 5, 'user_id' => 5],
            ['entity_id' => 6, 'user_id' => 6],
            ['entity_id' => 7, 'user_id' => 7],
            ['entity_id' => 8, 'user_id' => 8],
            ['entity_id' => 9, 'user_id' => 9],
            ['entity_id' => 10, 'user_id' => 10],
            ['entity_id' => 11, 'user_id' => 4],
            ['entity_id' => 11, 'user_id' => 5],
            ['entity_id' => 11, 'user_id' => 7],
        ];

        foreach ($entity_user as $entity) {
            User::find($entity['user_id'])->entities()->attach($entity['entity_id']);
        }

    }
}
