<?php

namespace Database\Seeders;

use App\Models\Bootcamp;
use App\Models\BootcampItem;
use Illuminate\Database\Seeder;

class BootcampItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bootcamp::query()->each(function (Bootcamp $bootcamp) {
            BootcampItem::factory()->count(rand(3, 8))->create([
                'bootcamp_id' => $bootcamp->id,
            ]);
        });
    }
}
