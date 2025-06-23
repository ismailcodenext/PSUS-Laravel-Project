@extends('layout.master')
@section('title','Humanitarian Assistance')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- About Hero Section Start -->
<section id="about_hero_section">
    <div class="container">
        <div class="about_hero">
            <div class="about_hero_content">
                <h1>Humanitarian Assistance</h1>
                <div class="about_hero_btn">
                    <a href="./index.html">Home</a>
                    <a href="">Humanitarian Assistance</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Hero Section End -->

<!-- Humanitarian Assistance Start -->
<section id="humanitarian_assistance">
    <div class="container">
        <div class="humanitarian_assistance_items">
            <h2 class="humanitarian_assistance_title">Humanitarian Assistance</h2>
            <h3 class="humanitarian_assistance_subtitle">Project Description</h3>
            <p class="humanitarian_assistance_text">Our country is prone to a wide range of natural disasters, such
                as tornadoes, floods, cold waves, cyclones, and droughts. Among these, floods pose the most
                recurring threat. Pabna, the operational district of PSUS, is particularly vulnerable to floods,
                tornadoes, cold waves, and droughts. Flooding is a frequent occurrence in this region, which often
                causes severe damage to livelihoods, homes, and essential infrastructure. During and immediately
                after such disasters, the most vulnerable groups, especially the poor, face enormous hardships,
                losing their limited resources and employment opportunities.
                In these dire circumstances, the affected communities are left with few alternatives to rebuild
                their lives. To mitigate the immediate impacts of these natural disasters, PSUS has always taken
                proactive steps to provide emergency relief. In times of such crises, PSUS reaches out to
                disaster-stricken families by providing them with emergency food packages and medicines to meet
                their basic needs.
                During the reporting period, PSUS distributed the following relief materials to families affected by
                flooding in various areas:
            </p>

            <h3 class="humanitarian_assistance_subtitle">Distribution of Emergency Food Packages and Medicines</h3>
            <p class="humanitarian_assistance_subdesc">The following items were distributed to help flood-affected
                families:</p>
            <div class="humanitarian_assistance_item">
                <p class="humanitarian_assistance_text"><span class="humanitarian_assistance_highlight">Warm
                        Clothes:</span>
                    PSUS distributed warm clothing to 453 families in Pabna Sadar, across 11 villages. This was a
                    crucial step to protect vulnerable individuals, especially during cold weather conditions that
                    often accompany flooding.</p>
            </div>
            <div class="humanitarian_assistance_item">
                <p class="humanitarian_assistance_text"><span class="humanitarian_assistance_highlight">Rice,
                        Potatoes, Salt, and ORS (Oral Rehydration Solution): </span> To combat the food insecurity
                    caused by the flood, PSUS provided 141
                    families in Pabna Sadar with essential food items such as rice, potatoes, salt, and ORS. These
                    packages helped to ensure that families had access to the basic staples needed for survival and
                    protection against dehydration, a common concern during floods.</p>
            </div>
            <div class="humanitarian_assistance_item">
                <p class="humanitarian_assistance_text"><span class="humanitarian_assistance_highlight">Rice,
                        Potatoes, Salt, and ORS (Oral Rehydration Solution): </span> An additional 123 families in
                    Sundargram, Pabna, also received the same food packages (rice, potatoes, salt, and ORS). This
                    distribution took place across 4 villages, where the affected communities were supported in
                    regaining their nutritional and health stability in the aftermath of the disaster.</p>
            </div>
            <p class="humanitarian_assistance_last_text">
                These interventions were critical in alleviating the suffering of disaster-affected families. By
                providing immediate relief in the form of food and medical supplies, PSUS aimed to help families
                weather the immediate challenges of the floods, allowing them to begin their recovery process.
                PSUS remains committed to continuing its relief efforts and assisting communities in times of
                crisis, ensuring that the most vulnerable populations receive the support they need to rebuild their
                lives.
                it ions for all.

            </p>
        </div>
    </div>
</section>
<!-- Humanitarian Assistance End -->


@include('components.front-end.compnents.footer')

@endsection