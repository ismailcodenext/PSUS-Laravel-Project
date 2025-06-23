@extends('layout.master')
@section('title','About Us Page')
@section('content')
@include('components.front-end.compnents.navbar')



<!-- About Hero Section Start -->
<section id="about_hero_section">
    <div class="container">
        <div class="about_hero">
            <div class="about_hero_content">
                <h1>About Us</h1>
                <div class="about_hero_btn">
                    <a href="{{url('/home')}}">Home</a>
                    <a href="">About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Hero Section End -->

<!-- About Us Section Start -->
<section id="about_us_section_items">
    <div class="container">
        <div class="about_us_item">
            <div class="row">
                <div class="col-lg-3">
                    <div class="about_stats">
                        <div class="counting_items">
                            <h2 class="counting_items_heading" data-target="20500">0</h2>
                            <p>Successfully Trained</p>
                        </div>
                        <div class="counting_items">
                            <h2 class="counting_items_heading" data-target="450000">0</h2>
                            <p>Students Community</p>
                        </div>
                        <div class="counting_items">
                            <h2 class="counting_items_heading" data-target="20500">0</h2>
                            <p>Successfully Trained</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about_image">
                        <img src="{{asset('front-end/assets/img/home/about-us-img-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about_info">
                        <h2 class="about_info_heading">About Us</h2>
                        <p class="about_info_description">PSUS is a non-profit, non-governmental organization
                            founded in 2004 to improve the lives of underprivileged communities in Bangladesh. We
                            focus on empowering marginalized groups, especially women and children, through
                            initiatives in health, education, and income generation</p>
                        <a href="" class="about_info_read_more">Read More <span>→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<!-- About Us Mission & Vision and CORE VALUES Start -->
<section id="mission_vision_core_items">
    <div class="container">
        <div class="mission_vision_core_item">
            <h2 class="mission_vision_core_heading">Empowering Your Success,</h2>

            <h3 class="mission_vision_core_heading"><span>Our Mission, Vision, and
                    Goal</span></h3>
            <p class="mission_vision_core_description">With a user-centric approach, we're dedicated to delivering
                solutions that amplify
                your
                business value, driving growth and excellence every step of the way. Your success is our ultimate
                achievement.</p>

            <div class="mission_vision_core_cards">
                <div class="mission_vision_core_card">
                    <img src="{{asset('front-end/assets/icon/misson-icon.svg')}}" alt="Mission Icon"
                        class="mission_vision_core_card_img">
                    <h4 class="mission_vision_core_card_title">Our Mission</h4>
                    <p class="mission_vision_core_card_text"><span>Mission:</span> Empower poor men and women by
                        providing skills
                        and resources to help them overcome socio-economic challenges.</p>
                </div>

                <div class="mission_vision_core_card">
                    <img src="{{asset('front-end/assets/icon/visson-icon.svg')}}" alt="Vision Icon" class="mission_vision_core_card_img">
                    <h5 class="mission_vision_core_card_title">Our Vision</h5>
                    <p class="mission_vision_core_card_text"><span>Vision:</span> Create a just society where the
                        rights of all
                        individuals, especially women, are respected, promoting peace and social harmony.</p>
                </div>

                <div class="mission_vision_core_card">
                    <img src="{{asset('front-end/assets/icon/goal-logo.png')}}" alt="Goal Icon" class="mission_vision_core_card_img">
                    <h6 class="mission_vision_core_card_title">Our Goals</h6>
                    <p class="mission_vision_core_card_text">Poverty Alleviation: Create employment opportunities
                        and improve livelihood</p>
                </div>
            </div>
        </div>
        <div class="core_values_card_items">
            <div class="core_values_card_item">
                <h2 class="core_values_card_heading">CORE VALUES</h2>
            </div>
            <ul class="core_values_list">
                <li><i class="fa-solid fa-circle"></i><span> Promote Youth Employment: </span> Provide
                    vocational training
                    for job opportunities.</li>
                <li><i class="fa-solid fa-circle"></i><span>Unity Against Poverty: </span> Build solidarity
                    to tackle
                    poverty collectively.</li>
                <li><i class="fa-solid fa-circle"></i> <span>Environmental Protection: </span> Advocate for
                    sustainability and reduce pollution.</li>
                <li><i class="fa-solid fa-circle"></i><span> Empower Women: </span> Ensure women’s
                    participation and rights.</li>
                <li><i class="fa-solid fa-circle"></i> <span>Promote Peace: </span> Foster understanding
                    across different
                    faiths.</li>
                <li><i class="fa-solid fa-circle"></i> <span>Health & Family Care: </span> Improve access to
                    health services and nutrition.</li>
                <li><i class="fa-solid fa-circle"></i><span> Water & Sanitation: </span> Enhance access to
                    clean water and sanitation.</li>
                <li><i class="fa-solid fa-circle"></i><span>Disaster Relief: </span> Support communities
                    during natural disasters.</li>
            </ul>
        </div>
    </div>
</section>
<!-- About Us Mission & Vision and CORE VALUES End -->

<!-- Subscription Start -->
<div id="subscription_items" style="background:#85a947;">
    <div class="container">
        <div class="subscription_bar_item">
            <div class="subscription_bar">
                <div class="subscription_bar_img">
                    <a href="{{url('/home')}}"><img src="{{asset('front-end/assets/img/footer-logo.png')}}" alt=""></a>
                </div>
                <div class="input_container">
                    <input type="email" placeholder="psus.pabna@yahoo.com" id="email" class="professional_input">
                    <a onclick="subscribe()" class="professional_button" href="">Subscribe</a>
                </div>
                <div class="social_wrapper">
                    <div class="social">
                        <a href=""><i class="fa-brands fa-facebook facebook_icon"></i></a>
                        <a href=""><i class="fa-brands fa-square-x-twitter twitter_icon"></i></a>
                        <a href=""><i class="fa-brands fa-instagram instagram_icon"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin linkedin_icon"></i></a>
                        <a href=""><i class="fa-brands fa-youtube youtube_icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscription_under_line">
    </div>
</div>
<!-- Duplicate Section Start -->
<div id="subscription_items_1" style="background: #85a947;">
    <div class="container">
        <div class="subscription_bar_item_1">
            <div class="subscription_bar_1">
                <div class="subscription_bar_img_1">
                    <img src="./assets/img/footer-logo.png" alt="">
                </div>
                <div class="input_container_1">
                    <input type="email" placeholder="psus.pabna@yahoo.com" id="email" class="professional_input_1">
                    <a onclick="subscribe()" class="professional_button_1" href="">Subscribe</a>
                </div>
                <div class="social_wrapper_1">
                    <div class="social_1">
                        <a href=""><i class="fa-brands fa-facebook facebook_icon_1"></i></a>
                        <a href=""><i class="fa-brands fa-square-x-twitter twitter_icon_1"></i></a>
                        <a href=""><i class="fa-brands fa-instagram instagram_icon_1"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin linkedin_icon_1"></i></a>
                        <a href=""><i class="fa-brands fa-youtube youtube_icon_1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscription_under_line_1">
    </div>
</div>
<!-- Duplicate Section End -->
<!-- Subscription End -->

@include('components.front-end.compnents.footer')

@endsection