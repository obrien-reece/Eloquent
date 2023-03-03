<?php

namespace Database\Factories;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class Movies_ActorsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'actor_id' => Actor::factory(),
            'movie_id' => Movie::factory(),
        ];
    }
}
