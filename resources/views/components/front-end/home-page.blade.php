@extends('layout.master')
@section('title','Home Page')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- Hero Start -->
<div class="hero">
    <div class="hero-slider-container">
        <div class="swiper-wrapper" id="HomeSliderFrontData">

        </div>

        <!-- Navigation Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <!-- Pagination -->
    <div class="swiper-pagination"></div>
</div>
<div class="hero_shape">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 19.6" preserveAspectRatio="none">
        <path class="elementor-shape-fill" style="opacity:0.33" d="M0 0L0 18.8 141.8 4.1 283.5 18.8 283.5 0z">
        </path>
        <path class="elementor-shape-fill" style="opacity:0.33" d="M0 0L0 12.6 141.8 4 283.5 12.6 283.5 0z">
        </path>
        <path class="elementor-shape-fill" style="opacity:0.33" d="M0 0L0 6.4 141.8 4 283.5 6.4 283.5 0z">
        </path>
        <path class="elementor-shape-fill" d="M0 0L0 1.2 141.8 4 283.5 1.2 283.5 0z"></path>
    </svg>
</div>
<!-- Hero End -->

<!-- About Start -->
<section id="about">
    <div class="container">
        <div class="about_wrapper" id="AboutSectionData">
          
          
        </div>
    </div>
</section>
<!-- About End -->

<!-- Mission & Vision Section Start -->
<section id="mission_vision">
    <div class="mission_vision_overlay">
        <div class="container">
            <div class="mission_vision_items">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mission_vision_all_items">
                            <div class="mission_items">
                                <div class="mission_content">
                                    <h2 class="mission_title" id="MissionTitle"></h2>
                                    <p class="mission_description" id="MissionDescriptionData">
                                    </p>
                                </div>
                            </div>

                            <div class="vision_items">
                                <div class="vision_content">
                                    <h2 class="vision_title" id="VisionTitle"></h2>
                                    <p class="vision_description" id="VisionDescription"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="core_values">
                            <h2 class="core_values_title">Core Values</h2>
                            <ul class="core_values_list">
                                <li><i class="fas fa-check"></i> Fairer and Justice</li>
                                <li><i class="fas fa-check"></i> Dignity and Values</li>
                                <li><i class="fas fa-check"></i> Compassion and Integrity</li>
                                <li><i class="fas fa-check"></i> Social Norms and Coherence</li>
                                <li><i class="fas fa-check"></i> Peace and Tranquility</li>
                                <li><i class="fas fa-check"></i> Humanitarian Dignity</li>
                                <li><i class="fas fa-check"></i> Cultural Specialization</li>
                            </ul>
                            <div class="details_btn">
                                <a href="">Click for Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Mission & Vision Section End -->

<!-- What We Do Section Start -->
<div id="what_we_do">
    <div class="container">
        <div class="what_we_do_heading">
            <h2>What We Do</h2>
        </div>
        <div class="team-slider swiper">
            <div class="team_slider_wrapper">
                <div class="team_card_box swiper-wrapper" id="WeDoData">


                </div>

                <!-- Custom Pagination -->
                <div class="custom-pagination">
                    <div class="pagination-dots"></div>
                </div>

                <!-- Custom Navigation Buttons -->
                <div class="custom-button-prev"><i class="fa-solid fa-circle-arrow-left"></i></div>
                <div class="custom-button-next"><i class="fa-solid fa-circle-arrow-right"></i></div>
            </div>
        </div>

    </div>
</div>
<!-- What We Do Section End -->

