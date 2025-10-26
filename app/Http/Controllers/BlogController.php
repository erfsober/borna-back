<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('borna.blog.index');
    }

    public function show(string $slug): View
    {
        // In the future, you would fetch the blog post from the database using the slug
        // For now, we'll just return the view
        return view('borna.blog.show');
    }
}
