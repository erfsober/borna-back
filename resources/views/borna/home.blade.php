@extends('borna.layouts.app')

@section('title', 'روانشناسی برنا | صفحه اصلی')
@section('description', 'مرکز روانشناسی برنا - خودت رو بشناس! بزن بریم')

@section('content')
<!-- Hero Section -->
<section class="container py-8 md:py-16">
    <div class="flex flex-col md:flex-row items-center gap-20">
        <!-- Image -->
        <div class="w-full md:w-1/2 hidden md:flex items-center justify-center">
            <img src="{{ asset('assets/images/home/main-image.png') }}" alt="" class="w-full h-auto">
        </div>
        <!-- Text Content -->
        <div class="w-full md:w-1/2 flex flex-col items-center md:items-start gap-8">
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-medium text-black">روانشناسی برنا</h1>
            <div class="flex items-center">
                <div class="w-1/2 flex flex-col items-center md:items-start gap-4">
                    <p class="text-xl lg:text-4xl text-gray-700">خودت رو بشناس!</p>
                    <div class="flex items-center gap-2 md:gap-4">
                        <img src="{{ asset('assets/images/home/check-icon.svg') }}" alt="" class="w-5 lg:w-7 h-5 lg:h-7">
                        <span class="text-xl lg:text-4xl text-gray-700">بزن بریم</span>
                    </div>
                </div>
                <div class="w-1/2 flex items-center justify-center">
                    <img src="{{ asset('assets/images/home/banner-book.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Test Categories Section -->