<!-- Call To Action Start -->
<div id="call_to_action">
    <div class="call_to_action_overlay">
        <div class="container">
            <div class="call_to_action_items">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="call_to_action_all_items">
                            <div class="call_to_action_left">
                                <div class="call_to_action_left_content">
                                    <h2 class="call_to_action_left_title">Call To Action</h2>
                                    <h3 class="call_to_action_left_heading">Fundraising For The People And
                                        Causes
                                        You
                                        Care About</h3>
                                    <p class="call_to_action_left_description">PSUS believes that people have
                                        their
                                        enormous capacity to develop themselves where capacity building, need
                                        based
                                        support and creation of opportunities are prerequisite.
                                    </p>

                                    <div class="play_btn">
                                        <a href="">play short video</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="call_to_action_from fade-in">
                            <h1 class="call_to_action_from_heading">Welcome to Aceternity</h1>
                            <p class="call_to_action_from_description">Login to aceternity if you can because we
                                don't have a login flow yet</p>
                            <form class="call_to_action_from_input">
                                <div class="call_to_action_from_input_group">
                                    <input type="text" placeholder="First name" required>
                                    <input type="text" placeholder="Last name" required>
                                </div>
                                <div class="call_to_action_from_input_group">
                                    <input type="email" placeholder="Email Address" required>
                                    <input type="password" placeholder="Password" required>
                                </div>
                                <div class="call_to_action_from_input_group">
                                    <input type="number" placeholder="Amount" required>
                                    <input type="password" placeholder="Password" required>
                                </div> <!-- Added amount field -->
                                <div class="call_to_action_from_submit_btn">
                                    <a href="">Submit</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call To Action End -->

<!-- Come to Events Start -->
<div id="come_events_section">
    <div class="container">
        <div class="come_events_section_heading">
            <h2><span> Come to our</span> News & Events</h2>
        </div>

        <div class="come_events_section_slider">
            <div class="owl-carousel" id="EventSectionSlider">


            </div>
        </div>
    </div>
</div>
<!-- Come to Events End -->


<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    $(document).ready(function () {
        async function HomeSliderData() {
            try {
                let res = await axios.get("/api/hero-slider-data-show");
                const $sliderWrapper = $("#HomeSliderFrontData");
                $sliderWrapper.empty();

                if (res.data['HeroSliderFrontData'].length === 0) {
                    console.warn("No Home Slider Data found");
                    return;
                }

                res.data['HeroSliderFrontData'].forEach((item) => {
                    let EachItem = `
                        <div class="swiper-slide hero_slide" style="
                            background: linear-gradient(
                                0deg,
                                rgba(0, 0, 0, 0.4) 0%,
                                rgba(0, 0, 0, 0.4) 100%
                            ),
                            url(${item['img_url']});
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: center;
                        ">
                        </div>
                    `;
                    $sliderWrapper.append(EachItem);
                });

                // Initialize Swiper after appending slides
                new Swiper('.hero-slider-container', {
                    loop: true,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                });

            } catch (error) {
                console.error("Error fetching Home Slider:", error);
            }
        }

        HomeSliderData();
    });
</script>


<!-- About Section Start -->

<script>
    $(document).ready(function() {
        async function AboutSectionData() {
            try {
                let res = await axios.get("/api/home-about-data");
                $("#AboutSectionData").empty();

                if (res.data['AboutSectionFrontData'].length === 0) {
                    console.warn("No We Do Data found");
                    return;
                }

                res.data['AboutSectionFrontData'].forEach((item) => {
                    let EachItem = `
      <div class="row">
                <div class="col-lg-6">
                    <div class="about_left_side_item">
                        <div class="about_img">
                            <img src="${item['img_url']}" alt="">
                        </div>
                        <div class="grid-container">
                            <div class="grid-item">
                                <div class="number" data-target="29">0</div>
                                <div class="label">Years Experience</div>
                            </div>
                            <div class="grid-item">
                                <div class="number" data-target="230">0</div>
                                <div class="label">Project Challenge</div>
                            </div>
                            <div class="grid-item">
                                <div class="number" data-target="830">0</div>
                                <div class="label">Positive Reviews</div>
                            </div>
                            <div class="grid-item">
                                <div class="number" data-target="100000">0</div>
                                <div class="label">Trusted Students</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_content">
                        <h2 class="about_us_title">ABOUT US</h2>
                        <h3 class="about_content_title" id="AboutHeadingData">${item['title_1']}</h3>
                        <p class="about_content_description" id="AboutContentDescriptionData">${item['title_1_desc']}</p>
                        <div class="about_content_list">
                           ${item['short_content']}
                            <div class="about_content_list_btn">
                                <a href="/about-page/${item['id']}">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    `;
                    $("#AboutSectionData").append(EachItem);
                });
            } catch (error) {
                console.error("Error fetching Home Slider:", error);
            }
        }

        // Fetch product categories on page load
        AboutSectionData();
    });
