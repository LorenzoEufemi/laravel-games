@extends('layouts.games')
@section('content')
@section('title', 'Welcome')

@section('content')
    <div class="container">
        <h1>Benvenuto nel Backoffice Videogames</h1>
        <p>Qui puoi gestire i tuoi giochi e le tue recensioni.</p>
        <div class="row">
            <div class="col-md-6">
                <h2>Giochi</h2>
                <a href="{{ route('games.index') }}" class="btn btn-primary">Gestisci Giochi</a>
            </div>
            <div class="col-md-6">
                <h2>Recensioni</h2>
                <a href="{{ route('reviews.index') }}" class="btn btn-primary">Gestisci Recensioni</a>
            </div>
        </div>
    </div>
@endsection