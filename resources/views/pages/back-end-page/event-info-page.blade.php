@extends('layout.dashboard-sidenav')
@section('title','Event Info Page')
@section('content')
@include('components.back-end.event-info.event-info-list');
@include('components.back-end.event-info.event-info-create');
@include('components.back-end.event-info.event-info-update');
@include('components.back-end.event-info.event-info-delete');
@endsection