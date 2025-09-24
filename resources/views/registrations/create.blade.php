@extends('layouts.app')

@section('title', 'Đăng ký khóa học')
@section('nav_text_color', 'black')
@section('hide_footer_registration_form', '1')

@section('content')
    <div class="container mx-auto px-4 py-16 mt-20 max-w-4xl">
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800">Đăng ký khóa học</h1>
            <p class="text-gray-600 mt-2">Vui lòng điền thông tin bên dưới. Chúng tôi sẽ liên hệ tư vấn trong thời gian sớm nhất.</p>
        </div>

        <div class="bg-white shadow rounded-lg p-6">
            @include('components.footer-registration-form')
        </div>

        <div class="mt-6 text-center">
            <a href="{{ url('/') }}" class="text-primary hover:underline">← Quay lại trang chủ</a>
        </div>
    </div>
@endsection
