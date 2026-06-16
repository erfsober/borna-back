<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::orderByDesc('id')->paginate(10);
        return view('admin.services.index' , compact('services'));
    }
    public function create(){
        return view('admin.services.create');
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required|unique:services',
            'description' => 'nullable',
            'service_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ],[
            'title.required' => 'عنوان الزامی است',
            'title.unique' => 'این عنوان قبلا استفاده شده است',
            'service_image.image' => 'فایل باید تصویر باشد',
            'service_image.mimes' => 'فرمت تصویر باید jpeg، png، jpg یا gif باشد',
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();

        if ($request->hasFile('service_image')) {
            $service->addMediaFromRequest('service_image')
                ->toMediaCollection('service_image');
        }

        return redirect()->route('admin.services.index')
            ->with('success' , 'سرویس با موفقیت اضافه شد');
    }
    public function edit(Service $service){
        return view('admin.services.edit' , compact('service'));
    }
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|unique:services,title,' . $service->id,
            'description' => 'nullable',
            'service_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ], [
            'title.required' => 'عنوان الزامی است',
            'title.unique' => 'این عنوان قبلا استفاده شده است',
            'service_image.image' => 'فایل باید تصویر باشد',
            'service_image.mimes' => 'فرمت تصویر باید jpeg، png، jpg یا gif باشد',
        ]);

        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();

        if ($request->hasFile('service_image')) {

            $service->clearMediaCollection('service_image');

            $service->addMediaFromRequest('service_image')
                ->toMediaCollection('service_image');
        }

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'سرویس با موفقیت بروزرسانی شد');
    }
    public function destroy(Service $service){
        $service->delete();
        return redirect()->route('admin.services.index')
            ->with('success' , 'با موفقیت حذف شد');
    }
}
