@extends('layout.master')
@section('title','Chief Executive Page')
@section('content')
@include('components.front-end.compnents.navbar')



<!-- Message From Chairman Hero Section Start -->
<section id="message_chairman_hero_section">
    <div class="container">
        <div class="message_chairman_hero">
            <div class="message_chairman_hero_content">
                <h1>Message Form Chief of
                    Executive</h1>
            </div>
        </div>
    </div>
</section>
<!-- Message From Chairman Hero Section End -->

<!-- Message From Chairman Section Start -->
<section id="message_from_chairman">
    <div class="container">
        <div class="message_from_chairman_items">
            <div class="row message_from_chairman_img_contant">
                <div class="col-lg-4">
                    <div class="chairman_all_info">
                        <div class="message_from_chairman_img">
                            <img src="{{asset('front-end/assets/img/message-form-chirmen/chief-of-executive-img.jpg')}}" alt="">
                        </div>
                        <div class="message_from_chairman_img_description">
                            <p class="title_name"><span>Name :</span> Md. Abdul Haque</p>
                            <p class="title_name"><span>Designation :</span> Executive Head</p>
                            <p class="title_name"><span>Protidwhani Somaj Unnayan Sangstha (PSUS)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="message_from_chairman_contant">
                        <h2 class="message_from_chairman_title">Greetings !</h2>
                        <p class="message_from_chairman_description">Protidwhani Somaj Unnayan Sangstha (PSUS) has
                            emerged as a shining beacon of hope for underprivileged communities across Bangladesh,
                            playing a pivotal role in their socio-economic development. The organization is deeply
                            committed to addressing the systemic challenges that perpetuate poverty, focusing on
                            holistic development initiatives to uplift marginalized families. By targeting the root
                            causes of poverty and empowering individuals through education, skill development,
                            healthcare, and financial assistance, PSUS has made significant strides in creating
                            sustainable livelihoods for those in need.

                            One of the organization’s most commendable achievements is its ability to engage
                            directly with communities that are often overlooked by mainstream development efforts.
                            PSUS prioritizes practical, grassroots-level interventions that cater to the unique
                            needs of each community, ensuring maximum impact. Whether it’s providing vocational
                            training to unemployed youth, facilitating microfinance opportunities for small-scale
                            entrepreneurs, or offering health services to vulnerable populations, the organization’s
                            multifaceted approach addresses both immediate needs and long-term goals. These efforts
                            are instrumental in breaking the cycle of poverty and helping individuals achieve
                            self-reliance.

                            PSUS’s development activities go beyond material support—they foster a sense of dignity,
                            confidence, and hope among the beneficiaries.I am very happy to say that Protidwhani
                            Somaj Unyayan Sangstha (PSUS) continues to do a great job in the socio-economic
                            advancement of the underprivileged groups of our society. Its commendable development
                            activities are helping the poor of Bangladesh to get out of abject poverty.
                            I hope this organization will be able to reach more marginalized families in the society
                            with real socio-economic activities in the future.
                    </div>
                </div>
            </div>
        </div>
        <div class="message_from_chairman_bio">
            <p></p>
        </div>
    </div>
</section>
<!-- Message From Chairman Section End -->

<!-- Subscription Start -->
<div id="subscription_items" style="background:#85a947;">
    <div class="container">
        <div class="subscription_bar_item">
            <div class="subscription_bar">
                <div class="subscription_bar_img">
                    <a href="./index.html"><img src="{{asset('front-end/assets/img/footer-logo.png')}}" alt=""></a>
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
                    <img src="{{asset('front-end/assets/img/footer-logo.png')}}" alt="">
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