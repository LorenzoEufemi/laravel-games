@extends('layouts.games')
@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h1>Benvenuto nella Dashboard</h1>
        <p>Qui puoi gestire i tuoi giochi e le tue recensioni.</p>
        <div class="row">
            <div class="col-md-6">
                <h2>Giochi</h2>
                <a href="{{ route('games.index') }}" class="btn btn-primary">Gestisci Giochi</a>
            </div>
           
        </div>
    </div>
@endsection
