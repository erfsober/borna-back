@extends('borna.layouts.app')

@section('title', $blogPost->title . ' | روانشناسی برنا')

@section('description', \Illuminate\Support\Str::limit(strip_tags($blogPost->description), 160))

@section('keywords', 'روانشناسی، برنا، مقاله، ' . $blogPost->title)

@section('content')
    <div class="py-8 md:py-12">
        <div class="container">
            <!-- Article Layout -->
            <div class="flex flex-col lg:flex-row gap-10 md:gap-14">
                <!-- Main Content -->
                <div class="w-full lg:w-8/12 xl:w-9/12 flex flex-col gap-4 md:gap-8">
                    <!-- Article Header -->
                    <h1 class="text-2xl md:text-4xl font-medium text-black">{{ $blogPost->title }}</h1>

                    <!-- Article Featured Image -->
                    @if($blogPost->getFirstMediaUrl('image'))
                    <div class="w-full h-auto rounded-2xl overflow-hidden">
                        <img src="{{ $blogPost->getFirstMediaUrl('image') }}" alt="{{ $blogPost->title }}" class="w-full h-auto">
                    </div>
                    @endif

                    <!-- Article Content -->
                    <div class="prose max-w-none space-y-4">
                        <div class="text-sm md:text-base text-secondary text-justify leading-loose">
                            {!! $blogPost->description !!}
                        </div>
                    </div>

                    <!-- Article Meta Info -->
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="flex items-center gap-2 text-text-gray text-sm">
                            <span>{{ $blogPost->writer_name }}</span>
                            <span>|</span>
                            <span>{{ $blogPost->created_at }}</span>
                            <span>|</span>
                            <span>{{ $blogPost->read_duration }} دقیقه</span>
                        </div>

                        <div class="flex items-center gap-4 mt-4 md:mt-0">
                            <button id="copy-link-btn"
                                class="flex items-center gap-2 px-4 py-2 border rounded-lg hover:bg-gray-50 transition-colors">
                                <img src="{{ asset('assets/images/article/copy-icon.svg') }}" alt="Copy" class="w-5 h-5">
                                <span class="text-sm md:text-base">کپی لینک پست</span>
                            </button>
                            <button id="share-btn"
                                class="flex items-center gap-2 px-4 py-2 border rounded-lg bg-[#23242E] text-white hover:bg-opacity-90 transition-colors">
                                <img src="{{ asset('assets/images/article/share-icon.svg') }}" alt="Share" class="w-5 h-5">
                                <span class="text-sm md:text-base">اشتراک گذاری</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="w-full lg:w-4/12 xl:w-3/12 flex flex-col md:flex-row lg:flex-col gap-8">
                    <!-- Related Articles -->
                    <div class="flex flex-col gap-4 pt-6 w-full md:w-1/2 lg:w-full">
                        <h3 class="text-xl md:text-2xl font-medium text-black">مقالات مرتبط</h3>
                        <div class="space-y-4">
                            @forelse($relatedPosts as $relatedPost)
                            <a href="{{ route('blog.show', $relatedPost->slug) }}"
                                class="bg-white border border-gray-200 rounded-xl overflow-hidden flex hover:border-primary-dark transition-colors">
                                <div class="w-1/3">
                                    @if($relatedPost->getFirstMediaUrl('image'))
                                        <img src="{{ $relatedPost->getFirstMediaUrl('image') }}" alt="{{ $relatedPost->title }}"
                                            class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                            <i class="bx bx-image text-gray-400 text-3xl"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="w-2/3 p-3">
                                    <h4 class="text-sm text-secondary font-medium mb-2">{{ $relatedPost->title }}</h4>
                                    <p class="text-xs text-text-gray">{{ \Illuminate\Support\Str::limit(strip_tags($relatedPost->description), 80) }}</p>
                                </div>
                            </a>
                            @empty
                            <p class="text-sm text-text-gray">مقاله مرتبطی یافت نشد</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Featured Post -->
                    <div class="flex flex-col gap-4 pt-6 w-full md:w-1/2 lg:w-full">
                        <h3 class="text-xl md:text-2xl font-medium text-black">مطلب برگزیده هفته</h3>
                        <div class="space-y-4">
                            @forelse($featuredPosts as $featuredPost)
                            <div class="flex flex-col gap-3 bg-bg-light p-4 rounded-xl">
                                <div class="flex items-center gap-4">
                                    <div class="flex items-center gap-1 text-xs text-text-gray">
                                        <img src="{{ asset('assets/images/article/folder-icon.svg') }}" alt="Folder" class="w-4 h-4">
                                        <span>{{ $featuredPost->writer_name }}</span>
                                    </div>
                                    <div class="flex items-center gap-1 text-xs text-text-gray">
                                        <img src="{{ asset('assets/images/article/clock-icon.svg') }}" alt="Clock" class="w-4 h-4">
                                        <span>{{ $featuredPost->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                                <h4 class="text-lg text-secondary">{{ $featuredPost->title }}</h4>
                                <p class="text-sm text-text-gray">{{ \Illuminate\Support\Str::limit(strip_tags($featuredPost->description), 100) }}</p>
                                <a href="{{ route('blog.show', $featuredPost->slug) }}"
                                    class="inline-flex items-center gap-1 text-secondary text-sm group">
                                    <span class="group-hover:text-primary transition-colors">بیشتر بخوانید</span>
                                    <img src="{{ asset('assets/images/article/arrow-left.svg') }}" alt="Arrow" class="w-4 h-4">
                                </a>
                            </div>
                            @empty
                            <p class="text-sm text-text-gray">مطلب برگزیده‌ای یافت نشد</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/article.js') }}" defer></script>
@endpush
