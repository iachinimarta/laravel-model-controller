@extends('structure.layout')

@section('title', 'HomePage')

@section('content')
    <div class="btn_container">
        <button class="btn">
            <a href="{{route ('movies')}}">Lasciati ispirare!</a>
        </button>
    </div>
    
@endsection