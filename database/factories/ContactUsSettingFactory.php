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
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->companyEmail(),
            'work_hours' => 'Mon-Fri: 9AM-5PM',
            'lat' => fake()->latitude(),
            'lng' => fake()->longitude(),
            'telegram' => '@'.fake()->userName(),
            'whatsapp' => fake()->phoneNumber(),
            'instagram' => '@'.fake()->userName(),
        ];
    }
}
