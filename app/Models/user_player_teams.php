<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_player_teams extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'player_id',
        'team_id',
        'position',
    ];
}
