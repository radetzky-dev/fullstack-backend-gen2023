<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Provider\en_AU\Address;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
  
        return [
            'name' => $this->faker->word(),
            'airline' => $this->faker->domainWord(),
            'destination' => $this->faker->city(),
            'departfrom' => $this->faker->city(),
        ];
    }
}
