<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUsItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutUsItemController extends Controller
{
    public function index(): View
    {
        $items = AboutUsItem::query()
            ->orderByDesc('id')
            ->paginate(15);

        return view('admin.about-us-items.index', compact('items'));
    }

    public function create(): View
    {
        return view('admin.about-us-items.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'doctor_name' => ['required', 'string', 'max:255'],
            'star' => ['required', 'integer', 'min:1', 'max:5'],
            'description' => ['required', 'string'],
        ]);

        AboutUsItem::query()->create($validated);

        return redirect()->route('admin.about-us-items.index')
            ->with('success', 'آیتم با موفقیت ایجاد شد');
    }

    public function edit(AboutUsItem $aboutUsItem): View
    {
        return view('admin.about-us-items.edit', compact('aboutUsItem'));
    }

    public function update(Request $request, AboutUsItem $aboutUsItem): RedirectResponse
    {
        $validated = $request->validate([
            'doctor_name' => ['required', 'string', 'max:255'],
            'star' => ['required', 'integer', 'min:1', 'max:5'],
            'description' => ['required', 'string'],
        ]);

        $aboutUsItem->update($validated);

        return redirect()->route('admin.about-us-items.index')
            ->with('success', 'آیتم با موفقیت به‌روزرسانی شد');
    }

    public function destroy(AboutUsItem $aboutUsItem): RedirectResponse
    {
        $aboutUsItem->delete();

        return redirect()->route('admin.about-us-items.index')
            ->with('success', 'آیتم با موفقیت حذف شد');
    }
}
