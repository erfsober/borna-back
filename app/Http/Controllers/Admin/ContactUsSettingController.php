<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsSettingRequest;
use App\Models\ContactUsSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactUsSettingController extends Controller
{
    public function index(): View
    {
        $setting = ContactUsSetting::query()->first();

        return view('admin.contact-us-setting.index', compact('setting'));
    }

    public function update(ContactUsSettingRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $setting = ContactUsSetting::query()->firstOrCreate(['id' => 1]);

        $setting->update([
            'address' => $validated['address'] ?? null,
            'work_hours' => $validated['work_hours'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'email' => $validated['email'] ?? null,
            'lat' => $validated['lat'] ?? null,
            'lng' => $validated['lng'] ?? null,
            'telegram' => $validated['telegram'] ?? null,
            'whatsapp' => $validated['whatsapp'] ?? null,
            'instagram' => $validated['instagram'] ?? null,
        ]);

        if ($request->hasFile('map_image')) {
            $setting->clearMediaCollection('map_image');
            $setting->addMediaFromRequest('map_image')->toMediaCollection('map_image');
        }

        return redirect()->route('admin.contact-us-setting.index')
            ->with('success', 'تنظیمات تماس با ما با موفقیت به‌روزرسانی شد');
    }
}
