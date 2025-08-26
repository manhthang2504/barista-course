@extends('layouts.app')

@section('title', 'General Course - Barista')
@section('nav_text_color', 'black')

@section('content')
    <section class="py-5 tea-section">
        <div class="container mx-auto mt-24 px-4 py-8">
            <div id="barista-course-hero" class="container max-w-[1200px] mt-20 mx-auto">
                <div class="relative text-left">
                    <div class="text-black text-2xl font-normal">KHÓA HỌC</div>
                    <div class="text-[#4D844D] text-5xl font-bold uppercase font-montserrat">CHUYÊN ĐỀ TRÀ</div>
                    <div class="text-black text-[2rem] font-normal italic">Hiểu trà - Chạm vị</div>
                    <a id="register-warm" href="#"
                        class="[box-shadow:4.89px_4.89px_6.98px_rgba(0,0,0,0.25)] bg-[linear-gradient(90deg,#FF6365_0%,#F4585D_5%,#DB414B_18%,#FF904F_100%)] font-medium inline-block left-[19.62%] px-8 py-2 right-[64.23%] text-2xl text-white uppercase">Đăng
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
        <div class="container grid grid-cols-2 gap-8 max-w-[1200px] mx-auto">
            <div>
                <img src="/storage/images/tea_cups.jpg" alt="Tea cups" class="mb-8 object-contain" />
            </div>
            <div class="font-montserrat font-normal">
                Dù bạn đang muốn tìm kiếm cơ hội phát triển nghề nghiệp trong ngành F&B hay có dự định xây dựng mô hình kinh
                doanh đồ uống, bạn cũng cần phải nắm vững các kỹ năng, kỹ thuật khi pha chế đồ uống, đồng thời biết cách
                quản lý, vận hành hiệu quả.<br><br>
                Tham gia khóa pha chế đồ uống tổng hợp tại <b>Charles Wembley</b>, bạn sẽ được học và trực tiếp thực hành
                pha chế menu hơn 200 món thức uống hiện đại từ các nhóm đồ uống hot nhất hiện nay với lộ trình 12 buổi, thực
                hành với trang thiết bị hiện đại, nguyên liệu pha chế chất lượng cao từ thương hiệu độc quyền Vietblend đang
                phân phối như Máy pha chè & trà, Máy xay cà phê, Máy pha trà, Máy móc chế biến chè, Syrup, Sữa yến mạch để
                bạn thỏa sức sáng tạo với đồ uống.<br><br>
                Bên cạnh đó, đội ngũ giảng viên chuyên môn cao, thấu hiểu nhu cầu thị trường sẽ tư vấn, chia sẻ kinh nghiệm
                vận hành hiệu quả, từ đó mang lại giải pháp đồ uống toàn diện, ưu tú nhất giúp bạn chinh phục khách hàng
                nhanh chóng và thành công với dấu ấn riêng mình.<br><br>
                Liên hệ hotline 0000 0000 để được bộ phận CSKH của <b>Charles Wembley</b> TƯ VẤN MIỄN PHÍ thông tin cũng như
                lộ trình học phù hợp
            </div>
        </div>

        <div class="container max-w-[1200px] mt-20 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16 px-4">
                <div class="flex items-start">
                    <img src="/storage/images/a_cup_of_tea.jpg" alt="Công thức ngon, mới lạ"
                        class="w-16 h-16 rounded-full object-cover shadow mr-4">
                    <div>
                        <div class="font-semibold text-[#222]">Công thức ngon, mới lạ</div>
                        <p class="text-sm text-gray-600 mt-1">Luôn được cập nhật theo xu hướng, khẩu vị mới nhất của
                            thị
                            trường.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <img src="/storage/images/a_cup_of_tea.jpg" alt="Nguyên liệu cập nhật liên tục"
                        class="w-16 h-16 rounded-full object-cover shadow mr-4">
                    <div>
                        <div class="font-semibold text-[#222]">Nguyên liệu cập nhật liên tục</div>
                        <p class="text-sm text-gray-600 mt-1">Sử dụng các loại nguyên liệu mới để bắt kịp các trend
                            đồ uống
                            trên thị trường.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <img src="/storage/images/a_cup_of_tea.jpg" alt="Giảng viên giàu kinh nghiệm"
                        class="w-16 h-16 rounded-full object-cover shadow mr-4">
                    <div>
                        <div class="font-semibold text-[#222]">Giảng viên giàu kinh nghiệm</div>
                        <p class="text-sm text-gray-600 mt-1">Đội ngũ giảng viên là những chuyên gia pha chế hàng
                            đầu.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="" style="background-color: #f5f5ec">
        <div class="p-4 container mx-auto max-w-[1200px] pt-20">
            <div>
                <img src="/storage/images/barista_mixing.jpg" alt="Barista mixing cocktail"
                    class="mb-8 object-contain drop-shadow" />
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold mb-8"
                style="text-decoration: underline; text-underline-offset: 6px;">Nội dung khóa học</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">
                <div class="flex flex-col items-center text-center">
                    <img src="/storage/images/tea_book.svg" class="h-28 md:h-32 lg:h-36 object-contain mb-2" />
                    <div class="text-xl font-bold mt-2">1. Kiến thức tổng quan về trà</div>
                </div>
                <div class="flex flex-col items-center text-center">
                    <img src="/storage/images/tea_pot.svg" class="h-28 md:h-32 lg:h-36 object-contain mb-2" />
                    <div class="text-xl font-bold mt-2">2. Hướng dẫn ủ các loại trà và pha chế trà nguyên chất</div>
                </div>
                <div class="flex flex-col items-center text-center">
                    <img src="/storage/images/pouring_tea.svg" class="h-28 md:h-32 lg:h-36 object-contain mb-2" />
                    <div class="text-xl font-bold mt-2">3. Phân biệt trà sữa truyền thống và hiện đại</div>
                </div>
                <div class="flex flex-col items-center text-center">
                    <img src="/storage/images/pot_and_kettle.svg" class="h-28 md:h-32 lg:h-36 object-contain mb-2" />
                    <div class="text-xl font-bold mt-2">4. Ứng dụng pha trà thủ công và pha máy</div>
                </div>
                <div class="flex flex-col items-center text-center">
                    <img src="/storage/images/milk_tea.svg" class="h-28 md:h-32 lg:h-36 object-contain mb-2" />
                    <div class="text-xl font-bold mt-2">5. Ứng dụng pha chế trà sữa</div>
                </div>
                <div class="flex flex-col items-center text-center">
                    <img src="/storage/images/fruit_tea.svg" class="h-28 md:h-32 lg:h-36 object-contain mb-2" />
                    <div class="text-xl font-bold mt-2">6. Ứng dụng pha trà trái cây</div>
                </div>
                <div class="flex flex-col items-center text-center">
                    <img src="/storage/images/topping.svg" class="h-28 md:h-32 lg:h-36 object-contain mb-2" />
                    <div class="text-xl font-bold mt-2">7. Thực hành các loại topping</div>
                </div>
                <div class="flex flex-col items-center text-center">
                    <img src="/storage/images/tea_menu.svg" class="h-28 md:h-32 lg:h-36 object-contain mb-2" />
                    <div class="text-xl font-bold mt-2">8. Hướng dẫn cách xây dựng menu trà sữa trong kinh doanh</div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-20">
    <div class="container p-4 mx-auto max-w-[1200px] grid grid-cols-1 lg:grid-cols-12">
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
    </section>
    {{-- TODO footer background-color should be light green as well --}}
@endsection