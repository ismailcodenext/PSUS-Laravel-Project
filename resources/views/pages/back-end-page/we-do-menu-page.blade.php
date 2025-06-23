@extends('layout.dashboard-sidenav')
@section('title','We Do Menu Page')
@section('content')
@include('components.back-end.we-do-menu.we-do-menu-list')
@include('components.back-end.we-do-menu.we-do-menu-create')
@include('components.back-end.we-do-menu.we-do-menu-update');
@include('components.back-end.we-do-menu.we-do-menu-delete');
@endsection