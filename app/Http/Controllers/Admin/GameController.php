<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all games from the database
        $games = Game::all();

        // Return the view with the games data
        return view('admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view to create a new game
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newGame = new Game();
        $newGame->name = $data['title'];
        $newGame->description = $data['description'];
        $newGame->release_date = $data['genre'];
        $newGame->genre = $data['developer'];
        $newGame->developer = $data['mode'];

        if(array_key_exists('image', $data)) {
            $newGame->image = $data['image'];
        }

        $newGame->save();

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
       

        // Return the view with the game data
        return view('admin.games.show', compact('game'));
    }
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
