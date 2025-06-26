<!-- Back to Top Button -->
<a id="back_to_top"><i class="fa-solid fa-arrow-up"></i></a>
<!-- Back to Top Button -->

<!-- Top bar Start -->
<div id="topbar">
    <div class="container">
        <div class="topbar_wrapper">
            <div class="location">
                <i class="fa-solid fa-location-arrow"></i>
                <p id="NavbarTopAddress"></p>
            </div>
            <div class="contact">
                <div class="time">
                    <i class="fa-solid fa-envelope-open-text"></i>
                    <p id="NavbarTopEmail"></p>
                </div>
                <div class="phone">
                    <i class="fa-solid fa-phone-volume"></i>
                    <p id="NavbarTopMobile"></p>
                </div>
            </div>
            <div class="social_wrapper">
                <div class="social">
                    <a id="FacebookLink" href=""><i class="fa-brands fa-facebook facebook_icon"></i></a>
                    <a id="TwitterLink" href=""><i class="fa-brands fa-square-x-twitter twitter_icon"></i></a>
                    <a id="InstragramLink" href=""><i class="fa-brands fa-instagram instagram_icon"></i></a>
                    <a id="LinkedinLink" href=""><i class="fa-brands fa-linkedin linkedin_icon"></i></a>
                    <a id="YouTubeLink" href=""><i class="fa-brands fa-youtube youtube_icon"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top bar end -->

<!-- Navbar Start -->
<nav id="navbar">
    <div class="container">
        <div class="header">
            <a href="{{url('/home')}}" class="logo"><img src="{{asset("front-end/assets/img/navbar-logo.jpg")}}" alt=""></a>
            <div class="navigation">
                <ul class="menu">
                    <div class="close-btn"></div>
                    <li class="menu-item">
                        <a class="sub-btn" href="">Who We Are<i class="fas fa-angle-down down"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-item" id="NavbarAboutData">
                                
                            </li>
                            <li class="sub-item more">
                                <a class="more-btn" href="">Messages <i class="fas fa-angle-right"></i></a>
                                <ul class="more-menu">
                                    <li class="more-item"><a href="{{url('/chairman')}}">Chairman</a></li>
                                    <li class="more-item"><a href="{{url('/chief-adviser')}}">Chief
                                            Adviser</a></li>
                                    <li class="more-item"><a href="{{url('/chief-executive')}}">Chief of
                                            Executive</a></li>
                                </ul>
                            </li>
                            <li class="sub-item"><a href="{{url('/executive-committee')}}">Executive Committee</a>
                            </li>
                            <li class="sub-item"><a href="{{url('/objectives')}}">Objectives</a></li>
                            <li class="sub-item"><a href="{{url('/network')}}">Network</a></li>
                            <li class="sub-item"><a href="{{url('/organization')}}">Organization</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="sub-btn" href="./all-programs-page.html">What We Do
                            <i class="fas fa-angle-down down"></i></a>
                        <ul class="sub-menu" id="WeDoFornEndData">


                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="sub-btn" href="{{url('/get-involved')}}">Get Involved
                            <i class="fas fa-angle-down down"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-item"><a href="{{url('/career')}}">Career</a>
                            <li class="sub-item"><a href="{{url('/volunteer')}}">Volunteer</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="{{url('/news-events')}}">News & Events</a></li>
                    <li class="menu-item"><a href="{{url('/publications')}}">Publications</a></li>
                    <li class="menu-item"><a href="{{url('/success-stories')}}">Success Stories</a></li>
                    <li class="contact-btn-mobile">
                        <a href="{{url('/contact-us')}}" class="contact_us_btn">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="contact_us">
                <a href="{{url('/contact-us')}}" class="contact_us_btn">Contact</a>
            </div>
            <div class="menu-btn">
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->


<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<!-- About Navbar Data Fetching Start  -->


<script>
    $(document).ready(function() {
        async function NavbarAboutData() {
            try {
                let res = await axios.get("/api/home-about-data");
                $("#NavbarAboutData").empty();

                if (res.data['AboutSectionFrontData'].length === 0) {
                    console.warn("No We Do Data found");
                    return;
                }

                res.data['AboutSectionFrontData'].forEach((item) => {
                    let EachItem = `
     
            <a href="/about-page/${item['id']}">About Us</a>
    
    `;
                    $("#NavbarAboutData").append(EachItem);
                });
            } catch (error) {
                console.error("Error fetching Home Slider:", error);
            }
        }

        // Fetch product categories on page load
        NavbarAboutData();
    });
</script>


<!-- About Navbar Data Fetching End  -->


<script>
    $(document).ready(function() {
        async function WeDoFornEndData() {
            try {
                let res = await axios.get("/api/we-do-page-data");
                $("#WeDoFornEndData").empty();

                if (res.data['WhatWeDoPageFrontData'].length === 0) {
                    console.warn("No We Do Data found");
                    return;
                }

                res.data['WhatWeDoPageFrontData'].forEach((item) => {
                    let EachItem = `
                    <li class="sub-item"><a href="/single-we-do-page/${item['id']}">${item['short_title']}</a></li>
    
    `;
                    $("#WeDoFornEndData").append(EachItem);
                });
            } catch (error) {
                console.error("Error fetching Home Slider:", error);
            }
        }

        // Fetch product categories on page load
        WeDoFornEndData();
    });
</script>

<script>
    async function CompanyNavbarInfoData() {
        try {
            const response = await axios.get("/api/company-info-Data");
            const data = response.data.data;

            document.getElementById('NavbarTopMobile').innerHTML = data.mobile;
            document.getElementById('NavbarTopEmail').innerHTML = data.email;
            document.getElementById('NavbarTopAddress').innerHTML = data.address;
            document.getElementById('FacebookLink').href = data.fb_link;
            document.getElementById('TwitterLink').href = data.twitter_link;
            document.getElementById('InstragramLink').href = data.insta_link;
            document.getElementById('LinkedinLink').href = data.linkedin_link;
            document.getElementById('YouTubeLink').href = data.youtube_link;
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }

    // Fetch data when the page loads
    CompanyNavbarInfoData();
</script>