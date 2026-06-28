@extends('borna.layouts.app')

@section('title', $service->title . ' | خدمات برنا')

{{-- SEO Meta Tags --}}
@section('meta_title', $service->meta_title ?? $service->title . ' | خدمات برنا')
@section('meta_description', $service->meta_description ?? \Illuminate\Support\Str::limit(strip_tags($service->description), 160))
@section('keywords', 'خدمات، برنا، سرویس، ' . $service->title)
@section('canonical', route('services.show', $service->id))

{{-- Open Graph Tags --}}
@section('og_type', 'article')
@section('og_title', $service->og_title ?? $service->meta_title ?? $service->title)
@section('og_description', $service->og_description ?? $service->meta_description ?? \Illuminate\Support\Str::limit(strip_tags($service->description), 200))
@section('og_url', route('services.show', $service->id))

@section('twitter_image',
    $service->twitter_image ?? $service->getFirstMediaUrl('service_image') ?? null
)

{{-- Twitter Card Tags --}}
@section('twitter_title', $service->twitter_title ?? $service->og_title ?? $service->meta_title ?? $service->title)
@section('twitter_description', $service->twitter_description ?? $service->og_description ?? $service->meta_description ?? \Illuminate\Support\Str::limit(strip_tags($service->description), 200))
@section('twitter_image',
    $service->twitter_image ?? $service->getFirstMediaUrl('service_image') ?? null
)

@php
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "Service",
        "name" => $service->title,
        "description" => \Illuminate\Support\Str::limit(strip_tags($service->description), 200),
        "provider" => [
            "@type" => "Organization",
            "name" => "روانشناسی برنا",
            "logo" => [
                "@type" => "ImageObject",
                "url" => asset('assets/images/borna-logo.svg')
            ]
        ],
        "mainEntityOfPage" => [
            "@type" => "WebPage",
            "@id" => route('services.show', $service->id)
        ]
    ];

    if ($service->getFirstMediaUrl('service_image')) {
        $schema["image"] = $service->getFirstMediaUrl('service_image');
    }
@endphp

<script type="application/ld+json">
    {!! json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
</script>

@section('content')
    <div class="py-8 md:py-12">
        <div class="container">

            <div class="flex flex-col lg:flex-row gap-10 md:gap-14">

                {{-- MAIN CONTENT --}}
                <div class="w-full lg:w-8/12 xl:w-9/12 flex flex-col gap-4 md:gap-8">

                    {{-- TITLE --}}
                    <h1 class="text-2xl md:text-4xl font-medium text-black">
                        {{ $service->title }}
                    </h1>

                    {{-- IMAGE --}}
                    @if($service->getFirstMediaUrl('service_image'))
                        <div class="w-full h-auto rounded-2xl overflow-hidden">
                            <img src="{{ $service->getFirstMediaUrl('service_image') }}"
                                 alt="{{ $service->title }}"
                                 class="w-full h-auto">
                        </div>
                    @endif

                    {{-- DESCRIPTION --}}
                    <div class="prose max-w-none space-y-4">
                        <div class="text-sm md:text-base text-secondary text-justify leading-loose">
                            {!! $service->description !!}
                        </div>
                    </div>

                    {{-- META --}}
                    <div class="flex flex-wrap items-center justify-between">

                        <div class="flex items-center gap-2 text-text-gray text-sm">
                            <span>{{ verta($service->created_at) }}</span>
                        </div>

                        <div class="flex items-center gap-4 mt-4 md:mt-0">

                            <button id="copy-link-btn"
                                    class="flex items-center gap-2 px-4 py-2 border rounded-lg hover:bg-gray-50 transition-colors">
                                <span class="text-sm md:text-base">کپی لینک</span>
                            </button>

                            <button id="share-btn"
                                    class="flex items-center gap-2 px-4 py-2 border rounded-lg bg-[#23242E] text-white hover:bg-opacity-90 transition-colors">
                                <span class="text-sm md:text-base">اشتراک گذاری</span>
                            </button>

                        </div>
                    </div>

                </div>

                {{-- SIDEBAR (اختیاری برای خدمات مرتبط) --}}
                <div class="w-full lg:w-4/12 xl:w-3/12 flex flex-col gap-8">

                    <div class="flex flex-col gap-4 pt-6 w-full">
                        <h3 class="text-xl md:text-2xl font-medium text-black">
                            خدمات مرتبط
                        </h3>

                        <div class="space-y-4">

                            @forelse($relatedServices as $relatedService)
                                <a href="{{ route('services.show', $relatedService->id) }}"
                                   class="bg-white border border-gray-200 rounded-xl overflow-hidden flex hover:border-primary-dark transition-colors">

                                    <div class="w-1/3">
                                        @if($relatedService->getFirstMediaUrl('service_image'))
                                            <img src="{{ $relatedService->getFirstMediaUrl('service_image') }}"
                                                 class="w-full h-full object-cover">
                                        @endif
                                    </div>

                                    <div class="w-2/3 p-3">
                                        <h4 class="text-sm text-secondary font-medium mb-2">
                                            {{ $relatedService->title }}
                                        </h4>

                                        <p class="text-xs text-text-gray">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($relatedService->description), 80) }}
                                        </p>
                                    </div>
                                </a>
                            @empty
                                <p class="text-sm text-text-gray">سرویس مرتبطی یافت نشد</p>
                            @endforelse

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/article.js') }}"></script>
@endpush
