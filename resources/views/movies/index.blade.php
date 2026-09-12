@extends('layouts.app')

@section('title', 'Movie List')

@section('content')

<h2>Movie List</h2>

<table class="table-table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Director</th>
            <th>Rating</th>
            <th>Duration</th>
        </tr>
    </thead>

    <tbody>
        @forelse($items as $movie)
        <tr>
            <td>{{$loop iteration}}</td>
            <td><strong>{{$movie['title']}}</strong></td>
            <td>{{$movie['genre']}}</td>
            <td>{{$movie['year']}}</td>
            <td>{{$movie['director']}}</td>
            <td class="rating">
                {{$movie['rating']}}
                @if ($movie['rating'] >=9)
                     <span class="badge bg-success">Top rated</span>
                @endif    
            </td>
            <td>{{$movie['duration']}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="7">No mmovies found yet. Add some to see them here.</td>
        </tr>
        @endforlese
    </tbody>
</table>

@endsection
