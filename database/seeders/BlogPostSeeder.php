<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogPost::truncate();
        BlogPost::factory()
            ->count(50)
            ->state(fn () => [
                // Ensure summary is present even if factory changes
                'summary' => fake('fa_IR')->paragraphs(2, true),
            ])
            ->create();
    }
}
