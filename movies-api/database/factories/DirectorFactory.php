<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Director>
 */
class DirectorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstNameMale(),
            'last_name' => $this->faker->lastName(),
            'birth_date' => $this->faker->date('Y-m-d', '1999-12-31')
        ];
    }
}
