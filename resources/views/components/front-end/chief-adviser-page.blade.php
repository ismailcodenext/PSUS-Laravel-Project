@extends('layout.master')
@section('title','Chief Adviser Page')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- Message From Chairman Hero Section Start -->
<section id="message_chairman_hero_section">
    <div class="container">
        <div class="message_chairman_hero">
            <div class="message_chairman_hero_content">
                <h1>Message Form Chief Adviser</h1>
            </div>
        </div>
    </div>
</section>
<!-- Message From Chairman Hero Section End -->

<!-- Message From Chairman Section Start -->
<section id="message_from_chairman">
    <div class="container">
        <div class="message_from_chairman_items">
            <div class="row message_from_chairman_img_contant">
                <div class="col-lg-4">
                    <div class="chairman_all_info">
                        <div class="message_from_chairman_img">
                            <img src="{{asset('front-end/assets/img/message-form-chirmen/chief-adviser-img.png')}}" alt="">
                        </div>
                        <div class="message_from_chairman_img_description">
                            <p class="title_name"><span>Name :</span> Mohammad Jamil Khan</p>
                            <p class="title_name"><span>Designation :</span> Chief Advisor</p>
                            <p class="title_name"><span>Protidwhani Somaj Unnayan Sangstha (PSUS)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="message_from_chairman_contant">
                        <h2 class="message_from_chairman_title">Greetings !</h2>
                        <p class="message_from_chairman_description">My sincere gratitude to the Al-mighty Allah for
                            His endless blessings for providing us with an opportunity to serve the humanity in
                            Bangladesh through Protidwhani Somaj Unnayan Sangstha (PSUS). We tried our best to
                            deploy our efforts and endeavors to attain the Sustainable Development Goals (SDG) in
                            Bangladesh with a view to make a society without poverty. PSUS is genuinely humanitarian
                            and philanthropic organization and tries to actively participate in the national
                            development programs within its capacity.




                            We have been working with partners, increased number of human resources, flow of fund,
                            increased number of projects, professionalism and reputation around the global and
                            national levels.



                            Another significant project of 2022 that PSUS introduced is poverty alleviation program
                            for two years which allows the recipients a continuity to develop sustainable
                            livelihoods by delivering technical training, business skill training, life skill
                            training and orientation with further motivation. Following the national development
                            goals, PSUS addresses to health, poverty alleviation, women empowerment, child and
                            orphan care, water and sanitation, education and disaster management issues on regular
                            basis. We launched ‘Zakat’ campaign through which a significant contribution is made to
                            promote well-being in the society.



                            Moreover, being the chief advisor of PSUS, I strongly believe that local support and
                            cooperation should be extended by the well-off members of the society and social leaders
                            to make poverty alleviation process successful. Good governance and local support is
                            always necessary for successful implementation of all programs and projects. PSUS
                            intends to expand health service and technical education in a larger scale as well as
                            the microfinance project for the destitute with an integrated approach.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="message_from_chairman_bio">
            <p>We are thankful to the Department of Social Welfare, Government of Bangladesh, and our valued
                development and funding partners for their continuous support in the year 2022. I also appreciate
                the hard work of our team, sponsors, volunteers and well-wishers who remain by PSUS and help us to
                make the difference in life.</p>
        </div>
    </div>
</section>
<!-- Message From Chairman Section End -->

@include('components.front-end.compnents.footer')

@endsection