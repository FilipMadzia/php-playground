<?php

namespace Database\Seeders;

use App\Models\Director;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Director::factory()
            ->count(10)
            ->hasMovies(15)
            ->create();
        
        Director::factory()
            ->count(5)
            ->hasMovies(20)
            ->create();
    }
}
