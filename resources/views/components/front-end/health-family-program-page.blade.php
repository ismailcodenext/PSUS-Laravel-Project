@extends('layout.master')
@section('title','Health & Family Program')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- About Hero Section Start -->
<section id="about_hero_section">
    <div class="container">
        <div class="about_hero">
            <div class="about_hero_content">
                <h1>Health & Family Program</h1>
                <div class="about_hero_btn">
                    <a href="./index.html">Home</a>
                    <a href="">Health & Family Program</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Hero Section End -->

<!-- Health & Family Planing Section Start -->
<section id="health_family_planing">
    <div class="container">
        <div class="health_family_planing_wrapper">
            <h1 class="health_family_planing_heading">Health & Family Planning Program </h1>
            <div class="health_family_planing_items">
                <div class="project_overview_item">
                    <h3 class="project_overview_heading">Project Overview</h3>
                    <p class="project_overview_desc">The health sector in Bangladesh faces many challenges,
                        particularly in rural areas where
                        access to healthcare services is limited. Poor women and children often suffer the most due
                        to inadequate health services, making them vulnerable to preventable diseases. To address
                        these issues, Protidwhani Somaj Unnayan Sangstha (PSUS) has been working tirelessly to
                        improve maternal and child health in Pabna District, with a focus on reducing infant
                        mortality and promoting safe motherhood practices.</p>
                </div>

                <div class="key_activities_item">
                    <h3 class="key_activities_heading">Key Activities (2022-2023)</h3>
                </div>
            </div>

            <div class="key_activities_categories_items">
                <div class="key_activities_categories">
                    <div class="key_activities_categories_image">
                        <img src="{{ asset('front-end/assets/img/home/page-hero-img.jpg') }}"
                            alt="Health Awareness Image">
                    </div>
                    <div class="key_activities_categories_text">
                        <h2 class="key_activities_categories_heading">Health Awareness Sessions</h2>
                        <p class="key_activities_categories_paragraph">PSUS organized health education sessions
                            aimed at
                            raising
                            awareness among families and communities about basic healthcare practices, disease
                            prevention, and the
                            importance of maintaining good health.</p>
                        <ul class="key_activities_categories_list">
                            <li class="key_activities_categories_list_item"><strong
                                    class="key_activities_categories_highlight">Families Reached:</strong> 22</li>
                            <li class="key_activities_categories_list_item"><strong
                                    class="key_activities_categories_highlight">Location:</strong> Pabna Sadar</li>
                            <li class="key_activities_categories_list_item"><strong
                                    class="key_activities_categories_highlight">Supported by:</strong> PSUS’s own
                                funds
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="key_activities_categories">
                    <div class="key_activities_categories_text">
                        <h2 class="key_activities_categories_heading">Maternal Care Awareness</h2>
                        <p class="key_activities_categories_paragraph">To ensure the health of mothers and their
                            babies,
                            PSUS conducted awareness sessions focused on prenatal and postnatal care, emphasizing
                            the
                            importance of safe motherhood practices.</p>
                        <ul class="key_activities_categories_list">
                            <li class="key_activities_categories_list_item"><strong
                                    class="key_activities_categories_highlight">Families Reached:</strong> 113</li>
                            <li class="key_activities_categories_list_item"><strong
                                    class="key_activities_categories_highlight">Location:</strong> Pabna Sadar</li>
                            <li class="key_activities_categories_list_item"><strong
                                    class="key_activities_categories_highlight">Supported by:</strong> Ministry of
                                Health
                            </li>
                        </ul>
                    </div>
                    <div class="key_activities_categories_image">
                        <img src="{{ asset('front-end/assets/img/home/page-hero-img.jpg') }}"
                            alt="Health Awareness Image">
                    </div>
                </div>

                <div class="key_activities_categories">
                    <div class="key_activities_categories_image">
                        <img src="{{ asset('front-end/assets/img/home/page-hero-img.jpg') }}"
                            alt="Health Awareness Image">
                    </div>
                    <div class="key_activities_categories_text">
                        <h2 class="key_activities_categories_heading">Free Medicine and Family Planning Material
                            Distribution</h2>
                        <p class="key_activities_categories_paragraph">PSUS distributed essential medicines and
                            family planning materials such as pills and condoms to vulnerable families, along with
                            financial support for those in need to access necessary healthcare services.
                        </p>
                        <ul class="key_activities_categories_list">
                            <li class="key_activities_categories_list_item"><strong
                                    class="key_activities_categories_highlight">Families Reached:</strong> 273</li>
                            <li class="key_activities_categories_list_item"><strong
                                    class="key_activities_categories_highlight">Location:</strong> Pabna Sadar</li>
                            <li class="key_activities_categories_list_item"><strong
                                    class="key_activities_categories_highlight">Supported by:</strong> Ministry of
                                Health
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="impact_future_items">
                <div class="impact_future_item">
                    <h3 class="impact_future_heading">Impact & Future Goals</h3>
                    <p class="impact_future_desc">Through these initiatives, PSUS has significantly impacted the
                        health and well-being of families in Pabna, empowering them to make informed health choices.
                        The organization’s efforts have not only reduced the number of preventable diseases but have
                        also improved maternal and child health, giving families the opportunity to lead healthier
                        lives.
                        Looking forward, PSUS is committed to expanding its health programs and reaching even more
                        families across the district. By continuing to provide essential resources and education,
                        PSUS aims to create lasting improvements in the healthcare system, ensuring better health
                        outcomes for all.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Health & Family Planing Section End -->

@include('components.front-end.compnents.footer')

@endsection