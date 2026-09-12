@extends('layouts.app')

@section('title', 'Filtered Movies')

@section('content')

    <h2 class="mb-2">Movies</h2>

    <p class="text-muted">
        @if($value)
            Showing genre: <strong>{{ $value }}</strong>
        @else
            Showing all movies
        @endif
    </p>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Year</th>
            </tr>
        </thead>

        <tbody>
            @forelse($items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <a href="{{ route('movies.show', $item['id']) }}">
                            {{ $item['title'] }}
                        </a>
                    </td>
                    <td>{{ $item['genre'] }}</td>
                    <td>
                        {{ $item['year'] }}
                        @if ($item['year'] >= 2020)
                            <span class="badge bg-success">New</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No movies matched your filter: {{ $value }}</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection