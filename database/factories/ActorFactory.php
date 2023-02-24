<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actor>
 */
class ActorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->name,
            'movie_id' => Movie::factory(),
            'slug' => $this->faker->unique()->slug,
            'age' => $this->faker->numberBetween(30, 56),
            'about' => $this->faker->paragraph
        ];
    }
}
