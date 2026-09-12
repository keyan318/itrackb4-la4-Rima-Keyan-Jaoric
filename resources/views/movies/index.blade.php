@extends('layouts.app')

@section('title', 'Movie List')

@section('content')

    <h2 class="mb-3">Movie List</h2>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
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
            @forelse ($items as $movie)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><strong>{{ $movie['title'] }}</strong></td>
                    <td>{{ $movie['genre'] }}</td>
                    <td>{{ $movie['year'] }}</td>
                    <td>{{ $movie['director'] }}</td>
                    <td>
                        {{ $movie['rating'] }}
                        @if ($movie['rating'] >= 8.5)
                            <span class="badge bg-success">Top Rated</span>
                        @endif
                    </td>
                    <td>{{ $movie['duration'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No movies found yet — add some to see them here.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection