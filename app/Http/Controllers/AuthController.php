<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Show the login page
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Send OTP to the phone number
     */
    public function sendOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => ['required', 'regex:/^0?9\d{9}$/'],
            'terms' => ['required', 'accepted'],
        ], [
            'phone.required' => 'شماره موبایل خود را وارد کنید',
            'phone.regex' => 'شماره موبایل معتبر نیست',
            'terms.required' => 'باید با قوانین برنا موافقت کنید',
            'terms.accepted' => 'باید با قوانین برنا موافقت کنید',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $phone = $request->phone;

        // TODO: Generate and send OTP code
        // For now, we'll just store the phone in session
        session(['auth_phone' => $phone]);

        return redirect()->route('auth.verify');
    }

    /**
     * Show the OTP verification page
     */
    public function showVerify()
    {
        if (!session()->has('auth_phone')) {
            return redirect()->route('auth.login');
        }

        return view('auth.verify');
    }

    /**
     * Verify the OTP code
     */
    public function verifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'otp' => ['required', 'string', 'size:6'],
        ], [
            'otp.required' => 'کد تایید را وارد کنید',
            'otp.size' => 'کد تایید باید ۶ رقم باشد',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        // TODO: Verify OTP code
        // For now, we'll just accept any 6-digit code

        $phone = session('auth_phone');

        // TODO: Find or create user
        // TODO: Login user

        session()->forget('auth_phone');

        return redirect('/')->with('success', 'با موفقیت وارد شدید');
    }

    /**
     * Redirect to Google OAuth
     */
    public function redirectToGoogle()
    {
        // TODO: Implement Google OAuth
        return back()->with('info', 'ورود با گوگل به زودی فعال خواهد شد');
    }

    /**
     * Handle Google OAuth callback
     */
    public function handleGoogleCallback()
    {
        // TODO: Implement Google OAuth callback
        return redirect('/');
    }

    /**
     * Logout the user
     */
    public function logout(Request $request)
    {
        // TODO: Implement logout
        return redirect('/');
    }
}
