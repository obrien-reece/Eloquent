<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Director;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $director = Director::factory()->create([
            'name' => 'Christopher Nolan'
        ]);

        Movie::factory(30)->create([
            'director_id' => $director,
            'studio' => 'Universal Pictures'
        ]);
    }
}
