<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Barista')</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
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
        .tea-section {
            background: url("/storage/images/tea_bg.svg") center center/cover no-repeat;
            position: relative;
            z-index: 2;
            background-color: #f8f8f3;
        }
        
        .matcha-section {
            background: url("/storage/images/matchabg.svg") center center/cover no-repeat;
            position: relative;
            z-index: 2;
            background-color: #ecf5ec;
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
    @php
        $navTextColor = trim($__env->yieldContent('nav_text_color', 'white'));
        $navIsWhite = strtolower($navTextColor) === 'white';
        $linkClass = $navIsWhite ? 'text-white hover:text-gray-200' : 'text-black hover:text-gray-700';
        $iconClass = $navIsWhite ? 'text-white' : 'text-black';
        $logoClass = $navIsWhite ? 'h-full filter invert brightness-[1.2]' : 'h-full';
    @endphp
    <header>
        <nav class="navbar-custom">
            <div class="container mx-auto px-4 max-w-[1200px]">
                <div class="flex justify-between items-center">
                    <a href="#" class="flex items-center h-[90px] ml-[70px] md:ml-0">
                        <img src="/storage/images/logo.svg" alt="Charles Wembley" class="{{ $logoClass }}">
                    </a>
                    <div class="hidden lg:block">
                        <ul class="flex space-x-6">
                            <li><a href="{{ url('/') }}" class="text-xl font-medium {{ $linkClass }}">HOME</a></li>
                            <li><a href="{{ url('/general-course') }}" class="text-xl font-medium {{ $linkClass }}">GENERAL COURSE</a></li>
                            <li><a href="{{ url('/tea-course') }}" class="text-xl font-medium {{ $linkClass }}">TEA COURSE</a></li>
                            <li><a href="{{ url('/matcha-course') }}" class="text-xl font-medium {{ $linkClass }}">MATCHA COURSE</a></li>
                            <li><a href="{{ url('/about-us') }}" class="text-xl font-medium {{ $linkClass }}">ABOUT US</a></li>
                        </ul>
                    </div>
                    <button class="lg:hidden {{ $iconClass }}" type="button" onclick="toggleMenu()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <div id="mobile-menu" class="hidden lg:hidden bg-white/20 mt-2 rounded-md">
                    <div class="px-2 pt-2 pb-3 space-y-1 text-center">
                        <a href="{{ url('/') }}" class="block px-3 py-2 font-medium {{ $linkClass }}">HOME</a>
                        <a href="{{ url('/general-course') }}" class="block px-3 py-2 font-medium {{ $linkClass }}">GENERAL COURSE</a>
                        <a href="{{ url('/tea-course') }}" class="block px-3 py-2 font-medium {{ $linkClass }}">TEA COURSE</a>
                        <a href="{{ url('/matcha-course') }}" class="block px-3 py-2 font-medium {{ $linkClass }}">MATCHA COURSE</a>
                        <a href="{{ url('/about-us') }}" class="block px-3 py-2 font-medium {{ $linkClass }}">ABOUT US</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow pb-24">
        @yield('content')
    </main>

    <footer class="footer-section">
        <div class="container mx-auto px-4 pb-8">
            <div class="flex justify-center">
                <div class="w-full lg:w-10/12">
                    <div
                        class="-mt-16 after:from-[#B78E66] p-8 relative rounded-lg shadow-lg z-10"
                    style="background: linear-gradient(90deg, #B78E66 0%, #A57D5D 17%, #8C6551 44%, #B78E66 100%)">
                        <h4 class="text-white text-2xl font-bold text-center mb-2">ĐĂNG KÝ ĐỂ ĐƯỢC TƯ VẤN MIỄN
                            PHÍ!</h4>
                        <div class="text-center text-white uppercase italic mb-6">
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
                        <img src="/storage/images/logo_footer.svg" alt="Charles Wembley" class="h-16">
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
                            <i class="bi bi-envelope"></i> info@charlesmwebley.com
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

    <!-- Common scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            if (menu) {
                menu.classList.toggle('hidden');
            }
        }
    </script>

    @stack('scripts')
</body>
</html>
