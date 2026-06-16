@extends('admin.layouts.app')

@section('title', 'ویرایش سرویس')

@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/quill/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/quill/katex.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/quill/editor-fa.css') }}">
@endpush

@section('content')
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible" role="alert">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">مدیریت سرویس‌ها /</span> ویرایش سرویس
        </h4>

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">ویرایش سرویس: {{ $service->title }}</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Title --}}
                    <div class="mb-3">
                        <label class="form-label">عنوان <span class="text-danger">*</span></label>
                        <input type="text"
                               id="title"
                               name="title"
                               class="form-control @error('title') is-invalid @enderror"
                               value="{{ old('title', $service->title) }}"
                               required>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Image --}}
                    <div class="mb-3">
                        <label class="form-label">تصویر فعلی</label>
                        @if($service->getFirstMediaUrl('service_image'))
                            <div class="mb-2">
                                <img src="{{ $service->getFirstMediaUrl('service_image') }}"
                                     class="img-thumbnail"
                                     style="max-width: 200px;">
                            </div>
                        @else
                            <p class="text-muted">تصویری وجود ندارد</p>
                        @endif

                        <label class="form-label mt-2">تصویر جدید (اختیاری)</label>
                        <input type="file"
                               id="image"
                               name="service_image"
                               class="form-control @error('service_image') is-invalid @enderror"
                               accept="image/*">
                        @error('service_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="mt-3">
                            <img id="image-preview"
                                 class="img-thumbnail"
                                 style="max-width: 250px; display:none;">
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="mb-3">
                        <label class="form-label">توضیحات</label>
                        <div id="quill-editor" style="height: 300px;">
                            {!! old('description', $service->description) !!}
                        </div>
                        <input type="hidden" name="description" id="description">
                        @error('description')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Buttons --}}
                    <div class="mt-4">
                        <button class="btn btn-primary">
                            <i class="bx bx-save"></i>
                            به‌روزرسانی
                        </button>

                        <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary">
                            انصراف
                        </a>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="{{ asset('admin/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/quill/quill.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const imageInput = document.getElementById('image');
            const imagePreview = document.getElementById('image-preview');
            const descriptionInput = document.getElementById('description');

            // Quill Editor
            const quill = new Quill('#quill-editor', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline'],
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        ['link', 'clean']
                    ]
                }
            });

            // Sync description before submit
            const form = descriptionInput.closest('form');
            form.addEventListener('submit', function () {
                descriptionInput.value = quill.root.innerHTML;
            });

            // Image preview for new image
            imageInput.addEventListener('change', function (e) {
                const file = e.target.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function (event) {
                        imagePreview.src = event.target.result;
                        imagePreview.style.display = 'block';
                    };

                    reader.readAsDataURL(file);
                } else {
                    imagePreview.style.display = 'none';
                }
            });

        });
    </script>
@endpush
