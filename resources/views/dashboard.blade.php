@extends('layouts.games')
@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h1 class="text-center m-4">Benvenuto nella Dashboard</h1>
        <p class="text-center"><em>Qui puoi gestire i tuoi Videogiochi !</em></p>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Utente</h4>
            </div>
            <div class="card-body text-center">
                <h5 class="fw-bold"><span><u>Nome:</u></span> {{ $user->name }}</h5>
                <p class="text-muted"> <span><u>Email:</u></span> {{ $user->email }}</p>
            </div>
        </div>
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <h4 class="mb-0">Videogiochi</h4>
            </div>
            <div class="card-body text-center">
                <h5 class="fw-bold">Gestisci i tuoi Videogiochi</h5>
                <a class="btn btn-primary mt-2" href="{{ route('games.index') }}">
                    <i class="fas fa-folder-open"></i> Visualizza Videogiochi
                </a>
            </div>
        </div>



    </div>
    
@endsection
