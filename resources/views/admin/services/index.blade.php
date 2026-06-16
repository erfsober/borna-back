@extends('admin.layouts.app')

@section('title', 'لیست سرویس‌ها')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">مدیریت سرویس‌ها /</span> لیست سرویس‌ها
        </h4>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0 heading-color">لیست سرویس‌ها</h5>

                <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                    <i class="bx bx-plus"></i>
                    افزودن سرویس
                </a>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                    <tr>
                        <th>شناسه</th>
                        <th>عنوان</th>
                        <th>توضیحات</th>
                        <th>تاریخ ایجاد</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>

                    <tbody>
                    @forelse($services as $service)
                        <tr>
                            <td>
                                <strong>{{ $service->id }}</strong>
                            </td>

                            <td>
                                {{ $service->title }}
                            </td>

                            <td>
                                {{ \Illuminate\Support\Str::limit(strip_tags($service->description), 100) }}
                            </td>

                            <td>
                                {{ Verta::instance($service->created_at)->format('Y/m/d') }}
                            </td>

                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                            class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                           href="{{ route('admin.services.edit', $service) }}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            ویرایش
                                        </a>

                                        <form action="{{ route('admin.services.destroy', $service) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="dropdown-item"
                                                    onclick="return confirm('آیا از حذف این سرویس مطمئن هستید؟')">
                                                <i class="bx bx-trash me-1"></i>
                                                حذف
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
                                <p class="text-muted mb-0">
                                    هیچ سرویسی یافت نشد
                                </p>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            @if($services->hasPages())
                <div class="card-footer">
                    <div class="d-flex justify-content-center">
                        {{ $services->links('vendor.pagination.custom-admin') }}
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
