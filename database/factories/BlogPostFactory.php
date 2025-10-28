<?php

namespace Database\Factories;

use App\Models\BlogPostCategory;
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
        $title = fake('fa_IR')->sentence(6);

        return [
            'title' => $title,
            'slug' => fake()->unique()->slug(),
            'description' => fake('fa_IR')->paragraphs(3, true),
            'summary' => fake('fa_IR')->paragraphs(2, true),
            'writer_name' => fake('fa_IR')->firstName().' '.fake('fa_IR')->lastName(),
            'category_id' => BlogPostCategory::inRandomOrder()->first() ?? BlogPostCategory::factory()->create(),
            'read_duration' => fake()->numberBetween(1, 15),
            'is_popular' => fake()->boolean(20),
        ];
    }
}
