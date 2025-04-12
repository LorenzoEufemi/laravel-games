<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GameController;
use App\Models\Game;

Route::get('games', [GameController::class, 'index']);
Route::get('games/{game}', [GameController::class, 'show']);
