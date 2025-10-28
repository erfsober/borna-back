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
                    id="search-input"
                    class="w-full p-3 md:p-4 text-gray-700 text-sm md:text-base rounded-lg focus:outline-none border focus:border-primary search-input"
                    placeholder="عبارت خود را وارد کنید...">
                <div class="absolute left-3 md:left-4 top-1/2 transform -translate-y-1/2">
                    <img src="{{ asset('assets/images/search/search-icon.svg') }}" alt="search">
                </div>
            </div>

            <!-- Search Results -->
            <div id="search-results" class="hidden">
                <div class="flex flex-col gap-6">
                    <!-- Results Header -->
                    <div class="flex items-center gap-2 md:gap-3">
                        <img src="{{ asset('assets/images/search/book-icon.svg') }}" alt="results" class="w-5 h-5 md:w-6 md:h-6">
                        <h3 class="text-xl md:text-3xl">نتایج جستجو</h3>
                    </div>

                    <!-- Results Container -->
                    <div id="results-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Results will be inserted here -->
                    </div>

                    <!-- No Results Message -->
                    <div id="no-results" class="hidden text-center py-12">
                        <p class="text-gray-500 text-lg">نتیجه‌ای یافت نشد</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Blog Search Script -->
    <script>
        const searchInput = document.getElementById('search-input');
        const searchResults = document.getElementById('search-results');
        const resultsContainer = document.getElementById('results-container');
        const noResults = document.getElementById('no-results');
        let searchTimeout;

        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            const query = this.value.trim();

            if (query.length < 2) {
                searchResults.classList.add('hidden');
                return;
            }

            searchTimeout = setTimeout(() => {
                performSearch(query);
            }, 300);
        });

        function performSearch(query) {
            fetch(`/api/search/blogs?q=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success && data.data.length > 0) {
                        displayResults(data.data);
                        searchResults.classList.remove('hidden');
                        noResults.classList.add('hidden');
                    } else {
                        resultsContainer.innerHTML = '';
                        noResults.classList.remove('hidden');
                        searchResults.classList.remove('hidden');
                    }
                })
                .catch(error => {
                    console.error('Search error:', error);
                    noResults.classList.remove('hidden');
                    searchResults.classList.remove('hidden');
                });
        }

        function displayResults(blogs) {
            resultsContainer.innerHTML = blogs.map(blog => `
                <a href="/blog/${blog.slug}" class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                    ${blog.image ? `<div class="relative h-40 overflow-hidden bg-gray-200">
                        <img src="${blog.image}" alt="${blog.title}" class="w-full h-full object-cover">
                    </div>` : '<div class="relative h-40 bg-gray-200"></div>'}
                    <div class="p-4 flex flex-col gap-3">
                        <h4 class="font-semibold text-base line-clamp-2 text-gray-800">${blog.title}</h4>
                        <p class="text-sm text-gray-600 line-clamp-2">${blog.summary || blog.description}</p>
                        <div class="flex items-center justify-between text-xs text-gray-500 mt-auto">
                            <span>${blog.writer_name}</span>
                            <span>${blog.read_duration} دقیقه</span>
                        </div>
                    </div>
                </a>
            `).join('');
        }
    </script>
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
