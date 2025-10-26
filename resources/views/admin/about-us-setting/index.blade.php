@extends('admin.layouts.app')

@section('title', 'تنظیمات درباره ما')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">تنظیمات درباره ما /</span> تنظیمات
  </h4>

  @if(session('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">تنظیمات صفحه درباره ما</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.about-us-setting.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="image" class="form-label">تصویر</label>

          <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
          @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <div class="form-text">حداکثر حجم فایل: 2 مگابایت</div>

          <div id="image-preview-container" class="mt-3">
            @if($setting && $setting->getFirstMediaUrl('image'))
            <img id="image-preview" src="{{ $setting->getFirstMediaUrl('image') }}" alt="Current Image" class="img-thumbnail" style="max-width: 300px; display: block;">
            @else
            <img id="image-preview" src="#" alt="Image Preview" class="img-thumbnail" style="max-width: 300px; display: none;">
            @endif
          </div>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">توضیحات <span class="text-danger">*</span></label>
          <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="10" required>{{ old('description', $setting->description ?? '') }}</textarea>
          @error('description')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mt-4">
          <button type="submit" class="btn btn-primary">
            <i class="bx bx-save"></i>
            ذخیره تغییرات
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('image-preview');

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
