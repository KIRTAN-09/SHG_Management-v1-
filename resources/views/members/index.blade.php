@extends('layouts.app')

@section('content')

    <h2>Member List</h2>
    <a href="{{ route('members.create') }}" class="btn btn-primary">Add Member</a>
    <table class="table">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Number</th>
                <th>Village</th>
                <th>Group</th>
                <th>Caste</th>
                <th>Share Price</th>
                <th>Member Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td><img src="{{ asset('storage/' . $member->photo) }}" class="profile-img"></td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->number }}</td>
                    <td>{{ $member->village }}</td>
                    <td>{{ $member->group }}</td>
                    <td>{{ $member->caste }}</td>
                    <td>{{ $member->share_price }}</td>
                    <td>{{ $member->member_type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $members->links('pagination::bootstrap-4') }}
    </div>


<style>
    .profile-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
    }
</style>
@endsection
