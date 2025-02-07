@extends('layouts.app')

@section('content')
    <h1>Meetings</h1>
    <a href="{{ route('meetings.create') }}">Schedule a New Meeting</a>
    <ul>
        @foreach($meetings as $meeting)
            <li>
                {{ $meeting->title }} - {{ $meeting->date }} at {{ $meeting->time }}
                <a href="{{ route('meetings.edit', $meeting) }}">Edit</a>
                <form action="{{ route('meetings.destroy', $meeting) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
