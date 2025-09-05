@extends('layouts.app')

@section('title', 'Cong thuc cold brew berry vai')
@section('nav_text_color', 'black')

@section('content')
    <section class="relative overflow-hidden">
        <!-- Left SVG background -->
        <img src="/storage/images/flower_background_left.svg" alt="" aria-hidden="true"
            class="hidden md:block absolute left-0 top-0 h-full w-auto z-0 opacity-10" style="min-width:180px;" />
        <!-- Right SVG background -->
        <img src="/storage/images/flower_background_right.svg" alt="" aria-hidden="true"
            class="hidden md:block absolute right-0 top-0 h-full w-auto z-0 opacity-10" style="min-width:180px;" />
        <div class="relative max-w-[1200px] mx-auto px-4 pt-36 flex flex-col md:flex-row gap-10 items-start z-10">
            <!-- Image -->
            <div class="flex-shrink-0 flex justify-center w-full md:w-[320px]">
                <img src="/storage/images/chuoi_nuong_lac_thom.png" alt="Chuối Nướng Lạc Thơm"
                    class="rounded-lg w-[260px] h-[340px] object-cover bg-[#f6eae0]" />
            </div>
            <!-- Content -->
            <div class="flex-1">
                <h1 class="italic text-3xl md:text-4xl font-bold mb-6 mt-2 md:mt-0">Chuối Nướng Lạc Thơm</h1>
                <!-- Ingredients -->
                <div class="mb-6">
                    <div class="inline-block border border-gray-400 rounded-full px-6 py-1 mb-2 font-serif text-lg font-semibold bg-[#faf8f6]">
                        Nguyên liệu:</div>
                    <ul class="ml-4 text-base font-sans">
                        <li class="flex justify-between items-center">
                            <span>• Syrup Đường Mía Zeta</span>
                            <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                            <span>20ml</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span>• Aumis Fruitmix Pineapple</span>
                            <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                            <span>50ml</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span>• Cốt Dừa Vico</span>
                            <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                            <span>25ml</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span>• Đậu Phộng</span>
                            <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                            <span>5gr</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span>• Chuối</span>
                            <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                            <span>50gr</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span>• Đá Viên</span>
                            <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                            <span>200gr</span>
                        </li>
                    </ul>
                </div>
                <!-- Instructions -->
                <div class="mb-6">
                    <div class="inline-block border border-gray-400 rounded-full px-6 py-1 mb-2 font-serif text-lg font-semibold bg-[#faf8f6]">
                        Cách làm:</div>
                    <ol class="list-decimal ml-8 text-base font-sans">
                        <li>Cho tất cả nguyên liệu vào cối theo thứ tự: lỏng, đặc, đá</li>
                        <li>Xay đều hỗn hợp trong 30-35s</li>
                        <li>Cho thành phẩm ra ly phục vụ</li>
                    </ol>
                    <div class="mt-2 font-bold italic">Trang trí <span class="font-normal">với đậu phộng</span></div>
                </div>
            </div>
        </div>
    </section>

@endsection