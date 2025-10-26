@extends('admin.layouts.app')

@section('title', 'افزودن دسته‌بندی جدید')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">مدیریت بلاگ / دسته‌بندی‌ها /</span> افزودن دسته‌بندی جدید
  </h4>

  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">افزودن دسته‌بندی جدید</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.blog-post-categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">عنوان دسته‌بندی <span class="text-danger">*</span></label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required autofocus>
          @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mt-4">
          <button type="submit" class="btn btn-primary">
            <i class="bx bx-save"></i>
            ذخیره
          </button>
          <a href="{{ route('admin.blog-post-categories.index') }}" class="btn btn-outline-secondary">
            <i class="bx bx-x"></i>
            انصراف
          </a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
