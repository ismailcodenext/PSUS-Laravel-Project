@extends('layout.master')
@section('title','Get Involved Page')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- About Hero Section Start -->
<section id="about_hero_section">
    <div class="container">
        <div class="about_hero">
            <div class="about_hero_content">
                <h1>News & Events</h1>
                <div class="about_hero_btn">
                    <a href="./index.html">Home</a>
                    <a href="">News & Events</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Hero Section End -->

<!-- News & Events Section Start -->
<section id="news_events_section">
    <div class="news_events_grid" id="NewsEventFrontData">

    </div>
</section>
<!-- News & Events Section End -->
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<script>
    $(document).ready(function() {
        async function NewsEventFrontData() {
            try {
                let res = await axios.get("/api/news-event-front-end-data");
                $("#NewsEventFrontData").empty();

                if (res.data['NewsEventFrontData'].length === 0) {
                    console.warn("No News Event Data found");
                    return;
                }
                res.data['NewsEventFrontData'].forEach((item) => {
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
                        <a href="single-news-events/${item['id']}">Read More</a>
                    </div>
                </div>
            </div>
                    `;
                    $("#NewsEventFrontData").append(EachItem);
                });
            } catch (error) {
                console.error("Error fetching Product Category:", error);
            }
        }

        // Fetch product categories on page load
        NewsEventFrontData();
    });
</script>


@include('components.front-end.compnents.footer')
@endsection