@extends('layout.dashboard-sidenav')
@section('title','Mission Vision Page')
@section('content')
@include('components.back-end.mission-vision.mission-vision-list');
@include('components.back-end.mission-vision.mission-vision-create');
@include('components.back-end.mission-vision.mission-vision-update');
@include('components.back-end.mission-vision.mission-vision-delete');
@endsection