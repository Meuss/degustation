<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Game;
use App\Models\Participation;
use App\Models\Wine;
use App\Models\Choice;

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
            'language' => 'en',
            'email' => 'thomas.miller147@gmail.ch',
        ]);

        $users = User::factory()->count(9)->create();

        $users->each(function ($item, $key) {
            Game::factory()->for($item)->create([
                'ready' => true,
            ]);
        });

        $users->each(function ($item, $key) {
            $firstGame = Game::first();
            Participation::factory()->for($item)->create([
                'game_id' => $firstGame->id,
            ]);
        });

        $firstGame = Game::first();
        for ($i = 1; $i < 11; $i++) {            
            Wine::factory()->for($firstGame)->create([
                'position' => $i,
            ]);
        }

        $users->each(function ($user, $key) {
            $participations = Participation::where('user_id', $user->id)->get();
            $participations->each(function ($item, $key) {
                $game = $item->game_id;
                $user = $item->user_id;
                $wines = Wine::where('game_id', $game)->get();
                $order = range(1, 10);
                shuffle($order);
                for ($i = 1; $i < 11; $i++) {
                    Choice::factory()->create([
                        'game_id' => $item->game_id,
                        'user_id' => $user,
                        'wine_id' => $wines[$i-1]->id,
                        'position' => $order[$i-1],
                    ]);
                }
            });
        });
    }
}
