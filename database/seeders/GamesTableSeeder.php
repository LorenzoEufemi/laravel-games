<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newGame = new Game();
            $newGame->title = $faker->sentence(3);
            $newGame->description = $faker->paragraph(3);
            $newGame->genre = $faker->randomElement(['Action', 'Adventure', 'RPG', 'Simulation', 'Strategy', 'Sports']);
            $newGame->image = $faker->imageUrl(640, 480, 'games', true);
            $newGame->developer = $faker->company;
            $newGame->mode = $faker->randomElement(['Single-player', 'Multiplayer', 'Co-op']);
            
            $newGame->save();
    }
}
}
