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

        {{-- SEO Settings Section --}}
        <div class="mb-4">
          <div class="accordion" id="seoAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="seoHeading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seoCollapse" aria-expanded="false" aria-controls="seoCollapse">
                  <i class="bx bx-search-alt me-2"></i> تنظیمات SEO (بهینه‌سازی موتورهای جستجو)
                </button>
              </h2>
              <div id="seoCollapse" class="accordion-collapse collapse" aria-labelledby="seoHeading" data-bs-parent="#seoAccordion">
                <div class="accordion-body">
                  <p class="text-muted small mb-3">این فیلدها اختیاری هستند. در صورت خالی بودن، از اطلاعات اصلی پست استفاده می‌شود.</p>

                  {{-- Basic SEO --}}
                  <h6 class="mb-3">تنظیمات پایه</h6>
                  <div class="mb-3">
                    <label for="meta_title" class="form-label">عنوان متا (Meta Title)</label>
                    <input type="text" class="form-control @error('meta_title') is-invalid @enderror" id="meta_title" name="meta_title" value="{{ old('meta_title', $blogPost->meta_title) }}" maxlength="60">
                    @error('meta_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">حداکثر 60 کاراکتر - عنوانی که در نتایج جستجو نمایش داده می‌شود</div>
                  </div>

                  <div class="mb-3">
                    <label for="meta_description" class="form-label">توضیحات متا (Meta Description)</label>
                    <textarea class="form-control @error('meta_description') is-invalid @enderror" id="meta_description" name="meta_description" rows="3" maxlength="160">{{ old('meta_description', $blogPost->meta_description) }}</textarea>
                    @error('meta_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">حداکثر 160 کاراکتر - توضیحی که در نتایج جستجو نمایش داده می‌شود</div>
                  </div>

                  <hr class="my-4">

                  {{-- Open Graph (Facebook, LinkedIn) --}}
                  <h6 class="mb-3">تنظیمات Open Graph (فیسبوک، لینکدین)</h6>
                  <div class="mb-3">
                    <label for="og_title" class="form-label">عنوان OG</label>
                    <input type="text" class="form-control @error('og_title') is-invalid @enderror" id="og_title" name="og_title" value="{{ old('og_title', $blogPost->og_title) }}" maxlength="255">
                    @error('og_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">عنوان برای اشتراک‌گذاری در شبکه‌های اجتماعی</div>
                  </div>

                  <div class="mb-3">
                    <label for="og_description" class="form-label">توضیحات OG</label>
                    <textarea class="form-control @error('og_description') is-invalid @enderror" id="og_description" name="og_description" rows="3">{{ old('og_description', $blogPost->og_description) }}</textarea>
                    @error('og_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">توضیحات برای اشتراک‌گذاری در شبکه‌های اجتماعی</div>
                  </div>

                  <div class="mb-3">
                    <label for="og_image" class="form-label">تصویر OG (URL)</label>
                    <input type="url" class="form-control @error('og_image') is-invalid @enderror" id="og_image" name="og_image" value="{{ old('og_image', $blogPost->og_image) }}" placeholder="https://example.com/image.jpg">
                    @error('og_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">URL تصویر برای نمایش در شبکه‌های اجتماعی (توصیه: 1200x630 پیکسل)</div>
                  </div>

                  <hr class="my-4">

                  {{-- Twitter Card --}}
                  <h6 class="mb-3">تنظیمات Twitter Card</h6>
                  <div class="mb-3">
                    <label for="twitter_title" class="form-label">عنوان توییتر</label>
                    <input type="text" class="form-control @error('twitter_title') is-invalid @enderror" id="twitter_title" name="twitter_title" value="{{ old('twitter_title', $blogPost->twitter_title) }}" maxlength="255">
                    @error('twitter_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">عنوان برای اشتراک‌گذاری در توییتر</div>
                  </div>

                  <div class="mb-3">
                    <label for="twitter_description" class="form-label">توضیحات توییتر</label>
                    <textarea class="form-control @error('twitter_description') is-invalid @enderror" id="twitter_description" name="twitter_description" rows="3">{{ old('twitter_description', $blogPost->twitter_description) }}</textarea>
                    @error('twitter_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">توضیحات برای اشتراک‌گذاری در توییتر</div>
                  </div>

                  <div class="mb-3">
                    <label for="twitter_image" class="form-label">تصویر توییتر (URL)</label>
                    <input type="url" class="form-control @error('twitter_image') is-invalid @enderror" id="twitter_image" name="twitter_image" value="{{ old('twitter_image', $blogPost->twitter_image) }}" placeholder="https://example.com/image.jpg">
                    @error('twitter_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">URL تصویر برای نمایش در توییتر</div>
                  </div>
                </div>
              </div>
            </div>
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
