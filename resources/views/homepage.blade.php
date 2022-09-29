@extends('structure.layout')

@section('title', 'HomePage')

@section('content')
    <div class="t_center">Ecco alcuni film da vedere:</div>
    <div class="container d_flex">
        @foreach ($movies as $movie)
            <div class="movie_card">
                <div class="movie_title">{{$movie['title']}}</div>
                <div class="movie_description">
                    <div class="movie_originaltitle">{{$movie['original_title']}}</div>
                    <div class="movie_nationality">{{$movie['nationality']}}</div>
                    <div class="movie_date">{{date("d-m-Y", strtotime($movie['date']))}}</div>
                    <div class="movie_vote">{{$movie['vote']}}</div>
                </div> 
            </div>
            
        @endforeach
    </div>
@endsection