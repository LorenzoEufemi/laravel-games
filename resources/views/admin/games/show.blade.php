@extends('layouts.games')
@section('title', $game->title)
@section('content')
    <div class="container">
        <h1>{{ $game->title }}</h1>
        <p><strong>Genere:</strong> {{ $game->genre }}</p>
        <p><strong>Sviluppatore:</strong> {{ $game->developer }}</p>
        <p><strong>Descrizione:</strong> {{ $game->description }}</p>
        <p><strong>Modalità di gioco:</strong> {{ $game->mode }}</p>
        <div>
            @forelse($game->platforms as $platform)
                <span class="badge bg-secondary">{{ $platform->name }}</span>
            @empty
                <p>Nessuna piattaforma associata.</p>
            @endforelse
        </div>
        <div>
            <strong>Immagine:</strong>
            @if($game->image)
                <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->title }}" style="max-width: 200px;">
            @else
                Nessuna immagine disponibile.
            @endif
        </div>
        <div>
            <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
        </div>
        <div>
            <a href="{{ route('games.edit', $game->id) }}" class="btn btn-primary">Modifica</a> 
        </div>

        
        <a href="{{ route('games.index') }}" class="btn btn-secondary">Torna alla lista dei giochi</a>
    </div>
@endsection