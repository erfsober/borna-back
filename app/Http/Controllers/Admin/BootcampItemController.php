<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBootcampItemRequest;
use App\Http\Requests\UpdateBootcampItemRequest;
use App\Models\Bootcamp;
use App\Models\BootcampItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BootcampItemController extends Controller
{
    public function index(): View
    {
        $items = BootcampItem::query()
            ->with('bootcamp')
            ->orderByDesc('id')
            ->paginate(15);

        return view('admin.bootcamp-items.index', compact('items'));
    }

    public function create(): View
    {
        $bootcamps = Bootcamp::query()->orderBy('title')->get();

        return view('admin.bootcamp-items.create', compact('bootcamps'));
    }

    public function store(StoreBootcampItemRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $item = BootcampItem::query()->create([
            'bootcamp_id' => $validated['bootcamp_id'],
            'description' => $validated['description'],
        ]);

        if ($request->hasFile('video')) {
            $item->addMediaFromRequest('video')
                ->toMediaCollection('video');
        }

        if ($request->hasFile('video_thumbnail')) {
            $item->addMediaFromRequest('video_thumbnail')
                ->toMediaCollection('video_thumbnail');
        }

        return redirect()->route('admin.bootcamp-items.index')
            ->with('success', 'آیتم بوت‌کمپ با موفقیت ایجاد شد');
    }

    public function edit(BootcampItem $bootcampItem): View
    {
        $bootcamps = Bootcamp::query()->orderBy('title')->get();

        return view('admin.bootcamp-items.edit', compact('bootcampItem', 'bootcamps'));
    }

    public function update(UpdateBootcampItemRequest $request, BootcampItem $bootcampItem): RedirectResponse
    {
        $validated = $request->validated();

        $bootcampItem->update([
            'bootcamp_id' => $validated['bootcamp_id'],
            'description' => $validated['description'],
        ]);

        if ($request->hasFile('video')) {
            $bootcampItem->clearMediaCollection('video');
            $bootcampItem->addMediaFromRequest('video')
                ->toMediaCollection('video');
        }

        if ($request->hasFile('video_thumbnail')) {
            $bootcampItem->clearMediaCollection('video_thumbnail');
            $bootcampItem->addMediaFromRequest('video_thumbnail')
                ->toMediaCollection('video_thumbnail');
        }

        return redirect()->route('admin.bootcamp-items.index')
            ->with('success', 'آیتم بوت‌کمپ با موفقیت به‌روزرسانی شد');
    }

    public function destroy(BootcampItem $bootcampItem): RedirectResponse
    {
        $bootcampItem->delete();

        return redirect()->route('admin.bootcamp-items.index')
            ->with('success', 'آیتم بوت‌کمپ با موفقیت حذف شد');
    }
}
