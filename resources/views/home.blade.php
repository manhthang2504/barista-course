@extends('layouts.app')

@section('title', 'Home page - Barista')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="relative z-10 ml-[150px] max-w-[650px] md:ml-0 md:max-w-[90vw] md:mt-[300px]">
            <div class="inline-block px-[8px] pr-[18px] py-[2px] bg-[rgba(60,40,30,0.18)] rounded-lg mb-[10px] text-white text-[1.8rem] font-semibold font-montserrat">KHÓA HỌC</div>
            <div class="text-[4.5rem] font-bold text-white leading-tight mb-2 font-montserrat md:text-[3.5rem]">BARISTA</div>
            <div class="text-[4.5rem] font-bold text-white mb-2 font-montserrat md:text-[3.5rem]">TỔNG HỢP</div>
            <div class="text-[30px] font-bold text-white mb-8 font-montserrat italic md:text-[1.5rem]">Vững nền tảng tạo chất riêng</div>
            <a href="{{ route('registrations.create') }}" class="inline-block px-10 py-3 bg-[#e74c3c] text-white font-bold text-[44px] rounded-[30px] shadow-lg transition hover:bg-[#c0392b] font-roboto md:text-[1.5rem] md:px-5 md:py-2.5">REGISTER NOW!</a>
        </div>
    </section>

    <!-- Section: Đào tạo pha chế đồ uống chuyên nghiệp -->
    <section class="py-12 training-section">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-bold text-[2rem] tracking-wide">ĐÀO TẠO PHA CHẾ ĐỒ UỐNG CHUYÊN NGHIỆP</h2>
                <a href="#" class="font-bold text-black no-underline">XEM TẤT CẢ <span class="ml-1">></span></a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="rounded-[20px] shadow-sm border-0 overflow-hidden bg-white">
                    <img src="/storage/images/daotao1.png" class="w-full h-[180px] object-cover rounded-t-[20px]" alt="Barista Coffee">
                    <div class="p-6 text-center">
                        <h5 class="font-bold mb-2">BARISTA (COFFEE)</h5>
                        <div class="mb-2 font-bold text-primary">8.000.000VND</div>
                        <a href="{{ route('registrations.create') }}" class="inline-block px-6 py-2 bg-primary text-white rounded-[20px] border-2 border-primary hover:bg-primary/90">ĐĂNG KÝ HỌC</a>
                    </div>
                </div>

                <div class="rounded-[20px] shadow-sm border-0 overflow-hidden bg-white">
                    <img src="/storage/images/daotao1.png" class="w-full h-[180px] object-cover rounded-t-[20px]" alt="Barista Tổng hợp">
                    <div class="p-6 text-center">
                        <h5 class="font-bold mb-2">BARISTA TỔNG HỢP</h5>
                        <div class="mb-2 font-bold text-primary">8.000.000VND</div>
                        <a href="{{ route('registrations.create') }}" class="inline-block px-6 py-2 bg-primary text-white rounded-[20px] border-2 border-primary hover:bg-primary/90">ĐĂNG KÝ HỌC</a>
                    </div>
                </div>

                <div class="rounded-[20px] shadow-sm border-0 overflow-hidden bg-white">
                    <img src="/storage/images/daotao1.png" class="w-full h-[180px] object-cover rounded-t-[20px]" alt="Barista Coffee">
                    <div class="p-6 text-center">
                        <h5 class="font-bold mb-2">BARISTA (COFFEE)</h5>
                        <div class="mb-2 font-bold text-primary">8.000.000VND</div>
                        <a href="{{ route('registrations.create') }}" class="inline-block px-6 py-2 bg-primary text-white rounded-[20px] border-2 border-primary hover:bg-primary/90">ĐĂNG KÝ HỌC</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Giới thiệu lớp học pha chế -->
    <section class="py-12 intro-section">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="p-6 bg-[#e8dfcf] rounded-[20px] shadow-md">
                    <div class="mb-2 uppercase text-[#a88c6b] font-semibold ml-10 text-base">NÓI VỀ CHÚNG TÔI</div>
                    <h3 class="font-bold mb-3 text-[3rem] text-[#8c6551] ml-10">LỚP HỌC PHA CHẾ <br>CHARLES WEMBLEY</h3>
                    <div class="text-[#8c6551] text-[1.2rem] leading-relaxed ml-10 w-[90%]">
                        Khóa học đào tạo toàn diện kỹ năng pha chế, cung cấp hơn 200 công thức từ 9 nhóm đồ uống: trà
                        trái cây, trà sữa, cà phê truyền thống và hiện đại, detox, soda, đồ uống nóng, sinh tố, đá xay
                        và kem tươi; cùng kiến thức kinh doanh đồ uống quan trọng, cập nhật xu hướng thị trường hiện
                        nay.<br><br>
                        Đây cũng là nơi tạo nên những khóa học được đông đảo học viên lựa chọn và lấy cảm hứng nhất tại
                        Vietblend!<br><br>
                        Phù hợp với những ai mong muốn mở quán kinh doanh đồ uống, chủ quán, quản lý, nhân viên quán cà
                        phê, hút khách; đặc biệt trở thành pha chế chuyên, muốn tìm kiếm cơ hội việc làm trong ngành,...
                    </div>
                </div>
                <div class="relative rounded-[16px] overflow-hidden shadow-lg min-h-[320px]">
                    <img src="/storage/images/gioithieu.png" alt="Coffee line" class="w-full h-full object-cover min-h-[320px]">
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Cơ sở vật chất hiện đại -->
    <div class="bg-white py-8">
        <div class="text-center mb-8">
            <h2 class="font-bold text-[2rem] text-[#4a2c13]">Cơ sở vật chất hiện đại</h2>
        </div>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/storage/images/DSC03200.JPG" alt="Image 1" class="rounded-lg">
                </div>
                <div class="swiper-slide">
                    <img src="/storage/images/DSC02869.JPG" alt="Image 2" class="rounded-lg">
                </div>
                <div class="swiper-slide">
                    <img src="/storage/images/DSC03061.JPG" alt="Image 3" class="rounded-lg">
                </div>
                <div class="swiper-slide">
                    <img src="/storage/images/DSC03200.JPG" alt="Image 4" class="rounded-lg">
                </div>
                <div class="swiper-slide">
                    <img src="/storage/images/DSC02869.JPG" alt="Image 5" class="rounded-lg">
                </div>
                <div class="swiper-slide">
                    <img src="/storage/images/DSC03061.JPG" alt="Image 6" class="rounded-lg">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Section: Đội ngũ giảng viên chuyên nghiệp -->
    <section class="py-12 bg-white">
        <h2 class="bg-[#a9805f] text-[2rem] text-white font-bold py-2 text-center mb-8">ĐỘI NGŨ GIẢNG VIÊN CHUYÊN NGHIỆP</h2>
        <div class="flex flex-wrap justify-center">
            <!-- Giảng viên 1 -->
            <div class="w-full md:w-1/2 lg:w-5/12 px-4 mb-12 flex flex-col items-center">
                <img src="/storage/images/lecturer1.png" class="max-w-[320px] rounded-xl mb-4" alt="Trương Thị Lê Huyền">
                <div class="text-left w-full max-w-[320px]">
                    <div class="uppercase text-gray-500 text-sm mb-1">Giảng viên</div>
                    <div class="text-[#8d5c2c] text-[1.3rem] font-bold">TRƯƠNG THỊ LỆ HUYỀN</div>
                    <div class="text-[#6c4c2a] mt-2">
                        Với chuyên môn chính là sáng tạo và phát triển đồ uống – từ nghiên cứu thị trường, xây dựng công
                        thức, đào tạo đội ngũ R&D đến tư vấn vận hành và thiết kế menu – hơn 15 năm làm nghề đã mang lại
                        cho tôi những trải nghiệm và kinh nghiệm quý giá, giúp tôi hiểu rõ quy trình phía sau một ly đồ
                        uống chất lượng. Tôi mong muốn được chia sẻ lại những kiến thức ấy bằng góc nhìn thực tế, dễ
                        hiểu và sát với nghề.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Sự kiện nổi bật và Công thức pha chế -->
    <div class="bg-gradient-to-r from-[#a97c50] to-[#7a5230] py-12">
        <div class="container mx-auto px-4">
            <div class="mb-8">
                <span class="text-white text-[1.4rem] font-bold uppercase tracking-wide">SỰ KIỆN NỔI BẬT</span>
                <span class="text-white text-[1.4rem] mx-4">|</span>
                <span class="text-white text-[1.4rem] font-bold uppercase tracking-wide">CÔNG THỨC PHA CHẾ</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Sự kiện 1 -->
                {{-- TODO make small images for faster loading --}}
                <div class="flex flex-col items-center">
                    <img src="/storage/images/img1.jpg" class="rounded-xl mb-2 w-[300px] h-[200px] object-cover" alt="">
                    <div class="text-white text-[1.1rem] font-bold">Food & Beverage Packaging Solutions Show in Mekong</div>
                </div>
                <!-- Sự kiện 2 -->
                <div class="flex flex-col items-center">
                    <img src="/storage/images/img2_small.jpg" class="rounded-xl mb-2 w-[300px] h-[200px] object-cover" alt="">
                    <div class="text-white text-[1.1rem] font-bold">Workshop "Sắc thái đầu đông – Vị nở yên hương"</div>
                </div>
                <!-- Sự kiện 3 -->
                <div class="flex flex-col items-center">
                    <img src="/storage/images/img3.jpg" class="rounded-xl mb-2 w-[300px] h-[200px] object-cover" alt="">
                    <div class="text-white text-[1.1rem] font-bold">Workshop "Hạ Vũ Cảm Vị"</div>
                </div>
                <!-- Sự kiện 4 -->
                <div class="flex flex-col items-center">
                    <img src="/storage/images/img1.jpg" class="rounded-xl mb-2 w-[300px] h-[200px] object-cover" alt="">
                    <div class="text-white text-[1.1rem] font-bold">Food & Beverage Packaging Solutions Show in Mekong</div>
                </div>
                <!-- Sự kiện 5 -->
                <div class="flex flex-col items-center">
                    <img src="/storage/images/img2.jpg" class="rounded-xl mb-2 w-[300px] h-[200px] object-cover" alt="">
                    <div class="text-white text-[1.1rem] font-bold">Workshop "Sắc thái đầu đông – Vị nở yên hương"</div>
                </div>
                <!-- Sự kiện 6 -->
                <div class="flex flex-col items-center">
                    <img src="/storage/images/img3.jpg" class="rounded-xl mb-2 w-[300px] h-[200px] object-cover" alt="">
                    <div class="text-white text-[1.1rem] font-bold">Workshop "Hạ Vũ Cảm Vị"</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30
            }
        }
    });
</script>
@endpush
