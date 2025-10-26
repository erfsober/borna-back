@extends('borna.layouts.app')

@section('title', 'روانشناسی برنا | جستجو')

@section('description', 'جستجو در مرکز روانشناسی برنا')

@section('keywords', 'روانشناسی، برنا، جستجو')

@section('content')
    <section class="container py-8 md:py-16 min-h-screen">
        <div class="flex flex-col gap-12 md:gap-20">
            <!-- Search Box -->
            <div class="w-full md:w-10/12 mx-auto bg-white rounded-lg border border-gray-300 relative">
                <input type="text"
                    class="w-full p-3 md:p-4 text-gray-700 text-sm md:text-base rounded-lg focus:outline-none border focus:border-primary search-input"
                    placeholder="عبارت خود را وارد کنید...">
                <div class="absolute left-3 md:left-4 top-1/2 transform -translate-y-1/2">
                    <img src="{{ asset('assets/images/search/search-icon.svg') }}" alt="search">
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex flex-col gap-10">
                <!-- Test Categories Section 1 -->
                <div class="flex flex-col gap-6">
                    <!-- Header -->
                    <div class="flex items-center gap-2 md:gap-3">
                        <img src="{{ asset('assets/images/search/test-icon.svg') }}" alt="test" class="w-5 h-5 md:w-6 md:h-6">
                        <h3 class="text-xl md:text-3xl">آزمون</h3>
                    </div>

                    <!-- Desktop Grid -->
                    <div
                        class="hidden md:grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 border-b border-gray-300 pb-10">
                        <!-- Category 1 -->
                        <div class="bg-gradient-to-b from-white to-[#FFAFEE]/40 rounded-xl border border-gray-100 p-5 category-card"
                            data-category="test">
                            <div class="flex flex-col items-center h-full gap-6 py-6">
                                <div
                                    class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#C06EF3] bg-[#FFAFEE1A]">
                                    <img src="{{ asset('assets/images/search/Breastfeeding.svg') }}" alt="" class="w-20 h-20">
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                </div>
                                <h3 class="text-xl font-normal">تست‌های رشد و کودک</h3>
                                <button
                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                    مشاهده
                                </button>
                            </div>
                        </div>
                        <!-- Category 2 -->
                        <div class="bg-gradient-to-b from-white to-[#F6FFA3]/40 rounded-xl border border-gray-100 p-5 category-card"
                            data-category="test">
                            <div class="flex flex-col items-center h-full gap-6 py-6">
                                <div
                                    class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#CED900] bg-[#F8FF6B26]">
                                    <img src="{{ asset('assets/images/search/Brain.svg') }}" alt="" class="w-20 h-20">
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                </div>
                                <h3 class="text-xl font-normal">تست های هوش و حافظه</h3>
                                <button
                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                    مشاهده
                                </button>
                            </div>
                        </div>
                        <!-- Category 3 -->
                        <div class="bg-gradient-to-b from-white to-[#F6E2C8]/40 rounded-xl border border-gray-100 p-5 category-card"
                            data-category="test">
                            <div class="flex flex-col items-center h-full gap-6 py-6">
                                <div
                                    class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#997C70] bg-[#997C701A]">
                                    <img src="{{ asset('assets/images/search/Job.svg') }}" alt="" class="w-20 h-20">
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                </div>
                                <h3 class="text-xl font-normal">تست های شغلی و سازمانی</h3>
                                <button
                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                    مشاهده
                                </button>
                            </div>
                        </div>
                        <!-- Category 4 -->
                        <div class="bg-gradient-to-b from-white to-[#BEF8FF]/40 rounded-xl border border-gray-100 p-5 category-card"
                            data-category="test">
                            <div class="flex flex-col items-center h-full gap-6 py-6">
                                <div
                                    class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#1B75E8] bg-[#1B75E826]">
                                    <img src="{{ asset('assets/images/search/School.svg') }}" alt="" class="w-20 h-20">
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                </div>
                                <h3 class="text-xl font-normal">تست‌های تحصیلی</h3>
                                <button
                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                    مشاهده
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Slider -->
                    <div class="md:hidden relative px-20">
                        <!-- Swiper Container -->
                        <div class="swiper testSwiper">
                            <!-- Swiper Wrapper -->
                            <div class="swiper-wrapper pb-3">
                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <!-- Category 1 -->
                                    <div class="bg-gradient-to-b from-white to-[#FFAFEE]/40 rounded-xl border border-[#FD74F4] p-5 category-card"
                                        data-category="test">
                                        <div class="flex flex-col items-center h-full gap-4 py-4">
                                            <div
                                                class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#C06EF3] bg-[#FFAFEE1A]">
                                                <img src="{{ asset('assets/images/search/Breastfeeding.svg') }}" alt=""
                                                    class="w-16 h-16">
                                            </div>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                            </div>
                                            <h3 class="text-sm font-normal">تست‌های رشد و کودک</h3>
                                            <button
                                                class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                مشاهده
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <!-- Category 2 -->
                                    <div class="bg-gradient-to-b from-white to-[#F6FFA3]/40 rounded-xl border border-[#CED900] p-5 category-card"
                                        data-category="test">
                                        <div class="flex flex-col items-center h-full gap-4 py-4">
                                            <div
                                                class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#CED900] bg-[#F8FF6B26]">
                                                <img src="{{ asset('assets/images/search/Brain.svg') }}" alt=""
                                                    class="w-16 h-16">
                                            </div>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                            </div>
                                            <h3 class="text-sm font-normal">تست های هوش و حافظه</h3>
                                            <button
                                                class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                مشاهده
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <!-- Category 3 -->
                                    <div class="bg-gradient-to-b from-white to-[#E8E8E8]/40 rounded-xl border border-[#997C70] p-5 category-card"
                                        data-category="test">
                                        <div class="flex flex-col items-center h-full gap-4 py-4">
                                            <div
                                                class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#997C70] bg-[#997C701A]">
                                                <img src="{{ asset('assets/images/search/Job.svg') }}" alt="" class="w-16 h-16">
                                            </div>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                            </div>
                                            <h3 class="text-sm font-normal">تست های شغلی و سازمانی</h3>
                                            <button
                                                class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                مشاهده
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 4 -->
                                <div class="swiper-slide">
                                    <!-- Category 4 -->
                                    <div class="bg-gradient-to-b from-white to-[#BEF8FF]/40 rounded-xl border border-[#8DFFFD] p-5 category-card"
                                        data-category="test">
                                        <div class="flex flex-col items-center h-full gap-4 py-4">
                                            <div
                                                class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#1B75E8] bg-[#1B75E826]">
                                                <img src="{{ asset('assets/images/search/School.svg') }}" alt=""
                                                    class="w-16 h-16">
                                            </div>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                            </div>
                                            <h3 class="text-sm font-normal">تست‌های تحصیلی</h3>
                                            <button
                                                class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                مشاهده
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="swiper-pagination !relative !bottom-0"></div>
                        </div>

                        <!-- Navigation Buttons -->
                        <button id="test-slider-prev"
                            class="absolute right-4 top-1/2 -translate-y-1/2 transform z-10 group">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.5 3.64583C9.84856 3.64583 3.64583 9.84856 3.64583 17.5C3.64583 25.1514 9.84856 31.3542 17.5 31.3542C25.1514 31.3542 31.3542 25.1514 31.3542 17.5C31.3542 9.84856 25.1514 3.64583 17.5 3.64583ZM2.1875 17.5C2.1875 9.04314 9.04314 2.1875 17.5 2.1875C25.9569 2.1875 32.8125 9.04314 32.8125 17.5C32.8125 25.9569 25.9569 32.8125 17.5 32.8125C9.04314 32.8125 2.1875 25.9569 2.1875 17.5Z"
                                    fill="black" class="group-hover:fill-primary transition-colors" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M25.5208 18.2292H8.75V16.7709H25.5208V18.2292Z" fill="black"
                                    class="group-hover:fill-primary transition-colors" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.489 17.5L19.9004 12.9114L20.9316 11.8802L26.0358 16.9844C26.3205 17.2692 26.3205 17.7309 26.0358 18.0156L20.9316 23.1198L19.9004 22.0886L24.489 17.5Z"
                                    fill="black" class="group-hover:fill-primary transition-colors" />
                            </svg>
                        </button>
                        <button id="test-slider-next"
                            class="rotate-180 absolute left-4 top-1/2 -translate-y-1/2 transform z-10 group">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.5 3.64583C9.84856 3.64583 3.64583 9.84856 3.64583 17.5C3.64583 25.1514 9.84856 31.3542 17.5 31.3542C25.1514 31.3542 31.3542 25.1514 31.3542 17.5C31.3542 9.84856 25.1514 3.64583 17.5 3.64583ZM2.1875 17.5C2.1875 9.04314 9.04314 2.1875 17.5 2.1875C25.9569 2.1875 32.8125 9.04314 32.8125 17.5C32.8125 25.9569 25.9569 32.8125 17.5 32.8125C9.04314 32.8125 2.1875 25.9569 2.1875 17.5Z"
                                    fill="black" class="group-hover:fill-primary transition-colors" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M25.5208 18.2292H8.75V16.7709H25.5208V18.2292Z" fill="black"
                                    class="group-hover:fill-primary transition-colors" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.489 17.5L19.9004 12.9114L20.9316 11.8802L26.0358 16.9844C26.3205 17.2692 26.3205 17.7309 26.0358 18.0156L20.9316 23.1198L19.9004 22.0886L24.489 17.5Z"
                                    fill="black" class="group-hover:fill-primary transition-colors" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Bootcamp Categories Section 2 -->
                <div class="flex flex-col gap-6">
                    <!-- Header -->
                    <div class="flex items-center gap-2 md:gap-3">
                        <img src="{{ asset('assets/images/search/video-icon.svg') }}" alt="test" class="w-5 h-5 md:w-6 md:h-6">
                        <h3 class="text-xl md:text-3xl">بوت کمپ</h3>
                    </div>

                    <!-- Desktop Grid -->
                    <div
                        class="hidden md:grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 border-b border-gray-300 pb-10">
                        <!-- Category 1 -->
                        <div class="bg-gradient-to-b from-white to-[#FFAFEE]/40 rounded-xl border border-gray-100 p-5 category-card"
                            data-category="test">
                            <div class="flex flex-col items-center h-full gap-6 py-6">
                                <div
                                    class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#C06EF3] bg-[#FFAFEE1A]">
                                    <img src="{{ asset('assets/images/search/Breastfeeding.svg') }}" alt="" class="w-20 h-20">
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                </div>
                                <h3 class="text-xl font-normal">تست‌های رشد و کودک</h3>
                                <button
                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                    مشاهده
                                </button>
                            </div>
                        </div>
                        <!-- Category 2 -->
                        <div class="bg-gradient-to-b from-white to-[#F6FFA3]/40 rounded-xl border border-gray-100 p-5 category-card"
                            data-category="test">
                            <div class="flex flex-col items-center h-full gap-6 py-6">
                                <div
                                    class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#CED900] bg-[#F8FF6B26]">
                                    <img src="{{ asset('assets/images/search/Brain.svg') }}" alt="" class="w-20 h-20">
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                </div>
                                <h3 class="text-xl font-normal">تست های هوش و حافظه</h3>
                                <button
                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                    مشاهده
                                </button>
                            </div>
                        </div>
                        <!-- Category 3 -->
                        <div class="bg-gradient-to-b from-white to-[#F6E2C8]/40 rounded-xl border border-gray-100 p-5 category-card"
                            data-category="test">
                            <div class="flex flex-col items-center h-full gap-6 py-6">
                                <div
                                    class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#997C70] bg-[#997C701A]">
                                    <img src="{{ asset('assets/images/search/Job.svg') }}" alt="" class="w-20 h-20">
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                </div>
                                <h3 class="text-xl font-normal">تست های شغلی و سازمانی</h3>
                                <button
                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                    مشاهده
                                </button>
                            </div>
                        </div>
                        <!-- Category 4 -->
                        <div class="bg-gradient-to-b from-white to-[#BEF8FF]/40 rounded-xl border border-gray-100 p-5 category-card"
                            data-category="test">
                            <div class="flex flex-col items-center h-full gap-6 py-6">
                                <div
                                    class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#1B75E8] bg-[#1B75E826]">
                                    <img src="{{ asset('assets/images/search/School.svg') }}" alt="" class="w-20 h-20">
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                </div>
                                <h3 class="text-xl font-normal">تست‌های تحصیلی</h3>
                                <button
                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                    مشاهده
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Slider -->
                    <div class="md:hidden relative px-20">
                        <!-- Swiper Container -->
                        <div class="swiper bootcampSwiper">
                            <!-- Swiper Wrapper -->
                            <div class="swiper-wrapper pb-3">
                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <!-- Category 1 -->
                                    <div class="bg-gradient-to-b from-white to-[#FFAFEE]/40 rounded-xl border border-[#FD74F4] p-5 category-card"
                                        data-category="test">
                                        <div class="flex flex-col items-center h-full gap-4 py-4">
                                            <div
                                                class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#C06EF3] bg-[#FFAFEE1A]">
                                                <img src="{{ asset('assets/images/search/Breastfeeding.svg') }}" alt=""
                                                    class="w-16 h-16">
                                            </div>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                            </div>
                                            <h3 class="text-sm font-normal">تست‌های رشد و کودک</h3>
                                            <button
                                                class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                مشاهده
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <!-- Category 2 -->
                                    <div class="bg-gradient-to-b from-white to-[#F6FFA3]/40 rounded-xl border border-[#CED900] p-5 category-card"
                                        data-category="test">
                                        <div class="flex flex-col items-center h-full gap-4 py-4">
                                            <div
                                                class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#CED900] bg-[#F8FF6B26]">
                                                <img src="{{ asset('assets/images/search/Brain.svg') }}" alt=""
                                                    class="w-16 h-16">
                                            </div>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                            </div>
                                            <h3 class="text-sm font-normal">تست های هوش و حافظه</h3>
                                            <button
                                                class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                مشاهده
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <!-- Category 3 -->
                                    <div class="bg-gradient-to-b from-white to-[#E8E8E8]/40 rounded-xl border border-[#997C70] p-5 category-card"
                                        data-category="test">
                                        <div class="flex flex-col items-center h-full gap-4 py-4">
                                            <div
                                                class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#997C70] bg-[#997C701A]">
                                                <img src="{{ asset('assets/images/search/Job.svg') }}" alt="" class="w-16 h-16">
                                            </div>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                            </div>
                                            <h3 class="text-sm font-normal">تست های شغلی و سازمانی</h3>
                                            <button
                                                class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                مشاهده
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 4 -->
                                <div class="swiper-slide">
                                    <!-- Category 4 -->
                                    <div class="bg-gradient-to-b from-white to-[#BEF8FF]/40 rounded-xl border border-[#8DFFFD] p-5 category-card"
                                        data-category="test">
                                        <div class="flex flex-col items-center h-full gap-4 py-4">
                                            <div
                                                class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#1B75E8] bg-[#1B75E826]">
                                                <img src="{{ asset('assets/images/search/School.svg') }}" alt=""
                                                    class="w-16 h-16">
                                            </div>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                            </div>
                                            <h3 class="text-sm font-normal">تست‌های تحصیلی</h3>
                                            <button
                                                class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                مشاهده
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="swiper-pagination !relative !bottom-0"></div>
                        </div>

                        <!-- Navigation Buttons -->
                        <button id="bootcamp-slider-prev"
                            class="absolute right-4 top-1/2 -translate-y-1/2 transform z-10 group">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.5 3.64583C9.84856 3.64583 3.64583 9.84856 3.64583 17.5C3.64583 25.1514 9.84856 31.3542 17.5 31.3542C25.1514 31.3542 31.3542 25.1514 31.3542 17.5C31.3542 9.84856 25.1514 3.64583 17.5 3.64583ZM2.1875 17.5C2.1875 9.04314 9.04314 2.1875 17.5 2.1875C25.9569 2.1875 32.8125 9.04314 32.8125 17.5C32.8125 25.9569 25.9569 32.8125 17.5 32.8125C9.04314 32.8125 2.1875 25.9569 2.1875 17.5Z"
                                    fill="black" class="group-hover:fill-primary transition-colors" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M25.5208 18.2292H8.75V16.7709H25.5208V18.2292Z" fill="black"
                                    class="group-hover:fill-primary transition-colors" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.489 17.5L19.9004 12.9114L20.9316 11.8802L26.0358 16.9844C26.3205 17.2692 26.3205 17.7309 26.0358 18.0156L20.9316 23.1198L19.9004 22.0886L24.489 17.5Z"
                                    fill="black" class="group-hover:fill-primary transition-colors" />
                            </svg>
                        </button>
                        <button id="bootcamp-slider-next"
                            class="rotate-180 absolute left-4 top-1/2 -translate-y-1/2 transform z-10 group">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.5 3.64583C9.84856 3.64583 3.64583 9.84856 3.64583 17.5C3.64583 25.1514 9.84856 31.3542 17.5 31.3542C25.1514 31.3542 31.3542 25.1514 31.3542 17.5C31.3542 9.84856 25.1514 3.64583 17.5 3.64583ZM2.1875 17.5C2.1875 9.04314 9.04314 2.1875 17.5 2.1875C25.9569 2.1875 32.8125 9.04314 32.8125 17.5C32.8125 25.9569 25.9569 32.8125 17.5 32.8125C9.04314 32.8125 2.1875 25.9569 2.1875 17.5Z"
                                    fill="black" class="group-hover:fill-primary transition-colors" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M25.5208 18.2292H8.75V16.7709H25.5208V18.2292Z" fill="black"
                                    class="group-hover:fill-primary transition-colors" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.489 17.5L19.9004 12.9114L20.9316 11.8802L26.0358 16.9844C26.3205 17.2692 26.3205 17.7309 26.0358 18.0156L20.9316 23.1198L19.9004 22.0886L24.489 17.5Z"
                                    fill="black" class="group-hover:fill-primary transition-colors" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Blog Categories Section 3 -->
                <div class="flex flex-col gap-6">
                    <!-- Header -->
                    <div class="flex items-center gap-2 md:gap-3">
                        <img src="{{ asset('assets/images/search/book-icon.svg') }}" alt="test" class="w-5 h-5 md:w-6 md:h-6">
                        <h3 class="text-xl md:text-3xl">وبلاگ</h3>
                    </div>

                    <!-- Desktop Grid -->
                    <div
                        class="hidden md:grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 border-b border-gray-300 pb-10">
                        <!-- Category 1 -->
                        <div class="bg-gradient-to-b from-white to-[#FFAFEE]/40 rounded-xl border border-gray-100 p-5 category-card"
                            data-category="test">
                            <div class="flex flex-col items-center h-full gap-6 py-6">
                                <div
                                    class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#C06EF3] bg-[#FFAFEE1A]">
                                    <img src="{{ asset('assets/images/search/Breastfeeding.svg') }}" alt="" class="w-20 h-20">
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                </div>
                                <h3 class="text-xl font-normal">تست‌های رشد و کودک</h3>
                                <button
                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                    مشاهده
                                </button>
                            </div>
                        </div>
                        <!-- Category 2 -->
                        <div class="bg-gradient-to-b from-white to-[#F6FFA3]/40 rounded-xl border border-gray-100 p-5 category-card"
                            data-category="test">
                            <div class="flex flex-col items-center h-full gap-6 py-6">
                                <div
                                    class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#CED900] bg-[#F8FF6B26]">
                                    <img src="{{ asset('assets/images/search/Brain.svg') }}" alt="" class="w-20 h-20">
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                </div>
                                <h3 class="text-xl font-normal">تست های هوش و حافظه</h3>
                                <button
                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                    مشاهده
                                </button>
                            </div>
                        </div>
                        <!-- Category 3 -->
                        <div class="bg-gradient-to-b from-white to-[#F6E2C8]/40 rounded-xl border border-gray-100 p-5 category-card"
                            data-category="test">
                            <div class="flex flex-col items-center h-full gap-6 py-6">
                                <div
                                    class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#997C70] bg-[#997C701A]">
                                    <img src="{{ asset('assets/images/search/Job.svg') }}" alt="" class="w-20 h-20">
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                </div>
                                <h3 class="text-xl font-normal">تست های شغلی و سازمانی</h3>
                                <button
                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                    مشاهده
                                </button>
                            </div>
                        </div>
                        <!-- Category 4 -->
                        <div class="bg-gradient-to-b from-white to-[#BEF8FF]/40 rounded-xl border border-gray-100 p-5 category-card"
                            data-category="test">
                            <div class="flex flex-col items-center h-full gap-6 py-6">
                                <div
                                    class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#1B75E8] bg-[#1B75E826]">
                                    <img src="{{ asset('assets/images/search/School.svg') }}" alt="" class="w-20 h-20">
                                </div>
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                </div>
                                <h3 class="text-xl font-normal">تست‌های تحصیلی</h3>
                                <button
                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                    مشاهده
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Slider -->
                    <div class="md:hidden relative px-20">
                        <!-- Swiper Container -->
                        <div class="swiper blogSwiper">
                            <!-- Swiper Wrapper -->
                            <div class="swiper-wrapper pb-3">
                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <!-- Category 1 -->
                                    <div class="bg-gradient-to-b from-white to-[#FFAFEE]/40 rounded-xl border border-[#FD74F4] p-5 category-card"
                                        data-category="test">
                                        <div class="flex flex-col items-center h-full gap-4 py-4">
                                            <div
                                                class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#C06EF3] bg-[#FFAFEE1A]">
                                                <img src="{{ asset('assets/images/search/Breastfeeding.svg') }}" alt=""
                                                    class="w-16 h-16">
                                            </div>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                            </div>
                                            <h3 class="text-sm font-normal">تست‌های رشد و کودک</h3>
                                            <button
                                                class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                مشاهده
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <!-- Category 2 -->
                                    <div class="bg-gradient-to-b from-white to-[#F6FFA3]/40 rounded-xl border border-[#CED900] p-5 category-card"
                                        data-category="test">
                                        <div class="flex flex-col items-center h-full gap-4 py-4">
                                            <div
                                                class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#CED900] bg-[#F8FF6B26]">
                                                <img src="{{ asset('assets/images/search/Brain.svg') }}" alt=""
                                                    class="w-16 h-16">
                                            </div>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                            </div>
                                            <h3 class="text-sm font-normal">تست های هوش و حافظه</h3>
                                            <button
                                                class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                مشاهده
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <!-- Category 3 -->
                                    <div class="bg-gradient-to-b from-white to-[#E8E8E8]/40 rounded-xl border border-[#997C70] p-5 category-card"
                                        data-category="test">
                                        <div class="flex flex-col items-center h-full gap-4 py-4">
                                            <div
                                                class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#997C70] bg-[#997C701A]">
                                                <img src="{{ asset('assets/images/search/Job.svg') }}" alt="" class="w-16 h-16">
                                            </div>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                            </div>
                                            <h3 class="text-sm font-normal">تست های شغلی و سازمانی</h3>
                                            <button
                                                class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                مشاهده
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 4 -->
                                <div class="swiper-slide">
                                    <!-- Category 4 -->
                                    <div class="bg-gradient-to-b from-white to-[#BEF8FF]/40 rounded-xl border border-[#8DFFFD] p-5 category-card"
                                        data-category="test">
                                        <div class="flex flex-col items-center h-full gap-4 py-4">
                                            <div
                                                class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted border-[#1B75E8] bg-[#1B75E826]">
                                                <img src="{{ asset('assets/images/search/School.svg') }}" alt=""
                                                    class="w-16 h-16">
                                            </div>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star"
                                                    class="w-4 h-4">
                                            </div>
                                            <h3 class="text-sm font-normal">تست‌های تحصیلی</h3>
                                            <button
                                                class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                مشاهده
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="swiper-pagination !relative !bottom-0"></div>
                        </div>

                        <!-- Navigation Buttons -->
                        <button id="blog-slider-prev"
                            class="absolute right-4 top-1/2 -translate-y-1/2 transform z-10 group">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.5 3.64583C9.84856 3.64583 3.64583 9.84856 3.64583 17.5C3.64583 25.1514 9.84856 31.3542 17.5 31.3542C25.1514 31.3542 31.3542 25.1514 31.3542 17.5C31.3542 9.84856 25.1514 3.64583 17.5 3.64583ZM2.1875 17.5C2.1875 9.04314 9.04314 2.1875 17.5 2.1875C25.9569 2.1875 32.8125 9.04314 32.8125 17.5C32.8125 25.9569 25.9569 32.8125 17.5 32.8125C9.04314 32.8125 2.1875 25.9569 2.1875 17.5Z"
                                    fill="black" class="group-hover:fill-primary transition-colors" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M25.5208 18.2292H8.75V16.7709H25.5208V18.2292Z" fill="black"
                                    class="group-hover:fill-primary transition-colors" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.489 17.5L19.9004 12.9114L20.9316 11.8802L26.0358 16.9844C26.3205 17.2692 26.3205 17.7309 26.0358 18.0156L20.9316 23.1198L19.9004 22.0886L24.489 17.5Z"
                                    fill="black" class="group-hover:fill-primary transition-colors" />
                            </svg>
                        </button>
                        <button id="blog-slider-next"
                            class="rotate-180 absolute left-4 top-1/2 -translate-y-1/2 transform z-10 group">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.5 3.64583C9.84856 3.64583 3.64583 9.84856 3.64583 17.5C3.64583 25.1514 9.84856 31.3542 17.5 31.3542C25.1514 31.3542 31.3542 25.1514 31.3542 17.5C31.3542 9.84856 25.1514 3.64583 17.5 3.64583ZM2.1875 17.5C2.1875 9.04314 9.04314 2.1875 17.5 2.1875C25.9569 2.1875 32.8125 9.04314 32.8125 17.5C32.8125 25.9569 25.9569 32.8125 17.5 32.8125C9.04314 32.8125 2.1875 25.9569 2.1875 17.5Z"
                                    fill="black" class="group-hover:fill-primary transition-colors" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M25.5208 18.2292H8.75V16.7709H25.5208V18.2292Z" fill="black"
                                    class="group-hover:fill-primary transition-colors" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.489 17.5L19.9004 12.9114L20.9316 11.8802L26.0358 16.9844C26.3205 17.2692 26.3205 17.7309 26.0358 18.0156L20.9316 23.1198L19.9004 22.0886L24.489 17.5Z"
                                    fill="black" class="group-hover:fill-primary transition-colors" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Test Swiper -->
    <script>
        // Initialize Swiper
        const testSwiper = new Swiper('.testSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            centeredSlides: true,
            navigation: {
                nextEl: '#test-slider-next',
                prevEl: '#test-slider-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
    <!-- Bootcamp Swiper -->
    <script>
        // Initialize Swiper
        const bootcampSwiper = new Swiper('.bootcampSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            centeredSlides: true,
            navigation: {
                nextEl: '#bootcamp-slider-next',
                prevEl: '#bootcamp-slider-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
    <!-- Blog Swiper -->
    <script>
        // Initialize Swiper
        const blogSwiper = new Swiper('.blogSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            centeredSlides: true,
            navigation: {
                nextEl: '#blog-slider-next',
                prevEl: '#blog-slider-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
@endpush
