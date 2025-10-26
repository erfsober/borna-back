@extends('borna.layouts.app')

@section('title', 'روانشناسی برنا | درباره ما')
@section('description', 'درباره مرکز روانشناسی برنا - خدمات روانشناسی و مشاوره')

@section('content')
<!-- Hero Section -->
<section class="py-6">
    <div class="container">
        <img src="{{ asset('assets/images/medical-bg.png') }}" alt="روانشناسی برنا"
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
                    روانشناسی صنعتی و سازمانی (organizational psychology) مفهومی است که بر پیاده‌سازی اصول
                    روانشناسی جهت بهبود شرایط فیزیکی و ذهنی کارمندان تمرکز دارد. این شاخه از علم روان­شناسی به
                    دنبال افزایش رفاه و سلامت انسان در محیط کار است. همچنین افزایش بهره‌وری سازمانی از طریق
                    استفاده از یافته­ هایِ روان‌­شناسان نیز مدنظر است. به‌طور ساده مفهوم روان­شناسی صنعتی و
                    سازمانی یعنی کاربرد اصول و نظریه ­های علم روان­شناسی در محیط کار.
                    <br />
                    این مفهوم از دو بخش صنعتی و سازمانی تشکیل‌شده است که تفاوت­‌هایی دارند. هرکدام حیطه ­ی
                    ویژه­ای دارد که این نشان‌دهنده‌ی گستردگی این علم است. مفهوم صنعت به تمام فرایندها و ابزار
                    لازم برای تولید کالا و خدمات اشاره دارد و مفهوم سازمان به چارچوب‌ها و روابطی اشاره دارد که
                    این ابزارها و فرایندها را در راستای هدف کلی شکل می‌دهد. روان‌شناسی صنعتی در این مفهوم، به آن
                    دسته از فعالیت‌ها اشاره دارد که تمرکز اصلی آن­ها افزایش تولید، استخدام و به‌کارگماری، طراحی
                    شغل، برنامه‌ریزی آموزش، ارزیابی عملکرد و به‌طورکلی، هر فعالیتی که به مفهوم کار و تولید مربوط
                    می­شود، است.
                    <br />
                    در مقابل، روان­شناسی سازمانی شامل فعالیت‌هایی هست که به گروهی از انسان‌ها مربوط می­‌شود
                    همچون رضایت شغلی، کیفیت زندگی کاری، رفاه و سلامت کارکنان، روابط انسانی. هرچند که در محیط
                    واقعی، نمی‌­توان به همین سادگی تمایز و مرز بین این دو مفهوم را شناسایی کرد البته که باید گفت
                    در عمل نیازی به این کار نیست.
                    <br />
                    تاریخچه روانشناسی صنعتی و سازمانی
                    <br />
                    روان­شناسی صنعتی و سازمانی به طور رسمی از حدود اواخر قرن ۱۹ و اوایل قرن ۲۰ شروع شد. نقطه
                    آغاز فعالیت اولیه گروهی از روان­شناسان تجربی که به دنبال کاربرد اصول روان­‌شناسی بودند.
                    اصطلاحاً به آن­ها روان‌­شناسان کاربردی گفته می­‌شد. رویدادهای گوناگونی در طول این دوره مشخص
                    در حوزه روانشناسی صنعتی و سازمانی رخ داد. چون هر کدام از آن‌ها بر شکل‌گیری این رشته اثرگذار
                    بوده اند، نمی­ توان سال مشخصی را به‌عنوان زمان شروع روان­شناسی صنعتی و سازمانی در نظر گرفت.
                    <br />
                    خواستگاه این شاخه از روان­شناسی را می­ توان کشور آمریکا دانست. اولین انجمن علمی روان­شناسی
                    صنعتی و سازمانی (SIOP) در سال ۱۹۴۴ شروع به فعالیت نمود.
                    این انجمن به‌عنوان زیرمجموعه‌ای
                    از انجمن روان‌شناسی آمریکا (APA) فعالیت می‌کرد. همین‌طور اولین کتاب مرجع و اولین درجه دکتری
                    این رشته نیز در آمریکا منتشر و اعطا شده است. در ایران نیز این رشته از حوالی سال ۱۳۵۳ در
                    دانشگاه اهواز شروع به فعالیت کرد. بعد از انقلاب مدتی فعالیت آن به حالت تعلیق درآمد و دوباره
                    بعد از ابتدای دهه ی ۸۰ شروع به فعالیت نمود.
                    <br />
                    نیاز به روان­شناسی صنعتی و سازمانی از سال­‌ها قبل و با تغییر شکل صنایع و سازمان­ ها، انباشت
                    سرمایه­‌های مادی و انسانی، رشد فنّاوری، افزایش ساعات کاری و شاید مهم‌تر از همه این موارد
                    مصرف‌گرایی و تمایل به تولید بیشتر در کشورهای اروپایی و آمریکا، احساس می­شد تا بتوان به نهایت
                    بهره‌­وری و رفاه شغلی رسید. اما دو اتفاق مهم باعث گستردگی این علم و افزایش پژوهش‌ها و
                    تحقیقات و همین­طور کاربرد این رشته شد:
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
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <!-- Doctor Card 1 -->
                    <a href="#" class="flex items-center card w-full max-w-sm">
                        <div class="hidden sm:block sm:w-1/3">
                            <img src="{{ asset('assets/images/doctor-card-img.svg') }}" alt="Doctor Image"
                                class="w-full h-full">
                        </div>
                        <div class="w-full sm:w-2/3 flex flex-col items-center gap-3 p-4">
                            <h3 class="font-medium text-text-gray bg-gray-100 rounded-2xl max-w-fit px-4 py-2">
                                دکتر ملیحه روزبخش
                            </h3>
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                            </div>
                            <p class="text-sm text-text-light-gray text-justify leading-relaxed flex-grow">
                                با دکتر ملیحه روزبخش متخصص روانپزشکی کودک و نوجوان آشنا شدید. ایشان با بیش از
                                چند سال
                                سابقه کار در زمینه روانشناسی، به مراجعین بسیاری در حل مشکلاتشان کمک کرده اند.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <!-- Doctor Card 2 -->
                    <a href="#" class="flex items-center card w-full max-w-sm">
                        <div class="hidden sm:block sm:w-1/3">
                            <img src="{{ asset('assets/images/doctor-card-img.svg') }}" alt="Doctor Image"
                                class="w-full h-full">
                        </div>
                        <div class="w-full sm:w-2/3 flex flex-col items-center gap-3 p-4">
                            <h3 class="font-medium text-text-gray bg-gray-100 rounded-2xl max-w-fit px-4 py-2">
                                دکتر ملیحه روزبخش
                            </h3>
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                            </div>
                            <p class="text-sm text-text-light-gray text-justify leading-relaxed flex-grow">
                                با دکتر ملیحه روزبخش متخصص روانپزشکی کودک و نوجوان آشنا شدید. ایشان با بیش از
                                چند سال
                                سابقه کار در زمینه روانشناسی، به مراجعین بسیاری در حل مشکلاتشان کمک کرده اند.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <!-- Doctor Card 3 -->
                    <a href="#" class="flex items-center card w-full max-w-sm">
                        <div class="hidden sm:block sm:w-1/3">
                            <img src="{{ asset('assets/images/doctor-card-img.svg') }}" alt="Doctor Image"
                                class="w-full h-full">
                        </div>
                        <div class="w-full sm:w-2/3 flex flex-col items-center gap-3 p-4">
                            <h3 class="font-medium text-text-gray bg-gray-100 rounded-2xl max-w-fit px-4 py-2">
                                دکتر ملیحه روزبخش
                            </h3>
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                            </div>
                            <p class="text-sm text-text-light-gray text-justify leading-relaxed flex-grow">
                                با دکتر ملیحه روزبخش متخصص روانپزشکی کودک و نوجوان آشنا شدید. ایشان با بیش از
                                چند سال
                                سابقه کار در زمینه روانشناسی، به مراجعین بسیاری در حل مشکلاتشان کمک کرده اند.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <!-- Doctor Card 4 -->
                    <a href="#" class="flex items-center card w-full max-w-sm">
                        <div class="hidden sm:block sm:w-1/3">
                            <img src="{{ asset('assets/images/doctor-card-img.svg') }}" alt="Doctor Image"
                                class="w-full h-full">
                        </div>
                        <div class="w-full sm:w-2/3 flex flex-col items-center gap-3 p-4">
                            <h3 class="font-medium text-text-gray bg-gray-100 rounded-2xl max-w-fit px-4 py-2">
                                دکتر ملیحه روزبخش
                            </h3>
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/star-empty.svg') }}" alt="Empty Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                                <img src="{{ asset('assets/images/star-fill.svg') }}" alt="Fill Star">
                            </div>
                            <p class="text-sm text-text-light-gray text-justify leading-relaxed flex-grow">
                                با دکتر ملیحه روزبخش متخصص روانپزشکی کودک و نوجوان آشنا شدید. ایشان با بیش از
                                چند سال
                                سابقه کار در زمینه روانشناسی، به مراجعین بسیاری در حل مشکلاتشان کمک کرده اند.
                            </p>
                        </div>
                    </a>
                </div>
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
