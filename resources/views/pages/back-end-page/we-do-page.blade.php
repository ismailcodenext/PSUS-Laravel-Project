@extends('layout.dashboard-sidenav')
@section('title','We Do Page')
@section('content')
@include('components.back-end.we-do.we-do-list')
@include('components.back-end.we-do.we-do-create')
@include('components.back-end.we-do.we-do-update');
@include('components.back-end.we-do.we-do-delete');
@endsection