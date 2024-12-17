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
            'director_id' => Director::factory(),
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'release_date' => $this->faker->date('Y-m-d', '2020-12-31')
        ];
    }
}
