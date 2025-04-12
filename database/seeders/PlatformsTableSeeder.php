<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platform;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newPlatforms = [
            ['name' => 'PC', 'producer' => 'Apple', 'color' => '#FFA07A'],
            ['name' => 'PlayStation 4', 'producer' => 'Sony', 'color' => '#1E90FF'],
            ['name' => 'PlayStation 5', 'producer' => 'Sony', 'color' => '#1E90FF'],
            ['name' => 'Xbox One', 'producer' => 'Microsoft', 'color' => '#228B22'],
            ['name' => 'Xbox Series X/S', 'producer' => 'Microsoft', 'color' => '#228B22'],
            ['name' => 'Nintendo Switch', 'producer' => 'Nintendo', 'color' => '#4B0082'],
            ['name' => 'Mobile', 'producer' => 'Apple', 'color' => '#FFA07A'],
        ];
        foreach ($newPlatforms as $platform) {
            $newPlatform = new Platform();
            $newPlatform->name = $platform['name'];
            $newPlatform->producer = $platform['producer'];
            $newPlatform->color = $platform['color'];

            $newPlatform->save();
        }
    }
}
