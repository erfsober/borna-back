<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed users table with a default user and sample data.
     */
    public function run(): void
    {
        // Ensure a predictable default user exists
        User::query()->updateOrCreate(
            ['phone' => '+15550000001'],
            [
                'name' => 'Test User',
                'email' => 'user@example.com',
                'email_verified_at' => now(),
                'phone_verified_at' => now(),
                'password' => Hash::make('password'),
            ]
        );

        // Additional users with deterministic unique phone numbers
        for ($i = 2; $i <= 500; $i++) {
            User::factory()->create([
                'phone' => '+1555000000' . $i + 900,
            ]);
        }
    }
}
