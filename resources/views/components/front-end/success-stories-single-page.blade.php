@extends('layout.master')
@section('title','Success Stories Single Page')
@section('content')
@include('components.front-end.compnents.navbar')


  <!-- About Hero Section Start -->
    <section id="about_hero_section">
        <div class="container">
            <div class="about_hero">
                <div class="about_hero_content">
                    <h1>Success Stories Single Page</h1>
                    <div class="about_hero_btn">
                        <a href="{{url('/')}}">Home</a>
                        <a href="">Success Stories Single Page</a>
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
                <img src="{{ asset($SuccessStoriesData->banner_image) }}" alt="Banner Image">
                <h2 class="news_events_feature_heading">{{ $SuccessStoriesData->event_heading }}</h2>
                <p class="news_events_feature_description">
                    {!! nl2br(e($SuccessStoriesData->event_description)) !!}
                </p>

                @if($SuccessStoriesData->img_url && is_array(json_decode($SuccessStoriesData->img_url, true)))
                    <div class="relavent_images">
                        <div class="relavent_image">
                            <div class="row">
                                @foreach(json_decode($SuccessStoriesData->img_url, true) as $img)
                                    <div class="col-md-6 mb-3">
                                        <img src="{{ asset($img) }}" alt="Related Image" class="img-fluid">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Right Section -->
            <div class="news_events_sidebar">
                <h2 class="news_events_sidebar_title">Latest News & Events</h2>

                @foreach($recentPosts as $post)
                    <a href="{{ url('/single-news-events/' . $post->id) }}" class="news_events_link">
                        <div class="news_events_item">
                            <img class="news_events_thumb" src="{{ asset($post->banner_image) }}" alt="News Thumb">
                            <div class="news_events_text">{{ $post->event_heading }}</div>
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