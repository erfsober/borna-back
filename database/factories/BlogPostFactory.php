<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(6);

        return [
            'title' => $title,
            'slug' => fake()->unique()->slug(),
            'description' => fake()->paragraphs(3, true),
            'writer_name' => fake()->name(),
            'read_duration' => fake()->numberBetween(1, 15),
        ];
    }
}
