@extends('layout.master')
@section('title','Contact Page')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- Contact Hero Section Start -->
<section id="contact_hero_section">
    <div class="container">
        <div class="contact_hero">
            <div class="contact_hero_content">
                <h1>Contact</h1>
                <div class="contact_hero_btn">
                    <a href="./index.html">Home</a>
                    <a href="">Contact</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Hero Section End -->

<!-- Contact Section Start -->
<section id="contact_section_items">
    <div class="container">
        <div class="contact_section_item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_section_item_img">
                        <img src="{{asset('front-end/assets/img/contact-us/page-hero-img.jpg')}}" alt="Sample Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact_section_items">
                        <div class="contact_section_form_item">
                            <h2 class="contact_section_form_heading">WELCOME TO PSUS FORM</h2>
                            <form>
                                <div class="contact_section_form_grid">
                                    <div class="contact_section_form_row_category">
                                        <input type="text" placeholder="First" required>
                                        <input type="text" placeholder="Last" required>
                                    </div>
                                    <div class="contact_section_form_row_category">
                                        <input type="email" placeholder="Email" required>
                                        <input type="number" placeholder="Phone" required>
                                    </div>
                                    <div class="contact_section_form_row_category">
                                        <input type="text" placeholder="City" required>
                                        <input type="text" placeholder="Region" required>
                                    </div>
                                    <textarea class="contact_section_form_textarea"
                                        placeholder="Enter your message here..." required></textarea>
                                </div>
                                <div class="contact_us_submit_btn">
                                    <a href="">Submit</a>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Contact Section Map Start -->
<section id="contact_section_map_items">
    <div class="container">
        <div class="contact_section_map_iframe">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29211.915849290053!2d90.345884!3d23.765578!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1003292f1b7%3A0x95c9031f71bd1ba3!2sAMAN%20(Association%20for%20Mass%20Advancement%20Network)!5e0!3m2!1sen!2sbd!4v1736682988624!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- Contact Section Map End -->

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