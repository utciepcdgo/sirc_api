<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Coalition;
use App\Models\Entity;
use App\Models\Institute;
use App\Models\Party;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;

class EntityFactory extends Factory
{
    protected $model = Entity::class;

    public function definition(): array
    {
        $applicants = array(
            Institute::class,
            Party::class,
            Coalition::class,
        );

        // @phpstan-ignore-next-line
        $applicant = Arr::random($applicants)::factory()->create();

        return array(
            'entitiable_id' => $applicant->getMorphClass(),
            'entitiable_type' => $applicant->getKey(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
    }
}
