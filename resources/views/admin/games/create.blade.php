@extends('layouts.games')
@section('title', 'Crea Gioco')
@section('content')

    <div class="container">
        <a href="{{ route('games.index') }}" class="btn btn-primary mt-3 mb-3">Torna alla lista</a>
        <h1>Crea Videogioco</h1>

        <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genere</label>
                <select class="form-control" id="genre" name="genre" required>
                    <option value="">Seleziona un genere</option>
                    <option value="Action">Action</option>
                    <option value="Adventure">Adventure</option>
                    <option value="RPG">RPG</option>
                    <option value="Strategy">Strategy</option>
                    <option value="Sport">Sports</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="developer" class="form-label">Sviluppatore</label>
                <input type="text" class="form-control" id="developer" name="developer" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="mode" class="form-label">Modalità di gioco</label>
                <select class="form-control" id="mode" name="mode" required>
                    <option value="">Seleziona una modalità</option>
                    <option value="SinglePlayer">SinglePlayer</option>
                    <option value="Multiplayer">Multiplayer</option>
                    <option value="Co-op">Co-op</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                @foreach($platforms as $platform)
                <div>
                    <input type="checkbox" id="platform-{{ $platform->id }}" name="platforms[]" value="{{ $platform->id }}">
                    <label for="platform-{{ $platform->id }}">{{ $platform->name }}</label>
                </div>
                @endforeach
            
            </div>



            <button type="submit" class="btn btn-primary">Crea Gioco</button>
        </form>

    </div>

@endsection