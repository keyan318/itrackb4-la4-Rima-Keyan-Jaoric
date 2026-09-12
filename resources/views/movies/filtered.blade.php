@extends('layouts.app')

@section('title', 'Filtered Movies')

@section('content')

<h2>Movies</h2>

<div class="filter-info">

    @if($value)
     Showing genre: <strong>{{$value}}</strong>
    @else
      Showing all movies
    @endif
</div>

<table>
    <thead>
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
            <td>{{ $loop->iteration}}</td>
            <td>
                <a href="{{route('movies.show', $item[$id])}}">
                  {{$item['title']}}
                </a>
                  
            </td>
            <td>{{$item['genre']}}</td>
            <td>

                {{$item['year']}}
                @if ($item['year'] >=2020)
                  <span class="badge bg-success">New</span>
                  @endif
                
            </td>
        </tr>
        @empty    
        <tr>
            <td colspan="4">No movies matched your filter: {{$value}}</td>
        </tr>
        @endforelse
    </tbody>
</table>
 @endsection