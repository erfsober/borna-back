@extends('admin.layouts.app')

@section('title', 'لیست آیتم‌های بوت‌کمپ')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">مدیریت بوت‌کمپ /</span> آیتم‌های بوت‌کمپ
  </h4>

  @if(session('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0 heading-color">لیست آیتم‌های بوت‌کمپ</h5>
      <div class="card-header-elements">
        <a href="{{ route('admin.bootcamp-items.create') }}" class="btn btn-primary">
          <i class="bx bx-plus"></i>
          افزودن آیتم جدید
        </a>
      </div>
    </div>

    <div class="table-responsive text-nowrap" style="min-height: 400px;">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>شناسه</th>
            <th>بوت‌کمپ</th>
            <th>توضیحات</th>
            <th>ویدیو</th>
            <th>تاریخ ایجاد</th>
            <th>عملیات</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse($items as $item)
          <tr>
            <td><strong>{{ $item->id }}</strong></td>
            <td>
              <span class="badge bg-label-primary">{{ $item->bootcamp->title }}</span>
            </td>
            <td>{{ \Illuminate\Support\Str::limit($item->description, 50) }}</td>
            <td>
              @if($item->getFirstMediaUrl('video'))
                <i class="bx bx-video text-success bx-md"></i>
              @else
                <i class="bx bx-video text-muted bx-md"></i>
              @endif
            </td>
            <td>
              <span dir="ltr">{{ $item->jalali_created_at }}</span>
            </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('admin.bootcamp-items.edit', $item) }}">
                    <i class="bx bx-edit-alt me-1"></i> ویرایش
                  </a>
                  <form action="{{ route('admin.bootcamp-items.destroy', $item) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="dropdown-item" onclick="return confirm('آیا از حذف این آیتم مطمئن هستید؟')">
                      <i class="bx bx-trash me-1"></i> حذف
                    </button>
                  </form>
                </div>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="6" class="text-center py-4">
              <i class="bx bx-info-circle bx-md text-muted mb-2"></i>
              <p class="text-muted mb-0">هیچ آیتمی یافت نشد</p>
            </td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    @if($items->hasPages())
    <div class="card-footer">
      <div class="d-flex justify-content-center">
        {{ $items->links('vendor.pagination.custom-admin') }}
      </div>
    </div>
    @endif
  </div>
</div>
@endsection