<section class="container py-8 md:py-16">
    <div class="flex flex-col gap-8 relative">
        <!-- Categories Header -->
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2 md:gap-3">
                <img src="{{ asset('assets/images/home/grid-icon.svg') }}" alt="" class="w-6 h-6 md:w-8 md:h-8">
                <h2 class="text-xl md:text-3xl font-medium text-black">
                    دسته‌بندی‌
                    <span class="text-primary">تست‌ها</span>
                </h2>
            </div>
            <a href="#" class="flex items-center gap-2 text-[#3C3D45] group">
                <span class="text-base md:text-lg group-hover:text-primary transition">مشاهده همه</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="hidden md:block">
                    <path
                        d="M7.97495 15.6833C7.81662 15.6833 7.65828 15.625 7.53328 15.5L2.47495 10.4417C2.23328 10.2 2.23328 9.80001 2.47495 9.55834L7.53328 4.50001C7.77495 4.25834 8.17495 4.25834 8.41662 4.50001C8.65828 4.74167 8.65828 5.14167 8.41662 5.38334L3.79995 10L8.41662 14.6167C8.65828 14.8583 8.65828 15.2583 8.41662 15.5C8.29995 15.625 8.13328 15.6833 7.97495 15.6833Z"
                        fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                    <path
                        d="M17.0834 10.625H3.05835C2.71668 10.625 2.43335 10.3417 2.43335 10C2.43335 9.65833 2.71668 9.375 3.05835 9.375H17.0834C17.425 9.375 17.7084 9.65833 17.7084 10C17.7084 10.3417 17.425 10.625 17.0834 10.625Z"
                        fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                </svg>
            </a>
        </div>

        <!-- Slider Content -->
        <div class="-mx-4 md:mx-0">
            <!-- Swiper Container -->
            <div class="swiper categorySwiper">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <!-- Education Card -->
                        <a href="#"
                            class="flex flex-col bg-white rounded-lg border border-[#E6E6E6] hover:border-primary-dark transition-colors">
                            <div class="w-full h-56">
                                <img src="{{ asset('assets/images/home/education.png') }}" alt="تحصیلی"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col items-center gap-4 p-6">
                                <p class="text-gray-600 text-sm leading-7">
                                    با توصیه و راهکارهایی که در اختیارت می‌ذاریم فضای خونه رو برای اعضای خونوادت
                                    گرم‌تر
                                    کن!
                                </p>
                                <span
                                    class="flex items-center justify-center bg-[#F1FFED] text-[#404040] px-8 py-3 rounded-lg">
                                    تحصیلی
                                </span>
                            </div>
                        </a>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <!-- Family Card -->
                        <a href="#"
                            class="flex flex-col bg-white rounded-lg border border-[#E6E6E6] hover:border-primary-dark transition-colors">
                            <div class="w-full h-56">
                                <img src="{{ asset('assets/images/home/family.png') }}" alt="خانواده"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col items-center gap-4 p-6">
                                <p class="text-gray-600 text-sm leading-7">
                                    با توصیه و راهکارهایی که در اختیارت می‌ذاریم فضای خونه رو برای اعضای خونوادت
                                    گرم‌تر
                                    کن!
                                </p>
                                <span
                                    class="flex items-center justify-center bg-[#FFE8FA] text-[#404040] px-8 py-3 rounded-lg">
                                    خانواده
                                </span>
                            </div>
                        </a>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <!-- Job Card -->
                        <a href="#"
                            class="flex flex-col bg-white rounded-lg border border-[#E6E6E6] hover:border-primary-dark transition-colors">
                            <div class="w-full h-56">
                                <img src="{{ asset('assets/images/home/job.png') }}" alt="شغل"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col items-center gap-4 p-6">
                                <p class="text-gray-600 text-sm leading-7">
                                    با توصیه و راهکارهایی که در اختیارت می‌ذاریم فضای خونه رو برای اعضای خونوادت
                                    گرم‌تر
                                    کن!
                                </p>
                                <span
                                    class="flex items-center justify-center bg-[#EAD6B799] text-[#404040] px-8 py-3 rounded-lg">
                                    شغل
                                </span>
                            </div>
                        </a>
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <!-- Family Card -->
                        <a href="#"
                            class="flex flex-col bg-white rounded-lg border border-[#E6E6E6] hover:border-primary-dark transition-colors">
                            <div class="w-full h-56">
                                <img src="{{ asset('assets/images/home/family.png') }}" alt="خانواده"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col items-center gap-4 p-6">
                                <p class="text-gray-600 text-sm leading-7">
                                    با توصیه و راهکارهایی که در اختیارت می‌ذاریم فضای خونه رو برای اعضای خونوادت
                                    گرم‌تر
                                    کن!
                                </p>
                                <span
                                    class="flex items-center justify-center bg-[#FFE8FA] text-[#404040] px-8 py-3 rounded-lg">
                                    خانواده
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="hidden md:flex items-center gap-2 absolute top-1 left-36">
                <button id="category-slider-prev" class="rotate-180 group">
                    <svg width="30" height="29" viewBox="0 0 30 29" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.462476" y="0.3625" width="28.275" height="28.275" rx="5.4375"
                            stroke="#85858B" stroke-width="0.725"
                            class="group-hover:stroke-primary transition-colors" />
                        <path
                            d="M13.4255 17.7963C13.3337 17.7963 13.2418 17.7625 13.1693 17.69L10.2355 14.7562C10.0953 14.616 10.0953 14.384 10.2355 14.2438L13.1693 11.31C13.3095 11.1698 13.5415 11.1698 13.6817 11.31C13.8218 11.4502 13.8218 11.6822 13.6817 11.8223L11.004 14.5L13.6817 17.1777C13.8218 17.3178 13.8218 17.5498 13.6817 17.69C13.614 17.7625 13.5173 17.7963 13.4255 17.7963Z"
                            fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                        <path
                            d="M18.7083 14.8625H10.5738C10.3756 14.8625 10.2113 14.6982 10.2113 14.5C10.2113 14.3018 10.3756 14.1375 10.5738 14.1375H18.7083C18.9065 14.1375 19.0708 14.3018 19.0708 14.5C19.0708 14.6982 18.9065 14.8625 18.7083 14.8625Z"
                            fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                    </svg>
                </button>
                <button id="category-slider-next" class="group">
                    <svg width="30" height="29" viewBox="0 0 30 29" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.462476" y="0.3625" width="28.275" height="28.275" rx="5.4375"
                            stroke="#85858B" stroke-width="0.725"
                            class="group-hover:stroke-primary transition-colors" />
                        <path
                            d="M13.4255 17.7963C13.3337 17.7963 13.2418 17.7625 13.1693 17.69L10.2355 14.7562C10.0953 14.616 10.0953 14.384 10.2355 14.2438L13.1693 11.31C13.3095 11.1698 13.5415 11.1698 13.6817 11.31C13.8218 11.4502 13.8218 11.6822 13.6817 11.8223L11.004 14.5L13.6817 17.1777C13.8218 17.3178 13.8218 17.5498 13.6817 17.69C13.614 17.7625 13.5173 17.7963 13.4255 17.7963Z"
                            fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                        <path
                            d="M18.7083 14.8625H10.5738C10.3756 14.8625 10.2113 14.6982 10.2113 14.5C10.2113 14.3018 10.3756 14.1375 10.5738 14.1375H18.7083C18.9065 14.1375 19.0708 14.3018 19.0708 14.5C19.0708 14.6982 18.9065 14.8625 18.7083 14.8625Z"
                            fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Recent Tests Section -->
