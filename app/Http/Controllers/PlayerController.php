<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\user_player_teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
    public function getPlayers(){
        $user = Auth::user();
        $players = DB::table('user_player_teams')
        ->join('users', 'user_player_teams.user_id', '=', 'users.id')
        ->join('players', 'user_player_teams.player_id', '=', 'players.id')
        ->select('*')
        ->where('user_id', '=', $user->id)
        ->orderByDesc('players.rating')
        ->get();

        return response()->json($players);
    }
}
