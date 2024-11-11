<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Party;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartyFactory extends Factory
{
    protected $model = Party::class;

    /** @var array|array[] */
    protected array $parties = [
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

    public function definition(): array
    {
        $party = $this->faker->unique()->randomElement($this->parties);

        return [
            'name' => $party['name'],
            'acronym' => $party['acronym'],
            'logo' => $party['logo'],
        ];
    }
}
