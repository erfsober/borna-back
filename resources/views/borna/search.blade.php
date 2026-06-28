@extends('borna.layouts.app')

@section('title', 'روانشناسی برنا | جستجو')

@section('description', 'جستجو در مرکز روانشناسی برنا')

@section('keywords', 'روانشناسی، برنا، جستجو')

@php
    $cardThemes = [
        [
            'card' => 'bg-gradient-to-b from-white to-[#FFAFEE]/40',
            'desktop_border' => 'border-gray-100',
            'mobile_border' => 'border-[#FD74F4]',
            'circle' => 'border-[#C06EF3] bg-[#FFAFEE1A]',
            'fallback' => 'assets/images/search/Breastfeeding.svg',
        ],
        [
            'card' => 'bg-gradient-to-b from-white to-[#F6FFA3]/40',
            'desktop_border' => 'border-gray-100',
            'mobile_border' => 'border-[#CED900]',
            'circle' => 'border-[#CED900] bg-[#F8FF6B26]',
            'fallback' => 'assets/images/search/Brain.svg',
        ],
    ];

    $viewText = 'مشاهده';
@endphp

@section('content')
    <section class="container py-8 md:py-16">
        <div class="flex flex-col gap-12 md:gap-20">
            <!-- Search Box -->
            <div class="w-full md:w-10/12 mx-auto bg-white rounded-lg border border-gray-300 relative">
                <input type="text"
                    id="search-input"
                    class="w-full p-3 md:p-4 text-gray-700 text-sm md:text-base rounded-lg focus:outline-none border focus:border-primary search-input"
                    placeholder="عبارت خود را وارد کنید...">
                <div class="absolute left-3 md:left-4 top-1/2 transform -translate-y-1/2">
                    <img src="{{ asset('assets/images/search/search-icon.svg') }}" alt="search">
                </div>
            </div>

            <!-- Main Content -->
            <div id="main-content" class="flex flex-col gap-10">
                <div class="flex flex-col gap-6">
                    <!-- Header -->
                    <div class="flex items-center gap-2 md:gap-3">
                        <img src="{{ asset('assets/images/search/test-icon.svg') }}" alt="test" class="w-5 h-5 md:w-6 md:h-6">
                        <h3 class="text-xl md:text-3xl">آزمون</h3>
                    </div>

                    <!-- Desktop Grid -->
                    <div class="hidden md:grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 border-b border-gray-300 pb-10">
                        @forelse($services as $service)
                            @php
                                $theme = $cardThemes[$loop->index % count($cardThemes)];
                                $serviceImage = $service->getFirstMediaUrl('service_image') ?: asset($theme['fallback']);
                            @endphp
                            <div class="{{ $theme['card'] }} rounded-xl border {{ $theme['desktop_border'] }} p-5 category-card"
                                data-category="test">
                                <div class="flex flex-col items-center h-full gap-6 py-6">
                                    <div class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted {{ $theme['circle'] }}">
                                        <img src="{{ $serviceImage }}" alt="{{ $service->title }}" class="w-20 h-20">
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                        <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                        <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                        <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                        <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    </div>
                                    <h3 class="text-xl font-normal">{{ $service->title }}</h3>
                                    <a href="{{ route('services.show', $service) }}"
                                        class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                        {{ $viewText }}
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full text-center py-8">
                                <p class="text-gray-500 text-lg">نتیجه‌ای پیدا نشد.</p>
                            </div>
                        @endforelse
                    </div>

                    <!-- Mobile Slider -->
                    <div class="md:hidden relative px-20">
                        <!-- Swiper Container -->
                        <div class="swiper testSwiper">
                            <!-- Swiper Wrapper -->
                            <div class="swiper-wrapper pb-3">
                                @forelse($services as $service)
                                    @php
                                        $theme = $cardThemes[$loop->index % count($cardThemes)];
                                        $serviceImage = $service->getFirstMediaUrl('service_image') ?: asset($theme['fallback']);
                                    @endphp
                                    <div class="swiper-slide">
                                        <div class="{{ $theme['card'] }} rounded-xl border {{ $theme['mobile_border'] }} p-5 category-card"
                                            data-category="test">
                                            <div class="flex flex-col items-center h-full gap-4 py-4">
                                                <div class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted {{ $theme['circle'] }}">
                                                    <img src="{{ $serviceImage }}" alt="{{ $service->title }}"
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
                                                <h3 class="text-sm font-normal">{{ $service->title }}</h3>
                                                <a href="{{ route('services.show', $service) }}"
                                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                    {{ $viewText }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-span-full text-center py-8">
                                        <p class="text-gray-500 text-lg">نتیجه‌ای پیدا نشد.</p>
                                    </div>
                                @endforelse
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
                    <div class="hidden md:grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 border-b border-gray-300 pb-10">
                        @forelse($bootcamps as $bootcamp)
                            @php
                                $theme = $cardThemes[$loop->index % count($cardThemes)];
                                $bootcampImage = $bootcamp->getFirstMediaUrl('icon_image')
                                    ?: $bootcamp->getFirstMediaUrl('video_thumbnail')
                                    ?: $bootcamp->getFirstMediaUrl('top_image')
                                    ?: asset($theme['fallback']);
                            @endphp
                            <div class="{{ $theme['card'] }} rounded-xl border {{ $theme['desktop_border'] }} p-5 category-card"
                                data-category="bootcamp">
                                <div class="flex flex-col items-center h-full gap-6 py-6">
                                    <div class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted {{ $theme['circle'] }}">
                                        <img src="{{ $bootcampImage }}" alt="{{ $bootcamp->title }}" class="w-20 h-20">
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                        <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                        <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                        <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                        <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    </div>
                                    <h3 class="text-xl font-normal">{{ $bootcamp->title }}</h3>
                                    <a href="{{ route('bootcamp.index') }}"
                                        class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                        {{ $viewText }}
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full text-center py-8">
                                <p class="text-gray-500 text-lg">نتیجه‌ای پیدا نشد.</p>
                            </div>
                        @endforelse
                    </div>

                    <!-- Mobile Slider -->
                    <div class="md:hidden relative px-20">
                        <!-- Swiper Container -->
                        <div class="swiper bootcampSwiper">
                            <!-- Swiper Wrapper -->
                            <div class="swiper-wrapper pb-3">
                                @forelse($bootcamps as $bootcamp)
                                    @php
                                        $theme = $cardThemes[$loop->index % count($cardThemes)];
                                        $bootcampImage = $bootcamp->getFirstMediaUrl('icon_image')
                                            ?: $bootcamp->getFirstMediaUrl('video_thumbnail')
                                            ?: $bootcamp->getFirstMediaUrl('top_image')
                                            ?: asset($theme['fallback']);
                                    @endphp
                                    <div class="swiper-slide">
                                        <div class="{{ $theme['card'] }} rounded-xl border {{ $theme['mobile_border'] }} p-5 category-card"
                                            data-category="bootcamp">
                                            <div class="flex flex-col items-center h-full gap-4 py-4">
                                                <div class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted {{ $theme['circle'] }}">
                                                    <img src="{{ $bootcampImage }}" alt="{{ $bootcamp->title }}"
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
                                                <h3 class="text-sm font-normal">{{ $bootcamp->title }}</h3>
                                                <a href="{{ route('bootcamp.index') }}"
                                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                    {{ $viewText }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-span-full text-center py-8">
                                        <p class="text-gray-500 text-lg">نتیجه‌ای پیدا نشد.</p>
                                    </div>
                                @endforelse
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
                    <div class="hidden md:grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 border-b border-gray-300 pb-10">
                        @forelse($blogPosts as $post)
                            @php
                                $theme = $cardThemes[$loop->index % count($cardThemes)];
                                $postImage = $post->getFirstMediaUrl('image') ?: asset($theme['fallback']);
                            @endphp
                            <div class="{{ $theme['card'] }} rounded-xl border {{ $theme['desktop_border'] }} p-5 category-card"
                                data-category="blog">
                                <div class="flex flex-col items-center h-full gap-6 py-6">
                                    <div class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted {{ $theme['circle'] }}">
                                        <img src="{{ $postImage }}" alt="{{ $post->title }}" class="w-20 h-20">
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star" class="w-6 h-6">
                                        <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                        <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                        <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                        <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star" class="w-6 h-6">
                                    </div>
                                    <h3 class="text-xl font-normal">{{ $post->title }}</h3>
                                    <a href="{{ route('blog.show', $post->slug) }}"
                                        class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                        {{ $viewText }}
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full text-center py-8">
                                <p class="text-gray-500 text-lg">نتیجه‌ای پیدا نشد.</p>
                            </div>
                        @endforelse
                    </div>

                    <!-- Mobile Slider -->
                    <div class="md:hidden relative px-20">
                        <!-- Swiper Container -->
                        <div class="swiper blogSwiper">
                            <!-- Swiper Wrapper -->
                            <div class="swiper-wrapper pb-3">
                                @forelse($blogPosts as $post)
                                    @php
                                        $theme = $cardThemes[$loop->index % count($cardThemes)];
                                        $postImage = $post->getFirstMediaUrl('image') ?: asset($theme['fallback']);
                                    @endphp
                                    <div class="swiper-slide">
                                        <div class="{{ $theme['card'] }} rounded-xl border {{ $theme['mobile_border'] }} p-5 category-card"
                                            data-category="blog">
                                            <div class="flex flex-col items-center h-full gap-4 py-4">
                                                <div class="flex items-center justify-center w-fit rounded-full p-2 border-2 border-dotted {{ $theme['circle'] }}">
                                                    <img src="{{ $postImage }}" alt="{{ $post->title }}"
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
                                                <h3 class="text-sm font-normal">{{ $post->title }}</h3>
                                                <a href="{{ route('blog.show', $post->slug) }}"
                                                    class="bg-white text-black px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
                                                    {{ $viewText }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-span-full text-center py-8">
                                        <p class="text-gray-500 text-lg">نتیجه‌ای پیدا نشد.</p>
                                    </div>
                                @endforelse
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
    <script src="{{ asset('js/search.js') }}"></script>
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
