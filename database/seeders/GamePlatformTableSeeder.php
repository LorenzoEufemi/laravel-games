<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Platform;

class GamePlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Supponiamo che i giochi e le piattaforme esistano già
        $game1 = Game::find(1);
        $game2 = Game::find(2);
        $game3 = Game::find(3);
        $game4 = Game::find(4);
        $game5 = Game::find(5);
        $game6 = Game::find(6);
        $game7 = Game::find(7);
        $game8 = Game::find(8);
        $game9 = Game::find(9);
        $game10 = Game::find(10);


        // Attacca più piattaforme al primo gioco
        $game1->platforms()->attach([1, 2]); 
        // Attacca più piattaforme al secondo gioco
        $game2->platforms()->attach([1, 3]); 
        // Attacca più piattaforme al terzo gioco
        $game3->platforms()->attach([2, 4]); 
        // Attacca più piattaforme al quarto gioco
        $game4->platforms()->attach([3, 5]);
        // Attacca più piattaforme al quinto gioco
        $game5->platforms()->attach([4, 6]); 
        // Attacca più piattaforme al sesto gioco
        $game6->platforms()->attach([5, 3]); 
        // Attacca più piattaforme al settimo gioco
        $game7->platforms()->attach([6, 2]); 
        // Attacca più piattaforme all'ottavo gioco
        $game8->platforms()->attach([5, 1]); 
        // Attacca più piattaforme al nono gioco
        $game9->platforms()->attach([6, 2]); 
        // Attacca più piattaforme al decimo gioco
        $game10->platforms()->attach([6, 3]); 
        
    }
    }





       
