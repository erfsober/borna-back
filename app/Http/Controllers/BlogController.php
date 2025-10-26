<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $blogPosts = BlogPost::query()
            ->with('category')
            ->when(request('category'), function ($query) {
                $query->whereHas('category', function ($q) {
                    $q->where('id', request('category'));
                });
            })
            ->orderByDesc('created_at')
            ->paginate(12);

        $categories = \App\Models\BlogPostCategory::query()
            ->withCount('blogPosts')
            ->orderBy('title')
            ->get();

        $popularPosts = BlogPost::query()
            ->with('category')
            ->where('is_popular', true)
            ->orderByDesc('created_at')
            ->limit(6)
            ->get();

        return view('borna.blog.index', compact('blogPosts', 'categories', 'popularPosts'));
    }

    public function show(string $slug): View
    {
        $blogPost = BlogPost::query()
            ->with('category')
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedPosts = BlogPost::query()
            ->with('category')
            ->where('id', '!=', $blogPost->id)
            ->when($blogPost->category_id, function ($query) use ($blogPost) {
                $query->where('category_id', $blogPost->category_id);
            })
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();

        $featuredPosts = BlogPost::query()
            ->with('category')
            ->where('id', '!=', $blogPost->id)
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();

        return view('borna.blog.show', compact('blogPost', 'relatedPosts', 'featuredPosts'));
    }
}
