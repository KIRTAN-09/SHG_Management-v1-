@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Group Details</h1>
    <div class="card">
        <div class="card-header">
            Group ID: {{ $group->group_id }}
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $group->name }}</p>
            <p><strong>Village Name:</strong> {{ $group->village_name }}</p>
            <p><strong>President Name:</strong> {{ $group->president_name }}</p>
            <p><strong>Secretary Name:</strong> {{ $group->secretary_name }}</p>
            <p><strong>No. of Members:</strong> {{ $group->no_of_members }}</p>
        </div>
    </div>
    <a href="{{ route('groups.index') }}" class="btn btn-secondary mt-3">Back to Groups</a>
</div>
@endsection
