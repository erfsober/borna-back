<?php

namespace Database\Seeders;

use App\Models\BlogPostCategory;
use Illuminate\Database\Seeder;

class BlogPostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'روانشناسی',
            'خانواده',
            'موفقیت',
            'کودک و نوجوان',
            'روانشناسی فردی',
            'زوج درمانی',
        ];

        foreach ($categories as $category) {
            BlogPostCategory::create([
                'title' => $category,
            ]);
        }
    }
}
