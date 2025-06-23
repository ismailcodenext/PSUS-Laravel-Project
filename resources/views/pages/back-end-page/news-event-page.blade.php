@extends('layout.dashboard-sidenav')
@section('title','News Event Page')
@section('content')
@include('components.back-end.news-event.news-event-list');
@include('components.back-end.news-event.news-event-create');
@include('components.back-end.news-event.news-event-update');
@include('components.back-end.news-event.news-event-delete');
@endsection