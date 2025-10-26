@extends('layouts.auth')

@section('title', 'روانشناسی برنا | اعتبارسنجی')

@section('content')
<!-- Verification Form -->
<div class="mt-14 space-y-4">
    <h2 class="text-xl font-medium text-right mb-8">تایید شماره موبایل</h2>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="p-4 bg-green-100 text-green-700 rounded-lg text-sm">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="p-4 bg-red-100 text-red-700 rounded-lg text-sm">
            {{ session('error') }}
        </div>
    @endif

    <div class="flex flex-wrap items-center justify-between gap-2">
        <p class="text-[#3C3D45]">
            کد ارسال شده به
            <span id="user-phone">{{ session('auth_phone', '') }}</span>
            را وارد کنید.
        </p>
        <a href="{{ route('auth.login') }}" class="text-sm text-[#28CB16] hover:underline">
            ویرایش شماره موبایل
        </a>
    </div>

    <form id="verify-form" action="{{ route('auth.verify-otp') }}" method="POST">
        @csrf

        <!-- OTP Input -->
        <div class="flex flex-row-reverse flex-wrap justify-between gap-3 mb-6">
            <input type="text" maxlength="1"
                class="otp-input w-12 h-12 lg:w-14 lg:h-14 border border-[#E7E7E8] rounded-lg text-center text-xl focus:outline-[#28CB16]"
                data-index="5">
            <input type="text" maxlength="1"
                class="otp-input w-12 h-12 lg:w-14 lg:h-14 border border-[#E7E7E8] rounded-lg text-center text-xl focus:outline-[#28CB16]"
                data-index="4">
            <input type="text" maxlength="1"
                class="otp-input w-12 h-12 lg:w-14 lg:h-14 border border-[#E7E7E8] rounded-lg text-center text-xl focus:outline-[#28CB16]"
                data-index="3">
            <input type="text" maxlength="1"
                class="otp-input w-12 h-12 lg:w-14 lg:h-14 border border-[#E7E7E8] rounded-lg text-center text-xl focus:outline-[#28CB16]"
                data-index="2">
            <input type="text" maxlength="1"
                class="otp-input w-12 h-12 lg:w-14 lg:h-14 border border-[#E7E7E8] rounded-lg text-center text-xl focus:outline-[#28CB16]"
                data-index="1">
            <input type="text" maxlength="1"
                class="otp-input w-12 h-12 lg:w-14 lg:h-14 border border-[#E7E7E8] rounded-lg text-center text-xl focus:outline-[#28CB16]"
                data-index="0" autofocus>
        </div>

        <!-- Hidden input to store complete OTP -->
        <input type="hidden" name="otp" id="otp-value">

        <!-- OTP Error Message Container -->
        <div id="otp-error" class="error-container text-xs -mt-4 mb-4">
            @error('otp')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Timer & Resend -->
        <div class="flex items-center justify-start gap-1">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.50065 18.0103C4.80607 18.0103 0.990234 14.1945 0.990234 9.49992C0.990234 4.80534 4.80607 0.989502 9.50065 0.989502C14.1952 0.989502 18.0111 4.80534 18.0111 9.49992C18.0111 14.1945 14.1952 18.0103 9.50065 18.0103ZM9.50065 2.177C5.46315 2.177 2.17773 5.46242 2.17773 9.49992C2.17773 13.5374 5.46315 16.8228 9.50065 16.8228C13.5382 16.8228 16.8236 13.5374 16.8236 9.49992C16.8236 5.46242 13.5382 2.177 9.50065 2.177Z"
                    fill="#85858B" />
                <path
                    d="M12.4369 12.6111C12.334 12.6111 12.2311 12.5874 12.1361 12.5241L9.68193 11.0595C9.07234 10.6953 8.62109 9.89573 8.62109 9.19115V5.94531C8.62109 5.62073 8.89026 5.35156 9.21484 5.35156C9.53943 5.35156 9.80859 5.62073 9.80859 5.94531V9.19115C9.80859 9.47615 10.0461 9.89573 10.2915 10.0382L12.7457 11.5028C13.0307 11.6691 13.1178 12.0332 12.9515 12.3182C12.8328 12.5082 12.6348 12.6111 12.4369 12.6111Z"
                    fill="#85858B" />
            </svg>
            <p class="text-[#6D6D74] text-sm">
                <span id="timer" class="text-[#28CB16]">۰۲:۰۰</span> تا دریافت مجدد کد
            </p>
        </div>

        <!-- Submit Button -->
        <button type="submit" id="verify-submit"
            class="w-full bg-[#E7E7E8] text-[#CECED1] py-4 px-8 rounded-lg mb-6 mt-6 disabled:opacity-70 hover:opacity-80 transition-all duration-300 ease-in-out">
            ورود
        </button>
    </form>

    <!-- Resend Form (separate form) -->
    <form action="{{ route('auth.resend-otp') }}" method="POST" id="resend-form" class="-mt-4">
        @csrf
        <button type="submit" id="resend-code"
            class="text-[#28CB16] text-sm hidden hover:underline transition-colors">
            دریافت مجدد کد
        </button>
    </form>
</div>
@endsection

@push('scripts')
<!-- Verify JS -->
<script src="{{ asset('js/verify.js') }}"></script>
@endpush
