<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Bootcamp;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchController extends Controller
{
    public function index(): View
    {
        $services = Service::query()
            ->with('media')
            ->latest()
            ->take(4)
            ->get();

        $bootcamps = Bootcamp::query()
            ->with('media')
            ->latest()
            ->take(4)
            ->get();

        $blogPosts = BlogPost::query()
            ->with(['category', 'media'])
            ->latest()
            ->take(4)
            ->get();

        return view('borna.search', compact('services', 'bootcamps', 'blogPosts'));
    }

    public function search(Request $request): JsonResponse
    {
        $query = trim((string) $request->input('q', ''));
        $limit = 4;

        if (blank($query)) {
            return response()->json([
                'success' => true,
                'data' => [
                    'services' => [],
                    'bootcamps' => [],
                    'blogPosts' => [],
                ],
                'count' => 0,
            ]);
        }

        $services = Service::query()
            ->with('media')
            ->where(function ($builder) use ($query) {
                $builder->where('title', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%");
            })
            ->latest()
            ->limit($limit)
            ->get()
            ->map(fn (Service $service) => [
                'id' => $service->id,
                'title' => $service->title,
                'url' => route('services.show', $service),
                'image' => $service->getFirstMediaUrl('service_image') ?: null,
            ]);

        $bootcamps = Bootcamp::query()
            ->with('media')
            ->where(function ($builder) use ($query) {
                $builder->where('title', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%");
            })
            ->latest()
            ->limit($limit)
            ->get()
            ->map(fn (Bootcamp $bootcamp) => [
                'id' => $bootcamp->id,
                'title' => $bootcamp->title,
                'url' => route('bootcamp.index'),
                'image' => $bootcamp->getFirstMediaUrl('icon_image')
                    ?: $bootcamp->getFirstMediaUrl('video_thumbnail')
                    ?: $bootcamp->getFirstMediaUrl('top_image')
                    ?: null,
            ]);

        $blogPosts = BlogPost::query()
            ->with('media')
            ->where(function ($builder) use ($query) {
                $builder->where('title', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%")
                    ->orWhere('summary', 'like', "%{$query}%")
                    ->orWhere('writer_name', 'like', "%{$query}%");
            })
            ->latest()
            ->limit($limit)
            ->get()
            ->map(fn (BlogPost $blog) => [
                'id' => $blog->id,
                'title' => $blog->title,
                'url' => route('blog.show', $blog->slug),
                'image' => $blog->getFirstMediaUrl('image') ?: $blog->getFirstMediaUrl('images') ?: null,
            ]);

        return response()->json([
            'success' => true,
            'data' => [
                'services' => $services,
                'bootcamps' => $bootcamps,
                'blogPosts' => $blogPosts,
            ],
            'count' => $services->count() + $bootcamps->count() + $blogPosts->count(),
        ]);
    }
}
