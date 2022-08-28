<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Wine;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstGame = Game::first();
        for ($i = 1; $i < 11; $i++) {            
            Wine::factory()->for($firstGame)->create([
                'position' => $i,
            ]);
        }
    }
}
