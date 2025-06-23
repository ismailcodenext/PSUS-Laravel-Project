@extends('layout.dashboard-sidenav')
@section('title','Volunteer Registration Page')
@section('content')
@include('components.back-end.volunteer-registration.volunteer-registration-list');
@include('components.back-end.volunteer-registration.volunteer-registration-update');
@endsection