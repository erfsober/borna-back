<?php

namespace Database\Factories;

use App\Models\Bootcamp;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BootcampItem>
 */
class BootcampItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bootcamp_id' => Bootcamp::factory(),
            'description' => fake()->paragraph(),
        ];
    }
}
