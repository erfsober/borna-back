<?php

namespace Database\Seeders;

use App\Models\FooterSetting;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => 'مشاوره تحصیلی',
            'description' => 'با توصیه و راهکارهایی که در اختیارت می‌ذاریم فضای خونه رو برای اعضای خونوادت گرم‌تر کن!',
        ]);

        Service::create([
            'title' => 'مشاوره خانواده',
            'description' => 'با توصیه و راهکارهایی که در اختیارت می‌ذاریم فضای خونه رو برای اعضای خونوادت گرم‌تر کن!',
        ]);

        Service::create([
            'title' => 'مشاوره شغل',
            'description' => 'با توصیه و راهکارهایی که در اختیارت می‌ذاریم فضای خونه رو برای اعضای خونوادت گرم‌تر کن!',
        ]);
    }
}
