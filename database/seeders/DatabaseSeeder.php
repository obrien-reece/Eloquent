<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Actor;
use App\Models\Director;
use App\Models\Movie;
use App\Models\Movies_Actors;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//        $director = Director::factory()->create([
//            'name' => 'Christopher Nolan'
//        ]);


        Movies_Actors::factory(7)->create();

    }
}
