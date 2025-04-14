@extends('layouts.games')
@section('title', 'Modifica Gioco')
@section('content')

    <div class="container">
         <a href="{{ route('games.index') }}" class="btn btn-primary mt-3 mb-3">Torna alla lista</a>
        <h1>Modifica Videogioco</h1>
       

        <form action="{{ route('games.update', $game) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $game->title }}" required>
            </div>
            @php
                $generi = ['Action', 'Adventure', 'RPG', 'Strategy', 'Sports'];
            @endphp

            <div class="mb-3">
                <label for="genre" class="form-label">Genere</label>
                <select class="form-control" id="genre" name="genre" required>
                    <option value="">Seleziona un genere</option>
                    @foreach ($generi as $genere)
                        <option value="{{ $genere }}" {{ $game->genre === $genere ? 'selected' : '' }}>
                            {{ $genere }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="developer" class="form-label">Sviluppatore</label>
                <input type="text" class="form-control" id="developer" name="developer" value="{{ $game->developer }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description">{{ $game->description }}</textarea>
            </div>
            @php
                $modalita = ['SinglePlayer', 'Multiplayer', 'Co-op'];
            @endphp

            <div class="mb-3">
                <label for="mode" class="form-label">Modalità di gioco</label>
                <select class="form-control" id="mode" name="mode" required>
                    <option value="">Seleziona una modalità</option>
                    @foreach ($modalita as $m)
                        <option value="{{ $m }}" {{ $game->mode === $m ? 'selected' : '' }}>{{ $m }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="file" class="form-control" id="image" name="image">
                @if ($game->image)
                    <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->title }}" width="100">
                @endif
            </div>
            <div class="mb-3">
                @foreach ($platforms as $platform)
                    <div>
                        <input type="checkbox" id="platform-{{ $platform->id }}" name="platforms[]"
                            value="{{ $platform->id }}" {{ $game->platforms->contains($platform) ? 'checked' : '' }}>
                        <label for="platform-{{ $platform->id }}">{{ $platform->name }}</label>
                    </div>
                @endforeach

            </div>
            <button type="submit" class="btn btn-primary">Aggiorna Gioco</button>
        </form>
        

    </div>
@endsection
