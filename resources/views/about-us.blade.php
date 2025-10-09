@extends('layouts.app')

@section('title', 'About us')
@section('nav_text_color', 'black')

@section('content')
<section class="w-full h-24 mt-28" style="background: #F5E6D7; border-bottom: 12px solid #A97C50; border-top: 12px solid #A97C50;">
    <div class="max-w-[1100px] mx-auto px-1 py-4">
        <h1 class="text-4xl font-extrabold text-black py-4" >CHÚNG TÔI</h1>
    </div>
</section>

<section class="max-w-[1200px] mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start mb-8">
        <div class="flex justify-center">
            <img src="/storage/images/team_in_front_of_mixology.jpg" alt="Charles Wembley team" class="object-cover rounded shadow" />
        </div>
        <div class="text-[18px] text-black">
            <span class="font-semibold italic">Thành lập tại Singapore vào năm 1980</span>, Charles Wembley khởi đầu là nhà phân phối thiết bị y tế và đã mở rộng sang thị trường Việt Nam với cùng lĩnh vực. Đến năm 2006, chúng tôi đa dạng hóa hoạt động kinh doanh sang ngành dịch vụ ăn uống, cung cấp các giải pháp chuyên nghiệp cho quán cà phê, nhà hàng và các cơ sở kinh doanh thức uống chuyên nghiệp.
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start mb-8">
        <div class="order-2 md:order-1 text-[18px] text-black flex flex-col justify-center">
            <span class="italic">Hiện nay, chúng tôi là đối tác tin cậy trong cả hai lĩnh vực: y tế và dịch vụ ăn uống. Uy tín của chúng tôi được khẳng định qua việc đồng hành cùng những tên tuổi lớn trong ngành F&amp;B như <span class='font-bold'>McDonald’s, KFC, Starbucks, Highlands Coffee và Phúc Long</span>. Với các văn phòng tại TP. Hồ Chí Minh, Đà Nẵng và Hà Nội, chúng tôi cung cấp dịch vụ trên toàn quốc – từ tư vấn, lắp đặt đến đào tạo, hội thảo và bảo trì.</span>
        </div>
        <div class="order-1 md:order-2 flex justify-center">
            <img src="/storage/images/team_at_exhibition.jpg" alt="Charles Wembley event" class="object-cover rounded shadow" />
        </div>
    </div>
    <div class="mt-8 text-center text-[18px] italic">
        Với bề dày kinh nghiệm và cam kết không ngừng về chất lượng, chúng tôi tự hào chuyên giao kiến thức và tinh hoa nghề nghiệp để góp phần đào tạo nên thế hệ barista và những chuyên gia pha chế kế tiếp – những người sẽ định hình tương lai ngành đồ uống.
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-24 mt-8">
        <img src="/storage/images/team_hot_kitchen.jpg" alt="Charles Wembley staff conducting a culinary training session in a professional kitchen setting, participants focused and engaged, warm and collaborative atmosphere" class="object-cover rounded shadow h-48 w-full" />
        <img src="/storage/images/team_barista.jpg" alt="Charles Wembley barista team demonstrating coffee preparation techniques at a training counter, group smiling and attentive, modern café environment, energetic and welcoming mood" class="object-cover rounded shadow h-48 w-full" />
        <img src="/storage/images/team_gelato.jpg" alt="Charles Wembley team presenting gelato making process, staff gathered around equipment with colorful gelato on display, bright and cheerful training room, joyful and enthusiastic feeling" class="object-cover rounded shadow h-48 w-full" />
    </div>
</section>

<section class="w-full bg-[#fcf9f6] py-8">
    <div class="max-w-[1200px] mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-extrabold mb-2">Đối tác</h2>
        <div class="text-base md:text-lg text-black my-12">
            Mạng lưới khách hàng sử dụng dịch vụ đào tạo và máy móc,<br>
            nguyên liệu đồ uống của chúng tôi trải dài khắp các vùng miền tại Việt Nam.
        </div>
        <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
            <img src="/storage/images/aiya_logo.png" alt="Charles Wembley partners" class="object-contain rounded w-full h-11" />
            <img src="/storage/images/aumis_logo.svg" alt="Charles Wembley partners" class="object-contain rounded w-full h-11" />
            <img src="/storage/images/itis_logo.svg" alt="Charles Wembley partners" class="object-contain rounded w-full h-11" />
            <img src="/storage/images/savo_logo.svg" alt="Charles Wembley partners" class="object-contain rounded w-full h-14" />
            <img src="/storage/images/urnex_logo.png" alt="Charles Wembley partners" class="object-contain rounded w-full h-14" />
            <img src="/storage/images/zeta_logo.png" alt="Charles Wembley partners" class="object-contain rounded w-full h-14" />
        </div>
    </div>
</section>
@endsection