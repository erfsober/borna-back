@extends('admin.layouts.app')

@section('title', 'افزودن آیتم جدید')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">تنظیمات درباره ما / آیتم‌ها /</span> افزودن آیتم جدید
  </h4>

  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">افزودن آیتم جدید</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.about-us-items.store') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="doctor_name" class="form-label">نام دکتر <span class="text-danger">*</span></label>
          <input type="text" class="form-control @error('doctor_name') is-invalid @enderror" id="doctor_name" name="doctor_name" value="{{ old('doctor_name') }}" required>
          @error('doctor_name')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="star" class="form-label">امتیاز <span class="text-danger">*</span></label>
          <select class="form-select @error('star') is-invalid @enderror" id="star" name="star" required>
            <option value="">انتخاب کنید</option>
            @for($i = 1; $i <= 5; $i++)
              <option value="{{ $i }}" {{ old('star') == $i ? 'selected' : '' }}>
                {{ $i }} ستاره
              </option>
            @endfor
          </select>
          @error('star')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">توضیحات <span class="text-danger">*</span></label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
          @error('description')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mt-4">
          <button type="submit" class="btn btn-primary">
            <i class="bx bx-save"></i>
            ذخیره
          </button>
          <a href="{{ route('admin.about-us-items.index') }}" class="btn btn-outline-secondary">
            <i class="bx bx-x"></i>
            انصراف
          </a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
