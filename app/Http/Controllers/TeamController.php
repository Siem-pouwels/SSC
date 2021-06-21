<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use App\Models\user_player_teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    //get the team of the user
    //show it in the create team tab
    public function getTeam(){
        //$id = Auth::user()->id;
        $data = user_player_teams::join('players', 'player_id', '=', 'players.id')
        ->select('user_id','players.id','players.name','players.position','players.image')
        ->where([
            ['user_id', '=', 3],//<-- change to $id for it to work
            ['user_player_teams.position', '!=', NULL]
        ])
        ->get();
        return json_encode($data);
        // use foreach loop if multiple players are sent at once
    }
    public function getOptions(){
        //$id = Auth::user()->id;
        $data = user_player_teams::join('players', 'player_id', '=', 'players.id')
        ->select('user_id','players.id','players.name','players.rating','players.position','players.image')
        ->where([
            ['user_id', '=', 3],//<-- change to $id for it to work
            ['user_player_teams.position', '=', NULL]
        ])
        ->orderBy('players.rating', 'desc')
        ->take(5)
        ->get();
        return json_encode($data);
    }
    // dd(json_encode($player));
    public function updatePlayerTeam(Request $request){
        $id = Auth::user()->id;
        dd("save");
    }
    public function DeleteTeam(Request $request){
        $id = Auth::user()->id;
        dd("delete");
    }
}


