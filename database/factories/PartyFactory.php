<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Party;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartyFactory extends Factory
{
    protected $model = Party::class;

    /** @var array|array[] */
    protected array $parties = array(
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


    public function definition(): array
    {
        $party = $this->faker->unique()->randomElement($this->parties);

        return array(
            'name' => $party['name'],
            'acronym' => $party['acronym'],
            'logo' => $party['logo'],
        );
    }
}
