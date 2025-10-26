@extends('admin.layouts.app')

@section('title', 'داشبورد')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 breadcrumb-wrapper mb-4">داشبورد</h4>
  <p>
    خوش آمدید به پنل مدیریت {{ config('app.name') }}.<br>
    شما می‌توانید از این پنل برای مدیریت سیستم استفاده کنید.
  </p>
</div>
@endsection
