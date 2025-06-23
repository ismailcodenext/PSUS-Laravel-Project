@extends('layout.master')
@section('title','EYWEI')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- About Hero Section Start -->
<section id="about_hero_section">
    <div class="container">
        <div class="about_hero">
            <div class="about_hero_content">
                <h1>EYWEI</h1>
                <div class="about_hero_btn">
                    <a href="./index.html">Home</a>
                    <a href="">EYWEI</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Hero Section End -->

<!-- Eywei Section Start -->
<section id="eywei_items">
    <div class="container">
        <div class="eywei_item_wrapper">
            <div class="welcome_to_psus">
                <h2 class="welcome_to_psus_title">Empowering Youth Women for Economic Independence </h2>
                <h3 class="welcome_to_psus_subtitle">Welcome to Pratidwani somaj Unnayan Sangstha(PSUS)</h3>
                <p class="welcome_to_psus_text">Since its establishment on July 1, 2005, PSUS has been dedicated to
                    empowering poor youth women in Pabna district, helping them achieve economic independence and
                    break the cycle of poverty. Through income generation programs, skill development, and
                    entrepreneurial guidance, PSUS has played a vital role in enabling youth women to carve their
                    path toward long-term economic freedom.
                </p>
            </div>

            <div class="eywei_main_container">
                <div class="eywei_tab_wrapper">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="eywei_tab_list">
                                <button class="tab_item active" onclick="openTab(event, 'mission')">Mission</button>
                                <button class="tab_item" onclick="openTab(event, 'empowerment')">Key Areas</button>
                                <button class="tab_item" onclick="openTab(event, 'fpeyw')">Future Pathways for
                                    Empowering Youth Women</button>
                                <button class="tab_item" onclick="openTab(event, 'training')">Training and Capacity
                                    Building</button>
                                <button class="tab_item" onclick="openTab(event, 'impact')">Our Impact</button>
                                <button class="tab_item" onclick="openTab(event, 'future')">Our Future</button>
                                <button class="tab_item" onclick="openTab(event, 'contact')">Contact</button>
                            </div>
                        </div>
                        <div class="col-lg-9 tab_box">
                            <div id="mission" class="tab_panel active">
                                <h2 class="tab_panel_heading">Our Mission</h2>
                                <p class="tab_panel_desc">PSUS aims to empower youth women by providing essential
                                    tools,
                                    resources, and training to build sustainable livelihoods. We focus on various
                                    key areas
                                    to uplift women, helping them achieve self-reliance and financial independence.
                                </p>
                            </div>

                            <div id="empowerment" class="tab_panel">
                                <h2 class="tab_panel_heading">Key Empowerment Areas</h2>
                                <ul>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Agriculture and Livestock Management:</h4>
                                            <p class="tab_panel_text">We assist youth women in setting up
                                                small-scale
                                                livestock farms, including cattle fattening, poultry farming, and
                                                fish
                                                farming. These initiatives not only boost their income but also
                                                ensure food
                                                security for their families.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Handicrafts and Artisan Industries:</h4>
                                            <p class="tab_panel_text">By nurturing traditional crafts like weaving,
                                                embroidery, and other hand-made products, PSUS helps youth women
                                                turn their
                                                skills into marketable products, preserving cultural heritage while
                                                achieving financial independence.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Small Enterprises and Micro-Entrepreneurship:
                                            </h4>
                                            <p class="tab_panel_text">We guide youth women to establish small
                                                businesses
                                                such as tailoring, grocery shops, and food processing. These
                                                low-capital
                                                ventures ensure steady income and contribute to women’s economic
                                                self-sufficiency.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Poultry and Fish Farming:</h4>
                                            <p class="tab_panel_text">PSUS provides support in poultry and fish
                                                farming, helping women become self-reliant in both food production
                                                and income generation, further strengthening their economic
                                                independence.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Vegetable and Crop Farming:</h4>
                                            <p class="tab_panel_text">We provide youth women with training and
                                                resources to engage in vegetable farming, enhancing their ability to
                                                produce income and contribute to food security within their
                                                communities.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Our Focus Areas: Rural, Flood-Prone, and
                                                Urban Regions:</h4>
                                            <p class="tab_panel_text">PSUS operates across all nine upazilas
                                                (sub-districts) of Pabna district, addressing the specific needs of
                                                each region.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Rural Areas:</h4>
                                            <p class="tab_panel_text">PSUS works on agricultural development and
                                                small-scale businesses to reduce dependency on external aid,
                                                enabling youth women to achieve food security and economic stability
                                                independently.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tab_panel_category">
                                    <h2 class="tab_panel_heading">Flood-Prone Areas</h2>
                                    <p class="tab_panel_desc">In these regions, PSUS trains youth women in disaster
                                        preparedness, financial literacy, and flood-resistant livelihoods such as
                                        fish farming and poultry rearing, empowering them to face and recover from
                                        challenges caused by floods.
                                    </p>
                                </div>
                                <div class="tab_panel_category">
                                    <h2 class="tab_panel_heading">Urban Areas</h2>
                                    <p class="tab_panel_desc">PSUS helps youth women start micro-businesses in urban
                                        settings, such as retail, sewing, and service-based enterprises, enabling
                                        them to integrate into the urban economy and gain financial independence.
                                    </p>
                                </div>
                            </div>

                            <div id="fpeyw" class="tab_panel">
                                <h2 class="tab_panel_heading">Future Pathways for Empowering Youth Women</h2>
                                <p class="tab_panel_desc">In these regions, PSUS trains youth women in disaster
                                    preparedness, financial literacy, and flood-resistant livelihoods such as
                                    fish farming and poultry rearing, empowering them to face and recover from
                                    challenges caused by floods.
                                </p>
                                <ul>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Handicrafts and Artisan Industries:</h4>
                                            <p class="tab_panel_text">By nurturing traditional crafts like weaving,
                                                embroidery, and other hand-made products, PSUS helps youth women
                                                turn their
                                                skills into marketable products, preserving cultural heritage while
                                                achieving financial independence.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Skills and Leadership Development:</h4>
                                            <p class="tab_panel_text">PSUS will implement training programs aimed at
                                                empowering youth women as local leaders and entrepreneurs, enabling
                                                them to become influential figures in their communities.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Technological Integration:</h4>
                                            <p class="tab_panel_text">We aim to introduce modern agricultural
                                                techniques, online platforms for handicraft sales, and mobile
                                                banking systems, providing youth women with opportunities to expand
                                                their businesses and reach new markets.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div id="training" class="tab_panel">
                                <h2 class="tab_panel_heading">Training and Capacity Building</h2>
                                <p class="tab_panel_desc">PSUS offers comprehensive training programs to youth women
                                    to ensure long-term success:
                                </p>
                                <ul>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Entrepreneurial Skills:</h4>
                                            <p class="tab_panel_text">We provide training in business management,
                                                market research, and financial planning, equipping youth women with
                                                the skills they need to succeed as entrepreneurs.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Financial Literacy:</h4>
                                            <p class="tab_panel_text">We teach essential money management, savings
                                                strategies, and investment practices, empowering youth women to take
                                                control of their finances and secure a stable future.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Agricultural and Livestock Skills:</h4>
                                            <p class="tab_panel_text">We offer training in sustainable farming and
                                                livestock management techniques to help increase productivity and
                                                ensure long-term sustainability in agriculture./p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div id="impact" class="tab_panel">
                                <h2 class="tab_panel_heading">Our Impact: Creating Social and Economic Change</h2>
                                <p class="tab_panel_desc">PSUS’s efforts have significantly impacted the lives of
                                    youth women in Pabna district:
                                </p>
                                <ul>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Economic Security:</h4>
                                            <p class="tab_panel_text">Youth women have diversified their sources of
                                                income, increasing their financial independence and stability.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Social Empowerment:</h4>
                                            <p class="tab_panel_text">Youth women now have the power to make
                                                decisions within their families and communities, gaining respect and
                                                recognition.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Improved Quality of Life:</h4>
                                            <p class="tab_panel_text">Enhanced income and access to education have
                                                led to better health, education, and living standards for youth
                                                women and their families./p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div id="future" class="tab_panel">
                                <h2 class="tab_panel_heading">Our Future Goals</h2>
                                <p class="tab_panel_desc">PSUS is determined to support even more youth women in the
                                    future. Our expansion plans include:
                                </p>
                                <ul>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Expanding Reach:</h4>
                                            <p class="tab_panel_text">Extending our programs to underserved, remote
                                                villages where youth women require urgent support.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Building Leadership:</h4>
                                            <p class="tab_panel_text">Creating networks of female entrepreneurs and
                                                local leaders who can advocate for their rights and the development
                                                of their communities.</p>
                                        </div>
                                    </li>
                                    <li class="tab_panel_list">
                                        <i class="fa fa-check-circle"></i>
                                        <div class="tab_panel_content">
                                            <h4 class="tab_panel_head">Community-Based Support:</h4>
                                            <p class="tab_panel_text">Strengthening collaborations with local
                                                governments, NGOs, and financial institutions to increase access to
                                                financial services and capital for youth women./p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div id="contact" class="tab_panel">
                                <h2 class="tab_panel_heading">Join Us in Empowering Youth Women</h2>
                                <p class="tab_panel_desc">PSUS is committed to a future where all youth women in
                                    Pabna district are fully integrated into economic activities, living empowered,
                                    independent, and prosperous lives. Through our collective efforts, we can
                                    transform the lives of youth women, enabling them to shape their futures and
                                    make meaningful contributions to their communities
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Eywei Section End -->


@include('components.front-end.compnents.footer')

@endsection