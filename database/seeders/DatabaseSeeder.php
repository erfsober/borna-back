<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Admin::query()
            ->updateOrCreate([
                'id' => 1,
            ], [
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('as12AS!@'),
            ]);

        // Seed users
        $this->call(UserSeeder::class);
        $this->call(ContactUsSettingSeeder::class);
        $this->call(BootcampSeeder::class);
        $this->call(BootcampItemSeeder::class);
        $this->call(BlogPostSeeder::class);
    }
}
