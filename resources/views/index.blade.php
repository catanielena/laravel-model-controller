@extends('layout.main')

@section('title', 'MovieDB')

@section('pageContent')
    <h1>MOVIE DB</h1>
    <ul class="film__list">
        @foreach ($movies as $movie)
        <li class="list__card">
            <a href="{{route('movieCard', ['id' => $movie->id])}}" class="btn">
                <h3>{{$movie->title}}</h3>
                <ul class="card__list">
                    <li class="list__item"><i>{{$movie->original_title}}</i></li>
                    <li class="list__item">&#127987; {{$movie->nationality}}</li>
                    <li class="list__item">&#9728; {{$movie->date}}</li>
                    <li class="list__item vote">
                        @for ($i = 0; $i < $movie->vote / 2; $i++)
                            &#9734;
                        @endfor
                        <span class="vote-number">{{$movie->vote}}</span>
                    </li>
                </ul>
            </a>
        </li>
        @endforeach
    </ul>
@endsection