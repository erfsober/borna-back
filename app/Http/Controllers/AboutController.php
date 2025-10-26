<?php

namespace App\Http\Controllers;

use App\Models\AboutUsItem;
use App\Models\AboutUsSetting;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        $aboutUsSetting = AboutUsSetting::query()
            ->firstOrCreate([]);
        $aboutUsItems = AboutUsItem::query()
            ->get();

        return view('borna.about-us', compact('aboutUsSetting', 'aboutUsItems'));
    }
}
