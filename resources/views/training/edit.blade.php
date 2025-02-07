@extends('adminlte::page')

@section('title', 'Edit Training')

@section('content_header')
    <h1>Edit Training</h1>
@stop

@section('content')
    <form action="{{ route('training.update', $id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Add your form fields here -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@stop
