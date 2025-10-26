<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPostRequest;
use App\Http\Requests\UpdateBlogPostRequest;
use App\Models\BlogPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BlogPostController extends Controller
{
    public function index(): View
    {
        $blogPosts = BlogPost::query()
            ->orderByDesc('id')
            ->paginate(15);

        return view('admin.blog-posts.index', compact('blogPosts'));
    }

    public function create(): View
    {
        return view('admin.blog-posts.create');
    }

    public function store(StoreBlogPostRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $blogPost = BlogPost::query()->create([
            'title' => $validated['title'],
            'slug' => $validated['slug'],
            'description' => $validated['description'],
            'writer_name' => $validated['writer_name'],
            'read_duration' => $validated['read_duration'],
        ]);

        if ($request->hasFile('image')) {
            $blogPost->addMediaFromRequest('image')
                ->toMediaCollection('image');
        }

        return redirect()->route('admin.blog-posts.index')
            ->with('success', 'پست بلاگ با موفقیت ایجاد شد');
    }

    public function edit(BlogPost $blogPost): View
    {
        return view('admin.blog-posts.edit', compact('blogPost'));
    }

    public function update(UpdateBlogPostRequest $request, BlogPost $blogPost): RedirectResponse
    {
        $validated = $request->validated();

        $blogPost->update([
            'title' => $validated['title'],
            'slug' => $validated['slug'],
            'description' => $validated['description'],
            'writer_name' => $validated['writer_name'],
            'read_duration' => $validated['read_duration'],
        ]);

        if ($request->hasFile('image')) {
            $blogPost->clearMediaCollection('image');
            $blogPost->addMediaFromRequest('image')
                ->toMediaCollection('image');
        }

        return redirect()->route('admin.blog-posts.index')
            ->with('success', 'پست بلاگ با موفقیت به‌روزرسانی شد');
    }

    public function destroy(BlogPost $blogPost): RedirectResponse
    {
        $blogPost->delete();

        return redirect()->route('admin.blog-posts.index')
            ->with('success', 'پست بلاگ با موفقیت حذف شد');
    }
}
