<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactUsSetting>
 */
class ContactUsSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address' => fake('fa_IR')->address(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->companyEmail(),
            'work_hours' => 'شنبه تا پنج‌شنبه: 9صبح تا 5عصر',
            'lat' => fake()->latitude(),
            'lng' => fake()->longitude(),
            'telegram' => '@'.fake()->userName(),
            'whatsapp' => fake()->phoneNumber(),
            'instagram' => '@'.fake()->userName(),
        ];
    }
}
