<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendOtpRequest;
use App\Http\Requests\VerifyOtpRequest;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Show the login page
     */
    public function showLogin(): View
    {
        return view('auth.login');
    }

    /**
     * Send OTP to the phone number
     */
    public function sendOtp(SendOtpRequest $request): RedirectResponse
    {
        $phone = $request->validated()['phone'];

        // Normalize phone number (remove leading 0 if present)
        $phone = preg_replace('/^0/', '', $phone);

        try {
            // Generate OTP
            $otp = Otp::generate($phone);

            // Store phone in session
            session(['auth_phone' => $phone]);

            // TODO: Send OTP via SMS service
            // For development, log the OTP code
            Log::info("OTP code for {$phone}: {$otp->code}");

            return redirect()->route('auth.verify')
                ->with('success', 'کد تایید به شماره موبایل شما ارسال شد');
        } catch (\Exception $e) {
            Log::error("Failed to generate OTP for {$phone}: ".$e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'خطا در ارسال کد تایید. لطفا دوباره تلاش کنید');
        }
    }

    /**
     * Show the OTP verification page
     */
    public function showVerify(): View|RedirectResponse
    {
        if (! session()->has('auth_phone')) {
            return redirect()->route('auth.login')
                ->with('error', 'لطفا ابتدا شماره موبایل خود را وارد کنید');
        }

        return view('auth.verify');
    }

    /**
     * Verify the OTP code
     */
    public function verifyOtp(VerifyOtpRequest $request): RedirectResponse
    {
        $phone = session('auth_phone');

        if (! $phone) {
            return redirect()->route('auth.login')
                ->with('error', 'لطفا ابتدا شماره موبایل خود را وارد کنید');
        }

        $otp = $request->validated()['otp'];

        // Verify OTP
        if (! Otp::verify($phone, $otp)) {
            return back()
                ->with('error', 'کد تایید نامعتبر یا منقضی شده است');
        }

        try {
            // Find or create user
            $user = User::firstOrCreate(
                ['phone' => $phone],
                [
                    'phone_verified_at' => now(),
                ]
            );

            // If user already exists but phone not verified, update verification
            if (! $user->phone_verified_at) {
                $user->update(['phone_verified_at' => now()]);
            }

            // Login user
            Auth::login($user, true);

            // Clear session
            session()->forget('auth_phone');

            return redirect()->intended('/')
                ->with('success', 'با موفقیت وارد شدید');
        } catch (\Exception $e) {
            Log::error("Failed to authenticate user with phone {$phone}: ".$e->getMessage());

            return back()
                ->with('error', 'خطا در ورود به سیستم. لطفا دوباره تلاش کنید');
        }
    }

    /**
     * Resend OTP code
     */
    public function resendOtp(Request $request): RedirectResponse
    {
        $phone = session('auth_phone');

        if (! $phone) {
            return redirect()->route('auth.login')
                ->with('error', 'لطفا ابتدا شماره موبایل خود را وارد کنید');
        }

        try {
            // Generate new OTP
            $otp = Otp::generate($phone);

            // TODO: Send OTP via SMS service
            // For development, log the OTP code
            Log::info("Resent OTP code for {$phone}: {$otp->code}");

            return back()
                ->with('success', 'کد تایید مجددا ارسال شد');
        } catch (\Exception $e) {
            Log::error("Failed to resend OTP for {$phone}: ".$e->getMessage());

            return back()
                ->with('error', 'خطا در ارسال مجدد کد تایید. لطفا دوباره تلاش کنید');
        }
    }

    /**
     * Redirect to Google OAuth
     */
    public function redirectToGoogle(): RedirectResponse
    {
        // TODO: Implement Google OAuth
        return back()->with('info', 'ورود با گوگل به زودی فعال خواهد شد');
    }

    /**
     * Handle Google OAuth callback
     */
    public function handleGoogleCallback(): RedirectResponse
    {
        // TODO: Implement Google OAuth callback
        return redirect('/');
    }

    /**
     * Logout the user
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login')
            ->with('success', 'با موفقیت خارج شدید');
    }
}
