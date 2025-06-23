@extends('layout.dashboard-sidenav')
@section('title','Hero Slider Page')
@section('content')
@include('components.back-end.hero-slider.hero-slider-list');
@include('components.back-end.hero-slider.hero-slider-create');
@include('components.back-end.hero-slider.hero-slider-update');
@include('components.back-end.hero-slider.hero-slider-delete');
@endsection