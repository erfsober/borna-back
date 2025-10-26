@extends('admin.layouts.app')

@section('title', 'ویرایش آیتم بوت‌کمپ')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">مدیریت بوت‌کمپ / آیتم‌های بوت‌کمپ /</span> ویرایش آیتم
  </h4>

  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">ویرایش آیتم بوت‌کمپ</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.bootcamp-items.update', $bootcampItem) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="bootcamp_id" class="form-label">بوت‌کمپ <span class="text-danger">*</span></label>
          <select class="form-select @error('bootcamp_id') is-invalid @enderror" id="bootcamp_id" name="bootcamp_id" required>
            <option value="">انتخاب کنید</option>
            @foreach($bootcamps as $bootcamp)
              <option value="{{ $bootcamp->id }}" {{ old('bootcamp_id', $bootcampItem->bootcamp_id) == $bootcamp->id ? 'selected' : '' }}>
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
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="8" required>{{ old('description', $bootcampItem->description) }}</textarea>
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

          @if($bootcampItem->getFirstMediaUrl('video'))
          <div class="mt-3">
            <p class="form-label">ویدیو فعلی:</p>
            <video controls style="max-width: 500px;">
              <source src="{{ $bootcampItem->getFirstMediaUrl('video') }}" type="video/mp4">
              مرورگر شما از پخش ویدیو پشتیبانی نمی‌کند.
            </video>
          </div>
          @endif
        </div>

        <div class="mb-3">
          <label for="video_thumbnail" class="form-label">تصویر پیش‌نمایش ویدیو</label>
          <input type="file" class="form-control @error('video_thumbnail') is-invalid @enderror" id="video_thumbnail" name="video_thumbnail" accept="image/*">
          @error('video_thumbnail')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <div class="form-text">حداکثر حجم فایل: 2 مگابایت</div>

          <div id="video-thumbnail-preview-container" class="mt-3">
            @if($bootcampItem->getFirstMediaUrl('video_thumbnail'))
            <img id="video-thumbnail-preview" src="{{ $bootcampItem->getFirstMediaUrl('video_thumbnail') }}" alt="Current Video Thumbnail" class="img-thumbnail" style="max-width: 300px; display: block;">
            @else
            <img id="video-thumbnail-preview" src="#" alt="Video Thumbnail Preview" class="img-thumbnail" style="max-width: 300px; display: none;">
            @endif
          </div>
        </div>

        <div class="mt-4">
          <button type="submit" class="btn btn-primary">
            <i class="bx bx-save"></i>
            به‌روزرسانی
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
      }
    });
  });
</script>
@endpush
