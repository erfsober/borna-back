@extends('admin.layouts.app')

@section('title', 'تنظیمات تماس با ما')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">تنظیمات تماس با ما /</span> تنظیمات
  </h4>

  @if(session('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">تنظیمات صفحه تماس با ما</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.contact-us-setting.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="address" class="form-label">آدرس</label>
            <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" rows="3">{{ old('address', $setting->address ?? '') }}</textarea>
            @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-md-6 mb-3">
            <label for="work_hours" class="form-label">ساعات کاری</label>
            <textarea name="work_hours" id="work_hours" class="form-control @error('work_hours') is-invalid @enderror" rows="3">{{ old('work_hours', $setting->work_hours ?? '') }}</textarea>
            @error('work_hours')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="phone" class="form-label">تلفن</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $setting->phone ?? '') }}">
            @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-md-6 mb-3">
            <label for="email" class="form-label">ایمیل</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $setting->email ?? '') }}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="lat" class="form-label">عرض جغرافیایی (Latitude)</label>
            <input type="number" step="any" class="form-control @error('lat') is-invalid @enderror" id="lat" name="lat" value="{{ old('lat', $setting->lat ?? '') }}">
            @error('lat')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="form-text">عدد بین -90 تا 90</div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="lng" class="form-label">طول جغرافیایی (Longitude)</label>
            <input type="number" step="any" class="form-control @error('lng') is-invalid @enderror" id="lng" name="lng" value="{{ old('lng', $setting->lng ?? '') }}">
            @error('lng')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="form-text">عدد بین -180 تا 180</div>
          </div>
        </div>

        <div class="mb-3">
          <label for="map_image" class="form-label">تصویر نقشه</label>

          <input type="file" class="form-control @error('map_image') is-invalid @enderror" id="map_image" name="map_image" accept="image/*">
          @error('map_image')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <div class="form-text">حداکثر حجم فایل: 2 مگابایت</div>

          <div id="map-image-preview-container" class="mt-3">
            @if($setting && $setting->getFirstMediaUrl('map_image'))
            <img id="map-image-preview" src="{{ $setting->getFirstMediaUrl('map_image') }}" alt="Current Map Image" class="img-thumbnail" style="max-width: 300px; display: block;">
            @else
            <img id="map-image-preview" src="#" alt="Map Image Preview" class="img-thumbnail" style="max-width: 300px; display: none;">
            @endif
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="telegram" class="form-label">تلگرام</label>
            <input type="text" class="form-control @error('telegram') is-invalid @enderror" id="telegram" name="telegram" value="{{ old('telegram', $setting->telegram ?? '') }}" placeholder="@username">
            @error('telegram')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-md-4 mb-3">
            <label for="whatsapp" class="form-label">واتساپ</label>
            <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $setting->whatsapp ?? '') }}">
            @error('whatsapp')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-md-4 mb-3">
            <label for="instagram" class="form-label">اینستاگرام</label>
            <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram" value="{{ old('instagram', $setting->instagram ?? '') }}" placeholder="@username">
            @error('instagram')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
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
    const mapImageInput = document.getElementById('map_image');
    const mapImagePreview = document.getElementById('map-image-preview');

    mapImageInput.addEventListener('change', function(event) {
      const file = event.target.files[0];

      if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
          mapImagePreview.src = e.target.result;
          mapImagePreview.style.display = 'block';
        };

        reader.readAsDataURL(file);
      } else {
        mapImagePreview.style.display = 'none';
        mapImagePreview.src = '#';
      }
    });
  });
</script>
@endpush
