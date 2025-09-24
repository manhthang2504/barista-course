@extends('layouts.app')

@section('title', 'Đăng ký thành công')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @else
                        <div class="alert alert-success" role="alert">
                            Cảm ơn bạn đã đăng ký! Chúng tôi sẽ liên hệ với bạn sớm nhất có thể.
                        </div>
                    @endif

                    <h1 class="h4 mb-3">Cảm ơn bạn!</h1>
                    <p class="mb-4">Đăng ký của bạn đã được ghi nhận. Vui lòng kiểm tra email hoặc điện thoại để nhận thông tin tiếp theo.</p>

                    <a href="{{ url('/') }}" class="btn btn-primary">Về trang chủ</a>
                    <a href="{{ route('registrations.index') }}" class="btn btn-outline-secondary ms-2">Xem danh sách đăng ký</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
