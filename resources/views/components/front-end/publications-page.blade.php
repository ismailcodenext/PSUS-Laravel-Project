@extends('layout.master')
@section('title','Publications Page')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- About Hero Section Start -->
<section id="about_hero_section">
    <div class="container">
        <div class="about_hero">
            <div class="about_hero_content">
                <h1>Publications</h1>
                <div class="about_hero_btn">
                    <a href="./index.html">Home</a>
                    <a href="">Publications</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Hero Section End -->


@include('components.front-end.compnents.footer')

@endsection