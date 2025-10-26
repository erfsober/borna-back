@extends('admin.layouts.app')

@section('title', 'افزودن آیتم بوت‌کمپ جدید')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">مدیریت بوت‌کمپ / آیتم‌های بوت‌کمپ /</span> افزودن آیتم جدید
  </h4>

  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">افزودن آیتم بوت‌کمپ جدید</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.bootcamp-items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="bootcamp_id" class="form-label">بوت‌کمپ <span class="text-danger">*</span></label>
          <select class="form-select @error('bootcamp_id') is-invalid @enderror" id="bootcamp_id" name="bootcamp_id" required>
            <option value="">انتخاب کنید</option>
            @foreach($bootcamps as $bootcamp)
              <option value="{{ $bootcamp->id }}" {{ old('bootcamp_id') == $bootcamp->id ? 'selected' : '' }}>
                {{ $bootcamp->title }}
              </option>
            @endforeach
          </select>
          @error('bootcamp_id')
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
          <label for="video" class="form-label">ویدیو</label>
          <input type="file" class="form-control @error('video') is-invalid @enderror" id="video" name="video" accept="video/*">
          @error('video')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <div class="form-text">حداکثر حجم فایل: 50 مگابایت - فرمت‌های مجاز: mp4, mov, avi, wmv</div>
        </div>

        <div class="mb-3">
          <label for="video_thumbnail" class="form-label">تصویر پیش‌نمایش ویدیو</label>
          <input type="file" class="form-control @error('video_thumbnail') is-invalid @enderror" id="video_thumbnail" name="video_thumbnail" accept="image/*">
          @error('video_thumbnail')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <div class="form-text">حداکثر حجم فایل: 2 مگابایت</div>

          <div id="video-thumbnail-preview-container" class="mt-3">
            <img id="video-thumbnail-preview" src="#" alt="Video Thumbnail Preview" class="img-thumbnail" style="max-width: 300px; display: none;">
          </div>
        </div>

        <div class="mt-4">
          <button type="submit" class="btn btn-primary">
            <i class="bx bx-save"></i>
            ذخیره
          </button>
          <a href="{{ route('admin.bootcamp-items.index') }}" class="btn btn-outline-secondary">
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
