@extends('borna.layouts.app')

@section('title', 'روانشناسی برنا | درباره ما')
@section('description', 'درباره مرکز روانشناسی برنا - خدمات روانشناسی و مشاوره')

@section('content')
<!-- Hero Section -->
<section class="py-6">
    <div class="container">
        <img src="{{ $aboutUsSetting->getFirstMediaUrl('image') }}" alt="روانشناسی برنا"
            class="w-full h-auto border-l-4 border-t-4 border-primary-dark">
    </div>
</section>

<!-- Content Section -->
<section class="py-2 md:py-6">
    <div class="container">
        <div class="flex flex-col gap-8 relative">
            <!-- Background Image -->
            <div class="hidden lg:block absolute lg:-bottom-14 xl:-bottom-48 2xl:-bottom-44">
                <img src="{{ asset('assets/images/bg-about.svg') }}" alt="Paragraph Background" class="w-3/4 mx-auto">
            </div>
            <!-- Paragraph Text -->
            <div class="paragraph z-10">
                <p class="md:py-6">
                    {!! nl2br($aboutUsSetting->description) !!}
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="md:py-6">
    <div class="lg:container relative">
        <!-- Swiper Container -->
        <div class="swiper doctorSwiper">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper px-0.5 xl:px-4 py-10">
                @foreach($aboutUsItems as $aboutUsItem)
                    <div class="swiper-slide">
                        <!-- Doctor Card 1 -->
                        <a href="#" class="flex items-center card w-full max-w-sm">
                            <div class="hidden sm:block sm:w-1/3">
                                @if($aboutUsItem->getFirstMediaUrl('doctor_image'))
                                    <img src="{{ $aboutUsItem->getFirstMediaUrl('doctor_image') }}" alt="{{ $aboutUsItem->doctor_name }}"
                                         class="w-full h-full object-cover">
                                @else
                                    <img src="{{ asset('assets/images/doctor-card-img.svg') }}" alt="Doctor Image"
                                         class="w-full h-full">
                                @endif
                            </div>
                            <div class="w-full sm:w-2/3 flex flex-col items-center gap-3 p-4">
                                <h3 class="font-medium text-text-gray bg-gray-100 rounded-2xl max-w-fit px-4 py-2">
                                    {{ $aboutUsItem->doctor_name }}
                                </h3>
                                <div class="flex items-center">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $aboutUsItem->star)
                                            <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                                        @else
                                            <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star">
                                        @endif
                                    @endfor
                                </div>
                                <p class="text-sm text-text-light-gray text-justify leading-relaxed flex-grow">{{ $aboutUsItem->description }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="2xl:hidden swiper-pagination !relative !bottom-2"></div>
        </div>

        <!-- Navigation Buttons -->
        <button id="doctor-slider-prev"
            class="hidden 2xl:block absolute xl:-right-4 2xl:-right-8 top-1/2 -translate-y-1/2 transform z-10 group">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17.5 3.64583C9.84856 3.64583 3.64583 9.84856 3.64583 17.5C3.64583 25.1514 9.84856 31.3542 17.5 31.3542C25.1514 31.3542 31.3542 25.1514 31.3542 17.5C31.3542 9.84856 25.1514 3.64583 17.5 3.64583ZM2.1875 17.5C2.1875 9.04314 9.04314 2.1875 17.5 2.1875C25.9569 2.1875 32.8125 9.04314 32.8125 17.5C32.8125 25.9569 25.9569 32.8125 17.5 32.8125C9.04314 32.8125 2.1875 25.9569 2.1875 17.5Z"
                    fill="black" class="group-hover:fill-primary transition-colors" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.5208 18.2292H8.75V16.7709H25.5208V18.2292Z"
                    fill="black" class="group-hover:fill-primary transition-colors" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M24.489 17.5L19.9004 12.9114L20.9316 11.8802L26.0358 16.9844C26.3205 17.2692 26.3205 17.7309 26.0358 18.0156L20.9316 23.1198L19.9004 22.0886L24.489 17.5Z"
                    fill="black" class="group-hover:fill-primary transition-colors" />
            </svg>
        </button>
        <button id="doctor-slider-next"
            class="hidden 2xl:block rotate-180 absolute xl:-left-4 2xl:-left-8 top-1/2 -translate-y-1/2 transform z-10 group">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17.5 3.64583C9.84856 3.64583 3.64583 9.84856 3.64583 17.5C3.64583 25.1514 9.84856 31.3542 17.5 31.3542C25.1514 31.3542 31.3542 25.1514 31.3542 17.5C31.3542 9.84856 25.1514 3.64583 17.5 3.64583ZM2.1875 17.5C2.1875 9.04314 9.04314 2.1875 17.5 2.1875C25.9569 2.1875 32.8125 9.04314 32.8125 17.5C32.8125 25.9569 25.9569 32.8125 17.5 32.8125C9.04314 32.8125 2.1875 25.9569 2.1875 17.5Z"
                    fill="black" class="group-hover:fill-primary transition-colors" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.5208 18.2292H8.75V16.7709H25.5208V18.2292Z"
                    fill="black" class="group-hover:fill-primary transition-colors" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M24.489 17.5L19.9004 12.9114L20.9316 11.8802L26.0358 16.9844C26.3205 17.2692 26.3205 17.7309 26.0358 18.0156L20.9316 23.1198L19.9004 22.0886L24.489 17.5Z"
                    fill="black" class="group-hover:fill-primary transition-colors" />
            </svg>
        </button>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Initialize Swiper
    const doctorSwiper = new Swiper('.doctorSwiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        centeredSlides: true,
        navigation: {
            nextEl: '#doctor-slider-next',
            prevEl: '#doctor-slider-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            // Mobile small
            320: {
                slidesPerView: 1,
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
@endpush
