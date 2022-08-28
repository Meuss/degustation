<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Game;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create([
            'name' => 'Meuss',
            'email' => 'thomas.miller147@gmail.ch',
        ]);

        $users = User::factory()->count(9)->create();

        $users->each(function ($item, $key) {
            Game::factory()->for($item)->create();
        });
    }
}
