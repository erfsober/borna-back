@extends('admin.layouts.app')

@section('title', 'لیست درخواست‌های تماس')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">
    <span class="text-muted fw-light">ارتباط با ما /</span> درخواست‌ها
  </h4>

  <!-- Bootstrap Table with Header Dark -->
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0 heading-color">لیست درخواست‌های تماس</h5>
      <div class="card-header-elements">
        <form method="GET" action="{{ route('admin.contacts.index') }}" class="d-flex gap-2">
          <div class="input-group input-group-merge">
            <span class="input-group-text"><i class="bx bx-search"></i></span>
            <input
              type="text"
              name="q"
              class="form-control"
              placeholder="جستجو بر اساس نام، ایمیل، تلفن یا پیام..."
              value="{{ request('q') }}"
              aria-label="Search"
            >
          </div>
          <select name="checked" class="form-select" style="width: auto;">
            <option value="">همه</option>
            <option value="1" {{ request('checked') === '1' ? 'selected' : '' }}>بررسی شده</option>
            <option value="0" {{ request('checked') === '0' ? 'selected' : '' }}>بررسی نشده</option>
          </select>
          <button type="submit" class="btn btn-primary">
            <i class="bx bx-search"></i>
            جستجو
          </button>
          @if(request('q') || request('checked') !== null)
          <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
            <i class="bx bx-x"></i>
            پاک کردن
          </a>
          @endif
        </form>
      </div>
    </div>

    @if(request('q') || request('checked') !== null)
    <div class="card-body pb-0">
      <div class="alert alert-info d-flex align-items-center" role="alert">
        <i class="bx bx-info-circle me-2"></i>
        <div>
          @if(request('q'))
          نتایج جستجو برای: <strong>"{{ request('q') }}"</strong>
          @endif
          @if(request('checked') !== null)
          <span class="me-2">وضعیت: <strong>{{ request('checked') === '1' ? 'بررسی شده' : 'بررسی نشده' }}</strong></span>
          @endif
          <span class="text-muted">- {{ $contacts->total() }} درخواست یافت شد</span>
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
            <th>پیام</th>
            <th>وضعیت</th>
            <th>تاریخ ارسال</th>
            <th>عملیات</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse($contacts as $contact)
          <tr>
            <td><strong>{{ $contact->id }}</strong></td>
            <td>{{ $contact->name }}</td>
            <td dir="ltr" class="text-start">{{ $contact->email }}</td>
            <td dir="ltr" class="text-start">{{ $contact->phone ?? '-' }}</td>
            <td>
              <div style="max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                {{ $contact->message }}
              </div>
            </td>
            <td>
              <form method="POST" action="{{ route('admin.contacts.update', $contact) }}" class="d-inline">
                @csrf
                @method('PUT')
                <div class="form-check form-switch">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="checked"
                    value="1"
                    {{ $contact->checked ? 'checked' : '' }}
                    onchange="this.form.submit()"
                  >
                  <label class="form-check-label">
                    @if($contact->checked)
                      <span class="badge bg-label-success">بررسی شده</span>
                    @else
                      <span class="badge bg-label-warning">بررسی نشده</span>
                    @endif
                  </label>
                </div>
              </form>
            </td>
            <td>
              <span dir="ltr">{{ $contact->created_at }}</span>
            </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('admin.contacts.show', $contact) }}">
                    <i class="bx bx-show me-1"></i> مشاهده جزئیات
                  </a>
                </div>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="8" class="text-center py-4">
              <i class="bx bx-info-circle bx-md text-muted mb-2"></i>
              <p class="text-muted mb-0">هیچ درخواستی یافت نشد</p>
            </td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    @if($contacts->hasPages())
    <div class="card-footer">
      <div class="d-flex justify-content-center">
        {{ $contacts->appends(['q' => request('q'), 'checked' => request('checked')])->links('vendor.pagination.custom-admin') }}
      </div>
    </div>
    @endif
  </div>
  <!--/ Bootstrap Table with Header Dark -->
</div>
@endsection
