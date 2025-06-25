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
                        <img src="{{ asset($HomeAboutData->img_url) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about_info">
                        <h2 class="about_info_heading">About Us</h2>
                        <p class="about_info_description">{{ $HomeAboutData->title_1_desc }}</p>
                        <!-- <a href="" class="about_info_read_more">Read More <span>→</span></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<!-- About Us Mission & Vision and CORE VALUES Start -->
<!-- <section id="mission_vision_core_items">
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
About Us Mission & Vision and CORE VALUES End -->


<div class="container">
    {!! $HomeAboutData->long_content !!}

</div>


@include('components.front-end.compnents.footer')

@endsection