<section class="container py-8 md:py-16">
    <div class="flex flex-col gap-8">
        <!-- Tests Heading -->
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2 md:gap-3">
                <img src="{{ asset('assets/images/home/paste-icon.svg') }}" alt="" class="w-6 h-6 md:w-8 md:h-8">
                <h2 class="text-xl md:text-3xl font-medium text-black">آزمون‌های اخیر</h2>
            </div>
            <a href="#" class="flex items-center gap-2 text-[#3C3D45] group">
                <span class="text-base md:text-lg group-hover:text-primary transition">مشاهده همه</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="hidden md:block">
                    <path
                        d="M7.97495 15.6833C7.81662 15.6833 7.65828 15.625 7.53328 15.5L2.47495 10.4417C2.23328 10.2 2.23328 9.80001 2.47495 9.55834L7.53328 4.50001C7.77495 4.25834 8.17495 4.25834 8.41662 4.50001C8.65828 4.74167 8.65828 5.14167 8.41662 5.38334L3.79995 10L8.41662 14.6167C8.65828 14.8583 8.65828 15.2583 8.41662 15.5C8.29995 15.625 8.13328 15.6833 7.97495 15.6833Z"
                        fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                    <path
                        d="M17.0834 10.625H3.05835C2.71668 10.625 2.43335 10.3417 2.43335 10C2.43335 9.65833 2.71668 9.375 3.05835 9.375H17.0834C17.425 9.375 17.7084 9.65833 17.7084 10C17.7084 10.3417 17.425 10.625 17.0834 10.625Z"
                        fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                </svg>
            </a>
        </div>

        <!-- Desktop Test Cards -->
        <div class="hidden md:flex flex-col gap-8">
            @for ($i = 0; $i < 3; $i++)
            <!-- Test {{ $i + 1 }} -->
            <div
                class="flex items-center gap-2 py-4 bg-[#F5FFF1] rounded-2xl border border-primary-light border-l-0 border-t-0">
                <div class="relative min-w-fit">
                    <div
                        class="bg-white rounded-full shadow-sm top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 absolute w-28 h-28">
                    </div>
                    <div class="z-10 relative">
                        <img src="{{ asset('assets/images/home/test.png') }}" alt="تست"
                            class="w-full h-36 object-cover pr-12">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-xl font-medium text-[#2E2E2E]">تست MBTI</h3>
                    <p class="text-gray-700 text-lg leading-7">
                        به‌طور مشخص، تست شخصیت شناسی به افراد کمک می‌کند تا شناخت بهتری از خود و دیگران پیدا
                        کند. این شناخت یکی از باارزش‌ترین خصیصه‌هایی است که افراد در هر سازمان یا مجموعه‌ای
                        می‌توانند در اختیار داشته باشند.
                    </p>
                </div>
                <div class="flex flex-col gap-4 p-6">
                    <div class="flex gap-4">
                        <div class="flex flex-col gap-2">
                            <button>
                                <img src="{{ asset('assets/images/home/share-icon.svg') }}" alt="" class="w-5 h-5">
                            </button>
                            <span class="text-sm">52</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <button>
                                <img src="{{ asset('assets/images/home/favorite-icon.svg') }}" alt="" class="w-5 h-5">
                            </button>
                            <span class="text-sm">94</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <button>
                                <img src="{{ asset('assets/images/home/eye-icon.svg') }}" alt="" class="w-5 h-5">
                            </button>
                            <span class="text-sm">150</span>
                        </div>
                    </div>
                    <a href="#"
                        class="bg-gradient-to-br from-[#BDFFB89E] to-[#59FF4682] text-black px-6 py-2 rounded-xl hover:bg-primary-light transition-colors">
                        شروع
                    </a>
                </div>
            </div>
            @endfor
        </div>

        <!-- Mobile Slider Cards -->
        <div class="md:hidden relative">
            <!-- Swiper Container -->
            <div class="swiper testSwiper">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 3; $i++)
                    <!-- Slide {{ $i + 1 }} -->
                    <div class="swiper-slide">
                        <!-- Test {{ $i + 1 }} -->
                        <div class="flex items-start gap-4">
                            <div class="w-1/2 flex flex-col items-center gap-2 p-8 bg-[#F5FFF1] rounded-2xl">
                                <div class="relative min-w-fit">
                                    <div
                                        class="bg-white rounded-full shadow-sm top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 absolute w-28 h-28">
                                    </div>
                                    <div class="z-10 relative">
                                        <img src="{{ asset('assets/images/home/test.png') }}" alt="تست"
                                            class="w-full h-36 object-cover sm:pr-12">
                                    </div>
                                </div>
                                <h3 class="font-medium text-[#2E2E2E]">تست MBTI</h3>
                                <div class="flex flex-col gap-4">
                                    <div class="flex gap-4">
                                        <div class="flex flex-col gap-2">
                                            <button>
                                                <img src="{{ asset('assets/images/home/share-icon.svg') }}" alt=""
                                                    class="w-5 h-5">
                                            </button>
                                            <span class="text-sm">52</span>
                                        </div>
                                        <div class="flex flex-col gap-2">
                                            <button>
                                                <img src="{{ asset('assets/images/home/favorite-icon.svg') }}" alt=""
                                                    class="w-5 h-5">
                                            </button>
                                            <span class="text-sm">94</span>
                                        </div>
                                        <div class="flex flex-col gap-2">
                                            <button>
                                                <img src="{{ asset('assets/images/home/eye-icon.svg') }}" alt=""
                                                    class="w-5 h-5">
                                            </button>
                                            <span class="text-sm">150</span>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="flex justify-center items-center bg-gradient-to-br from-[#BDFFB89E] to-[#59FF4682] text-black text-sm px-6 py-2 rounded-xl hover:bg-primary-light transition-colors">
                                        شروع
                                    </a>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <p class="text-gray-700 text-sm leading-10 text-justify line-clamp-[7]">
                                    به‌طور مشخص، تست شخصیت شناسی به افراد کمک می‌کند تا شناخت بهتری از خود و
                                    دیگران پیدا
                                    کند. این شناخت یکی از باارزش‌ترین خصیصه‌هایی است که افراد در هر سازمان
                                    یا
                                    مجموعه‌ای
                                    می‌توانند در اختیار داشته باشند.
                                </p>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex items-center gap-2 absolute bottom-2 left-0 z-10">
                <button id="test-slider-prev" class="rotate-180 group">
                    <svg width="30" height="29" viewBox="0 0 30 29" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="fill-white">
                        <rect x="0.462476" y="0.3625" width="28.275" height="28.275" rx="5.4375"
                            stroke="#85858B" stroke-width="0.725"
                            class="group-hover:stroke-primary transition-colors" />
                        <path
                            d="M13.4255 17.7963C13.3337 17.7963 13.2418 17.7625 13.1693 17.69L10.2355 14.7562C10.0953 14.616 10.0953 14.384 10.2355 14.2438L13.1693 11.31C13.3095 11.1698 13.5415 11.1698 13.6817 11.31C13.8218 11.4502 13.8218 11.6822 13.6817 11.8223L11.004 14.5L13.6817 17.1777C13.8218 17.3178 13.8218 17.5498 13.6817 17.69C13.614 17.7625 13.5173 17.7963 13.4255 17.7963Z"
                            fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                        <path
                            d="M18.7083 14.8625H10.5738C10.3756 14.8625 10.2113 14.6982 10.2113 14.5C10.2113 14.3018 10.3756 14.1375 10.5738 14.1375H18.7083C18.9065 14.1375 19.0708 14.3018 19.0708 14.5C19.0708 14.6982 18.9065 14.8625 18.7083 14.8625Z"
                            fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                    </svg>
                </button>
                <button id="test-slider-next" class="group">
                    <svg width="30" height="29" viewBox="0 0 30 29" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="fill-white">
                        <rect x="0.462476" y="0.3625" width="28.275" height="28.275" rx="5.4375"
                            stroke="#85858B" stroke-width="0.725"
                            class="group-hover:stroke-primary transition-colors" />
                        <path
                            d="M13.4255 17.7963C13.3337 17.7963 13.2418 17.7625 13.1693 17.69L10.2355 14.7562C10.0953 14.616 10.0953 14.384 10.2355 14.2438L13.1693 11.31C13.3095 11.1698 13.5415 11.1698 13.6817 11.31C13.8218 11.4502 13.8218 11.6822 13.6817 11.8223L11.004 14.5L13.6817 17.1777C13.8218 17.3178 13.8218 17.5498 13.6817 17.69C13.614 17.7625 13.5173 17.7963 13.4255 17.7963Z"
                            fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                        <path
                            d="M18.7083 14.8625H10.5738C10.3756 14.8625 10.2113 14.6982 10.2113 14.5C10.2113 14.3018 10.3756 14.1375 10.5738 14.1375H18.7083C18.9065 14.1375 19.0708 14.3018 19.0708 14.5C19.0708 14.6982 18.9065 14.8625 18.7083 14.8625Z"
                            fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Articles Section -->
