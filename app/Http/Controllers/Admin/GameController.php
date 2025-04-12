<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\Storage;
use App\Models\Platform;
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
        $platforms = Platform::all();
        return view('admin.games.create', compact('platforms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newGame = new Game();
        $newGame->title = $data['title'];
        $newGame->description = $data['description'];
        $newGame->genre= $data['genre'];
        $newGame->developer = $data['developer'];
        $newGame->mode = $data['mode'];

        if(array_key_exists('image', $data)) {
            $img_url= Storage::putFile('imageGames', $data['image']);
            $newGame->image = $img_url;
        } 

        $newGame->save();

        if($request->has('platforms')) {
            $newGame->platforms()->attach($data['platforms']);
        }
        
        return redirect()->route('games.show',$newGame)->with('success', 'Game created successfully.');

        
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
    public function edit(Game $game)
    {
       $platforms = Platform::all();
        return view('admin.games.edit', compact('game', 'platforms'));
    }
   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $data = $request->all();
        $game->title = $data['title'];
        $game->description = $data['description'];
        $game->genre = $data['genre'];
        $game->developer = $data['developer'];
        $game->mode = $data['mode'];

        if(array_key_exists('image', $data)) {
            Storage::delete($game->image);
            $img_url= Storage::putFile('imageGames', $data['image']);
            $game->image = $img_url;
        }

        $game->update();
        if($request->has('platforms')) {
            $game->platforms()->sync($data['platforms']);
        } else {
            $game->platforms()->detach();
        }

         // Save the game

        return redirect()->route('games.show', $game)->with('success', 'Game updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        // Scollega tutte le piattaforme associate al gioco
        $game->platforms()->detach();
    
        // Elimina l'immagine associata (se esiste)
        if ($game->image) {
            Storage::delete('imageGames/' . $game->image);
        }
    
        // Elimina il gioco
        $game->delete();
    
        return redirect()->route('games.index')->with('success', 'Game deleted successfully.');
    }
    
}
