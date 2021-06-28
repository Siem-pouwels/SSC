<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\user_player_teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    public function getPlayers(){
        $user = Auth::user();
        $players[] = user_player_teams::where('user_id', '=', $user->id)->get();
        $collection= [];
        foreach($players as $player)
        {
            if($player){
                $collection = Player::where('id', '=', $players)->get();
            }
        }
        
        // dd($player_id);
        $players = Player::where('id', '=', $player->player_id)->get();
        // dd($players);
        return response()->json($players);
    }
}
