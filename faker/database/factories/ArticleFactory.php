<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(),
            'user_id' => \App\Models\User::factory()->create(),
            'slug' => $this->faker->slug(),
            'keywords' => $this->faker->text(),
            'description' => $this->faker->text(),
            'content' => $this->faker->paragraph()
        ];
    }
}