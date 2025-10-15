@extends('layouts.app')

@section('title', 'Home page - Barista')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

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
        <section class="py-16 training-section">
            <div class="container mx-auto px-4 max-w-[1250px]">
                
                <!-- Header -->
                <div class="flex flex-col md:flex-row justify-between items-center mb-10 border-b-4 border-[#a9805f] pb-4">
                <h2 class="font-bold text-[2.3rem] tracking-wide text-center md:text-left">
                    ĐÀO TẠO PHA CHẾ ĐỒ UỐNG CHUYÊN NGHIỆP
                </h2>
                <a href="#" class="font-bold text-black no-underline mt-3 md:mt-0 text-lg">
                    XEM TẤT CẢ <span class="ml-1">></span>
                </a>
                </div>

                <!-- Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-16 justify-center">
                <!-- Box 3 -->
                <div class="rounded-[24px] shadow-md border-0 overflow-hidden bg-white w-[340px] h-[470px] mx-auto flex flex-col transition-transform duration-300 hover:scale-[1.02]">
                    <div class="h-[280px] overflow-hidden">
                    <img src="/storage/images/Khoa_Thuc_Chien.png"
                        class="w-full h-full object-cover rounded-t-[24px]" alt="Khóa pha chế tổng hợp thực chiến">
                    </div>
                    <div class="p-7 text-center flex-grow flex flex-col justify-between">
                    <h5 class="font-bold mb-4 text-[1.1rem]">KHÓA PHA CHẾ TỔNG HỢP THỰC CHIẾN</h5>
                    <a href="{{ route('registrations.create') }}"
                        class="inline-block px-7 py-2.5 bg-brown text-white rounded-[24px] border-2 border-brown hover:bg-brown/90 transition-all duration-200">
                        ĐĂNG KÝ HỌC
                    </a>
                    </div>
                </div>
                <!-- Box 1 -->
                <div class="rounded-[24px] shadow-md border-0 overflow-hidden bg-white w-[340px] h-[470px] mx-auto flex flex-col transition-transform duration-300 hover:scale-[1.02]">
                    <div class="h-[280px] overflow-hidden">
                    <img src="/storage/images/Khoa_barista.jpg"
                        class="w-full h-full object-cover rounded-t-[24px]" alt="Khóa Barista">
                    </div>
                    <div class="p-7 text-center flex-grow flex flex-col justify-between">
                    <h5 class="font-bold mb-4 text-[1.1rem]">KHÓA BARISTA</h5>
                    <a href="{{ route('registrations.create') }}"
                        class="inline-block px-7 py-2.5 bg-brown text-white rounded-[24px] border-2 border-brown hover:bg-brown/90 transition-all duration-200">
                        ĐĂNG KÝ HỌC
                    </a>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="rounded-[24px] shadow-md border-0 overflow-hidden bg-white w-[340px] h-[470px] mx-auto flex flex-col transition-transform duration-300 hover:scale-[1.02]">
                    <div class="h-[280px] overflow-hidden">
                    <img src="/storage/images/Khoa_tra.jpg"
                        class="w-full h-full object-cover rounded-t-[24px]" alt="Khóa chuyên đề trà">
                    </div>
                    <div class="p-7 text-center flex-grow flex flex-col justify-between">
                    <h5 class="font-bold mb-4 text-[1.1rem]">KHÓA CHUYÊN ĐỀ TRÀ</h5>
                    <a href="{{ route('registrations.create') }}"
                        class="inline-block px-7 py-2.5 bg-brown text-white rounded-[24px] border-2 border-brown hover:bg-brown/90 transition-all duration-200">
                        ĐĂNG KÝ HỌC
                    </a>
                    </div>
                </div>                
                </div>
            </div>
            </section>


    <!-- End Section: Đào tạo pha chế đồ uống chuyên nghiệp -->
             <!-- Section: Giới thiệu lớp học pha chế -->
        <section class="py-12 intro-section">
        <div class="container mx-auto px-4">
            <!-- items-start để 2 cột không ép cao bằng nhau; gap lớn hơn cho thoáng -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            
            <!-- TEXT: tăng padding, bỏ ml-10/w-[90%] gây “bó” nội dung, cho line-height thoáng -->
            <div class="bg-[#e8dfcf] rounded-[20px] shadow-md p-6 md:p-8 lg:p-10">
                <div class="mb-2 uppercase text-[#a88c6b] font-semibold text-base">NÓI VỀ CHÚNG TÔI</div>

                <h3 class="font-bold mb-4 text-[#8c6551] leading-tight
                        text-3xl md:text-5xl">
                LỚP HỌC PHA CHẾ <br> CHARLES WEMBLEY
                </h3>

                <div class="text-[#8c6551] text-[1.05rem] md:text-[1.15rem] leading-relaxed space-y-4">
                ☕ Trong bất kỳ khóa học nào, chất lượng giảng viên đôi khi sẽ ảnh hưởng đến 60% quyết định theo học của bạn. Bởi lẽ theo quan niệm của nhiều người, thầy giỏi thì trò giỏi, và cũng chỉ có những người thầy giỏi mới có đủ kỹ năng, kinh nghiệm và trải nghiệm để dẫn dắt học viên của mình.
                <br><br>
                🌟 Tại 𝐂𝐡𝐚𝐫𝐥𝐞𝐬 𝐖𝐞𝐦𝐛𝐥𝐞𝐲 𝐀𝐜𝐚𝐝𝐞𝐦𝐲, giảng viên Huyền Trương là người có thể đáp ứng đầy đủ các tiêu chí của một người thầy giỏi. Ngoài kỹ năng chuyên môn đã được đã được trui rèn qua nhiều chương trình đào tạo barista danh tiếng, chị Huyền Trương còn có sự am hiểu sâu sắc về các loại nguyên liệu cũng như văn hóa đồ uống của nhiều nước trên thế giới.
                <br><br>
                💯 Song song đó, chị Huyền cũng có rất nhiều kinh nghiệm trong việc set up quán cà phê, từ mô hình vừa và nhỏ cho đến các tiệm lớn. Đây đều là những giá trị được đúc kết nhờ những buổi làm việc cùng các chuỗi lớn Highlands Coffee, Phúc Long hay Starbucks. Với những ưu điểm kể trên, liệu mọi người đã hiểu hơn về giảng viên của lớp và sẵn sàng để tham gia khóa học 𝐏𝐫𝐨𝐟𝐞𝐬𝐬𝐢𝐨𝐧𝐚𝐥 𝐁𝐚𝐫𝐢𝐬𝐭𝐚 𝐂𝐥𝐚𝐬𝐬?
                </div>
            </div>

            <!-- VIDEO: cố định tỉ lệ 16:9 để không “đè” chiều cao text; không đặt height cố định -->
            <div class="relative rounded-[16px] overflow-hidden shadow-lg aspect-[16/9] min-h-[340px]">
                <video class="w-full h-full object-cover"
                    autoplay muted loop playsinline
                    poster="/storage/images/DSC02933.jpg" preload="metadata">
                <source src="/storage/images/Video_gioi_thieu.mp4" type="video/mp4" />
                Trình duyệt của bạn không hỗ trợ phát video.
                </video>
            </div>

            </div>
        </div>
        </section>

        <!-- End Section: Giới thiệu lớp học pha chế -->
   <!-- Section: Cơ sở vật chất hiện đại -->
        <div class="bg-white py-8">
          <!-- Băng rôn full width -->
        <div class="w-full bg-[#a9805f] py-4 mb-12">
            <h2 class="text-[2.3rem] text-white font-bold text-center tracking-wide">
            CƠ SỞ VẬT CHẤT HIỆN ĐẠI
            </h2>
        </div>
        <div id="facility-swiper" class="swiper relative max-w-[1100px] mx-auto px-4">
            <div class="swiper-wrapper">
            <!-- Mỗi slide có khung tỉ lệ để giới hạn chiều cao -->
            <div class="swiper-slide relative aspect-[16/9] md:aspect-[21/9] rounded-xl overflow-hidden">
                <img src="/storage/images/DSC03200.JPG" alt="Image 1"
                    class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="swiper-slide relative aspect-[16/9] md:aspect-[21/9] rounded-xl overflow-hidden">
                <img src="/storage/images/DSC02869.JPG" alt="Image 2"
                    class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="swiper-slide relative aspect-[16/9] md:aspect-[21/9] rounded-xl overflow-hidden">
                <img src="/storage/images/DSC03061.JPG" alt="Image 3"
                    class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="swiper-slide relative aspect-[16/9] md:aspect-[21/9] rounded-xl overflow-hidden">
                <img src="/storage/images/DSC03200.JPG" alt="Image 4"
                    class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="swiper-slide relative aspect-[16/9] md:aspect-[21/9] rounded-xl overflow-hidden">
                <img src="/storage/images/DSC02869.JPG" alt="Image 5"
                    class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="swiper-slide relative aspect-[16/9] md:aspect-[21/9] rounded-xl overflow-hidden">
                <img src="/storage/images/DSC03061.JPG" alt="Image 6"
                    class="absolute inset-0 w-full h-full object-cover">
            </div>
            </div>

            <!-- dots -->
            <div class="swiper-pagination mt-4"></div>

            <!-- arrows -->
            <button
            class="facility-prev absolute left-4 top-1/2 -translate-y-1/2 z-10 rounded-full bg-white/80 hover:bg-white shadow p-2 backdrop-blur-sm border border-black/5 transition focus:outline-none focus:ring-2 focus:ring-black/20"
            type="button" aria-label="Ảnh trước">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
            </svg>
            </button>
            <button
            class="facility-next absolute right-4 top-1/2 -translate-y-1/2 z-10 rounded-full bg-white/80 hover:bg-white shadow p-2 backdrop-blur-sm border border-black/5 transition focus:outline-none focus:ring-2 focus:ring-black/20"
            type="button" aria-label="Ảnh sau">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
            </svg>
            </button>
        </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const container = document.querySelector('#facility-swiper');

                const swiper = new Swiper(container, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 16,

                pagination: {
                    el: container.querySelector('.swiper-pagination'),
                    clickable: true,
                },
                navigation: {
                    nextEl: container.querySelector('.facility-next'),
                    prevEl: container.querySelector('.facility-prev'),
                },

                keyboard: { enabled: true },
                grabCursor: true,
                });
            });
            </script>
        <!-- End Section: Cơ sở vật chất hiện đại -->


        <!-- Section: Đội ngũ giảng viên chuyên nghiệp -->
        <section class="py-16 bg-white">

        <!-- Băng rôn full width -->
        <div class="w-full bg-[#a9805f] py-4 mb-12">
            <h2 class="text-[2.3rem] text-white font-bold text-center tracking-wide">
            ĐỘI NGŨ GIẢNG VIÊN CHUYÊN NGHIỆP
            </h2>
        </div>

        <div class="container mx-auto px-4 max-w-[1250px]">
            <div class="flex justify-center">
            <div class="flex flex-col sm:flex-row items-center gap-16 max-w-5xl">

                <!-- Ảnh giảng viên (cao hơn, cân đối hơn) -->
                <div class="flex-shrink-0">
                <img
                    src="/storage/images/lecturer1.png"
                    alt="Trương Thị Lệ Huyền"
                    class="w-[420px] h-[520px] rounded-2xl object-cover shadow-2xl"
                >
                </div>

                <!-- Thông tin giảng viên -->
                <div class="text-left">
                <div class="uppercase text-gray-500 text-lg mb-2 tracking-wide">Giảng viên</div>
                <div class="text-[#8d5c2c] text-4xl font-bold uppercase leading-tight">
                    TRƯƠNG THỊ LỆ HUYỀN
                </div>
                <p class="text-[#6c4c2a] mt-5 leading-relaxed text-[1.1rem] max-w-lg">
                    Với chuyên môn chính là sáng tạo và phát triển đồ uống – từ nghiên cứu thị trường, xây dựng công thức,
                    đào tạo đội ngũ R&amp;D đến tư vấn vận hành và thiết kế menu – hơn 15 năm làm nghề đã mang lại cho tôi
                    những trải nghiệm và kinh nghiệm quý giá, giúp tôi hiểu rõ quy trình phía sau một ly đồ uống chất lượng.
                    Tôi mong muốn được chia sẻ lại những kiến thức ấy bằng góc nhìn thực tế, dễ hiểu và sát với nghề.
                </p>
                </div>

            </div>
            </div>
        </div>
        </section>
        <!-- End Section: Đội ngũ giảng viên chuyên nghiệp -->






  
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
