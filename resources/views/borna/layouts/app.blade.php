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
    <title>@yield('title', 'روانشناسی برنا | صفحه اصلی')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon.png') }}">

    <!-- Tailwind CSS -->
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    @stack('styles')
</head>

<body class="bg-gradient-side relative">
    <!-- Background Ecllipse -->
    <img src="{{ asset('assets/images/ellipse.svg') }}" alt="ecllipse" class="hidden lg:block absolute top-0 right-0 -z-10">

    <!-- Header/Navigation -->
    <header class="bg-white md:bg-transparent h-[68px] md:h-auto">
        <div class="container py-1 md:py-6">
            <nav class="flex justify-between items-center">
                <!-- Logo -->
                <div class="md:hidden lg:block flex-shrink-0 z-10">
                    <a href="{{ route('home') }}" class="block">
                        <img src="{{ asset('assets/images/borna-logo.svg') }}" alt="روانشناسی برنا"
                            class="w-[100px] md:w-[162px] h-auto">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center gap-4 xl:gap-8 px-8 py-2 bg-gray-50 rounded-full border z-10">
                    <a href="{{ route('home') }}" class="text-secondary hover:text-primary transition-colors py-2 {{ request()->routeIs('home') ? 'text-primary font-medium border-b-2 border-primary' : '' }}">
                        صفحه اصلی
                    </a>
                    <!-- Dropdown for آخرین تست‌ها -->
                    <div class="relative group">
                        <button class="text-secondary hover:text-primary transition-colors py-2 flex items-center">
                            آخرین تست‌ها
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 mr-1 transition-transform duration-200 transform group-hover:rotate-180"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div
                            class="absolute hidden group-hover:block bg-gray-50 shadow-lg rounded-lg p-2 min-w-[150px] z-50">
                            <a href="#"
                                class="block px-4 py-2 text-secondary hover:text-primary hover:bg-gray-50 rounded">تست
                                1</a>
                            <a href="#"
                                class="block px-4 py-2 text-secondary hover:text-primary hover:bg-gray-50 rounded">تست
                                2</a>
                            <a href="#"
                                class="block px-4 py-2 text-secondary hover:text-primary hover:bg-gray-50 rounded">تست
                                3</a>
                        </div>
                    </div>
                    <!-- Dropdown for تست‌های برتر -->
                    <div class="relative group">
                        <button class="text-secondary hover:text-primary transition-colors py-2 flex items-center">
                            تست‌های برتر
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 mr-1 transition-transform duration-200 transform group-hover:rotate-180"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div
                            class="absolute hidden group-hover:block bg-gray-50 shadow-lg rounded-lg p-2 min-w-[150px] z-50">
                            <a href="#"
                                class="block px-4 py-2 text-secondary hover:text-primary hover:bg-gray-50 rounded">
                                تست برتر 1
                            </a>
                            <a href="#"
                                class="block px-4 py-2 text-secondary hover:text-primary hover:bg-gray-50 rounded">
                                تست برتر 2
                            </a>
                            <a href="#"
                                class="block px-4 py-2 text-secondary hover:text-primary hover:bg-gray-50 rounded">
                                تست برتر 3
                            </a>
                        </div>
                    </div>
                    <a href="#" class="text-secondary hover:text-primary transition-colors py-2">
                        بوت کمپ
                    </a>
                    <a href="#" class="text-secondary hover:text-primary transition-colors py-2">
                        درباره ما
                    </a>
                    <a href="{{ route('contact.index') }}" class="text-secondary hover:text-primary transition-colors py-2 {{ request()->routeIs('contact.*') ? 'text-primary font-medium border-b-2 border-primary' : '' }}">
                        ارتباط با ما
                    </a>
                </div>

                <!-- Desktop Buttons -->
                <div class="hidden md:flex items-center gap-4 lg:gap-8">
                    <a href="{{ auth()->check() ? route('auth.logout') : route('auth.login') }}">
                        <span class="icon-login text-2xl hover:text-primary transition-colors"></span>
                    </a>

                    <a href="#">
                        <span class="icon-search text-2xl hover:text-primary transition-colors"></span>
                    </a>
                    <button>
                        <span class="icon-profile text-2xl hover:text-primary transition-colors"></span>
                    </button>
                </div>

                <!-- Mobile Buttons -->
                <div class="flex md:hidden items-center gap-4">
                    <a href="{{ auth()->check() ? route('auth.logout') : route('auth.login') }}" class="pt-1.5">
                        <span class="icon-login text-xl text-neutral-700"></span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('assets/images/mobile-search.svg') }}" alt="">
                    </a>
                    <button>
                        <img src="{{ asset('assets/images/mobile-profile.svg') }}" alt="">
                    </button>
                    <button id="mobile-menu-button" class="text-secondary focus:outline-none">
                        <img src="{{ asset('assets/images/mobile-menu.svg') }}" alt="">
                    </button>
                </div>
            </nav>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="md:hidden hidden">
                <a href="{{ route('home') }}" class="block py-2 text-center {{ request()->routeIs('home') ? 'text-primary font-medium' : 'text-secondary hover:text-primary' }}">
                    صفحه اصلی
                </a>
                <div class="border my-2"></div>
                <!-- Dropdown for آخرین تست‌ها -->
                <div class="mobile-dropdown">
                    <button
                        class="w-full py-2 text-secondary hover:text-primary text-center flex items-center justify-center mobile-dropdown-button">
                        آخرین تست‌ها
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden py-2">
                        <a href="#" class="block py-2 text-secondary hover:text-primary text-center">تست 1</a>
                        <a href="#" class="block py-2 text-secondary hover:text-primary text-center">تست 2</a>
                        <a href="#" class="block py-2 text-secondary hover:text-primary text-center">تست 3</a>
                    </div>
                </div>
                <div class="border my-2"></div>
                <!-- Dropdown for تست‌های برتر -->
                <div class="mobile-dropdown">
                    <button
                        class="w-full py-2 text-secondary hover:text-primary text-center flex items-center justify-center mobile-dropdown-button">
                        تست‌های برتر
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden py-2">
                        <a href="#" class="block py-2 text-secondary hover:text-primary text-center">تست برتر 1</a>
                        <a href="#" class="block py-2 text-secondary hover:text-primary text-center">تست برتر 2</a>
                        <a href="#" class="block py-2 text-secondary hover:text-primary text-center">تست برتر 3</a>
                    </div>
                </div>
                <div class="border my-2"></div>
                <a href="#" class="block py-2 text-secondary hover:text-primary text-center">
                    بوت کمپ
                </a>
                <div class="border my-2"></div>
                <a href="#" class="block py-2 text-secondary hover:text-primary text-center">
                    درباره ما
                </a>
                <div class="border my-2"></div>
                <a href="{{ route('contact.index') }}" class="block py-2 text-center {{ request()->routeIs('contact.*') ? 'text-primary font-medium' : 'text-secondary hover:text-primary' }}">
                    ارتباط با ما
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-footer pt-20 md:pt-28 pb-4 md:pb-8">
        <div class="container">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Column 1: About -->
                <div class="flex flex-col gap-4 col-span-2 lg:col-span-1 order-1">
                    <img src="{{ asset('assets/images/borna-logo.svg') }}" alt="روانشناسی برنا" class="w-[162px] h-auto">
                    <p class="text-text-dark text-opacity-90 text-sm leading-relaxed text-justify">
                        روانشناسی برنا با مفهوم ارتقاء ذهنی و روانی مراجعه‌کنندگان، به مراقبت و توسعه افراد و خانواده‌ها
                        اختصاص دارد. با توجه به اهمیت بهبود روانی در زندگی روزمره، در راستای بهبود کیفیت زندگی افراد کمک
                        می‌کنند.
                    </p>
                    <!-- Social Media -->
                    <div class="hidden lg:flex items-center justify-center gap-6">
                        <a href="#"
                            class="flex items-center justify-center w-12 h-12 rounded-full border border-gray-300 hover:border-primary transition-colors">
                            <img src="{{ asset('assets/images/linkedin-icon.svg') }}" alt="LinkedIn" class="w-5 h-5">
                        </a>
                        <a href="#"
                            class="flex items-center justify-center w-12 h-12 rounded-full border border-gray-300 hover:border-primary transition-colors">
                            <img src="{{ asset('assets/images/twitter-icon.svg') }}" alt="Twitter" class="w-5 h-5">
                        </a>
                        <a href="#"
                            class="flex items-center justify-center w-12 h-12 rounded-full border border-gray-300 hover:border-primary transition-colors">
                            <img src="{{ asset('assets/images/facebook-icon.svg') }}" alt="Facebook" class="w-5 h-5">
                        </a>
                    </div>
                </div>

                <!-- Column 2: Recommended Tests -->
                <div class="flex flex-col items-center pt-4 md:pt-10 order-3 lg:order-2">
                    <h3 class="text-text-dark text-lg font-medium mb-4">تست‌های پیشنهادی</h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="#" class="text-secondary text-sm hover:text-primary transition-colors">
                                تست MBTI
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-secondary text-sm hover:text-primary transition-colors">
                                تست هوش
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-secondary text-sm hover:text-primary transition-colors">
                                تست MBTI
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Quick Links -->
                <div class="flex flex-col items-center pt-4 md:pt-10 order-4 lg:order-3">
                    <h3 class="text-text-dark text-lg font-medium mb-4">دسترسی سریع</h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="{{ route('home') }}"
                                class="text-secondary text-sm hover:text-primary transition-colors">صفحه
                                اصلی
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-secondary text-sm hover:text-primary transition-colors">
                                درخواست مشاوره
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-secondary text-sm hover:text-primary transition-colors">
                                درباره‌ی ما
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact.index') }}" class="text-secondary text-sm hover:text-primary transition-colors">
                                تماس با ما
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 4: Newsletter -->
                <div class="flex flex-col justify-center col-span-2 lg:col-span-1 order-2 lg:order-4">
                    <p class="text-text-dark text-opacity-80 text-sm mb-4">با ثبت ایمیل از آخرین تخفیف با خبر شوید.</p>
                    <form id="newsletter-form" class="flex">
                        <div class="relative flex-grow">
                            <input type="email" placeholder="ایمیل" required
                                class="w-full pr-2 py-2 bg-transparent border-b border-gray-400 border-opacity-25 focus:border-primary focus:outline-none text-secondary">
                            <button type="submit" class="absolute left-0 top-1/2 -translate-y-1/2">
                                <svg width="25" height="18" viewBox="0 0 25 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="group">
                                    <path
                                        d="M22 0.999878H3C1.89543 0.999878 1 1.89531 1 2.99988V14.9999C1 16.1044 1.89543 16.9999 3 16.9999H22C23.1046 16.9999 24 16.1044 24 14.9999V2.99988C24 1.89531 23.1046 0.999878 22 0.999878Z"
                                        stroke="#787878" stroke-width="1.00138" stroke-linecap="round"
                                        stroke-linejoin="round" class="group-hover:stroke-primary transition-colors" />
                                    <path d="M23.4109 1.58203L12.4999 10.5L1.58887 1.58203" stroke="#787878"
                                        stroke-width="1.00138" stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-primary transition-colors" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- Social Media -->
            <div class="flex lg:hidden items-center gap-6 mt-6">
                <a href="#" class="w-12 h-12 rounded-full border border-gray-300 flex items-center justify-center">
                    <img src="{{ asset('assets/images/linkedin-icon.svg') }}" alt="LinkedIn" class="w-5 h-5">
                </a>
                <a href="#" class="w-12 h-12 rounded-full border border-gray-300 flex items-center justify-center">
                    <img src="{{ asset('assets/images/twitter-icon.svg') }}" alt="Twitter" class="w-5 h-5">
                </a>
                <a href="#" class="w-12 h-12 rounded-full border border-gray-300 flex items-center justify-center">
                    <img src="{{ asset('assets/images/facebook-icon.svg') }}" alt="Facebook" class="w-5 h-5">
                </a>
            </div>

            <!-- Separator -->
            <div class="border my-4 md:my-8"></div>

            <!-- Copyright -->
            <div class="text-text-dark text-center" dir="ltr">© 2023 All rights reserved</div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Swiper JS-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    @stack('scripts')
</body>

</html>
