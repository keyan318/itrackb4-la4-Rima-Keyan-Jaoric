@extends('layours.app')

@section('title', $item['title'])

@section('content')

<div class=card"">
    <div class="card-body">
        <h2>{{$item['title']}}</h2>

        <p><strong>Genre:</strong>{{$item['genre']}}</p>
        <p><strong>Year:</strong>{{$item['year']}}</p>
        <p><strong>Director:</strong>{{$item['director']}}</p>
        <p><strong>Rating:</strong>{{$item['rating']}}</p>
        <p><strong>Duration</strong>{{$item['duration']}}</p>
    </div>
    <a  class="btn btn-primary"  href="{{route('movies.index')}}"></a>
</div>