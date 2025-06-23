@extends('layout.dashboard-sidenav')
@section('title','Success Stories Page')
@section('content')
@include('components.back-end.success-stories.success-stories-list');
@include('components.back-end.success-stories.success-stories-create');
@include('components.back-end.success-stories.success-stories-update');
@include('components.back-end.success-stories.success-stories-delete');
@endsection