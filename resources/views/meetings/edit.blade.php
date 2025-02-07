@extends('layouts.app')

@section('content')
    <h1>Edit Meeting</h1>
    <form action="{{ route('meetings.update', $meeting) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $meeting->title }}" required>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="{{ $meeting->date }}" required>
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" value="{{ $meeting->time }}" required>
        <button type="submit">Update Meeting</button>
    </form>
@endsection
