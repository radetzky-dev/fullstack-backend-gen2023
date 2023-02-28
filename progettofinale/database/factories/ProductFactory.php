<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(12),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 5, 350),
            'quantity' => $this->faker->randomDigit(),
            'image' => $this->faker->imageUrl(360, 300, 'animals', true, 'dogs'),
            'category_id' => 5
          // 'category_id' => \App\Models\Category::factory()->create()
        ];
    }
}