<section class="container py-8 md:py-16 bg-[#FAFAFA] md:bg-white">
    <div class="flex flex-col gap-8">
        <!-- Articles Heading -->
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2 md:gap-3">
                <img src="{{ asset('assets/images/home/copy-icon.svg') }}" alt="" class="w-6 h-6 md:w-8 md:h-8">
                <h2 class="text-xl md:text-3xl font-medium text-black">مقالات</h2>
            </div>
            <a href="#" class="flex items-center gap-2 text-[#3C3D45] group">
                <span class="text-base md:text-lg group-hover:text-primary transition">مشاهده همه</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="hidden md:block">
                    <path
                        d="M7.97495 15.6833C7.81662 15.6833 7.65828 15.625 7.53328 15.5L2.47495 10.4417C2.23328 10.2 2.23328 9.80001 2.47495 9.55834L7.53328 4.50001C7.77495 4.25834 8.17495 4.25834 8.41662 4.50001C8.65828 4.74167 8.65828 5.14167 8.41662 5.38334L3.79995 10L8.41662 14.6167C8.65828 14.8583 8.65828 15.2583 8.41662 15.5C8.29995 15.625 8.13328 15.6833 7.97495 15.6833Z"
                        fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                    <path
                        d="M17.0834 10.625H3.05835C2.71668 10.625 2.43335 10.3417 2.43335 10C2.43335 9.65833 2.71668 9.375 3.05835 9.375H17.0834C17.425 9.375 17.7084 9.65833 17.7084 10C17.7084 10.3417 17.425 10.625 17.0834 10.625Z"
                        fill="#3C3D45" class="group-hover:fill-primary transition-colors" />
                </svg>
            </a>
        </div>

        <!-- Desktop Articles Grid -->
        <div class="hidden md:grid grid-cols-3 gap-8">
            @php
                $articles = [
                    ['image' => 'article-1.png', 'title' => 'کنترل احساسات'],
                    ['image' => 'article-2.png', 'title' => 'حل اختلافات خانوادگی'],
                    ['image' => 'article-3.png', 'title' => 'خودشناسی'],
                ];
            @endphp

            @foreach ($articles as $article)
            <!-- Article -->
            <a href="#"
                class="flex flex-col bg-white rounded-xl border-r-2 border-b-2 border-primary-light hover:border-primary-dark transition-colors">
                <div class="relative">
                    <img src="{{ asset('assets/images/home/' . $article['image']) }}" alt="{{ $article['title'] }}"
                        class="w-full h-auto rounded-t-xl">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-medium mb-3">{{ $article['title'] }}</h3>
                    <p class="text-gray-600 text-sm leading-7 mb-4 line-clamp-4">
                        خانواده اولین و در عین حال مهم‌ ترین نهاد اجتماعی است که فرد در آن متولد می‌ شود.
                        اهمیت نقش خانواده در شکل‌ گیری شخصیت غیر قابل انکار است. خانواده کانون اصلی رشد و
                        تعالی افراد محسوب می‌ شود و...
                    </p>
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-2 text-[#9D9EA2] text-sm">
                            <span>۱۴ شهریور</span>
                            <div class="w-px h-4 bg-[#9D9EA2]"></div>
                            <span>۱۰ دقیقه</span>
                        </div>
                        <div class="flex gap-2">
                            <span
                                class="bg-[#EDFFF2] text-[#9D9EA2] text-xs rounded-full px-3 py-1">روانکاوی</span>
                            <span
                                class="bg-[#EDFFF2] text-[#9D9EA2] text-xs rounded-full px-3 py-1">روانشناسی</span>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <!-- Mobile Articles Slider -->
        <div class="md:hidden">
            <!-- Swiper Container -->
            <div class="swiper articleSwiper">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    @foreach ($articles as $article)
                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Article -->
                        <a href="#"
                            class="flex flex-col bg-white rounded-xl border-r-2 border-b-2 border-primary-light hover:border-primary-dark transition-colors">
                            <div class="relative">
                                <img src="{{ asset('assets/images/home/' . $article['image']) }}" alt="{{ $article['title'] }}"
                                    class="w-full h-auto rounded-t-xl">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-medium mb-3">{{ $article['title'] }}</h3>
                                <p class="text-gray-600 text-sm leading-7 mb-4 line-clamp-4">
                                    خانواده اولین و در عین حال مهم‌ ترین نهاد اجتماعی است که فرد در آن متولد می‌
                                    شود.
                                    اهمیت نقش خانواده در شکل‌ گیری شخصیت غیر قابل انکار است. خانواده کانون اصلی
                                    رشد و
                                    تعالی افراد محسوب می‌ شود و...
                                </p>
                                <div class="flex flex-col gap-4">
                                    <div class="flex items-center gap-2 text-[#9D9EA2] text-sm">
                                        <span>۱۴ شهریور</span>
                                        <div class="w-px h-4 bg-[#9D9EA2]"></div>
                                        <span>۱۰ دقیقه</span>
                                    </div>
                                    <div class="flex gap-2">
                                        <span
                                            class="bg-[#EDFFF2] text-[#9D9EA2] text-xs rounded-full px-3 py-1">روانکاوی</span>
                                        <span
                                            class="bg-[#EDFFF2] text-[#9D9EA2] text-xs rounded-full px-3 py-1">روانشناسی</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex items-center justify-center gap-8 mt-8">
                <button id="article-slider-prev"
                    class="text-sm text-text-dark text-opacity-90 hover:text-primary transition-colors">
                    قبلی
                </button>
                <button id="article-slider-next"
                    class="text-sm text-text-dark text-opacity-90 hover:text-primary transition-colors">
                    بعدی
                </button>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<!-- Category Swiper -->
<script>
    // Initialize Swiper
    const categorySwiper = new Swiper('.categorySwiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        centeredSlides: true,
        navigation: {
            nextEl: '#category-slider-next',
            prevEl: '#category-slider-prev',
        },
        breakpoints: {
            // Mobile small
            320: {
                slidesPerView: 1.5,
                spaceBetween: 20,
                centeredSlides: true,
            },
            380: {
                slidesPerView: 1.5,
                spaceBetween: 20,
                centeredSlides: true,
            },
            // Mobile standard
            440: {
                slidesPerView: 1.5,
                spaceBetween: 20,
                centeredSlides: true,
            },
            // Tablet
            640: {
                slidesPerView: 1.5,
                spaceBetween: 20,
                centeredSlides: true,
            },
            // Tablet landscape
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
                centeredSlides: false,
            },
            // Desktop small
            1024: {
                slidesPerView: 3,
                spaceBetween: 10,
                centeredSlides: false,
            },
            // Desktop medium
            1280: {
                slidesPerView: 3,
                spaceBetween: 30,
                centeredSlides: false,
            },
            // Desktop large
            1440: {
                slidesPerView: 3,
                spaceBetween: 20,
                centeredSlides: false,
            }
        },
    });
</script>
<!-- Test Swiper -->
<script>
    // Initialize Swiper
    const testSwiper = new Swiper('.testSwiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        centeredSlides: true,
        navigation: {
            nextEl: '#test-slider-next',
            prevEl: '#test-slider-prev',
        },
    });
</script>
<!-- Article Swiper -->
<script>
    // Initialize Swiper
    const articleSwiper = new Swiper('.articleSwiper', {
        slidesPerView: 1,
        spaceBetween: 40,
        centeredSlides: true,
        navigation: {
            nextEl: '#article-slider-next',
            prevEl: '#article-slider-prev',
        },
    });
</script>
@endpush
