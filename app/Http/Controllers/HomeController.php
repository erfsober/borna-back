<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Service;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $blogPosts = BlogPost::query()
            ->latest()
            ->take(3)
            ->get();
        $services = Service::query()
            ->latest()
            ->take(3)
            ->get();

        return view('borna.home', compact('blogPosts', 'services'));
    }
}
