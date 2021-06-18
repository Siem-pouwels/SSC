<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function getPlayers(){
        $player = Player::where('name', 'Lionel Messi')->get('name');
        return json_encode($player);
    }
}
