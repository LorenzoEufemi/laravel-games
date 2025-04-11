@extends('layouts.games')
@section('title', $game->title)
@section('content')
    <div class="container">
        <h1>{{ $game->title }}</h1>
        <p><strong>Genere:</strong> {{ $game->genre }}</p>
        <p><strong>Sviluppatore:</strong> {{ $game->developer }}</p>
        <p><strong>Descrizione:</strong> {{ $game->description }}</p>
        <p><strong>Modalità di gioco:</strong> {{ $game->mode }}</p>
        
        <a href="{{ route('games.index') }}" class="btn btn-secondary">Torna alla lista dei giochi</a>
    </div>
@endsection