@extends('layout.master')
@section('title','Organization Page')
@section('content')
@include('components.front-end.compnents.navbar')


    <!-- About Hero Section Start -->
    <section id="about_hero_section">
        <div class="container">
            <div class="about_hero">
                <div class="about_hero_content">
                    <h1>Organization</h1>
                    <div class="about_hero_btn">
                        <a href="./index.html">Home</a>
                        <a href="">Organization</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Hero Section End -->

    <!-- Organization Section Start -->
    <section id="organization_section">
        <div class="container">
            <div class="organization_container">
                <div class="organization_title">Organization</div>
                <ul class="organization_list">
                    <li><a href="#" class="organization_link">About us</a></li>
                    <li><a href="#" class="organization_link">Working area</a></li>
                    <li><a href="#" class="organization_link">Timeline / Milestone</a></li>
                    <li><a href="#" class="organization_link">Network</a></li>
                    <li><a href="#" class="organization_link">Donors and Partners</a></li>
                    <li><a href="#" class="organization_link">Organogram / Structure</a></li>
                    <li>
                        <a href="#" class="organization_link">Link Organizations</a>
                        <ul class="sub_list">
                            <li><a href="#" class="organization_link">RADIO SAGOR GIRI FM 99.2</a></li>
                            <li><a href="#" class="organization_link">Human Resource Development Center – Sitakund
                                    Campus</a></li>
                            <li><a href="#" class="organization_link">ICT & Resource Centre on Disabilities</a></li>
                            <li><a href="#" class="organization_link">Sitakund Federation of DPOs</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="organization_link">Job Opportunity</a></li>
                    <li><a href="#" class="organization_link">Support Us</a></li>
                    <li><a href="#" class="organization_link">Tender Notice</a></li>
                    <li><a href="#" class="organization_link">Report your Complaint</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Organization Section End -->

    <!-- Subscription Start -->
    <div id="subscription_items" style="background:#85a947;">
        <div class="container">
            <div class="subscription_bar_item">
                <div class="subscription_bar">
                    <div class="subscription_bar_img">
                        <a href="./index.html"><img src="./assets/img/footer-logo.png" alt=""></a>
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