</script>


<!-- About Section End -->


<!-- mission and vission section start  -->

<script>
    async function MissionVisionData() {
        try {
            const response = await axios.get("/api/mission-vission-data");
            const data = response.data.data;

            // Set background image properly
            document.getElementById('mission_vision').style.backgroundImage = `url(${data.img_url})`;

            // Update text content
            document.getElementById('MissionTitle').innerHTML = data.misson_title;
            document.getElementById('MissionDescriptionData').innerHTML = data.misson_desc;
            document.getElementById('VisionTitle').innerHTML = data.visions_title;
            document.getElementById('VisionDescription').innerHTML = data.visions_desc;
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }

    // Fetch data when the page loads
    MissionVisionData();
</script>

<!-- mission and vission section end  -->


<!-- We Do Section Start -->

<script>
    $(document).ready(function() {
        async function WeDoData() {
            try {
                let res = await axios.get("/api/we-do-page-data");
                $("#WeDoData").empty();

                if (res.data['WhatWeDoPageFrontData'].length === 0) {
                    console.warn("No We Do Data found");
                    return;
                }

                res.data['WhatWeDoPageFrontData'].forEach((item) => {
                    let EachItem = `
    <div class="team_card swiper-slide">
                        <div class="team_img_wrapper">
                            <img src="${item['img_url']}" alt="" class="team_image">
                        </div>
                        <div class="team_content">
                            <h2 class="team_name">${item['short_title']}</h2>
                            <p class="team_role">
                              ${item['short_description']}
                            </p>
                            <div class="what_we_do_see_more">
                                <a href="/single-we-do-page/${item['id']}">See More</a>
                            </div>
                        </div>
                    </div>
    
    `;
                    $("#WeDoData").append(EachItem);
                });
            } catch (error) {
                console.error("Error fetching Home Slider:", error);
            }
        }

        // Fetch product categories on page load
        WeDoData();
    });
</script>


<!-- We Do Section End -->


<script>
    $(document).ready(function() {
        async function EventSectionData() {
            try {
                let res = await axios.get("/api/event-info-data");
                let $slider = $("#EventSectionSlider");
                $slider.trigger('destroy.owl.carousel'); // Remove old instance if any
                $slider.empty(); // Clear previous items

                if (res.data['EventInfoData'].length === 0) {
                    console.warn("No event Data found");
                    return;
                }

                res.data['EventInfoData'].forEach((item) => {
                    let EachItem = `
                        <div class="come_events_section_slider_card item"> <!-- 'item' class is needed -->
                            <img src="${item['img_url']}" alt="">
                            <h5 class="come_events_section_slider_heading">${item['title']}</h5>
                            <p>${item['discription']}</p>
                            <a href="single-news-events/${item['id']}" class="read_more">Read More</a>
                        </div>
                    `;
                    $slider.append(EachItem);
                });

                // Re-initialize Owl Carousel after adding new items
                $slider.owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 3000, // Increased the timeout to 5000ms (5 seconds)
                    autoplayHoverPause: true,
                    autoplaySpeed: 1000, // Increased the speed to 1000ms (1 second) for a slower transition
                    center: true,
                    navText: [
                        "<i class='fa fa-angle-left'></i>",
                        "<i class='fa fa-angle-right'></i>",
                    ],
                    responsive: {
                        0: {
                            items: 1,
                        },
                        776: {
                            items: 2,
                        },
                        993: {
                            items: 3,
                        },
                    },
                });

            } catch (error) {
                console.error("Error fetching Home Slider:", error);
            }
        }

        EventSectionData();
    });
</script>


<!--Event Section End -->


@include('components.front-end.compnents.footer')

@endsection