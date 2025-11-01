<?php

namespace App\Http\Controllers;

use AliYavari\IranSms\Facades\Sms;
use App\Http\Requests\SendOtpRequest;
use App\Http\Requests\VerifyOtpRequest;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /**
     * Show the login page
     */
    public function showLogin(): View
    {
        return view('borna.auth.login');
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
            Sms::pattern($phone,'838677', ['code' => $otp])->send();

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

        return view('borna.auth.verify');
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

            return redirect()->route('home')
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

            Sms::pattern($phone,'838677', ['code' => $otp])->send();

            return back()
                ->with('success', 'کد تایید مجددا ارسال شد');
        } catch (\Exception $e) {

            return back()
                ->with('error', 'خطا در ارسال مجدد کد تایید. لطفا دوباره تلاش کنید');
        }
    }

    /**
     * Redirect to Google OAuth
     */
    public function redirectToGoogle(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google OAuth callback
     */
    public function handleGoogleCallback(): RedirectResponse
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::updateOrCreate(
                ['google_id' => $googleUser->id],
                [
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_token' => $googleUser->token,
                    'google_refresh_token' => $googleUser->refreshToken,
                    'avatar' => $googleUser->avatar,
                    'email_verified_at' => now(),
                ]
            );

            Auth::login($user, true);

            return redirect()->route('home')
                ->with('success', 'با موفقیت وارد شدید');
        } catch (\Exception $e) {
            Log::error('Google OAuth error: '.$e->getMessage());

            return redirect()->route('auth.login')
                ->with('error', 'خطا در ورود با گوگل. لطفا دوباره تلاش کنید');
        }
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
