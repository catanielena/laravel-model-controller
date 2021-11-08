@extends('layout.main')

@section('title', $movie->original_title)

@section('pageContent')
    <ul class="film__list movieCard">
        <li class="list__card">
            <a href="#" class="btn">
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
    </ul>
@endsection