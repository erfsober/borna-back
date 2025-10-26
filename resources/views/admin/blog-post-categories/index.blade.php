@extends('admin.layouts.app')

@section('title', 'لیست دسته‌بندی‌های بلاگ')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">مدیریت بلاگ /</span> دسته‌بندی‌ها
  </h4>

  @if(session('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0 heading-color">لیست دسته‌بندی‌ها</h5>
      <div class="card-header-elements">
        <a href="{{ route('admin.blog-post-categories.create') }}" class="btn btn-primary">
          <i class="bx bx-plus"></i>
          افزودن دسته‌بندی جدید
        </a>
      </div>
    </div>

    <div class="table-responsive text-nowrap" style="min-height: 400px;">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>شناسه</th>
            <th>عنوان</th>
            <th>تعداد پست‌ها</th>
            <th>تاریخ ایجاد</th>
            <th>عملیات</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse($categories as $category)
          <tr>
            <td><strong>{{ $category->id }}</strong></td>
            <td>{{ $category->title }}</td>
            <td><span class="badge bg-label-primary">{{ $category->blog_posts_count }} پست</span></td>
            <td>
              <span dir="ltr">{{ $category->created_at }}</span>
            </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('admin.blog-post-categories.edit', $category) }}">
                    <i class="bx bx-edit-alt me-1"></i> ویرایش
                  </a>
                  <form action="{{ route('admin.blog-post-categories.destroy', $category) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="dropdown-item" onclick="return confirm('آیا از حذف این دسته‌بندی مطمئن هستید؟')">
                      <i class="bx bx-trash me-1"></i> حذف
                    </button>
                  </form>
                </div>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="5" class="text-center py-4">
              <i class="bx bx-info-circle bx-md text-muted mb-2"></i>
              <p class="text-muted mb-0">هیچ دسته‌بندی یافت نشد</p>
            </td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    @if($categories->hasPages())
    <div class="card-footer">
      <div class="d-flex justify-content-center">
        {{ $categories->links('vendor.pagination.custom-admin') }}
      </div>
    </div>
    @endif
  </div>
</div>
@endsection
