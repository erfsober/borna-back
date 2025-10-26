@extends('admin.layouts.app')

@section('title', 'ویرایش پست')

@push('styles')
<link rel="stylesheet" href="{{ asset('admin/vendor/libs/quill/typography.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendor/libs/quill/katex.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendor/libs/quill/editor-fa.css') }}">
@endpush

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">مدیریت بلاگ / پست‌ها /</span> ویرایش پست
  </h4>

  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">ویرایش پست</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.blog-posts.update', $blogPost) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">عنوان <span class="text-danger">*</span></label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $blogPost->title) }}" required>
          @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">اسلاگ <span class="text-danger">*</span></label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $blogPost->slug) }}" required>
          @error('slug')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <div class="form-text">اسلاگ باید منحصر به فرد باشد و از حروف کوچک، اعداد و خط تیره استفاده کنید</div>
        </div>

        <div class="mb-3">
          <label for="writer_name" class="form-label">نام نویسنده <span class="text-danger">*</span></label>
          <input type="text" class="form-control @error('writer_name') is-invalid @enderror" id="writer_name" name="writer_name" value="{{ old('writer_name', $blogPost->writer_name) }}" required>
          @error('writer_name')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="read_duration" class="form-label">مدت زمان مطالعه (دقیقه) <span class="text-danger">*</span></label>
          <input type="number" class="form-control @error('read_duration') is-invalid @enderror" id="read_duration" name="read_duration" value="{{ old('read_duration', $blogPost->read_duration) }}" min="1" required>
          @error('read_duration')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="category_id" class="form-label">دسته‌بندی</label>
          <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
            <option value="">بدون دسته‌بندی</option>
            @foreach($categories as $category)
              <option value="{{ $category->id }}" {{ old('category_id', $blogPost->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->title }}
              </option>
            @endforeach
          </select>
          @error('category_id')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">تصویر</label>
          <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
          @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <div class="form-text">حداکثر حجم فایل: 2 مگابایت</div>

          <div id="image-preview-container" class="mt-3">
            @if($blogPost->getFirstMediaUrl('image'))
            <img id="image-preview" src="{{ $blogPost->getFirstMediaUrl('image') }}" alt="Current Image" class="img-thumbnail" style="max-width: 300px; display: block;">
            @else
            <img id="image-preview" src="#" alt="Image Preview" class="img-thumbnail" style="max-width: 300px; display: none;">
            @endif
          </div>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">توضیحات <span class="text-danger">*</span></label>
          <div id="quill-editor" style="height: 400px;">
            {!! old('description', $blogPost->description) !!}
          </div>
          <input type="hidden" name="description" id="description" value="{{ old('description', $blogPost->description) }}">
          @error('description')
          <div class="invalid-feedback d-block">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="is_popular" name="is_popular" value="1" {{ old('is_popular', $blogPost->is_popular) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_popular">نوشته محبوب</label>
          </div>
        </div>

        <div class="mt-4">
          <button type="submit" class="btn btn-primary">
            <i class="bx bx-save"></i>
            ذخیره تغییرات
          </button>
          <a href="{{ route('admin.blog-posts.index') }}" class="btn btn-outline-secondary">
            <i class="bx bx-x"></i>
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
  document.addEventListener('DOMContentLoaded', function() {
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('image-preview');
    const descriptionInput = document.getElementById('description');

    // Initialize Quill editor
    const quill = new Quill('#quill-editor', {
      theme: 'snow',
      modules: {
        toolbar: [
          [{ 'font': [] }, { 'size': [] }],
          ['bold', 'italic', 'underline', 'strike'],
          [{ 'color': [] }, { 'background': [] }],
          [{ 'script': 'sub' }, { 'script': 'super' }],
          [{ 'header': '1' }, { 'header': '2' }, 'blockquote', 'code-block'],
          [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }],
          ['direction', { 'align': [] }],
          ['link', 'image', 'video', 'formula'],
          ['clean']
        ]
      }
    });

    // Sync Quill content to hidden input on form submit
    const form = descriptionInput.closest('form');
    form.addEventListener('submit', function() {
      descriptionInput.value = quill.root.innerHTML;
    });

    // Image preview
    imageInput.addEventListener('change', function(event) {
      const file = event.target.files[0];

      if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
          imagePreview.src = e.target.result;
          imagePreview.style.display = 'block';
        };

        reader.readAsDataURL(file);
      } else {
        imagePreview.style.display = 'none';
        imagePreview.src = '#';
      }
    });
  });
</script>
@endpush
