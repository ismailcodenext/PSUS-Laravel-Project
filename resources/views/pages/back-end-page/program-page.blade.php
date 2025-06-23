@extends('layout.dashboard-sidenav')
@section('title','Program Page')
@section('content')
@include('components.back-end.program.program-list')
@include('components.back-end.program.program-create')
@include('components.back-end.program.program-update');
@include('components.back-end.program.program-delete');
@endsection