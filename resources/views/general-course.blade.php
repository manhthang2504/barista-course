@extends('layouts.app')

@section('title', 'General Course - Barista')
@section('nav_text_color', 'black')

@section('content')
    <section class="py-5 training-section">
    <div class="container mx-auto mt-24 px-4 py-8">
        <div id="barista-course-hero" class="container max-w-[1200px] mt-20 mx-auto">
            <div class="relative text-left flex flex-col items-start">
                
                <div class="text-black text-2xl font-normal mb-2">
                    KHÓA HỌC
                </div>

                <div class="text-[#704D32] text-5xl font-bold uppercase font-montserrat leading-tight mb-4">
                    TỔNG HỢP THỰC CHIẾN
                </div>

                <div class="text-black text-[2rem] font-normal italic mb-10 leading-snug">
                    Vững nền tảng tạo chất riêng
                </div>

                <a id="register-warm"  href="{{ route('registrations.create') }}"
                    class="[box-shadow:4.89px_4.89px_6.98px_rgba(0,0,0,0.25)] 
                           bg-[linear-gradient(90deg,#FF6365_0%,#F4585D_5%,#DB414B_18%,#FF904F_100%)] 
                           font-medium inline-block px-8 py-3 text-2xl text-white uppercase mb-8
                           hover:translate-y-[-2px] transition-transform"> Đăng ký học
                </a>

                <div class="text-gray-600 space-y-2">
                    <p class="italic text-lg leading-relaxed">
                        * Khóa học Tổng hợp thực chiến diễn ra trong 8 Buổi học x 3h mỗi buổi.
                    </p>
                    <p class="italic text-lg">
                        Hãy đảm bảo bạn sắp xếp được thời gian.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>
    <section class="py-20">
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
     <section class="mt-20 bg-[#FFF7EF]">
    <div class="container mx-auto max-w-[1200px] px-4 py-12">
        
        <div class="relative rounded-2xl overflow-hidden shadow-xl aspect-video w-full max-w-4xl mx-auto mb-16 border-4 border-white">
            <iframe class="w-full h-full object-cover" 
                    src="https://www.youtube.com/embed/C75-_hYCpz4?rel=0&autoplay=1&mute=1&loop=1&playlist=C75-_hYCpz4" 
                    title="Tan Long Barista Academy" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>

        <h2 class="text-3xl md:text-4xl font-extrabold mb-12 text-[#704D32] text-center uppercase tracking-wide">
            Nội dung khóa học
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="h-40 flex justify-center items-end mb-4">
                    <img src="/storage/images/teas.png" alt="Kiến thức tổng quan về trà" class="h-[80%] object-contain drop-shadow-md transition-transform hover:scale-105" />
                </div>
                <h3 class="text-xl font-bold text-[#704D32]">1. Tổng quan về trà</h3>
                <ol class="mt-3 list-decimal pl-5 text-sm text-gray-600 space-y-2">
                    <li>Kiến thức về các loại trà</li>
                    <li>Công cụ & thiết bị chiết xuất</li>
                    <li>Các phương pháp chiết xuất</li>
                    <li>Yếu tố quyết định chất lượng</li>
                    <li>Ứng dụng trong pha chế</li>
                </ol>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="h-40 flex justify-center items-end mb-4">
                    <img src="/storage/images/milktea.png" alt="Nội dung trà sữa" class="h-full object-contain drop-shadow-md transition-transform hover:scale-105" />
                </div>
                <h3 class="text-xl font-bold text-[#704D32]">2. Chuyên đề Trà sữa</h3>
                <ol class="mt-3 list-decimal pl-5 text-sm text-gray-600 space-y-2">
                    <li>Tổng quan & Nguyên liệu chuẩn</li>
                    <li>Phân loại trà sữa</li>
                    <li>Kỹ thuật nấu & phối hợp</li>
                    <li>Phương pháp pha chế & Xu hướng</li>
                    <li>Các loại topping phổ biến</li>
                </ol>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="h-40 flex justify-center items-end mb-4">
                    <img src="/storage/images/orange_juice.png" alt="Nội dung trà trái cây" class="h-full object-contain drop-shadow-md transition-transform hover:scale-105" />
                </div>
                <h3 class="text-xl font-bold text-[#704D32]">3. Trà trái cây hiện đại</h3>
                <ol class="mt-3 list-decimal pl-5 text-sm text-gray-600 space-y-2">
                    <li>Tổng quan & Nguyên liệu</li>
                    <li>Các loại trái cây nền</li>
                    <li>Kỹ thuật cân bằng hương vị</li>
                    <li>Công thức chuẩn & Trend</li>
                    <li>Kỹ thuật sáng tạo món mới</li>
                </ol>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="h-40 flex justify-center items-end mb-4">
                    <img src="/storage/images/frappucino_2.png" alt="Thức uống đá xay" class="h-full object-contain drop-shadow-md transition-transform hover:scale-105" />
                </div>
                <h3 class="text-xl font-bold text-[#704D32]">4. Thức uống Đá xay</h3>
                <ol class="mt-3 list-decimal pl-5 text-sm text-gray-600 space-y-2">
                    <li>Quy trình & Nguyên liệu Ice Blended</li>
                    <li>Kỹ thuật xử lý cấu trúc mịn</li>
                    <li>Phân nhóm & Công thức cơ bản</li>
                    <li>Decor & Hoàn thiện sản phẩm</li>
                    <li>Biến tấu sáng tạo</li>
                </ol>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="h-40 flex justify-center items-end mb-4">
                    <img src="/storage/images/coldbrew.png" alt="Cà phê truyền thống" class="h-full object-contain drop-shadow-md transition-transform hover:scale-105" />
                </div>
                <h3 class="text-xl font-bold text-[#704D32]">5. Cà phê Truyền thống</h3>
                <ol class="mt-3 list-decimal pl-5 text-sm text-gray-600 space-y-2">
                    <li>Dụng cụ & Quy trình pha phin</li>
                    <li>Lựa chọn hạt cà phê</li>
                    <li>Kiểm soát chiết xuất & Hương vị</li>
                    <li>Biến tấu: Bạc xỉu, Cafe muối...</li>
                    <li>Ứng dụng thực tế mô hình quán</li>
                </ol>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="h-40 flex justify-center items-end mb-4">
                    <img src="/storage/images/espresso_cup.png" alt="Chiết xuất espresso" class="h-full object-contain drop-shadow-md transition-transform hover:scale-105" />
                </div>
                <h3 class="text-xl font-bold text-[#704D32]">6. Máy pha & Espresso</h3>
                <ol class="mt-3 list-decimal pl-5 text-sm text-gray-600 space-y-2">
                    <li>Vận hành máy Espresso & Máy xay</li>
                    <li>Kỹ thuật chiết xuất (Extraction)</li>
                    <li>Latte, Cappuccino & Đồ uống nền</li>
                    <li>Bảo trì máy móc cơ bản</li>
                    <li>Tối ưu quy trình quầy bar</li>
                </ol>
            </div>

        </div>

        <div class="w-full bg-white rounded-2xl shadow-lg border-l-8 border-[#704D32] overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <div class="bg-[#704D32] text-white p-8 md:w-1/3 flex flex-col justify-center items-center text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mb-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.745 3.745 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.745 3.745 0 013.296-1.043A3.745 3.745 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.745 3.745 0 013.296 1.043 3.745 3.745 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                    </svg>
                    <h3 class="text-2xl font-extrabold uppercase">Tổng kết khóa học</h3>
                    <p class="text-sm opacity-90 mt-2">Đánh giá năng lực & Cấp chứng chỉ</p>
                </div>
                
                <div class="p-8 md:w-2/3 flex items-center">
                    <div class="w-full">
                        <h4 class="text-lg font-bold text-gray-800 mb-4">Nội dung buổi cuối:</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#FFF7EF] text-[#704D32] font-bold text-sm border border-[#704D32]">1</span>
                                <span class="text-gray-700 text-sm font-medium pt-1">Kiểm tra thực hành pha chế</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#FFF7EF] text-[#704D32] font-bold text-sm border border-[#704D32]">2</span>
                                <span class="text-gray-700 text-sm font-medium pt-1">Phản hồi & Đánh giá chi tiết</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#FFF7EF] text-[#704D32] font-bold text-sm border border-[#704D32]">3</span>
                                <span class="text-gray-700 text-sm font-medium pt-1">Q&A và Chia sẻ kinh nghiệm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> 
</section>
        <div class="container p-4 bg-white mx-auto max-w-[1200px] pt-20 pb-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        
        <div class="flex flex-col lg:items-start items-center space-y-8 lg:pl-16">
            
            <div class="text-[#704D32] font-bold tracking-wide text-2xl leading-tight uppercase text-center lg:text-left">
                ĐỘI NGŨ GIẢNG VIÊN<br>CHUYÊN NGHIỆP
            </div>

            <div class="relative">
                <div class="absolute inset-0 bg-[#704D32] rounded-full blur opacity-20 translate-y-4"></div>
                    <img src="/storage/images/barista_making_latte.png" alt="Barista mixing cocktail"
                        class="relative h-96 w-80 rounded-full object-cover border-4 border-white">
                </div>
        </div>

        <div class="flex flex-col justify-center text-center lg:text-left">
            <div class="uppercase text-gray-400 text-sm font-semibold mb-2 tracking-widest">
                Giảng viên
            </div>
            
            <div class="text-[#704D32] text-3xl md:text-4xl font-bold uppercase mb-6 font-montserrat">
                TRƯƠNG THỊ<br>LỆ HUYỀN
            </div>
            
            <p class="text-[#6c4c2a] text-lg leading-relaxed text-justify lg:text-left">
                Với chuyên môn chính là sáng tạo và phát triển đồ uống – từ nghiên cứu thị trường, xây dựng công thức, đào tạo đội ngũ R&D đến tư vấn vận hành và thiết kế menu – hơn 15 năm làm nghề đã mang lại cho tôi những trải nghiệm và kinh nghiệm quý giá, giúp tôi hiểu rõ quy trình phía sau một ly đồ uống chất lượng. Tôi mong muốn được chia sẻ lại những kiến thức ấy bằng góc nhìn thực tế, dễ hiểu và sát với nghề.
            </p>
            
        </div>

    </div>
</div>
@endsection