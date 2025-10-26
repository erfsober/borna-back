<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUsSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutUsSettingController extends Controller
{
    public function index(): View
    {
        $setting = AboutUsSetting::query()->first();

        return view('admin.about-us-setting.index', compact('setting'));
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $setting = AboutUsSetting::query()->firstOrCreate([]);

        $setting->update([
            'description' => $validated['description'],
        ]);

        if ($request->hasFile('image')) {
            $setting->clearMediaCollection('image');
            $setting->addMediaFromRequest('image')->toMediaCollection('image');
        }

        return redirect()->route('admin.about-us-setting.index')
            ->with('success', 'تنظیمات با موفقیت به‌روزرسانی شد');
    }
}
