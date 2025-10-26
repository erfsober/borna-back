<?php

namespace Database\Seeders;

use App\Models\ContactUsSetting;
use Illuminate\Database\Seeder;

class ContactUsSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactUsSetting::factory()->create();
    }
}
