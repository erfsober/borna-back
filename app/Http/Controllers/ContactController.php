<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\ContactUsSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Show the contact us page
     */
    public function index(): View
    {
        $contactSetting = ContactUsSetting::query()->first();

        return view('borna.contact-us', compact('contactSetting'));
    }

    /**
     * Store the contact form submission
     */
    public function store(ContactRequest $request): RedirectResponse
    {
        try {
            Contact::create($request->validated());

            return back()
                ->with('success', 'پیام شما با موفقیت ارسال شد. به زودی با شما تماس خواهیم گرفت');
        } catch (\Exception $e) {
            Log::error('Failed to store contact form: '.$e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'خطا در ارسال پیام. لطفا دوباره تلاش کنید');
        }
    }
}
