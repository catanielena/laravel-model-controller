@extends('layout.main')

@section('title', 'MovieDB')

@section('pageContent')
    <ul class="film__list">
        @foreach ($movies as $movie)
        <li class="list__card">
            <h3>{{$movie->title}}</h3>
            <ul>
                <li class="card__item"><i>{{$movie->original_title}}</i></li>
                <li class="card__item">{{$movie->nationality}}</li>
                <li class="card__item">{{$movie->date}}</li>
                <li class="card__item">{{$movie->vote}}</li>
            </ul>
        </li>
        @endforeach
    </ul>
@endsection