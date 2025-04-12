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
            ['name' => 'PC', 'producer' => 'Apple'],
            ['name' => 'PlayStation 4', 'producer' => 'Sony'],
            ['name' => 'PlayStation 5', 'producer' => 'Sony'],
            ['name' => 'Xbox One', 'producer' => 'Microsoft'],
            ['name' => 'Xbox Series X/S', 'producer' => 'Microsoft'],
            ['name' => 'Nintendo Switch', 'producer' => 'Nintendo'],
            ['name' => 'Mobile', 'producer' => 'Apple'], 
        ];
        foreach ($newPlatforms as $platform) {
           $newPlatform = new Platform();
           $newPlatform->name = $platform['name'];
           $newPlatform->producer = $platform['producer'];
           $newPlatform->save();
           
        }
    }
}
