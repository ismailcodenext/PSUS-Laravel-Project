@extends('layout.master')
@section('title','Safe Water & Sanitation Program')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- About Hero Section Start -->
<section id="about_hero_section">
    <div class="container">
        <div class="about_hero">
            <div class="about_hero_content">
                <h1>{{ $WhatWeDoPageData->short_title }}</h1>
                <div class="about_hero_btn">
                    <a href="./index.html">Home</a>
                    <a href="">{{ $WhatWeDoPageData->short_title }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Hero Section End -->

<div class="container mt-5 mb-5">
    {!! $WhatWeDoPageData->content !!}

</div>


@include('components.front-end.compnents.footer')

@endsection