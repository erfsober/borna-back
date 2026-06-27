<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show(Service $service){
        $relatedServices = Service::where('id', '!=', $service->id)
            ->latest()
            ->take(6)
            ->get();

        return view('borna.services.show', compact('service', 'relatedServices'));
    }
}
