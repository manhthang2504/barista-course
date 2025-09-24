@extends('layouts.app')

@section('title', 'Registrations')
@section('nav_text_color', 'black')

@section('content')
    <div class="container mt-24 mx-auto px-4 py-10">
        <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Danh sách học viên đã đăng ký</h1>
        <a href="{{ url('/') }}" class="text-primary hover:underline">← Quay lại trang chủ</a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow rounded">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Họ tên</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Số điện thoại</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Thành phố</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ngành</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Khóa học</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Thời gian</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ngày đăng ký</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($registrations as $index => $reg)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm text-gray-700">{{ ($registrations->currentPage() - 1) * $registrations->perPage() + $index + 1 }}</td>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ $reg->name }}</td>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ $reg->phone }}</td>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ $reg->email }}</td>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ $reg->city }}</td>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ $reg->major }}</td>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ $reg->course }}</td>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ $reg->time_preference }}</td>
                        <td class="px-4 py-3 text-sm text-gray-500">{{ optional($reg->created_at)->format('d/m/Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="px-4 py-6 text-center text-gray-500">Chưa có đăng ký nào.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $registrations->links() }}
    </div>
</div>
@endsection
