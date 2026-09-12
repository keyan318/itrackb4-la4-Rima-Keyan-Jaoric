@extends('layouts.app')

@section('title', $item['title'])

@section('content')

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $item['title'] }}</h2>

            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Genre:</strong> {{ $item['genre'] }}</li>
                <li class="list-group-item"><strong>Year:</strong> {{ $item['year'] }}</li>
                <li class="list-group-item"><strong>Director:</strong> {{ $item['director'] }}</li>
                <li class="list-group-item"><strong>Rating:</strong> {{ $item['rating'] }}</li>
                <li class="list-group-item"><strong>Duration:</strong> {{ $item['duration'] }}</li>
            </ul>

            <a href="{{ route('movies.index') }}" class="btn btn-primary mt-3">
                ← Back to List
            </a>
        </div>
    </div>

@endsection