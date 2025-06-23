@extends('layout.dashboard-sidenav')
@section('title','Company Info Page')
@section('content')
@include('components.back-end.company-info.company-info-list');
@include('components.back-end.company-info.company-info-create');
@include('components.back-end.company-info.company-info-update');
@include('components.back-end.company-info.company-info-delete');
@endsection