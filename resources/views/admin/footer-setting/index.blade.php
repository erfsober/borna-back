@extends('admin.layouts.app')

@section('title', 'تنظیمات فوتر')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">تنظیمات فوتر /</span> تنظیمات
  </h4>

  @if(session('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">تنظیمات صفحه فوتر</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.footer-setting.update') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="description" class="form-label">توضیحات <span class="text-danger">*</span></label>
          <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="10" required>{{ old('description', $footerSetting->description ?? '') }}</textarea>
          @error('description')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="instagram" class="form-label">لینک اینستاگرام</label>
          <input type="url" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram" placeholder="https://instagram.com/..." value="{{ old('instagram', $footerSetting->instagram ?? '') }}">
          @error('instagram')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="twitter" class="form-label">لینک توییتر</label>
          <input type="url" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter" placeholder="https://twitter.com/..." value="{{ old('twitter', $footerSetting->twitter ?? '') }}">
          @error('twitter')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="facebook" class="form-label">لینک فیس‌بوک</label>
          <input type="url" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook" placeholder="https://facebook.com/..." value="{{ old('facebook', $footerSetting->facebook ?? '') }}">
          @error('facebook')
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
