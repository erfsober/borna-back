@extends('borna.layouts.app')

@section('title', 'روانشناسی برنا | بوت کمپ')

@section('description', 'بوت کمپ مرکز روانشناسی برنا')

@section('keywords', 'روانشناسی، برنا، بوت کمپ')

@push('styles')
    <!-- Custom CSS for the gallery slider -->
    <style>
        /* Add custom styling for the gallery slider */
        .gallerySwiper .swiper-slide {
            transition: all 0.3s ease;
            transform: scale(0.8);
            opacity: 0.7;
        }

        .gallerySwiper .swiper-slide-active {
            transform: scale(1);
            opacity: 1;
            z-index: 2;
        }

        /* Apply different scales based on screen size */
        @media (min-width: 768px) {

            .gallerySwiper .swiper-slide-prev,
            .gallerySwiper .swiper-slide-next {
                transform: scale(0.8);
                opacity: 0.7;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="container flex flex-col items-center justify-center relative">
        <img src="{{ asset('assets/images/bootcamp/photoroom.png') }}" alt="" class="h-auto">
    </section>

    <!-- Gallery Section -->
    <section class="container py-4 md:py-8">
        <div class="flex flex-col gap-6 md:gap-8">
            <!-- Gallery Heading -->
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-2 md:gap-3">
                    <img src="{{ asset('assets/images/bootcamp/gallery-icon.svg') }}" alt="" class="w-6 h-6 md:w-8 md:h-8">
                    <h2 class="text-2xl md:text-3xl font-medium text-black">گالری</h2>
                </div>
            </div>

            <!-- Gallery Cards -->
            <div class="relative px-12">
                <!-- Swiper Container -->
                <div class="swiper gallerySwiper">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/blog/article-1.png') }}"
                                class="h-auto w-full max-w-[430px] rounded-2xl border-r-4 border-b-4 border-primary-light"
                                alt="Gallery image 1">
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/blog/article-2.png') }}"
                                class="h-auto w-full max-w-[430px] rounded-2xl border-r-4 border-b-4 border-primary-light"
                                alt="Gallery image 2">
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/blog/article-3.png') }}"
                                class="h-auto w-full max-w-[430px] rounded-2xl border-r-4 border-b-4 border-primary-light"
                                alt="Gallery image 3">
                        </div>
                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/blog/article-2.png') }}"
                                class="h-auto w-full max-w-[430px] rounded-2xl border-r-4 border-b-4 border-primary-light"
                                alt="Gallery image 4">
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button id="gallery-slider-prev"
                    class="absolute right-0 top-1/2 -translate-y-1/2 transform z-10 group">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                <button id="gallery-slider-next"
                    class="rotate-180 absolute left-0 top-1/2 -translate-y-1/2 transform z-10 group">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
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
    </section>

    <!-- Video Section -->
    <section class="container py-8 md:py-16">
        <div class="flex flex-col gap-6 md:gap-8">
            <!-- Video Heading -->
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-2 md:gap-3">
                    <img src="{{ asset('assets/images/bootcamp/video-icon.svg') }}" alt="" class="w-6 h-6 md:w-8 md:h-8">
                    <h2 class="text-2xl md:text-3xl font-medium text-black">ویدیو</h2>
                </div>
            </div>

            <!-- Video File -->
            <div>
                <video class="w-full md:w-10/12 mx-auto h-auto rounded-2xl cursor-pointer" controls>
                    <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <!-- Video Description -->
            <div class="flex flex-col gap-4 mt-6 md:mt-8">
                <!-- Description Heading -->
                <h2 class="text-xl md:text-2xl font-medium text-black">کنترل احساسات</h2>
                <!-- Description Content -->
                <div class="flex flex-col gap-2 md:gap-4">
                    <p
                        class="text-text-dark text-opacity-90 text-sm sm:text-base md:text-lg leading-10 text-justify">
                        روان­شناسی صنعتی و سازمانی به طور رسمی از حدود اواخر قرن ۱۹ و اوایل قرن ۲۰ شروع شد. نقطه
                        آغاز
                        فعالیت اولیه گروهی از روان­شناسان تجربی که به دنبال کاربرد اصول روان­‌شناسی بودند.
                        اصطلاحاً به
                        آن­ها روان‌­شناسان کاربردی گفته می­‌شد. رویدادهای گوناگونی در طول این دوره مشخص در حوزه
                        روانشناسی صنعتی و سازمانی رخ داد. چون هر کدام از آن‌ها بر شکل‌گیری این رشته اثرگذار بوده
                        اند،
                        نمی­ توان سال مشخصی را به‌عنوان زمان شروع روان­شناسی صنعتی و سازمانی در نظر گرفت.
                    </p>
                    <p
                        class="text-text-dark text-opacity-90 text-sm sm:text-base md:text-lg leading-10 text-justify">
                        خواستگاه این شاخه از روان­شناسی را می­ توان کشور آمریکا دانست. اولین انجمن علمی
                        روان­شناسی صنعتی
                        و سازمانی (SIOP) در سال ۱۹۴۴ شروع به فعالیت نمود. این انجمن به‌عنوان زیرمجموعه‌ای
                        از انجمن
                        روان‌شناسی آمریکا (APA) فعالیت می‌کرد. همین‌طور اولین کتاب مرجع و اولین درجه دکتری این
                        رشته نیز
                        در آمریکا منتشر و اعطا شده است.
                    </p>
                </div>
            </div>

            <!-- Video Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 mt-5 md:mt-10">
                <!-- Card 1 -->
                <a href="#"
                    class="flex flex-col gap-2 rounded-xl border-b-2 border-r-2 border-primary-light hover:border-primary-dark transition-colors blog-item"
                    data-category="psychoanalysis family">
                    <div class="relative">
                        <img src="{{ asset('assets/images/bootcamp/video-card.png') }}" alt=""
                            class="w-full h-[300px] object-cover rounded-t-xl">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            <img src="{{ asset('assets/images/bootcamp/play-circle.svg') }}" alt=""
                                class="w-8 h-8 md:w-10 md:h-10">
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 p-4">
                        <h3 class="text-[#23242E] text-base md:text-lg font-medium text-center">
                            خودشناسی
                        </h3>
                        <p class="text-[#54555D] text-sm leading-7 line-clamp-3">
                            خانواده اولین و در عین حال مهم‌ ترین نهاد اجتماعی است که فرد در آن متولد می‌ شود. اهمیت
                            نقش خانواده در شکل‌ گیری شخصیت غیر قابل انکار است. خانواده کانون اصلی رشد و تعالی افراد
                            محسوب می‌ شود و...
                        </p>
                    </div>
                </a>
                <!-- Card 2 -->
                <a href="#"
                    class="flex flex-col gap-2 rounded-xl border-b-2 border-r-2 border-primary-light hover:border-primary-dark transition-colors blog-item"
                    data-category="psychoanalysis family">
                    <div class="relative">
                        <img src="{{ asset('assets/images/bootcamp/video-card.png') }}" alt=""
                            class="w-full h-[300px] object-cover rounded-t-xl">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            <img src="{{ asset('assets/images/bootcamp/play-circle.svg') }}" alt=""
                                class="w-8 h-8 md:w-10 md:h-10">
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 p-4">
                        <h3 class="text-[#23242E] text-base md:text-lg font-medium text-center">
                            خودشناسی
                        </h3>
                        <p class="text-[#54555D] text-sm leading-7 line-clamp-3">
                            خانواده اولین و در عین حال مهم‌ ترین نهاد اجتماعی است که فرد در آن متولد می‌ شود. اهمیت
                            نقش خانواده در شکل‌ گیری شخصیت غیر قابل انکار است. خانواده کانون اصلی رشد و تعالی افراد
                            محسوب می‌ شود و...
                        </p>
                    </div>
                </a>
                <!-- Card 3 -->
                <a href="#"
                    class="flex flex-col gap-2 rounded-xl border-b-2 border-r-2 border-primary-light hover:border-primary-dark transition-colors blog-item"
                    data-category="psychoanalysis family">
                    <div class="relative">
                        <img src="{{ asset('assets/images/bootcamp/video-card.png') }}" alt=""
                            class="w-full h-[300px] object-cover rounded-t-xl">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            <img src="{{ asset('assets/images/bootcamp/play-circle.svg') }}" alt=""
                                class="w-8 h-8 md:w-10 md:h-10">
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 p-4">
                        <h3 class="text-[#23242E] text-base md:text-lg font-medium text-center">
                            خودشناسی
                        </h3>
                        <p class="text-[#54555D] text-sm leading-7 line-clamp-3">
                            خانواده اولین و در عین حال مهم‌ ترین نهاد اجتماعی است که فرد در آن متولد می‌ شود. اهمیت
                            نقش خانواده در شکل‌ گیری شخصیت غیر قابل انکار است. خانواده کانون اصلی رشد و تعالی افراد
                            محسوب می‌ شود و...
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Gallery Swiper -->
    <script>
        // Initialize Swiper
        const gallerySwiper = new Swiper('.gallerySwiper', {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: true,
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '#gallery-slider-next',
                prevEl: '#gallery-slider-prev',
            },
            breakpoints: {
                // when window width is >= 640px
                640: {
                    slidesPerView: 1.5,
                    spaceBetween: 0
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 0
                }
            },
            effect: 'slide',
            speed: 800,
        });
    </script>
@endpush
