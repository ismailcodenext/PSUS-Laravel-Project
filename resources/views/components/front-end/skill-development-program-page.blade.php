@extends('layout.master')
@section('title','Skill Development Program')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- About Hero Section Start -->
<section id="about_hero_section">
    <div class="container">
        <div class="about_hero">
            <div class="about_hero_content">
                <h1>Skill Development Program</h1>
                <div class="about_hero_btn">
                    <a href="./index.html">Home</a>
                    <a href="">Skill Development</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Hero Section End -->

<!-- Skill Development Program Start -->
<section id="skill_development">
    <div class="container">
        <div class="skill_development_wrapper">
            <div class="skill_development_items">
                <h2 class="skill_development_title">Protidwhani Somaj Unnayan Songstha (PSUS) Skill Development
                    Program</h2>
                <p class="skill_development_desc">The <i>Protidwhani Somaj Unnayan Songstha (PSUS)</i> Skill
                    Development
                    Program is dedicated to empowering widows, youth, and unemployed men and women in Bangladesh
                    through practical skills training. With a focus on increasing employability and supporting
                    entrepreneurship, the program equips participants with the tools they need to secure meaningful
                    jobs, start their own businesses, and contribute to the socio-economic development of their
                    communities.
                </p>
                <div class="key_initiatives_activities_item">
                    <h3 class="key_initiatives_activities_heading">Key Features of the Program:</h3>
                </div>
            </div>

            <div class="key_initiatives_activities_lists">
                <div class="key_initiatives_activities_list">
                    <ul class="activity_items">
                        <li class="activity_item">
                            <strong class="activity_title">Vocational Training:
                            </strong>
                            Offering training in high-demand areas such as tailoring, carpentry, electrical work,
                            and computer literacy, ensuring participants gain skills that are relevant to today’s
                            job market.
                        </li>
                        <li class="activity_item">
                            <strong class="activity_title">Entrepreneurship Workshops: </strong>
                            Special courses aimed at helping widows and youth start and manage their own businesses.
                            Participants learn essential skills like business planning, financial literacy, and
                            marketing strategies.
                        </li>
                        <li class="activity_item">
                            <strong class="activity_title">Job Placement Assistance: </strong> Partnerships with
                            local businesses and industries ensure that graduates can connect with job
                            opportunities, helping them transition smoothly into the workforce.
                        </li>
                        <li class="activity_item">
                            <strong class="activity_title">Ongoing Support and Mentorship: </strong> Continuous
                            guidance is provided to participants after graduation to help them overcome challenges,
                            sustain their businesses, and build lasting careers.
                        </li>
                        <li class="activity_item">
                            <strong class="activity_title">Community-Based Training Centers: </strong> Training
                            centers are established within local communities, making it easier for
                            individuals—especially women and marginalized groups—to access the program.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="project_overview_item">
                <h3 class="project_overview_heading">Impact on the Community:</h3>
                <p class="project_overview_desc">The Skill Development Program has helped numerous individuals
                    secure employment, start their own businesses, and achieve financial independence. The program
                    is particularly transformative for women and widows, providing them with the skills and
                    confidence to regain control over their lives.</p>
                <p class="project_overview_desc">By empowering youth and creating economic opportunities, PSUS is
                    not only changing the lives of individuals but also contributing to the economic development of
                    Bangladesh.</p>
            </div>
            <div class="project_overview_item">
                <h3 class="project_overview_heading">How You Can Help:</h3>
                <p class="project_overview_desc">Your support can make a significant difference. Through donations,
                    volunteering, or partnering with us, you can help PSUS expand its reach and provide more
                    opportunities to vulnerable communities. Join us in empowering the next generation of skilled
                    workers and entrepreneurs.
                </p>
                <p class="project_overview_desc">Visit <a href="">www.psus-bd.org</a> to learn more and contribute
                    to the movement
                    for positive change.
                </p>
            </div>

        </div>
    </div>
</section>
<!-- Skill Development Program End -->


@include('components.front-end.compnents.footer')

@endsection