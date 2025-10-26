@extends('admin.layouts.app')

@section('title', 'جزئیات درخواست تماس')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">ارتباط با ما / درخواست‌ها /</span> جزئیات
  </h4>

  <div class="row">
    <div class="col-md-8">
      <!-- Contact Details Card -->
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">اطلاعات تماس</h5>
          <a href="{{ route('admin.contacts.index') }}" class="btn btn-sm btn-secondary">
            <i class="bx bx-arrow-back me-1"></i>
            بازگشت
          </a>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-sm-3">
              <h6 class="mb-0">شناسه:</h6>
            </div>
            <div class="col-sm-9">
              <strong>{{ $contact->id }}</strong>
            </div>
          </div>
          <hr>
          <div class="row mb-3">
            <div class="col-sm-3">
              <h6 class="mb-0">نام:</h6>
            </div>
            <div class="col-sm-9">
              {{ $contact->name }}
            </div>
          </div>
          <hr>
          <div class="row mb-3">
            <div class="col-sm-3">
              <h6 class="mb-0">ایمیل:</h6>
            </div>
            <div class="col-sm-9" dir="ltr">
              <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
            </div>
          </div>
          <hr>
          <div class="row mb-3">
            <div class="col-sm-3">
              <h6 class="mb-0">تلفن:</h6>
            </div>
            <div class="col-sm-9" dir="ltr">
              @if($contact->phone)
                <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
              @else
                <span class="text-muted">ندارد</span>
              @endif
            </div>
          </div>
          <hr>
          <div class="row mb-3">
            <div class="col-sm-3">
              <h6 class="mb-0">پیام:</h6>
            </div>
            <div class="col-sm-9">
              <p class="mb-0" style="white-space: pre-wrap;">{{ $contact->message }}</p>
            </div>
          </div>
          <hr>
          <div class="row mb-3">
            <div class="col-sm-3">
              <h6 class="mb-0">تاریخ ارسال:</h6>
            </div>
            <div class="col-sm-9" dir="ltr">
              {{ $contact->created_at }}
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <!-- Status Card -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="mb-0">وضعیت درخواست</h5>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('admin.contacts.update', $contact) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <div class="form-check form-switch">
                <input
                  class="form-check-input"
                  type="checkbox"
                  name="checked"
                  id="contactChecked"
                  value="1"
                  {{ $contact->checked ? 'checked' : '' }}
                >
                <label class="form-check-label" for="contactChecked">
                  بررسی شده
                </label>
              </div>
              <small class="text-muted d-block mt-2">
                با فعال کردن این گزینه، درخواست به عنوان "بررسی شده" علامت‌گذاری می‌شود.
              </small>
            </div>

            <button type="submit" class="btn btn-primary w-100">
              <i class="bx bx-save me-1"></i>
              ذخیره تغییرات
            </button>
          </form>

          <hr class="my-4">

          <div class="d-flex justify-content-between mb-2">
            <span class="text-muted">وضعیت فعلی:</span>
            @if($contact->checked)
              <span class="badge bg-label-success">بررسی شده</span>
            @else
              <span class="badge bg-label-warning">بررسی نشده</span>
            @endif
          </div>

          @if($contact->updated_at->ne($contact->created_at))
          <div class="d-flex justify-content-between">
            <span class="text-muted">آخرین بروزرسانی:</span>
            <small dir="ltr">{{ $contact->updated_at }}</small>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
