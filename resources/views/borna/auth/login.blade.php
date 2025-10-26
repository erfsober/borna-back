@extends('borna.layouts.auth')

@section('title', 'روانشناسی برنا | ورود')

@section('content')
    <!-- Login Form -->
    <div class="mt-14 space-y-4">
        <h2 class="text-xl font-medium text-right mb-2">عضویت یا ورود</h2>
        <p class="text-[#3C3D45] mb-4">کد تایید به شماره موبایلی که وارد می‌کنید ارسال خواهد شد.</p>

        <form id="login-form" action="{{ route('auth.send-otp') }}" method="POST">
            @csrf

            <!-- Phone Input -->
            <div id="phone-input-wrapper"
                 class="border border-[#E7E7E8] rounded-lg flex items-center justify-between @error('phone') border-red-500 @enderror">
                <input type="tel" name="phone" placeholder="شماره موبایل"
                       class="w-full text-left placeholder:text-right p-4 rounded-r-lg focus:outline-none border-t border-r border-b"
                       id="phone-input" value="{{ old('phone') }}" required>
                <div class="bg-[#F7F7F8] rounded-l-lg p-4 border-t border-l border-b">
                    <span class="text-[#9D9EA2] font-bold">۹۸+</span>
                </div>
            </div>

            <!-- Phone Error Message Container -->
            <div id="phone-error" class="error-container text-xs mt-1">
                @error('phone')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Checkbox -->
            <div class="flex items-center justify-start gap-2 mb-6 mt-4">
                <input type="checkbox" id="terms" name="terms"
                       class="w-5 h-5 border border-[#CECED1] rounded cursor-pointer"
                       {{ old('terms') ? 'checked' : '' }} required>
                <label for="terms" class="text-[#6D6D74]">
                    با ورود و ثبت‌نام در سایت، با
                    <a href="{{ route('terms') }}" class="text-[#1AD042] hover:underline">قوانین برنا</a>
                    موافقت می‌کنم.
                </label>
            </div>

            <!-- Terms Error Message Container -->
            <div id="terms-error" class="error-container -mt-4 mb-2">
                @error('terms')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" id="login-submit"
                    class="w-full bg-[#E7E7E8] text-[#CECED1] py-4 px-8 rounded-lg mb-6 disabled:opacity-70 hover:opacity-80 transition-all duration-300 ease-in-out">
                تایید و ادامه
            </button>

            <!-- Divider -->
            <div class="flex items-center my-6">
                <div class="flex-grow border-t border-[#E7E7E8]"></div>
                <span class="mx-4 text-[#9D9EA2]">یا</span>
                <div class="flex-grow border-t border-[#E7E7E8]"></div>
            </div>

            <!-- Google Login -->
            <a href="{{ route('auth.google') }}" type="button"
               class="w-full border border-primary-dark hover:border-[#1AD042] transition-colors text-[#147F38] py-4 px-8 rounded-lg flex items-center justify-center gap-2">
                <img src="{{ asset('assets/images/google-logo.svg') }}" alt="Google" class="w-6 h-6">
                ورود با گوگل
            </a>
        </form>
    </div>
@endsection

@push('scripts')
    <!-- Login JS -->
    <script src="{{ asset('js/login.js') }}"></script>
@endpush
