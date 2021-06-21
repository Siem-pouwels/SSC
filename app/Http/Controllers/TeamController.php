<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    //get the team of the user
    //show it in the create team tab
    public function getTeam(){
        $id = Auth::user()->id;
        return "testing 111111111111111111111111111111111111";
        //Player::table('user_player_teams')
        // use foreach loop if multiple players are sent at once
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


