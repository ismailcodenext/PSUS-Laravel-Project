@extends('layout.dashboard-sidenav')
@section('title','Home About Page')
@section('content')
@include('components.back-end.home-about.home-about-list');
@include('components.back-end.home-about.home-about-create');
@include('components.back-end.home-about.home-about-update');
@include('components.back-end.home-about.home-about-delete');
@endsection