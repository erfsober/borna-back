<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FooterSettingController extends Controller
{
    public function index(): View
    {
        $footerSetting = FooterSetting::firstOrCreate([]);

        return view('admin.footer-setting.index', compact('footerSetting'));
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'description' => 'required|string',
            'aparat' => 'nullable|url',
            'telegram' => 'nullable|url',
            'bale' => 'nullable|url',
        ]);

        FooterSetting::firstOrCreate([])->update($validated);

        return redirect()->back()->with('success', 'تنظیمات فوتر با موفقیت بروزرسانی شد.');
    }
}
