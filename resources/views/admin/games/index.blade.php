@extends('layouts.games')
@section('title', 'Games')
@section('content')
    <div class="container">
        <h1>Games</h1>
         <a href="{{ route('games.create') }}" class="btn btn-primary">Crea un nuovo gioco</a> 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Genere</th>
                    <th>Sviluppatore</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($games as $game)
                    <tr>
                        <td>{{ $game->title }}</td>
                        <td>{{ $game->genre }}</td>
                        <td>{{ $game->developer }}</td>
                        <td> <a href="{{ route('games.show', $game->id) }}" class="btn btn-info">Visualizza</a></td>
                        <td> <a href="{{ route('games.edit', $game->id) }}" class="btn btn-warning">Modifica</a></td>
                        <td>
                            <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('dashboard')}}">Torna alla Dashboard</a>


    </div>
@endsection
