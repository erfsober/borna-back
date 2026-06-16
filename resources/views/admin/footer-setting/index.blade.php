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
          <label for="aparat" class="form-label">لینک آپارات</label>
          <input type="url" class="form-control @error('aparat') is-invalid @enderror" id="aparat" name="aparat" placeholder="https://aparat.com/..." value="{{ old('aparat', $footerSetting->aparat ?? '') }}">
          @error('aparat')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="telegram" class="form-label">لینک تلگرام</label>
          <input type="url" class="form-control @error('telegram') is-invalid @enderror" id="telegram" name="telegram" placeholder="https://telegram.org/..." value="{{ old('telegram', $footerSetting->telegram ?? '') }}">
          @error('telegram')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="bale" class="form-label">لینک بله</label>
          <input type="url" class="form-control @error('bale') is-invalid @enderror" id="bale" name="bale" placeholder="https://web.bale.ai/..." value="{{ old('bale', $footerSetting->bale ?? '') }}">
          @error('bale')
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
