<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    public function getPlayers(){
        $user = Auth::user();
        $players = Player::where('user_id', '=', $user->id)->get();
        return response()->json($players);
    }
}
