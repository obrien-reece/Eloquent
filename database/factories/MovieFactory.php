<?php

namespace Database\Factories;

use App\Models\Director;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->text(10),
            'director_id' => Director::factory(),
            'studio' => $this->faker->text(10),
            'description' => collect($this->faker->paragraphs(6))->map(fn($item) => "<p>{$item}</p>")->implode(''),
            'slug' => $this->faker->unique()->slug,
            'domestic_box_office' => $this->faker->numberBetween(100000000, 300000000),
            'international_box_office' => $this->faker->numberBetween(100000000, 300000000),
            'worldwide_box_office' => $this->faker->numberBetween(100000000, 300000000),
//            'image' => $this->faker->image
        ];
    }
}
