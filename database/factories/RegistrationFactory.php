<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RegistrationFactory extends Factory
{
    protected $model = Registration::class;

    public function definition()
    {
        return array(
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->name(),
            'first_name' => $this->faker->firstName(),
            'second_name' => $this->faker->name(),
            'placedate_birth' => $this->faker->words(),
            'address_length_residence' => $this->faker->address(),
            'ocupation' => $this->faker->word(),
            'voter_key' => $this->faker->word(),
            'curp' => $this->faker->word(),
        );
    }
}
