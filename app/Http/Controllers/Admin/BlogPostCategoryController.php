<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPostCategoryRequest;
use App\Http\Requests\UpdateBlogPostCategoryRequest;
use App\Models\BlogPostCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogPostCategoryController extends Controller
{
    public function index(): View
    {
        $categories = BlogPostCategory::query()
            ->withCount('blogPosts')
            ->get();

        return view('admin.blog-post-categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.blog-post-categories.create');
    }

    public function store(StoreBlogPostCategoryRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $maxOrder = BlogPostCategory::query()->max('sort_order') ?? 0;

        BlogPostCategory::query()->create([
            'title' => $validated['title'],
            'sort_order' => $maxOrder + 1,
        ]);

        return redirect()->route('admin.blog-post-categories.index')
            ->with('success', 'دسته‌بندی با موفقیت ایجاد شد');
    }

    public function edit(BlogPostCategory $blogPostCategory): View
    {
        return view('admin.blog-post-categories.edit', compact('blogPostCategory'));
    }

    public function update(UpdateBlogPostCategoryRequest $request, BlogPostCategory $blogPostCategory): RedirectResponse
    {
        $validated = $request->validated();

        $blogPostCategory->update([
            'title' => $validated['title'],
        ]);

        return redirect()->route('admin.blog-post-categories.index')
            ->with('success', 'دسته‌بندی با موفقیت به‌روزرسانی شد');
    }

    public function destroy(BlogPostCategory $blogPostCategory): RedirectResponse
    {
        $blogPostCategory->delete();

        return redirect()->route('admin.blog-post-categories.index')
            ->with('success', 'دسته‌بندی با موفقیت حذف شد');
    }

    public function reorder(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'ids' => ['required', 'array'],
            'ids.*' => ['integer'],
        ]);

        foreach ($validated['ids'] as $position => $id) {
            BlogPostCategory::query()->where('id', $id)->update(['sort_order' => $position + 1]);
        }

        return response()->json(['success' => true]);
    }
}
