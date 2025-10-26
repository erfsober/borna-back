@extends('admin.layouts.app')

@section('title', 'لیست کاربران')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">کاربران /</span> لیست کاربران
  </h4>

  <!-- Bootstrap Table with Header Dark -->
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0 heading-color">لیست کاربران</h5>
      <div class="card-header-elements">
        <form method="GET" action="{{ route('admin.users.index') }}" class="d-flex gap-2">
          <div class="input-group input-group-merge">
            <span class="input-group-text"><i class="bx bx-search"></i></span>
            <input
              type="text"
              name="q"
              class="form-control"
              placeholder="جستجو بر اساس نام، ایمیل یا تلفن..."
              value="{{ request('q') }}"
              aria-label="Search"
            >
          </div>
          <button type="submit" class="btn btn-primary">
            <i class="bx bx-search"></i>
            جستجو
          </button>
        </form>
      </div>
    </div>

    @if(request('q'))
    <div class="card-body pb-0">
      <div class="alert alert-info d-flex align-items-center" role="alert">
        <i class="bx bx-info-circle me-2"></i>
        <div>
          نتایج جستجو برای: <strong>"{{ request('q') }}"</strong>
          <span class="text-muted">- {{ $users->total() }} کاربر یافت شد</span>
        </div>
      </div>
    </div>
    @endif

    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>شناسه</th>
            <th>نام</th>
            <th>ایمیل</th>
            <th>تلفن</th>
            <th>ایمیل تایید شده</th>
            <th>تلفن تایید شده</th>
            <th>تاریخ ثبت‌نام</th>
            <th>آخرین بروزرسانی</th>
            <th>عملیات</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse($users as $user)
          <tr>
            <td><strong>{{ $user->id }}</strong></td>
            <td>{{ $user->name }}</td>
            <td dir="ltr" class="text-start">{{ $user->email }}</td>
            <td dir="ltr" class="text-start">{{ $user->phone ?? '-' }}</td>
            <td>
              @if($user->email_verified_at)
                <span class="badge bg-label-success me-1">تایید شده</span>
                <small class="text-muted d-block">{{ $user->email_verified_at }}</small>
              @else
                <span class="badge bg-label-warning me-1">تایید نشده</span>
              @endif
            </td>
            <td>
              @if($user->phone_verified_at)
                <span class="badge bg-label-success me-1">تایید شده</span>
                <small class="text-muted d-block">{{ $user->phone_verified_at }}</small>
              @else
                <span class="badge bg-label-warning me-1">تایید نشده</span>
              @endif
            </td>
            <td>
              <span dir="ltr">{{ $user->created_at }}</span>
            </td>
            <td>
              <span dir="ltr">{{ $user->updated_at }}</span>
            </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> ویرایش</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> حذف</a>
                </div>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="9" class="text-center py-4">
              <i class="bx bx-info-circle bx-md text-muted mb-2"></i>
              <p class="text-muted mb-0">هیچ کاربری یافت نشد</p>
            </td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    @if($users->hasPages())
    <div class="card-footer">
      <div class="d-flex justify-content-center">
        {{ $users->appends(['q' => request('q')])->links('vendor.pagination.custom-admin') }}
      </div>
    </div>
    @endif
  </div>
  <!--/ Bootstrap Table with Header Dark -->
</div>
@endsection
