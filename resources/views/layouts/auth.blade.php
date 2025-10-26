<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'مرکز روانشناسی برنا - خدمات روانشناسی و مشاوره')">
    <meta name="keywords" content="@yield('keywords', 'روانشناسی، برنا')">
    <meta name="author" content="Erfan Heshmati">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>@yield('title', 'روانشناسی برنا')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon.png') }}">

    <!-- Tailwind CSS -->
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body class="bg-white min-h-screen">
    <div class="flex flex-col md:flex-row min-h-screen relative">
        <!-- Close Button -->
        <button id="close-button" class="absolute top-4 left-4 z-10 group">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="stroke-gray-400 md:stroke-white group-hover:stroke-primary transition-colors" />
                <path d="M6 6L18 18" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="stroke-gray-400 md:stroke-white group-hover:stroke-primary transition-colors" />
            </svg>
        </button>

        <!-- Right side - Form Content -->
        <div class="w-full md:w-1/2 p-4 md:p-8 lg:p-12 flex flex-col justify-center">
            <div class="max-w-md mx-auto w-full">
                <!-- Logo -->
                <div class="flex justify-center">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="برنا">
                </div>

                <!-- Heading -->
                <h1 class="text-2xl md:text-3xl font-semibold text-center mt-2">
                    به
                    <span class="text-[#34DB06]">برنا</span>
                    خوش آمدید!
                </h1>

                <!-- Main Content -->
                @yield('content')
            </div>
        </div>

        <!-- Left side - Background Image -->
        <div class="hidden md:block md:w-1/2 bg-cover bg-center"
            style="background-image: url('{{ asset(config('auth.background_image', 'assets/images/login-bg.png')) }}');">
            <div class="h-full w-full bg-white bg-opacity-15 flex items-center justify-center"></div>
        </div>
    </div>

    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
