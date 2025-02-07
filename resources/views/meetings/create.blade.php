@extends('layouts.app')

@section('content')
    <h1>Schedule a New Meeting</h1>
    <form action="{{ route('meetings.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>
        <button type="submit">Add Meeting</button>
    </form>
@endsection
