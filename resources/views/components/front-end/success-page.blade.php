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