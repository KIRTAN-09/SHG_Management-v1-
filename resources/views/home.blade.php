@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div>
                {{ __('Welcome to dashboard!') }}
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-3">
        <div class="card text-dark bg-info text-center p-3" style="background-color: lightblue !important; height: 150px;">
            <h3 class="text-dark">{{ $totalGroups }}</h3>
            <p class="text-dark">Total Groups</p>
            <a href="{{ route('groups.index') }}" class="text-dark">More info </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-dark bg-success text-center p-3" style="background-color: lightblue !important; height: 150px;">
            <h3 class="text-dark">{{ $totalMembers }}</h3>
            <p class="text-dark">Total Members</p>
            <a href="{{ route('members.index') }}" class="text-dark">More info </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-dark bg-danger text-center p-3" style="background-color: lightblue !important; height: 150px;">
            <h3 class="text-dark">65</h3>
            <p class="text-dark">Total Active Members</p>
            <a href="#" class="text-dark">More info </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-dark bg-danger text-center p-3" style="background-color: lightblue !important; height: 150px;">
            <h3 class="text-dark">65</h3>
            <p class="text-dark">Total Monthly Savings</p>
            <a href="#" class="text-dark">More info </a>
        </div>
    </div>
</div>
@endsection
