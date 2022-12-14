<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    protected $fillable = [
        'position',
        'name',
        'cellar',
        'region',
        'country',
        'year',
        'grape_variety',
        'description',
    ];
}
