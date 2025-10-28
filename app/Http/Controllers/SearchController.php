<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchController extends Controller
{
    public function index(): View
    {
        return view('borna.search');
    }

    public function searchBlogs(Request $request): JsonResponse
    {
        $query = $request->input('q', '');
        $limit = 3;

        if (blank($query)) {
            return response()->json([
                'success' => true,
                'data' => [],
                'message' => 'Please enter a search term',
            ]);
        }

        $blogs = BlogPost::query()
            ->where('title', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->orWhere('summary', 'like', "%{$query}%")
            ->orWhere('writer_name', 'like', "%{$query}%")
            ->limit($limit)
            ->get()
            ->map(fn (BlogPost $blog) => [
                'id' => $blog->id,
                'title' => $blog->title,
                'slug' => $blog->slug,
                'description' => $blog->description,
                'summary' => $blog->summary,
                'writer_name' => $blog->writer_name,
                'read_duration' => $blog->read_duration,
                'image' => $blog->getFirstMediaUrl('images') ?: null,
            ]);

        return response()->json([
            'success' => true,
            'data' => $blogs,
            'count' => $blogs->count(),
        ]);
    }
}
