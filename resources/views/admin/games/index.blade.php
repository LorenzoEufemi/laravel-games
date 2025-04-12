@extends('layouts.games')
@section('title', 'Games')
@section('content')
    <div class="container">

        <h1 class="text-center mt-3">Videogiochi</h1>
        <a href="{{ route('games.create') }}" class="btn btn-primary mt-3 mb-3">Crea un nuovo Videogioco</a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover mt-3">
                <thead>
                    <tr class="table-info">
                        <th class="p-3">Titolo</th>
                        <th class="p-3">Genere</th>
                        <th class="p-3">Sviluppatore</th>
                        <th class="p-3" colspan="3" >Azioni</th>
                        


                    </tr>
                </thead>
                <tbody>
                    @foreach ($games as $game)
                        <tr>
                            <td class="p-1 px-1">{{ $game->title }}</td>
                            <td class="p-1 px-1">{{ $game->genre }}</td>
                            <td class="p-1 px-1">{{ $game->developer }}</td>
                            <td class="p-2"> <a href="{{ route('games.show', $game->id) }}"
                                    class="btn btn-info">Visualizza</a></td>
                            <td class="p-2"> <a href="{{ route('games.edit', $game->id) }}"
                                    class="btn btn-warning">Modifica</a></td>
                            <td class="p-2">
                                <form action="{{ route('games.destroy', $game->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary mt-4" href="{{ route('dashboard') }}">Torna alla Dashboard</a>


    </div>
@endsection
