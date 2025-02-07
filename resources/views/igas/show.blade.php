@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $iga->name }}</h1>
    <p>{{ $iga->description }}</p>
    <a href="{{ route('igas.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
