@extends('layout.master')
@section('title','Success Stories Page')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- About Hero Section Start -->
<section id="about_hero_section">
    <div class="container">
        <div class="about_hero">
            <div class="about_hero_content">
                <h1>Success Stories</h1>
                <div class="about_hero_btn">
                    <a href="./index.html">Home</a>
                    <a href="">Success Stories</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Hero Section End -->

<!-- Success Page Section Start -->
<section id="news_events_section">
    <div class="news_events_grid" id="SuccessStoryFrontData">

    </div>
</section>
<!-- Success Page Section End -->

<!-- Subscription Start -->
<div id="subscription_items" style="background:#85a947;">
    <div class="container">
        <div class="subscription_bar_item">
            <div class="subscription_bar">
                <div class="subscription_bar_img">
                    <a href="./index.html"><img src="{{asset('front-end//assets/img/footer-logo.png')}}" alt=""></a>
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
                    <img src="{{asset('front-end//assets/img/footer-logo.png')}}" alt="">
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


<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<script>
    $(document).ready(function() {
        async function SuccessStoryFrontData() {
            try {
                let res = await axios.get("/api/success-stories-front-end-data");
                $("#SuccessStoryFrontData").empty();

                if (res.data['SuccessStoriesFrontData'].length === 0) {
                    console.warn("No Success Story Data found");
                    return;
                }
                res.data['SuccessStoriesFrontData'].forEach((item) => {
                    let EachItem = `
                                        <div class="news_events_card">
                <div class="news_events_image_wrapper">
                    <img src="${item['banner_image']}" alt="Event Image">
                </div>
                <div class="news_events_content">
                    <h2 class="news_events_title">${item['event_heading']}</h2>
                    <p class="news_events_description">
                        ${item['event_description']}
                    </p>
                    <div class="news_events_button">
                        <a href="success-stories/${item['id']}">Read More</a>
                    </div>
                </div>
            </div>
                    `;
                    $("#SuccessStoryFrontData").append(EachItem);
                });
            } catch (error) {
                console.error("Error fetching Product Category:", error);
            }
        }

        // Fetch product categories on page load
        SuccessStoryFrontData();
    });
</script>


@include('components.front-end.compnents.footer')
@endsection