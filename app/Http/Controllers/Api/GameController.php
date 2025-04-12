<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Platform;
use App\Models\GamePlatform;

class GameController extends Controller
{
    public function index() {
        $games = Game::all();
        return response()->json(
            [
                'status' => 'success',
                'data' => $games,
            ]
        );

    }
    public function show(Game $game) {
        $game ->load('platforms');
        return response()->json(
            [
                'status' => 'success',
                'data' => $game,
            ]
        );
    }
   
}
