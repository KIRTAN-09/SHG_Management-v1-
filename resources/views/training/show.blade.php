@extends('adminlte::page')

@section('title', 'Training Details')

@section('content_header')
    <h1>Training Details</h1>
@stop

@section('content')
    <p>Details of training with ID: {{ $id }}</p>
    <!-- Add your training details content here -->
@stop
