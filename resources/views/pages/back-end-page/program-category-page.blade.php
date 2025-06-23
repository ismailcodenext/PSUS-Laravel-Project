@extends('layout.dashboard-sidenav')
@section('title','Program Category Page')
@section('content')
@include('components.back-end.program-category.program-category-list')
@include('components.back-end.program-category.program-category-create')
@include('components.back-end.program-category.program-category-update');
@include('components.back-end.program-category.program-category-delete');
@endsection