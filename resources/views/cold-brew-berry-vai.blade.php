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
        <div class="relative max-w-[1200px] mx-auto px-4 pt-36  flex flex-col md:flex-row gap-10 items-start z-10">
            <!-- Image -->
            <div class="flex-shrink-0 flex justify-center w-full md:w-[360px]">
                <img src="/storage/images/berry_vai.png" alt="Cold Brew Berry Vải"
                    class="rounded-lg w-[360px] h-[420px]" />
            </div>
            <!-- Content -->
            <div class="flex-1">
                <h1 class="font-serif text-3xl md:text-4xl font-extrabold mb-6 mt-2 md:mt-0">Cold Brew Berry Vải</h1>
                <!-- Ingredients -->
                <div class="mb-6">
                    <div
                        class="inline-block border border-gray-400 rounded-full px-6 py-1 mb-2 font-serif text-lg font-semibold bg-[#faf8f6]">
                        Nguyên liệu:</div>
                    <ul class="ml-4 text-base font-sans">
                        <li class="flex justify-between">
                            <span>• Syrup Aumis Vải</span>
                            <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                            <span>20ml</span>
                        </li>
                        <li class="flex justify-between">
                            <span>• Soda Trà Loving</span>
                            <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                            <span>100ml</span>
                        </li>
                        <li class="flex justify-between">
                            <span>• Cà Phê Ủ Lạnh</span>
                            <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                            <span>40ml</span>
                        </li>
                        <li class="flex justify-between">
                            <span>• Đá Viên</span>
                            <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                            <span>200gr</span>
                        </li>
                    </ul>
                </div>
                <!-- Preparation -->
                <div class="mb-6">
                    <div
                        class="inline-block border border-gray-400 rounded-full px-6 py-1 mb-2 font-serif text-lg font-semibold bg-[#faf8f6]">
                        Chuẩn bị:</div>
                    <div class="flex flex-col md:flex-row gap-8">
                        <div class="flex-1">
                            <div class="font-bold mb-1">Soda Loving</div>
                            <ul class="ml-4 text-base font-sans">
                                <li class="flex justify-between items-center">
                                    <span>• Savo Trà Loving Tea</span>
                                    <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                                    <span>400ml</span>
                                </li>
                                <li class="flex justify-between items-center">
                                    <span>• Nước Ép Táo</span>
                                    <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                                    <span>400ml</span>
                                </li>
                                <li class="flex justify-between items-center">
                                    <span>• Gas Soda</span>
                                    <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                                    <span>1 viên</span>
                                </li>
                            </ul>
                            <div class="text-sm mt-1">-&gt; Cho tất cả các nguyên liệu vào bình soda, lắp bình và nạp gas,
                                sau đó lắc đều, bảo quản tủ mát ít nhất 30' trước khi sử dụng.</div>
                            <div class="font-bold text-sm mt-1">HSD: 48h</div>
                        </div>
                        <div class="flex-1">
                            <div class="font-bold mb-1">Cold Brew Coffee</div>
                            <ul class="ml-4 text-base font-sans">
                                <li class="flex justify-between items-center">
                                    <span>• Bột Cà Phê</span>
                                    <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                                    <span>100gr</span>
                                </li>
                                <li class="flex justify-between items-center">
                                    <span>• Nước Lọc</span>
                                    <span class="flex-1 border-b border-dotted border-gray-400 mx-2"></span>
                                    <span>1000ml</span>
                                </li>
                            </ul>
                            <div class="text-sm mt-1">-&gt; Cho cà phê và nước lọc vào bình chứa, khuấy đều, đậy kín sau đó
                                cho vào ngăn mát tủ lạnh ủ trong 24h. Sau đó lọc cà phê, đậy kín bảo quản trong tủ lạnh.
                            </div>
                            <div class="font-bold text-sm mt-1">HSD: 5 ngày</div>
                        </div>
                    </div>
                </div>
                <!-- Instructions -->
                <div class="mb-6">
                    <div
                        class="inline-block border border-gray-400 rounded-full px-6 py-1 mb-2 font-serif text-lg font-semibold bg-[#faf8f6]">
                        Cách làm:</div>
                    <ol class="list-decimal ml-8 text-base font-sans">
                        <li>Cho syrup, trà và cốt tắc vào shaker lắc đều với đá</li>
                        <li>Rót thành phẩm ra ly</li>
                    </ol>
                    <div class="mt-2 font-bold italic">Trang trí: <span class="font-normal">Lê tươi, thạch dừa và lá
                            dứa</span></div>
                </div>
            </div>
        </div>
    </section>

@endsection