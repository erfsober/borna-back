@extends('admin.layouts.app')

@section('title', 'افزودن بوت‌کمپ جدید')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">مدیریت بوت‌کمپ / بوت‌کمپ‌ها /</span> افزودن بوت‌کمپ جدید
  </h4>

  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">افزودن بوت‌کمپ جدید</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.bootcamps.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">عنوان <span class="text-danger">*</span></label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
          @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">توضیحات <span class="text-danger">*</span></label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="8" required>{{ old('description') }}</textarea>
          @error('description')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="icon_image" class="form-label">آیکون</label>
          <input type="file" class="form-control @error('icon_image') is-invalid @enderror" id="icon_image" name="icon_image" accept="image/*">
          @error('icon_image')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <div class="form-text">حداکثر حجم فایل: 2 مگابایت</div>

          <div id="icon-image-preview-container" class="mt-3">
            <img id="icon-image-preview" src="#" alt="Icon Preview" class="img-thumbnail" style="max-width: 300px; display: none;">
          </div>
        </div>

        <div class="mb-3">
          <label for="top_image" class="form-label">تصویر اصلی</label>
          <input type="file" class="form-control @error('top_image') is-invalid @enderror" id="top_image" name="top_image" accept="image/*">
          @error('top_image')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <div class="form-text">حداکثر حجم فایل: 2 مگابایت</div>

          <div id="top-image-preview-container" class="mt-3">
            <img id="top-image-preview" src="#" alt="Image Preview" class="img-thumbnail" style="max-width: 300px; display: none;">
          </div>
        </div>

        <div class="mb-3">
          <label for="gallery_images" class="form-label">تصاویر گالری</label>
          <input type="file" class="form-control @error('gallery_images.*') is-invalid @enderror" id="gallery_images" name="gallery_images[]" accept="image/*" multiple>
          @error('gallery_images.*')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <div class="form-text">حداکثر حجم هر فایل: 2 مگابایت - می‌توانید چند تصویر انتخاب کنید</div>

          <div id="gallery-images-preview-container" class="mt-3 d-flex flex-wrap gap-2"></div>
        </div>

        <div class="mb-3">
          <label for="video" class="form-label">ویدیو</label>
          <input type="file" class="form-control @error('video') is-invalid @enderror" id="video" name="video" accept="video/*">
          @error('video')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <div class="form-text">حداکثر حجم فایل: 50 مگابایت - فرمت‌های مجاز: mp4, mov, avi, wmv</div>
        </div>



        <div class="mt-4">
          <button type="submit" class="btn btn-primary">
            <i class="bx bx-save"></i>
            ذخیره
          </button>
          <a href="{{ route('admin.bootcamps.index') }}" class="btn btn-outline-secondary">
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
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Icon image preview
    const iconImageInput = document.getElementById('icon_image');
    const iconImagePreview = document.getElementById('icon-image-preview');

    iconImageInput.addEventListener('change', function(event) {
      const file = event.target.files[0];

      if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
          iconImagePreview.src = e.target.result;
          iconImagePreview.style.display = 'block';
        };

        reader.readAsDataURL(file);
      } else {
        iconImagePreview.style.display = 'none';
        iconImagePreview.src = '#';
      }
    });

    // Top image preview
    const topImageInput = document.getElementById('top_image');
    const topImagePreview = document.getElementById('top-image-preview');

    topImageInput.addEventListener('change', function(event) {
      const file = event.target.files[0];

      if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
          topImagePreview.src = e.target.result;
          topImagePreview.style.display = 'block';
        };

        reader.readAsDataURL(file);
      } else {
        topImagePreview.style.display = 'none';
        topImagePreview.src = '#';
      }
    });

    // Gallery images preview
    const galleryImagesInput = document.getElementById('gallery_images');
    const galleryImagesPreviewContainer = document.getElementById('gallery-images-preview-container');

    galleryImagesInput.addEventListener('change', function(event) {
      galleryImagesPreviewContainer.innerHTML = '';
      const files = event.target.files;

      if (files.length > 0) {
        Array.from(files).forEach(file => {
          const reader = new FileReader();

          reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.className = 'img-thumbnail';
            img.style.width = '150px';
            img.style.height = '150px';
            img.style.objectFit = 'cover';
            galleryImagesPreviewContainer.appendChild(img);
          };

          reader.readAsDataURL(file);
        });
      }
    });

    // Video thumbnail preview
    const videoThumbnailInput = document.getElementById('video_thumbnail');
    const videoThumbnailPreview = document.getElementById('video-thumbnail-preview');

    videoThumbnailInput.addEventListener('change', function(event) {
      const file = event.target.files[0];

      if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
          videoThumbnailPreview.src = e.target.result;
          videoThumbnailPreview.style.display = 'block';
        };

        reader.readAsDataURL(file);
      } else {
        videoThumbnailPreview.style.display = 'none';
        videoThumbnailPreview.src = '#';
      }
    });
  });
</script>
@endpush
