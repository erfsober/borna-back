<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BootcampController extends Controller
{
    public function index(): View
    {
        $bootcamp = Bootcamp::query()->firstOrCreate([]);
        return view('borna.bootcamp', compact('bootcamp'));
    }
}
