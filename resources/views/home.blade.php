<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home page - Barista</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <style>
        body {
            background: #fafafa;
            margin: 0;
            padding: 0;
        }
        
        .navbar-custom {
            background: transparent;
            position: absolute;
            width: 100%;
            z-index: 10;
            top: 0;
            left: 0;
        }
        
        .hero-section {
            min-height: 100vh;
            background: url("/storage/images/baner.png") center center/cover no-repeat;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 60px;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.35);
            z-index: 1;
        }
        
        .training-section {
            background: url("/storage/images/banner1.png") center center/cover no-repeat;
            position: relative;
            z-index: 2;
            background-color: #fff7ef;
        }
        
        .intro-section {
            background: url("/storage/images/banner_gioithieu.png") center center/cover no-repeat;
            position: relative;
            z-index: 2;
            background-color: #fff7ef;
        }
        
        .footer-section {
            background-color: #fff;
        }
        
        .footer-bottom {
            background-color: #e8dfcf;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#5081a2',
                        'brown': {
                            light: '#a97c50',
                            DEFAULT: '#8c6551',
                            dark: '#7a5230',
                            footer: '#6b4f2c'
                        }
                    },
                    fontFamily: {
                        montserrat: ['Montserrat', 'sans-serif'],
                        roboto: ['Roboto Condensed', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>

<body class="flex flex-col min-h-screen">
    <header>
        <nav class="navbar-custom">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center">
                    <a href="#" class="flex items-center h-[90px] ml-[70px] md:ml-0">
                        <img src="/storage/images/logo.svg" alt="Charles Wembley" class="h-full filter invert brightness-[1.2]">
                    </a>
                    
                    <div class="hidden lg:block">
                        <ul class="flex space-x-6">
                            <li><a href="#" class="text-xl text-white font-medium hover:text-gray-200">HOME</a></li>
                            <li><a href="#" class="text-xl text-white font-medium hover:text-gray-200">COURSES</a></li>
                            <li><a href="#" class="text-xl text-white font-medium hover:text-gray-200">SERVICE</a></li>
                            <li><a href="#" class="text-xl text-white font-medium hover:text-gray-200">ABOUT US</a></li>
                            <li><a href="#" class="text-xl text-white font-medium hover:text-gray-200">CONTACT US</a></li>
                        </ul>
                    </div>
                    
                    <button class="lg:hidden text-white" type="button" onclick="toggleMenu()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                
                <!-- Mobile menu, show/hide based on menu state -->
                <div id="mobile-menu" class="hidden lg:hidden bg-white/20 mt-2 rounded-md">
                    <div class="px-2 pt-2 pb-3 space-y-1 text-center">
                        <a href="#" class="block px-3 py-2 text-white font-medium hover:text-gray-200">HOME</a>
                        <a href="#" class="block px-3 py-2 text-white font-medium hover:text-gray-200">COURSES</a>
                        <a href="#" class="block px-3 py-2 text-white font-medium hover:text-gray-200">SERVICE</a>
                        <a href="#" class="block px-3 py-2 text-white font-medium hover:text-gray-200">ABOUT US</a>
                        <a href="#" class="block px-3 py-2 text-white font-medium hover:text-gray-200">CONTACT US</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-overlay"></div>
            <div class="relative z-10 ml-[150px] max-w-[650px] md:ml-0 md:max-w-[90vw] md:mt-[300px]">
                <div class="inline-block px-[8px] pr-[18px] py-[2px] bg-[rgba(60,40,30,0.18)] rounded-lg mb-[10px] text-white text-[1.8rem] font-semibold font-montserrat">KHÓA HỌC</div>
                <div class="text-[4.5rem] font-bold text-white leading-tight mb-2 font-montserrat md:text-[3.5rem]">BARISTA</div>
                <div class="text-[4.5rem] font-bold text-white mb-2 font-montserrat md:text-[3.5rem]">TỔNG HỢP</div>
                <div class="text-[30px] font-bold text-white mb-8 font-montserrat italic md:text-[1.5rem]">Vững nền tảng tạo chất riêng</div>
                <a href="#" class="inline-block px-10 py-3 bg-[#e74c3c] text-white font-bold text-[44px] rounded-[30px] shadow-lg transition hover:bg-[#c0392b] font-roboto md:text-[1.5rem] md:px-5 md:py-2.5">REGISTER NOW!</a>
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
                            <a href="#" class="inline-block px-6 py-2 bg-primary text-white rounded-[20px] border-2 border-primary hover:bg-primary/90">ĐĂNG KÝ HỌC</a>
                        </div>
                    </div>
                    
                    <div class="rounded-[20px] shadow-sm border-0 overflow-hidden bg-white">
                        <img src="/storage/images/daotao1.png" class="w-full h-[180px] object-cover rounded-t-[20px]" alt="Barista Tổng hợp">
                        <div class="p-6 text-center">
                            <h5 class="font-bold mb-2">BARISTA TỔNG HỢP</h5>
                            <div class="mb-2 font-bold text-primary">8.000.000VND</div>
                            <a href="#" class="inline-block px-6 py-2 bg-primary text-white rounded-[20px] border-2 border-primary hover:bg-primary/90">ĐĂNG KÝ HỌC</a>
                        </div>
                    </div>
                    
                    <div class="rounded-[20px] shadow-sm border-0 overflow-hidden bg-white">
                        <img src="/storage/images/daotao1.png" class="w-full h-[180px] object-cover rounded-t-[20px]" alt="Barista Coffee">
                        <div class="p-6 text-center">
                            <h5 class="font-bold mb-2">BARISTA (COFFEE)</h5>
                            <div class="mb-2 font-bold text-primary">8.000.000VND</div>
                            <a href="#" class="inline-block px-6 py-2 bg-primary text-white rounded-[20px] border-2 border-primary hover:bg-primary/90">ĐĂNG KÝ HỌC</a>
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
                    <div class="flex flex-col items-center">
                        <img src="/storage/images/img1.jpg" class="rounded-xl mb-2 w-[300px] h-[200px] object-cover" alt="">
                        <div class="text-white text-[1.1rem] font-bold">Food & Beverage Packaging Solutions Show in Mekong</div>
                    </div>
                    <!-- Sự kiện 2 -->
                    <div class="flex flex-col items-center">
                        <img src="/storage/images/img2.jpg" class="rounded-xl mb-2 w-[300px] h-[200px] object-cover" alt="">
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
    </main>

    <footer class="footer-section">
        <div class="container mx-auto px-4 pb-8">
            <div class="flex justify-center">
                <div class="w-full lg:w-10/12">
                    <div class="bg-white rounded-lg shadow-lg p-8 -mt-16 relative z-10">
                        <h4 class="text-[#6b4f2c] text-2xl font-bold text-center mb-4">ĐĂNG KÝ ĐỂ ĐƯỢC TƯ VẤN MIỄN PHÍ!</h4>
                        <div class="text-center text-gray-600 mb-6">
                            Vui lòng điền thông tin để được tư vấn trực tiếp nhanh nhất!
                        </div>
                        <form>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Nhập họ tên của bạn*" required>
                                </div>
                                <div>
                                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Nhập số điện thoại* (ví dụ: 0900000000)" required>
                                </div>
                                <div>
                                    <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                                        <option selected disabled>Chọn chuyên ngành học*</option>
                                        <option>Barista</option>
                                        <option>Pha chế tổng hợp</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                                        <option selected disabled>Chọn khóa học*</option>
                                        <option>Barista Coffee</option>
                                        <option>Barista Tổng hợp</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                                        <option selected disabled>Chọn thời gian tư vấn*</option>
                                        <option>Sáng</option>
                                        <option>Chiều</option>
                                        <option>Tối</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Nhập email của bạn*" required>
                                </div>
                                <div>
                                    <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                                        <option selected disabled>Chọn tỉnh thành của bạn*</option>
                                        <option>Hà Nội</option>
                                        <option>TP. Hồ Chí Minh</option>
                                        <option>Đà Nẵng</option>
                                    </select>
                                </div>
                                <div class="flex items-end">
                                    <button type="submit" class="w-full px-4 py-2 bg-[#6b4f2c] text-white font-bold text-xl rounded-lg hover:bg-[#5d4424]">ĐĂNG KÝ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container mx-auto py-8 px-4">
                <div class="grid grid-cols-1 md:grid-cols-12 items-center gap-6">
                    <div class="md:col-span-3 flex justify-center md:justify-start mb-4 md:mb-0">
                        <img src="/storage/images/logo_footer.png" alt="Charles Wembley" class="h-16">
                        <div class="flex items-center space-x-3 ml-4">
                            <a href="#" class="text-[#8c6551] hover:text-[#6b4f2c]"><i class="bi bi-facebook text-xl"></i></a>
                            <a href="#" class="text-[#8c6551] hover:text-[#6b4f2c]"><i class="bi bi-instagram text-xl"></i></a>
                            <a href="#" class="text-[#8c6551] hover:text-[#6b4f2c]"><i class="bi bi-youtube text-xl"></i></a>
                        </div>
                    </div>
                    <div class="md:col-span-5 mb-4 md:mb-0">
                        <div class="text-[#8c6551] font-bold mb-2">LIÊN HỆ</div>
                        <div class="text-[#8c6551]">
                            CHARLES WEMBLEY GROUP<br>
                            <i class="bi bi-geo-alt-fill"></i> 14/7A Thân Nhân Trung, Phường Tân Bình, TP.HCM<br>
                            <i class="bi bi-telephone-fill"></i> 090 298 01 80<br>
                            <a class="text-[#8c6551] hover:text-[#6b4f2c]" href="https://facebook.com/charleswembleygroupsg/"><i class="bi bi-facebook"></i> https://www.facebook.com/charleswembleygroup/</a><br>
                            <i class="bi bi-envelope"></i> Gmail.com (nhớ thay thế vào đây sau)
                        </div>
                    </div>
                    <div class="md:col-span-4">
                        <div class="text-[#8c6551] font-bold mb-2">THÔNG TIN THÊM</div>
                        <div class="text-[#8c6551] font-bold">
                            Về chúng tôi<br>
                            Chính sách bảo mật<br>
                            Điều khoản sử dụng & đổi cọc<br>
                            Cơ hội việc làm<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-[30px] bg-gradient-to-r from-[#b07b4a] to-[#a97c50]"></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
        
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
</body>
</html>