@extends('borna.layouts.app')

@section('title', 'روانشناسی برنا | بلاگ')

@section('description', 'بلاگ مرکز روانشناسی برنا')

@section('keywords', 'روانشناسی، برنا، بلاگ')

@section('content')
    <div class="flex flex-col gap-12 md:gap-16 md:my-12">
        <!-- Featured Blog Post Section -->
        <section class="bg-[rgba(244,244,245,0.77)] px-4 pt-8 pb-4 md:pt-12 md:pb-8">
            <!-- Swiper Container -->
            <div class="swiper blogSwiper container">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper pb-6">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <!-- Blog Post 1 -->
                        <div class="flex flex-col md:flex-row gap-6 md:gap-10 lg:gap-20">
                            <div class="w-full md:w-1/2 flex flex-col items-start justify-center">
                                <div class="flex flex-col gap-4">
                                    <h1 class="text-xl md:text-3xl font-medium text-[#23242E]">
                                        محبوب‌ترین بلاگ‌ها
                                    </h1>
                                    <div class="flex items-center gap-5 md:gap-10">
                                        <div class="flex items-center gap-2">
                                            <img src="{{ asset('assets/images/blog/folder-icon.svg') }}" alt=""
                                                class="w-3 h-3 md:w-4 md:h-4">
                                            <span class="text-xs md:text-sm text-[#54555D]">ترندهای طراحی</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <img src="{{ asset('assets/images/blog/clock-icon.svg') }}" alt=""
                                                class="w-3 h-3 md:w-4 md:h-4">
                                            <span class="text-xs md:text-sm text-[#54555D]">سه روز قبل</span>
                                        </div>
                                    </div>
                                    <p
                                        class="text-sm md:text-base text-[#54555D] md:leading-8 text-justify line-clamp-3">
                                        این مقاله تأملی در باب ظرفیت و مشکلات برقراری و حفظ روابط عاشقانه و پرشور است و
                                        بر اساس
                                        نتایج سال‌ها کار تحلیلی با مراجعان مختلف نوشته شده است. نگارنده در این متن،
                                        انواع
                                        تداخل‌ها در ظرفیت عشق جنسی بالغانه را همچون بازتابی از شرایط مختلف آسیب‌شناسی
                                        روانی
                                        توصیف می‌کند.
                                    </p>
                                    <a href="#"
                                        class="flex items-center gap-2 w-fit bg-[#585858] text-white py-2 px-4 md:px-8 rounded-lg hover:bg-[#383838] transition-colors mt-4">
                                        <span class="text-sm md:text-base">ادامه مطلب</span>
                                        <img src="{{ asset('assets/images/blog/arrow-left.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 hidden md:block">
                                <img src="{{ asset('assets/images/blog/frame.png') }}" alt="" class="w-full h-auto object-cover">
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <!-- Blog Post 2 -->
                        <div class="flex flex-col md:flex-row gap-6 md:gap-10 lg:gap-20">
                            <div class="w-full md:w-1/2 flex flex-col items-start justify-center">
                                <div class="flex flex-col gap-4">
                                    <h1 class="text-xl md:text-3xl font-medium text-[#23242E]">
                                        محبوب‌ترین بلاگ‌ها
                                    </h1>
                                    <div class="flex items-center gap-5 md:gap-10">
                                        <div class="flex items-center gap-2">
                                            <img src="{{ asset('assets/images/blog/folder-icon.svg') }}" alt=""
                                                class="w-3 h-3 md:w-4 md:h-4">
                                            <span class="text-xs md:text-sm text-[#54555D]">ترندهای طراحی</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <img src="{{ asset('assets/images/blog/clock-icon.svg') }}" alt=""
                                                class="w-3 h-3 md:w-4 md:h-4">
                                            <span class="text-xs md:text-sm text-[#54555D]">سه روز قبل</span>
                                        </div>
                                    </div>
                                    <p
                                        class="text-sm md:text-base text-[#54555D] md:leading-8 text-justify line-clamp-3">
                                        این مقاله تأملی در باب ظرفیت و مشکلات برقراری و حفظ روابط عاشقانه و پرشور است و
                                        بر اساس
                                        نتایج سال‌ها کار تحلیلی با مراجعان مختلف نوشته شده است. نگارنده در این متن،
                                        انواع
                                        تداخل‌ها در ظرفیت عشق جنسی بالغانه را همچون بازتابی از شرایط مختلف آسیب‌شناسی
                                        روانی
                                        توصیف می‌کند.
                                    </p>
                                    <a href="#"
                                        class="flex items-center gap-2 w-fit bg-[#585858] text-white py-2 px-4 md:px-8 rounded-lg hover:bg-[#383838] transition-colors mt-4">
                                        <span class="text-sm md:text-base">ادامه مطلب</span>
                                        <img src="{{ asset('assets/images/blog/arrow-left.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 hidden md:block">
                                <img src="{{ asset('assets/images/blog/frame.png') }}" alt="" class="w-full h-auto object-cover">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination !relative !bottom-0"></div>
            </div>
        </section>

        <!-- Blog Categories Section -->
        <section class="container flex flex-col gap-8 md:gap-10" id="categories">
            <!-- Blog Categories -->
            <div class="flex flex-col gap-4 md:gap-8">
                <h2 class="text-xl md:text-2xl font-semibold">دسته‌بندی مطالب بلاگ</h2>
                <div class="bg-[#FAFAFA] rounded-lg flex justify-start items-center gap-4 px-4 overflow-auto"
                    id="category-tabs" style="scrollbar-width: none;">
                    <a href="{{ route('blog.index') }}#categories"
                        class="min-w-fit px-4 py-4 text-sm md:text-base hover:text-primary category-tab {{ !request('category') ? 'text-primary border-b border-primary font-medium' : '' }}">
                        همه
                    </a>
                    @foreach($categories as $category)
                        <a href="{{ route('blog.index', ['category' => $category->id]) }}#categories"
                            class="min-w-fit px-4 py-4 text-sm md:text-base hover:text-primary category-tab {{ request('category') == $category->id ? 'text-primary border-b border-primary font-medium' : '' }}">
                            {{ $category->title }}
                            @if($category->blog_posts_count > 0)
                                <span class="text-xs text-gray-400">({{ $category->blog_posts_count }})</span>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Banner Articles Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="blog-container">
                @forelse($blogPosts as $post)
                    <a href="{{ route('blog.show', $post->slug) }}"
                        class="flex flex-col gap-2 rounded-2xl border-b-2 border-r-2 border-primary-light hover:border-primary-dark transition-colors blog-item">
                        @if($post->getFirstMediaUrl('image'))
                            <img src="{{ $post->getFirstMediaUrl('image') }}" alt="{{ $post->title }}"
                                class="w-full h-[300px] object-cover rounded-t-2xl">
                        @else
                            <div class="w-full h-[300px] bg-gray-200 rounded-t-2xl flex items-center justify-center">
                                <i class="bx bx-image text-gray-400 text-5xl"></i>
                            </div>
                        @endif
                        <div class="flex flex-col gap-2 p-4">
                            @if($post->category)
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('assets/images/blog/folder-icon.svg') }}" alt="" class="w-3 h-3">
                                    <span class="text-xs text-[#54555D]">{{ $post->category->title }}</span>
                                </div>
                            @endif
                            <h3 class="text-[#23242E] text-base md:text-lg font-medium">{{ $post->title }}</h3>
                            <p class="text-[#54555D] text-sm leading-7 line-clamp-3">
                                {{ \Illuminate\Support\Str::limit(strip_tags($post->description), 150) }}
                            </p>
                            <div class="flex items-center gap-2 mt-2">
                                <span class="text-xs text-[#9D9EA2]">{{ $post->created_at }}</span>
                                <span class="text-xs text-[#9D9EA2]">|</span>
                                <span class="text-xs text-[#9D9EA2]">{{ $post->read_duration }} دقیقه</span>
                            </div>
                            <div class="flex items-center gap-2 justify-end">
                                <span class="text-xs text-primary bg-[#EDFFF2] rounded-full py-2 px-4">{{ $post->writer_name }}</span>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-[#54555D] text-lg">هیچ پستی یافت نشد</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination Section -->
            @if($blogPosts->hasPages())
            <div class="flex justify-center items-center gap-3 mt-10 mb-6">
                {{ $blogPosts->links() }}
            </div>
            @endif
        </section>
    </div>
@endsection

@push('scripts')
    <!-- Featured Blog Swiper -->
    <script>
        const blogSwiper = new Swiper('.blogSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        // Smooth scroll to categories section on page load if hash exists
        document.addEventListener('DOMContentLoaded', function() {
            if (window.location.hash === '#categories') {
                setTimeout(function() {
                    const categoriesSection = document.getElementById('categories');
                    if (categoriesSection) {
                        categoriesSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }, 100);
            }
        });
    </script>
@endpush
