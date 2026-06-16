<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBootcampRequest;
use App\Http\Requests\UpdateBootcampRequest;
use App\Models\Bootcamp;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BootcampController extends Controller
{
    public function index(): View
    {
        $bootcamps = Bootcamp::query()
            ->withCount('items')
            ->orderByDesc('id')
            ->paginate(15);

        return view('admin.bootcamps.index', compact('bootcamps'));
    }

    public function create(): View
    {
        return view('admin.bootcamps.create');
    }

    public function store(StoreBootcampRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $bootcamp = Bootcamp::query()->create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'meta_title' => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'og_title' => $validated['og_title'] ?? null,
            'og_description' => $validated['og_description'] ?? null,
            'og_image' => $validated['og_image'] ?? null,
            'twitter_title' => $validated['twitter_title'] ?? null,
            'twitter_description' => $validated['twitter_description'] ?? null,
            'twitter_image' => $validated['twitter_image'] ?? null,
        ]);

        if ($request->hasFile('icon_image')) {
            $bootcamp->addMediaFromRequest('icon_image')
                ->toMediaCollection('icon_image');
        }

        if ($request->hasFile('top_image')) {
            $bootcamp->addMediaFromRequest('top_image')
                ->toMediaCollection('top_image');
        }

        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                $bootcamp->addMedia($image)
                    ->toMediaCollection('gallery_images');
            }
        }

        if ($request->hasFile('video')) {
            $bootcamp->addMediaFromRequest('video')
                ->toMediaCollection('video');
        }

        if ($request->hasFile('video_thumbnail')) {
            $bootcamp->addMediaFromRequest('video_thumbnail')
                ->toMediaCollection('video_thumbnail');
        }

        return redirect()->route('admin.bootcamps.index')
            ->with('success', 'بوت‌کمپ با موفقیت ایجاد شد');
    }

    public function edit(Bootcamp $bootcamp): View
    {
        return view('admin.bootcamps.edit', compact('bootcamp'));
    }

    public function update(UpdateBootcampRequest $request, Bootcamp $bootcamp): RedirectResponse
    {
        $validated = $request->validated();

        $bootcamp->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'meta_title' => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'og_title' => $validated['og_title'] ?? null,
            'og_description' => $validated['og_description'] ?? null,
            'og_image' => $validated['og_image'] ?? null,
            'twitter_title' => $validated['twitter_title'] ?? null,
            'twitter_description' => $validated['twitter_description'] ?? null,
            'twitter_image' => $validated['twitter_image'] ?? null,
        ]);

        if ($request->hasFile('icon_image')) {
            $bootcamp->clearMediaCollection('icon_image');
            $bootcamp->addMediaFromRequest('icon_image')
                ->toMediaCollection('icon_image');
        }

        if ($request->hasFile('top_image')) {
            $bootcamp->clearMediaCollection('top_image');
            $bootcamp->addMediaFromRequest('top_image')
                ->toMediaCollection('top_image');
        }

        if ($request->hasFile('gallery_images')) {
            $bootcamp->clearMediaCollection('gallery_images');
            foreach ($request->file('gallery_images') as $image) {
                $bootcamp->addMedia($image)
                    ->toMediaCollection('gallery_images');
            }
        }

        if ($request->hasFile('video')) {
            $bootcamp->clearMediaCollection('video');
            $bootcamp->addMediaFromRequest('video')
                ->toMediaCollection('video');
        }

        if ($request->hasFile('video_thumbnail')) {
            $bootcamp->clearMediaCollection('video_thumbnail');
            $bootcamp->addMediaFromRequest('video_thumbnail')
                ->toMediaCollection('video_thumbnail');
        }

        return redirect()->route('admin.bootcamps.index')
            ->with('success', 'بوت‌کمپ با موفقیت به‌روزرسانی شد');
    }

    public function destroy(Bootcamp $bootcamp): RedirectResponse
    {
        abort(401);
        $bootcamp->delete();

        return redirect()->route('admin.bootcamps.index')
            ->with('success', 'بوت‌کمپ با موفقیت حذف شد');
    }
}
