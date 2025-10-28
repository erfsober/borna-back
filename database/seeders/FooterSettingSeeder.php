<?php

namespace Database\Seeders;

use App\Models\FooterSetting;
use Illuminate\Database\Seeder;

class FooterSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FooterSetting::firstOrCreate([], [
            'description' => 'روانشناسی برنا با مفهوم ارتقاء ذهنی و روانی مراجعه‌کنندگان، به مراقبت و توسعه افراد و خانواده‌ها اختصاص دارد. با توجه به اهمیت بهبود روانی در زندگی روزمره، در راستای بهبود کیفیت زندگی افراد کمک می‌کنند.',
            'instagram' => 'https://instagram.com',
            'twitter' => 'https://twitter.com',
            'facebook' => 'https://facebook.com',
        ]);
    }
}
