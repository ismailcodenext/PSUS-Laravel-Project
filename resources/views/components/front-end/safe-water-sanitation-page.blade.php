@extends('layout.master')
@section('title','Safe Water & Sanitation Program')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- About Hero Section Start -->
<section id="about_hero_section">
    <div class="container">
        <div class="about_hero">
            <div class="about_hero_content">
                <h1>Safe Water & Sanitation Program</h1>
                <div class="about_hero_btn">
                    <a href="./index.html">Home</a>
                    <a href="">Safe Water & Sanitation Program</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Hero Section End -->

<!-- Safe Water & Sanitation Program Start -->
<section id="safe_water_sanitation">
    <div class="container">
        <div class="safe_water_sanitation_wrapper">
            <h1 class="safe_water_sanitation_heading">Safe Water & Sanitation Program </h1>
            <div class="safe_water_sanitation_items">
                <div class="project_overview_item">
                    <h3 class="project_overview_heading">Project Overview</h3>
                    <p class="project_overview_desc">Access to safe drinking water and sanitation remains a critical
                        challenge in the rural areas of Protidwhani Somaj Unnayan Sangstha (PSUS)’s operational
                        villages. Despite its importance, many families still face poor water and sanitation
                        conditions, exposing them to preventable diseases. To address this pressing issue, PSUS has
                        been implementing a comprehensive approach to improve the overall health and well-being of
                        these communities by promoting safe water practices, improving sanitation, and raising
                        awareness on personal hygiene.</p>
                </div>

                <div class="key_initiatives_activities_item">
                    <h3 class="key_initiatives_activities_heading">Key Initiatives & Achievements</h3>
                </div>
            </div>
            <div class="key_initiatives_activities_lists">
                <div class="key_initiatives_activities_list">
                    <ul class="activity_items">
                        <li class="activity_item">
                            <strong class="activity_title">Community Awareness & Education:</strong> PSUS conducted
                            extensive
                            awareness campaigns throughout the villages, especially targeting mothers and community
                            leaders. The
                            sessions focused on key health issues like the dangers of open defecation, the
                            importance of safe
                            drinking water, arsenic contamination in tube wells, and the prevention of waterborne
                            diseases such as
                            diarrhea, cholera, and jaundice. These efforts are crucial for cultivating long-term
                            changes in health
                            behaviors within the community.
                        </li>
                        <li class="activity_item">
                            <strong class="activity_title">Installation & Repair of Tube Wells:</strong> PSUS has
                            installed <b>35 new
                                tube wells</b> and successfully repaired <b>22 existing tube wells</b> across its
                            operational
                            areas. A key
                            initiative was the screening of <b>720 tube wells</b> for arsenic contamination, a major
                            health
                            hazard. With
                            support from the <b>DPHE Pabna</b>, this screening has helped identify unsafe sources,
                            ensuring
                            that only
                            clean, safe water is used for consumption.
                        </li>
                        <li class="activity_item">
                            <strong class="activity_title">Sanitation Improvements:</strong> <b>Latrine
                                Distribution</b>
                            In an effort to
                            improve sanitation conditions, PSUS distributed <b>247 low-cost water-seal latrines</b>
                            to
                            families in <b>8
                                villages</b>. This initiative, supported by <b>Muslim Aid</b> and PSUS's own
                            resources,
                            provides
                            families with
                            safer and more hygienic facilities, significantly reducing the risks associated with
                            open defecation.
                        </li>
                        <li class="activity_item">
                            <strong class="activity_title">Community-Led Installation of Sanitary
                                Facilities:</strong> PSUS has
                            actively engaged local communities in the process of installing tube wells and sanitary
                            latrines. With
                            this approach, the local population is empowered to take responsibility for maintaining
                            their water and
                            sanitation systems, thus ensuring long-term sustainability. PSUS also held mass
                            motivation sessions,
                            encouraging everyone to adopt hygienic practices and ensure clean water for all.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="impact_items">
                <h3 class="impact_heading">Impact</h3>
                <p class="impact_desc">Through these initiatives, PSUS has successfully improved the quality of life
                    for thousands of families by providing access to clean water and better sanitation. The
                    installation of arsenic-free tube wells, along with the distribution of sanitary latrines, has
                    significantly reduced the health risks posed by contaminated water and poor sanitation. The
                    awareness programs have led to better hygiene practices, and the community is now more informed
                    and active in safeguarding their health.</p>
            </div>

            <div class="results_overview_container">
                <table class="results_overview">
                    <thead class="results_overview_header">
                        <tr class="results_overview_row">
                            <th class="results_overview_heading">Activity</th>
                            <th class="results_overview_heading">Number of Units</th>
                            <th class="results_overview_heading">Supported By</th>
                            <th class="results_overview_heading">Beneficiary Families</th>
                        </tr>
                    </thead>
                    <tbody class="results_overview_body">
                        <tr class="results_overview_row">
                            <td class="results_overview_data"><strong class="text_bold">Tube Well
                                    Installation</strong></td>
                            <td class="results_overview_data">35</td>
                            <td class="results_overview_data">Muslim Aid & Own Fund</td>
                            <td class="results_overview_data">183</td>
                        </tr>
                        <tr class="results_overview_row">
                            <td class="results_overview_data"><strong class="text_bold">Tube Well Repairing</strong>
                            </td>
                            <td class="results_overview_data">22</td>
                            <td class="results_overview_data">Own Fund</td>
                            <td class="results_overview_data">97</td>
                        </tr>
                        <tr class="results_overview_row">
                            <td class="results_overview_data"><strong class="text_bold">Arsenic Screening for Tube
                                    Wells</strong></td>
                            <td class="results_overview_data">720</td>
                            <td class="results_overview_data">Own Fund</td>
                            <td class="results_overview_data">981</td>
                        </tr>
                        <tr class="results_overview_row">
                            <td class="results_overview_data"><strong class="text_bold">Safe Latrines Installed
                                    (PSUS)</strong></td>
                            <td class="results_overview_data">47</td>
                            <td class="results_overview_data">PSUS</td>
                            <td class="results_overview_data">47 (in 3 villages)</td>
                        </tr>
                        <tr class="results_overview_row">
                            <td class="results_overview_data"><strong class="text_bold">Safe Latrines Installed by
                                    Users</strong></td>
                            <td class="results_overview_data">17</td>
                            <td class="results_overview_data">Families Themselves</td>
                            <td class="results_overview_data">17 (in 8 villages)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="looking_future_goals_items">
                <div class="looking_future_goals_item">
                    <h3 class="looking_future_goals_heading">Looking Ahead: Future Goals
                    </h3>
                    <p class="looking_future_goals_desc">PSUS remains committed to continuing and expanding its
                        efforts to provide sustainable access to safe water and sanitation. In the coming years,
                        PSUS plans to increase the number of tube wells and latrines installed, repair more existing
                        facilities, and extend its arsenic testing program to more areas. By working with the
                        community and relevant partners, PSUS aims to reduce waterborne diseases, improve hygiene
                        practices, and ensure healthier living cond </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Safe Water & Sanitation Program End -->

@include('components.front-end.compnents.footer')

@endsection