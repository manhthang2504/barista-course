@php
    $majors = ['Barista', 'Pha chế tổng hợp'];
    $courses = ['Barista Coffee', 'Barista Tổng hợp'];
    $times = ['Sáng', 'Chiều', 'Tối'];
    $cities = ['Hà Nội', 'TP. Hồ Chí Minh', 'Đà Nẵng'];
@endphp

@if(session('success'))
    <div class="mb-4 p-3 rounded bg-green-100 text-green-800 text-center">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="mb-4 p-3 rounded bg-red-100 text-red-800">
        <ul class="list-disc list-inside text-left">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('registrations.store') }}">
    @csrf
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <input name="name" value="{{ old('name') }}" type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Nhập họ tên của bạn*" required>
        </div>
        <div>
            <input name="phone" value="{{ old('phone') }}" type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Nhập số điện thoại* (ví dụ: 0900000000)" required>
        </div>
        <div>
            <select name="major" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                <option value="" disabled {{ old('major') ? '' : 'selected' }}>Chọn chuyên ngành học*</option>
                @foreach($majors as $m)
                    <option value="{{ $m }}" {{ old('major') === $m ? 'selected' : '' }}>{{ $m }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select name="course" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                <option value="" disabled {{ old('course') ? '' : 'selected' }}>Chọn khóa học*</option>
                @foreach($courses as $c)
                    <option value="{{ $c }}" {{ old('course') === $c ? 'selected' : '' }}>{{ $c }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select name="time_preference" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                <option value="" disabled {{ old('time_preference') ? '' : 'selected' }}>Chọn thời gian tư vấn*</option>
                @foreach($times as $t)
                    <option value="{{ $t }}" {{ old('time_preference') === $t ? 'selected' : '' }}>{{ $t }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input name="email" value="{{ old('email') }}" type="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Nhập email của bạn*" required>
        </div>
        <div>
            <select name="city" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                <option value="" disabled {{ old('city') ? '' : 'selected' }}>Chọn tỉnh thành của bạn*</option>
                @foreach($cities as $city)
                    <option value="{{ $city }}" {{ old('city') === $city ? 'selected' : '' }}>{{ $city }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex items-end">
            <button type="submit" class="w-full px-4 py-2 bg-[#6b4f2c] text-white font-bold text-xl rounded-lg hover:bg-[#5d4424]">ĐĂNG KÝ</button>
        </div>
    </div>
</form>
