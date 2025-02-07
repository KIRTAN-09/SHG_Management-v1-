@extends('adminlte::page')

@section('title', 'Add Training')

@section('content_header')
    <h1>Add Training</h1>
@stop

@section('content')
    <form action="{{ route('training.store') }}" method="POST">
        @csrf
        <!-- Add your form fields here -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
