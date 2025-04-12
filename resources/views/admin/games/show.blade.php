@extends('layouts.games')
@section('title', $game->title)
@section('content')
<style>
.card-custom {
    min-height: 600px; /* Imposta l'altezza minima a 400px */
    height: auto; /* Altezze variabili in base al contenuto */
}
</style>
    <div class="container">
        <div class="card mb-4 shadow-sm mt-4 card-custom">
            <div class="row g-0">
                <!-- Immagine -->
                <div class="col-md-4">
                    @if ($game->image)
                        <img src="{{ asset('storage/' . $game->image) }}"
                            class="img-fluid rounded-start h-100 w-100 object-fit-cover"
                            alt="Copertina di {{ $game->title }}">
                    @else
                        <img src={{ asset('images/placeholder-image.png') }}
                            class="img-fluid rounded-start h-100 w-100 object-fit-cover"
                            alt="Copertina di {{ $game->title }}">
                    @endif
                </div>

                <!-- Contenuti -->
                <div class="col-md-8">
                    <div class="card-body mt-3">
                        <h4 class="card-title pb-3">{{ $game->title }}</h4>

                        <p class="card-text pb-2">
                            <strong class="pb-2" >Genere:</strong> {{ $game->genre }} <br>
                            <strong class="pb-2">Sviluppatore:</strong> {{ $game->developer }} <br>
                            <strong class="pb-2">Modalità di gioco:</strong> {{ $game->mode }} <br>
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

                        <!-- Pulsanti azione -->
                        <div class="d-flex gap-2 pb-2">
                            <a href="{{ route('games.edit', $game->id) }}" class="btn btn-warning">Modifica</a>

                            <form action="{{ route('games.destroy', $game->id) }}" method="POST"
                                onsubmit="return confirm('Sei sicuro di voler eliminare questo gioco?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('games.index') }}" class="btn btn-primary">Torna alla lista</a>
    </div>    


    @endsection
