@extends('layouts.games')
@section('title', $game->title)
@section('content')
    <style>
        .card-custom {
            min-height: 400px;
            height: auto;
        }
    </style>

    <div class="container mt-5">
        <div class="card mb-4 shadow-sm card-custom w-100">
            <div class="row g-0 h-100">
                <!-- Immagine -->
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    @if ($game->image)
                        <img src="{{ asset('storage/' . $game->image) }}" class="img-fluid rounded-start"
                            style="max-height: 90%; max-width: 100%; object-fit: contain;"
                            alt="Copertina di {{ $game->title }}">
                    @else
                        <img src="{{ asset('images/placeholder-image.png') }}" class="img-fluid rounded-start"
                            style="max-height: 90%; max-width: 100%; object-fit: contain;"
                            alt="Copertina di {{ $game->title }}">
                    @endif
                </div>

                <!-- Contenuti -->
                <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body text-start w-100">
                        <h4 class="card-title pb-3 text-center">{{ $game->title }}</h4>

                        <p class="card-text pb-2">
                            <strong>Genere:</strong> {{ $game->genre }} <br>
                            <strong>Sviluppatore:</strong> {{ $game->developer }} <br>
                            <strong>Modalità di gioco:</strong> {{ $game->mode }} <br>
                        </p>

                        <p class="card-text pb-2">
                            <strong>Descrizione:</strong><br>
                            {{ $game->description }}
                        </p>

                        <!-- Badge piattaforme -->
                        <div class="mb-3 pb-2">
                            <strong>Piattaforme:</strong><br>
                            @foreach ($game->platforms as $platform)
                                <span class="badge"
                                    style="background-color: {{ $platform->color }}">{{ $platform->name }}</span>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex gap-2 pb-2">
            <a href="{{ route('games.index') }}" class="btn btn-primary">Torna alla lista</a>
            <a href="{{ route('games.edit', $game->id) }}" class="btn btn-warning">Modifica</a>

            <form action="{{ route('games.destroy', $game->id) }}" method="POST"
                onsubmit="return confirm('Sei sicuro di voler eliminare questo gioco?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>

        </div>


    </div>

@endsection
