@extends('layout.master')
@section('title','Livelihood Program')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- About Hero Section Start -->
<section id="about_hero_section">
    <div class="container">
        <div class="about_hero">
            <div class="about_hero_content">
                <h1>Livelihood Program</h1>
                <div class="about_hero_btn">
                    <a href="./index.html">Home</a>
                    <a href="">Livelihood Program</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Hero Section End -->

<!-- Livelihood Program Start -->
<section id="livelihood_program">
    <div class="container">
        <div class="livelihood_program_wrapper">
            <div class="livelihood_program_item">
                <h3 class="livelihood_program_heading">Impact on the Community:</h3>
            </div>
            <div class="key_initiatives_activities_item">
                <h3 class="key_initiatives_activities_heading">Empowering Vulnerable Communities in Pabna’s Rural
                    and Char Development Areas</h3>
                <p class="key_initiatives_activities_desc">The <i>Protidwhani Somaj Unnayan Sangstha (PSUS)</i>
                    Livelihood
                    Program is dedicated to empowering impoverished families and vulnerable communities in the rural
                    and Char Development areas of Pabna District, Bangladesh. By providing sustainable
                    income-generating opportunities, PSUS is helping individuals and families break the cycle of
                    poverty, become self-reliant, and create brighter futures.</p>
            </div>
            <div class="key_initiatives_activities_item">
                <h3 class="key_initiatives_activities_heading">Key Features of the Program in Rural and Char
                    Development Areas:</h3>
            </div>
            <div class="key_initiatives_activities_lists">
                <div class="key_initiatives_activities_list">
                    <ul class="activity_items">
                        <li class="activity_item">
                            <strong class="activity_title">Income-Generating Assets:
                            </strong>
                            PSUS provides vital assets such as auto rickshaws, livestock, fishing equipment, and
                            small business supplies to families in rural and Char Development areas of Pabna. This
                            enables beneficiaries to create sustainable livelihoods and improve their economic
                            conditions.
                        </li>
                        <li class="activity_item">
                            <strong class="activity_title">Skills Training: </strong>
                            PSUS offers training in business management, financial literacy, and technical skills,
                            specifically tailored to the needs of individuals in rural and Char Development areas,
                            helping them effectively manage and maximize their new assets.
                        </li>
                        <li class="activity_item">
                            <strong class="activity_title">Self-Help Groups: </strong> Local self-help groups are
                            formed in these communities, where beneficiaries come together to learn from each other,
                            offer mutual support, and collaborate for collective growth and social change.
                        </li>
                        <li class="activity_item">
                            <strong class="activity_title">Community Engagement and Awareness: </strong> Through
                            campaigns and community events, PSUS engages the rural and Char Development communities
                            in Pabna, promoting social welfare, encouraging participation in local development
                            initiatives, and raising awareness on important socio-economic issues.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="key_initiatives_activities_item">
                <h3 class="key_initiatives_activities_heading">Program Impact in Pabna’s Rural and Char Development
                    Areas:</h3>
            </div>
            <div class="key_initiatives_activities_lists">
                <div class="key_initiatives_activities_list">
                    <ul class="activity_items">
                        <li class="activity_item">
                            <strong class="activity_title">Improved Economic Stability:
                            </strong>
                            Families in rural and Char Development areas have seen a significant increase in their
                            income and living standards due to the provision of income-generating assets and
                            essential skills training.
                        </li>
                        <li class="activity_item">
                            <strong class="activity_title">Enhanced Skills and Self-Confidence: </strong>
                            The program has equipped beneficiaries in these areas with valuable business and
                            technical skills, boosting their confidence and ability to independently manage and
                            sustain businesses.
                        </li>
                        <li class="activity_item">
                            <strong class="activity_title">Stronger Community Bonds: </strong> The formation of
                            self-help groups and community events has fostered solidarity and mutual support,
                            helping to strengthen the social fabric of these areas.
                        </li>
                        <li class="activity_item">
                            <strong class="activity_title">Poverty Reduction and Long-Term Development: </strong>
                            PSUS’s efforts have played a key role in lifting many families out of poverty, creating
                            long-term economic stability and contributing to the overall development of rural and
                            Char Development areas.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="project_overview_item">
                <h3 class="project_overview_heading">Get Involved in Pabna’s Rural and Char Development Areas:</h3>
                <p class="project_overview_desc">Your support is crucial in expanding the impact of the Livelihood
                    Program in Pabna’s rural and Char Development areas. Whether through financial contributions,
                    in-kind donations, or volunteering, you can help more families gain the tools and resources
                    needed to achieve lasting self-reliance and financial independence.
                </p>
                <p class="project_overview_desc">Visit our website at <a href="">www.psus-org.bd</a> to learn more
                    about the PSUS Livelihood Program and how you can make a difference in the lives of vulnerable
                    communities in Pabna’s rural and Char Development areas.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Livelihood Program End -->


@include('components.front-end.compnents.footer')

@endsection