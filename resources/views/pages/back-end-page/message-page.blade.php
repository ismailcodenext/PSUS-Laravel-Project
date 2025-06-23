@extends('layout.dashboard-sidenav')
@section('title','Message Page')
@section('content')
@include('components.back-end.message.message-list');
@include('components.back-end.message.message-create');
@include('components.back-end.message.message-update');
@include('components.back-end.message.message-delete');
@endsection