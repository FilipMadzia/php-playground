<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Director::factory()
            ->count(25)
            ->hasMovies(10)
            ->create();

        Director::factory()
            ->count(10)
            ->hasMovies(15)
            ->create();

        Director::factory()
            ->count(5)
            ->hasMovies(5)
            ->create();
    }
}
