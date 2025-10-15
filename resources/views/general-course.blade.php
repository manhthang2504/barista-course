@extends('layouts.app')

@section('title', 'General Course - Barista')
@section('nav_text_color', 'black')

@section('content')
    <section class="py-5 training-section">
        <div class="container mx-auto mt-24 px-4 py-8">
            <div id="barista-course-hero" class="container max-w-[1200px] mt-20 mx-auto">
                <div class="relative text-left">
                    <div class="text-black text-2xl font-normal">KHÓA HỌC</div>
                    <div class="text-[#704D32] text-5xl font-bold uppercase font-montserrat">TỔNG HỢP THỰC CHIẾN</div>
                    <div class="text-black text-[2rem] font-normal italic">Vững nền tảng tạo chất riêng</div>
                    <a id="register-warm" href="#"
                        class="[box-shadow:4.89px_4.89px_6.98px_rgba(0,0,0,0.25)] bg-[linear-gradient(90deg,#FF6365_0%,#F4585D_5%,#DB414B_18%,#FF904F_100%)] font-medium inline-block left-[19.62%] px-8 py-2 right-[64.23%] text-2xl text-white uppercase">Đăng
                        ký học</a>
                    <p class="italic mt-6">
                        *Khóa học Tổng hợp thực chiến diễn ra trong 8 Buổi học x 3h mỗi buổi.
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
                <img src="/storage/images/drink1.png" alt="Drink art" class="mb-8 object-contain" />
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
                    <img src="/storage/images/drink.png" alt="Công thức ngon, mới lạ"
                        class="w-16 h-16 rounded-full object-cover shadow mr-4">
                    <div>
                        <div class="font-semibold text-[#222]">Công thức ngon, mới lạ</div>
                        <p class="text-sm text-gray-600 mt-1">Luôn được cập nhật theo xu hướng, khẩu vị mới nhất của thị
                            trường.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <img src="/storage/images/latte.png" alt="Nguyên liệu cập nhật liên tục"
                        class="w-16 h-16 rounded-full object-cover shadow mr-4">
                    <div>
                        <div class="font-semibold text-[#222]">Nguyên liệu cập nhật liên tục</div>
                        <p class="text-sm text-gray-600 mt-1">Sử dụng các loại nguyên liệu mới để bắt kịp các trend đồ uống
                            trên thị trường.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <img src="/storage/images/people.png" alt="Giảng viên giàu kinh nghiệm"
                        class="w-16 h-16 rounded-full object-cover shadow mr-4">
                    <div>
                        <div class="font-semibold text-[#222]">Giảng viên giàu kinh nghiệm</div>
                        <p class="text-sm text-gray-600 mt-1">Đội ngũ giảng viên là những chuyên gia pha chế hàng đầu.</p>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="mt-20" style="background-color: #FFF7EF">
            <div class="p-4 container mx-auto max-w-[1200px] pt-20">
                <div class="relative rounded-[16px] overflow-hidden shadow-lg aspect-[16/9] min-h-[340px]">
                <video class="w-full h-full object-cover"
                    autoplay muted loop playsinline
                    poster="/storage/images/DSC02933.jpg" preload="metadata">
                <source src="/storage/images/Video_gioi_thieu.mp4" type="video/mp4" />
                Trình duyệt của bạn không hỗ trợ phát video.
                </video>
            </div>
                <h2 class="text-3xl md:text-4xl font-extrabold mb-8">Nội dung khóa học</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">
                    <!-- 1. Kiến thức tổng quan về trà -->
                    <div>
                        <div class="flex justify-center">
                            <img src="/storage/images/teas.jpg" alt="Kiến thức tổng quan về trà"
                                class="h-40 object-contain drop-shadow" />
                        </div>
                        <h3 class="mt-4 text-xl font-extrabold">1. Kiến thức tổng quan về trà</h3>
                        <ol class="mt-2 list-decimal pl-5 text-sm text-gray-700 space-y-1">
                            <li>Kiến thức về các loại trà</li>
                            <li>Hiểu về công dụng và công cụ thiết bị chiết xuất trà</li>
                            <li>Các phương pháp chiết xuất trà</li>
                            <li>Các yếu tố quyết định chất lượng trà</li>
                            <li>Ứng dụng trà trong pha chế</li>
                        </ol>
                    </div>

                    <!-- 2. Nội dung trà sữa -->
                    <div>
                        <div class="flex justify-center">
                            <img src="/storage/images/milktea.png" alt="Nội dung trà sữa"
                                class="h-40 object-contain drop-shadow bg-transparent" style="background-color: transparent;" />
                        </div>
                        <h3 class="mt-4 text-xl font-extrabold">2. Nội dung trà sữa</h3>
                        <ol class="mt-2 list-decimal pl-5 text-sm text-gray-700 space-y-1">
                            <li>Giới thiệu tổng quan về trà sữa</li>
                            <li>Nguyên liệu chuẩn trong trà sữa</li>
                            <li>Phân loại các loại trà sữa</li>
                            <li>Cách nấu và phối hợp nguyên liệu trà sữa</li>
                            <li>Phương pháp pha chế cơ bản và xu hướng trên thị trường</li>
                            <li>Các topping thường dùng trong trà sữa</li>
                        </ol>
                    </div>

                    <!-- 3. Nội dung trà trái cây -->
                    <div>
                        <div class="flex justify-center">
                            <img src="/storage/images/orange_juice.png" alt="Nội dung trà trái cây"
                                class="h-40 object-contain drop-shadow" />
                        </div>
                        <h3 class="mt-4 text-xl font-extrabold">3. Nội dung trà trái cây</h3>
                        <ol class="mt-2 list-decimal pl-5 text-sm text-gray-700 space-y-1">
                            <li>Giới thiệu tổng quan về trà trái cây</li>
                            <li>Nguyên liệu chuẩn trong trà trái cây</li>
                            <li>Các loại trái cây thường dùng</li>
                            <li>Cách phối hợp hương vị và cân bằng ly trà</li>
                            <li>Công thức cơ bản và xu hướng trên thị trường</li>
                            <li>Công thức sáng tạo</li>
                        </ol>
                    </div>

                    <!-- 4. Thức uống đá xay -->
                    <div>
                        <div class="flex justify-center">
                            <img src="/storage/images/frappucino_2.png" alt="Thức uống đá xay"
                                class="h-40 object-contain drop-shadow" />
                        </div>
                        <h3 class="mt-4 text-xl font-extrabold">4. Thức uống đá xay</h3>
                        <ol class="mt-2 list-decimal pl-5 text-sm text-gray-700 space-y-1">
                            <li>Khái niệm và quy trình làm đồ uống đá xay</li>
                            <li>Nguyên liệu chính cho món lạnh</li>
                            <li>Tỷ lệ và kỹ thuật xay đạt cấu trúc mịn</li>
                            <li>Phân nhóm đồ uống & công thức cơ bản</li>
                            <li>Trang trí và hoàn thiện sản phẩm</li>
                            <li>Các biến tấu sáng tạo</li>
                        </ol>
                    </div>

                    <!-- 5. Cà phê truyền thống -->
                    <div>
                        <div class="flex justify-center">
                            <img src="/storage/images/coldbrew.png" alt="Cà phê truyền thống"
                                class="h-40 object-contain drop-shadow" />
                        </div>
                        <h3 class="mt-4 text-xl font-extrabold">5. Cà phê truyền thống</h3>
                        <ol class="mt-2 list-decimal pl-5 text-sm text-gray-700 space-y-1">
                            <li>Giới thiệu dụng cụ và quy trình pha phin</li>
                            <li>Lựa chọn nguyên liệu cho cà phê phin</li>
                            <li>Kỹ thuật chiết xuất và kiểm soát hương vị</li>
                            <li>Các đồ uống biến tấu từ cà phê phin</li>
                            <li>Ứng dụng thực tế trong pha chế</li>
                        </ol>
                    </div>

                    <!-- 6. Chiết xuất espresso -->
                    <div>
                        <div class="flex justify-center">
                            <img src="/storage/images/espresso_cup.png" alt="Chiết xuất espresso"
                                class="h-40 object-contain drop-shadow" />
                        </div>
                        <h3 class="mt-4 text-xl font-extrabold">6. Chiết xuất espresso</h3>
                        <ol class="mt-2 list-decimal pl-5 text-sm text-gray-700 space-y-1">
                            <li>Khái niệm espresso</li>
                            <li>Hiểu về máy espresso & máy xay</li>
                            <li>Kỹ thuật chiết xuất và hiệu chỉnh</li>
                            <li>Tỷ lệ pha & công thức cơ bản</li>
                            <li>Đồ uống nền espresso (latte, cappuccino, v.v.)</li>
                            <li>Bảo trì cơ bản và tối ưu quy trình</li>
                            <li>Phát triển đồ uống biến tấu</li>
                        </ol>
                    </div>
                    <!-- 7. Kiểm tra, tổng kết và Q&A -->
                    <div class="md:col-span-2 lg:col-span-3">
                        <h3 class="mt-4 text-xl font-extrabold">7. Kiểm tra, tổng kết và Q&amp;A</h3>
                        <ol class="mt-2 list-decimal pl-5 text-sm text-gray-700 space-y-1">
                            <li>Kiểm tra thực hành</li>
                            <li>Phản hồi và đánh giá</li>
                            <li>Trao đổi và chia sẻ</li>
                        </ol>
                    </div>

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
                        Với chuyên môn chính là sáng tạo và phát triển đồ uống – từ nghiên cứu thị trường, xây dựng công thức, đào tạo đội ngũ R&amp;D đến tư vấn vận hành và thiết kế menu – hơn 15 năm làm nghề đã mang lại cho tôi những trải nghiệm và kinh nghiệm quý giá, giúp tôi hiểu rõ quy trình phía sau một ly đồ uống chất lượng. Tôi mong muốn được chia sẻ lại những kiến thức ấy bằng góc nhìn thực tế, dễ hiểu và sát với nghề.
                    </p>
                </div>
            </div>
        </div>
@endsection