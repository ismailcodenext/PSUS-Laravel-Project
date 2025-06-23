@extends('layout.dashboard-sidenav')
@section('title','Menu Page')
@section('content')
@include('components.back-end.navbar-menu.menu-list');
@include('components.back-end.navbar-menu.menu-create');
@include('components.back-end.navbar-menu.menu-update');
@include('components.back-end.navbar-menu.menu-delete');
@endsection