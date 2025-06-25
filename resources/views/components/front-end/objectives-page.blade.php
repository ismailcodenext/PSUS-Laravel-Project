@extends('layout.master')
@section('title','Objectives Page')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- About Hero Section Start -->
<section id="about_hero_section">
    <div class="container">
        <div class="about_hero">
            <div class="about_hero_content">
                <h1>Objectives</h1>
                <div class="about_hero_btn">
                    <a href="./index.html">Home</a>
                    <a href="">Objectives</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Hero Section End -->

<!-- Objecttives Section Start -->
<section id="objectives_section">
    <div class="container">
        <div class="objectives_wrapper">
            <div class="objectives_heading">
                <h2>Objectives of Protidwhani Somaj Unnayan Sangstha (PSUS):</h2>
            </div>
            <ol class="objectives_list">
                <li class="objectives_list_item">
                    <span>Promoting Youth Employment and Income Generation:</span>
                    <p class="objectives_list_document">
                        Facilitate socio-economic upliftment of the underprivileged by offering technical and
                        vocational skill development training to empower youth with employment and income-generation
                        opportunities.
                    </p>
                </li>
                <li class="objectives_list_item">
                    <span>Fostering Unity to Combat Poverty:</span>
                    <p class="objectives_list_document">
                        Build solidarity among impoverished communities through group-based activities, enabling
                        collective action to address the root causes of poverty and inequality.
                    </p>
                </li>
                <li class="objectives_list_item">
                    <span>Safeguarding the Environment:</span>
                    <p class="objectives_list_document">
                        Promote the conservation of natural resources, protect the environment from degradation, and
                        advocate for sustainable practices to prevent pollution and destruction.
                    </p>
                </li>
                <li class="objectives_list_item">
                    <span>Empowering Women and Advancing Their Rights:</span>
                    <p class="objectives_list_document">
                        Champion women’s empowerment by ensuring their participation in all spheres of life while
                        protecting and promoting their rights to achieve gender equality.
                    </p>
                </li>
                <li class="objectives_list_item">
                    <span>Advancing Peace and Harmony:</span>
                    <p class="objectives_list_document">
                        Foster understanding, cooperation, and mutual respect among diverse faiths and communities
                        to build a peaceful and harmonious society.
                    </p>
                </li>
                <li class="objectives_list_item">
                    <span>Enhancing Health and Family Well-being:</span>
                    <p class="objectives_list_document">
                        Deliver health and family planning services, improve maternal and child care facilities, and
                        develop community health and nutrition programs to ensure a healthier society.
                    </p>
                </li>
                <li class="objectives_list_item">
                    <span>Improving Water and Sanitation:</span>
                    <p class="objectives_list_document">
                        Promote sustainable water and sanitation systems in both rural and urban areas, ensuring
                        access to clean and safe water for all.
                    </p>
                </li>
                <li class="objectives_list_item">
                    <span>Providing Relief and Rehabilitation:</span>
                    <p class="objectives_list_document">
                        Organize and implement relief and rehabilitation efforts to support affected communities
                        during natural disasters and calamities.
                    </p>
                </li>
            </ol>
        </div>
    </div>
</section>
<!-- Objecttives Section End -->

@include('components.front-end.compnents.footer')

@endsection