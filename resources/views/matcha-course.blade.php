@extends('layouts.app')

@section('title', 'General Course - Barista')
@section('nav_text_color', 'black')

@section('content')
    <section class="py-5 matcha-section">
        <div class="container mx-auto mt-24 px-4 py-8">
            <div id="barista-course-hero" class="container max-w-[1200px] mt-20 mx-auto">
                <div class="relative text-left">
                    <div class="font-medium text-3xl text-black mb-4">KHÓA HỌC</div>
                    <div class="text-[##6F4E37] text-7xl font-extrabold uppercase font-montserrat">CHUYÊN ĐỀ BARISTA
                    </div>
                    <div class="text-black text-[2.5rem] font-normal italic mt-2 mb-8">Xu Hướng Dẫn Lối - Doanh Thu Dẫn Đầu
                    </div>
                    <a id="register-warm" href="#"
                        class="[box-shadow:4.89px_4.89px_6.98px_rgba(0,0,0,0.25)] bg-[linear-gradient(90deg,#FF6365_0%,#F4585D_5%,#DB414B_18%,#FF904F_100%)] font-medium inline-block left-[19.62%] px-12 py-3 right-[64.23%] text-3xl text-white uppercase">Đăng
                        ký học</a>
                    <p class="italic mt-6">
                        *Khóa học barista tổng hợp diễn ra trong 4 Buổi học x 3h mỗi buổi.
                    </p>
                    <p class="italic">
                        Hãy đảm bảo bạn sắp xếp được thời gian.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-20">
        <div class="container grid grid-cols-2 max-w-[1200px] mx-auto">
            <div>
                <img src="/storage/images/matcha_tools.jpg" alt="Drink art" class="mb-8 object-contain" />
            </div>
            <div class="font-montserrat font-normal text-[18px]">
                <p>
                    Charles Wembley hân hạnh giới thiệu khóa học pha chế đồ uống toàn diện hoàn toàn mới, được giảng dạy
                    trong
                    môi trường đào tạo chuyên nghiệp, với đầy đủ trang thiết bị hiện đại và đa dạng. Giảng viên giàu kinh
                    nghiệm
                    và chuyên môn sâu sẽ trực tiếp hướng dẫn, khéo léo kết hợp giữa lý thuyết và thực hành, giúp học viên
                    không
                    chỉ nắm vững kỹ thuật mà còn khơi mở khả năng sáng tạo của riêng mình.</p>
                <p class="mt-4">
                    Được phát triển từ nhiều năm hợp tác với các đối tác chủ chốt và những thương hiệu lớn như Highlands
                    Coffee,
                    7-Eleven, Laika, chương trình này được thiết kế tỉ mỉ, kết hợp những hiểu biết sâu rộng từ ngành, nhằm
                    giúp
                    học viên biến những ý tưởng sáng tạo thành những thức uống đặc trưng , không chỉ phù hợp với khẩu vị và
                    xu
                    hướng thị trường, mà còn mang đậm dấu ấn phong cách cá nhân.
                </p>
            </div>
        </div>

        <div class="container max-w-[1200px] mt-20 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16 px-4">
                <div class="flex items-start">
                    <img src="/storage/images/matcha_tools.jpg" alt="Công thức ngon, mới lạ"
                        class="w-24 h-24 rounded-full object-cover shadow mr-4">
                    <div>
                        <div class="font-semibold text-[#222]">Công thức ngon, mới lạ</div>
                        <p class="text-sm text-gray-600 mt-1">Luôn được cập nhật theo xu hướng, khẩu vị mới nhất của thị
                            trường.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <img src="/storage/images/matcha_tools.jpg" alt="Nguyên liệu cập nhật liên tục"
                        class="w-24 h-24 rounded-full object-cover shadow mr-4">
                    <div>
                        <div class="font-semibold text-[#222]">Nguyên liệu cập nhật liên tục</div>
                        <p class="text-sm text-gray-600 mt-1">Sử dụng các loại nguyên liệu mới để bắt kịp các trend đồ uống
                            trên thị trường.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <img src="/storage/images/matcha_tools.jpg" alt="Giảng viên giàu kinh nghiệm"
                        class="w-24 h-24 rounded-full object-cover shadow mr-4">
                    <div>
                        <div class="font-semibold text-[#222]">Giảng viên giàu kinh nghiệm</div>
                        <p class="text-sm text-gray-600 mt-1">Đội ngũ giảng viên là những chuyên gia pha chế hàng đầu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="" style="background-color: #f4f9f4">
        <div class="p-4 container mx-auto max-w-[1200px] pt-20">
            <div>
                <img src="/storage/images/barista_mixing.jpg" alt="Barista mixing cocktail"
                    class="mb-8 object-contain drop-shadow" />
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold mb-10 text-left">
                    Nội dung khóa học
            </h2>
            <h2 class="text-2xl md:text-3xl font-extrabold mb-8 mt-16 text-left">
                A. Matcha: Kiến thức trọng tâm-Xu hướng và ứng dụng
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-y-10 gap-x-2 text-center">
                <div class="flex flex-col items-center">
                    <div class="mt-32 font-bold text-base md:text-lg">1. Quy trình sản xuất, cấp độ<br>và tiêu chuẩn chất lượng</div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/storage/images/tea_leaves.svg" class="h-24 md:h-28 lg:h-28 object-contain mb-2" />
                    <div class="font-bold mt-2 text-base md:text-lg">2. Phân biệt các loại bột trà xanh<br>và cách lựa chọn
                        matcha<br>cho từng ứng dụng</div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="font-bold mt-32 text-base md:text-lg">3. Xu hướng matcha hiện nay</div>
                </div>
            </div>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-y-10 gap-x-2 text-center">
                <div class="flex flex-col items-center">
                    <img src="/storage/images/matcha_mixing.svg" class="h-24 md:h-28 lg:h-28 object-contain mb-2" />
                    <div class="font-bold mt-2 text-base md:text-lg">4. Hướng dẫn kỹ thuật đánh<br>matcha với bộ dụng cụ
                        tiêu chuẩn</div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/storage/images/matcha_mixing2.svg" class="h-24 md:h-28 lg:h-28 object-contain mb-2" />
                    <div class="font-bold mt-2 text-base md:text-lg">5. Thực hành ứng dụng<br>kỹ thuật đánh matcha</div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/storage/images/drink_and_cake.svg" class="h-24 md:h-28 lg:h-28 object-contain mb-2" />
                    <div class="font-bold mt-2 text-base md:text-lg">6. Thực hành món sáng tạo<br>với matcha</div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/storage/images/matcha_jar.svg" class="h-24 md:h-28 lg:h-28 object-contain mb-2" />
                    <div class="font-bold mt-2 text-base md:text-lg">7. Phân tích đặc tính<br>hương vị và cân chỉnh<br>theo
                        khẩu vị riêng</div>
                </div>

            </div>
            <!-- End grid -->
            <h2 class="text-2xl md:text-3xl font-extrabold mb-8 mt-16 text-left">
                B. Cà Phê: Kiến thức trọng tâm - Xu hướng và ứng dụng
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-10 gap-x-2 text-center">
                <div class="flex flex-col items-center">
                    <img src="/storage/images/coffee_paper.svg" class="h-24 md:h-28 lg:h-28 object-contain mb-2" />
                    <div class="font-bold mt-2 text-base md:text-lg">1. Tổng quan kiến thức về<br>Cà phê và trang thiết bị
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/storage/images/coffee_beans_stars.svg" class="h-24 md:h-28 lg:h-28 object-contain mb-2" />
                    <div class="font-bold mt-2 text-base md:text-lg">2. Các yếu tố ảnh hưởng<br>đến chất lượng cà phê</div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/storage/images/coffee_beans_sampling.svg" class="h-24 md:h-28 lg:h-28 object-contain mb-2" />
                    <div class="font-bold mt-2 text-base md:text-lg">3. Cách lựa chọn loại cà phê<br>phù hợp với ứng dụng
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/storage/images/coffee_cup_book.svg" class="h-24 md:h-28 lg:h-28 object-contain mb-2" />
                    <div class="font-bold mt-2 text-base md:text-lg">4. Xu hướng cà phê hiện tại</div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/storage/images/coffee_manual_tools.svg" class="h-24 md:h-28 lg:h-28 object-contain mb-2" />
                    <div class="font-bold mt-2 text-base md:text-lg">5. Thực hành món ứng dụng<br>kết hợp với cà phê</div>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/storage/images/coffee_beans_spoon.svg" class="h-24 md:h-28 lg:h-28 object-contain mb-2" />
                    {{-- <img src="/storage/images/coffee_analysis.svg" class="h-24 md:h-28 lg:h-28 object-contain mb-2" /> --}}
                    <div class="font-bold mt-2 text-base md:text-lg">6. Phân tích đặc tính hương vị<br>và cân chỉnh theo
                        khẩu vị riêng</div>
                </div>
            </div>
    </section>
    <div class="container p-4 bg-white mx-auto max-w-[1200px] pt-20 grid grid-cols-1 lg:grid-cols-12">
        <!-- Left heading -->
        <div class="lg:col-span-5">
            <div class="flex lg:justify-start justify-center ml-4">
                <div class="text-[#704D32] font-bold tracking-wide text-2xl leading-tight uppercase">
                    ĐỘI NGŨ GIẢNG VIÊN<br>CHUYÊN NGHIỆP
                </div>
            </div>

        </div>
        <div class="lg:col-span-7 flex flex-row">
            <!-- Center circular image -->
            <div class="flex justify-center">
                <img src="/storage/images/barista_making_latte.png" alt="Barista mixing cocktail"
                    class="h-80 w-96 rounded-full object-cover shadow-[0_10px_30px_rgba(0,0,0,0.2)]">
            </div>
            <!-- Right lecturer details -->
            <div class="ml-4">
                <div class="uppercase text-gray-400 text-xs mb-1 tracking-wide">Giảng viên</div>
                <div class="text-[#704D32] text-2xl font-bold uppercase">TRƯƠNG THỊ LỆ HUYỀN</div>
                <p class="text-[#6c4c2a] mt-3 leading-relaxed max-w-[520px]">
                    Với chuyên môn chính là sáng tạo và phát triển đồ uống – từ nghiên cứu thị trường, xây dựng công thức,
                    đào tạo đội ngũ R&amp;D đến tư vấn vận hành và thiết kế menu – hơn 15 năm làm nghề đã mang lại cho tôi
                    những trải nghiệm và kinh nghiệm quý giá, giúp tôi hiểu rõ quy trình phía sau một ly đồ uống chất lượng.
                    Tôi mong muốn được chia sẻ lại những kiến thức ấy bằng góc nhìn thực tế, dễ hiểu và sát với nghề.
                </p>
            </div>
        </div>
    </div>

@endsection