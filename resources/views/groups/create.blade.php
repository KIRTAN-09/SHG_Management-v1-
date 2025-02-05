@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Group</h1>
    <form action="{{ route('groups.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Group Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="village_name">Village Name</label>
            <input type="text" name="village_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="president_name">Group President Name</label>
            <input type="text" name="president_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="secretary_name">Group Secretary Name</label>
            <input type="text" name="secretary_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="no_of_members">No. of Members</label>
            <input type="number" name="no_of_members" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Group</button>
    </form>
</div>
@endsection
