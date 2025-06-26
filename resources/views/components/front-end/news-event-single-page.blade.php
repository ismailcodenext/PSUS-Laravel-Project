@extends('layout.master')
@section('title','Get Involved Page')
@section('content')
@include('components.front-end.compnents.navbar')



  <!-- About Hero Section Start -->
    <section id="about_hero_section">
        <div class="container">
            <div class="about_hero">
                <div class="about_hero_content">
                    <h1>News & Events Single Page</h1>
                    <div class="about_hero_btn">
                        <a href="{{url('/')}}">Home</a>
                        <a href="">News & Events Single Page</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Hero Section End -->
<!-- News Events Single Page Start -->
<section id="news_events_single_page">
    <div class="container">
        <div class="news_events_wrapper">
            <!-- Left Section -->
            <div class="news_events_feature_image">
                <img src="{{ asset($NewsEventData->img_url) }}" alt="Banner Image">
                <h2 class="news_events_feature_heading">{{ $NewsEventData->title }}</h2>
                <p class="news_events_feature_description">
                    {!! nl2br(e($NewsEventData->discription)) !!}
                </p>

             
            </div>

            <!-- Right Section -->
            <div class="news_events_sidebar">
                <h2 class="news_events_sidebar_title">Latest News & Events</h2>

                @foreach($recentPosts as $post)
                    <a href="{{ url('/single-news-events/' . $post->id) }}" class="news_events_link">
                        <div class="news_events_item">
                            <img class="news_events_thumb" src="{{ asset($post->img_url) }}" alt="News Thumb">
                            <div class="news_events_text">{{ $post->title }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- News Events Single Page End -->


@include('components.front-end.compnents.footer')
@endsection