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

    public function getTeam(){
        $user = Auth::user();

        $goalkeeper = DB::table('user_player_teams')
        ->join('users', 'user_player_teams.user_id', '=', 'users.id')
        ->join('players', 'user_player_teams.player_id', '=', 'players.id')
        ->select('*')
        ->where('user_id', '=', $user->id)
        ->where('players.position', '=', 'GK')
        ->orderByDesc('players.rating')
        ->take(1)
        ->get();

        $defender = DB::table('user_player_teams')
        ->join('users', 'user_player_teams.user_id', '=', 'users.id')
        ->join('players', 'user_player_teams.player_id', '=', 'players.id')
        ->select('*')
        ->where('user_id', '=', $user->id)
        ->where('players.position', '=', 'DEF')
        ->orderByDesc('players.rating')
        ->take(4)
        ->get();

        $midfielder = DB::table('user_player_teams')
        ->join('users', 'user_player_teams.user_id', '=', 'users.id')
        ->join('players', 'user_player_teams.player_id', '=', 'players.id')
        ->select('*')
        ->where('user_id', '=', $user->id)
        ->where('players.position', '=', 'MID')
        ->orderByDesc('players.rating')
        ->take(3)
        ->get();

        $attacker = DB::table('user_player_teams')
        ->join('users', 'user_player_teams.user_id', '=', 'users.id')
        ->join('players', 'user_player_teams.player_id', '=', 'players.id')
        ->select('*')
        ->where('user_id', '=', $user->id)
        ->where('players.position', '=', 'ATT')
        ->orderByDesc('players.rating')
        ->take(3)
        ->get();

        $merged = $goalkeeper->merge($defender);
        $merged = $merged->merge($midfielder);
        $merged = $merged->merge($attacker);
        $players = $merged->all();

        return response()->json($players);
    }
}
