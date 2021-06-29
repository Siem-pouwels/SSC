<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Duplicate;
use App\Models\Team;
use App\Models\User;
use App\Models\Pack;
use App\Models\user_player_teams;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class PackController extends Controller
{
    // public function packBasic(){
    //     $low  = Player::whereBetween('rating', [80, 100])->inRandomOrder()->take(1)->get();
    //     $mid  = Player::whereBetween('rating', [80, 100])->inRandomOrder()->take(1)->get();
    //     $high = Player::whereBetween('rating', [80, 100])->inRandomOrder()->take(1)->get();
    //     $pack = $low.=$mid.=$high;
    //     // check for duplicates 
    //     // add rating for duplicated players
    //     dd(json_encode($pack));
    // }

    

    public function packBasic(){
        $low  = Player::whereBetween('rating', [65, 70])->inRandomOrder()->take(1)->get();
        $mid  = Player::whereBetween('rating', [70, 80])->inRandomOrder()->take(1)->get();
        $high = Player::whereBetween('rating', [80, 100])->inRandomOrder()->take(1)->get();
        
        $user = Auth::user();
        $team = DB::table('teams')->where('user_id', '=', $user->id)->get('id');

        for ($x = 0; $x <= 0; $x++) {
            user_player_teams::create([
                'user_id'=>$user->id,
                'player_id'=>$low[0][$x]['id'],
                'team_id'=>$team[0]->id,
                'position'=>null
            ]);
        }

        for ($x = 0; $x <= 0; $x++) {
            user_player_teams::create([
                'user_id'=>$user->id,
                'player_id'=>$mid[0][$x]['id'],
                'team_id'=>$team[0]->id,
                'position'=>null
            ]);
        }

        for ($x = 0; $x <= 0; $x++) {
            user_player_teams::create([
                'user_id'=>$user->id,
                'player_id'=>$high[0][$x]['id'],
                'team_id'=>$team[0]->id,
                'position'=>null
            ]);
        }

        $pack = user_player_teams::where('user_id', '=', $user->id)->take(3)->latest()->get();
        return response()->json($pack); // returns the opened pack
    }
    public function packNormal(){
        $low  = Player::whereBetween('rating', [65, 70])->inRandomOrder()->take(3)->get();
        $mid  = Player::whereBetween('rating', [70, 80])->inRandomOrder()->take(3)->get();
        $high = Player::whereBetween('rating', [85, 100])->inRandomOrder()->take(1)->get();
        
        $user = Auth::user();
        $team = DB::table('teams')->where('user_id', '=', $user->id)->get('id');

        for ($x = 0; $x <= 0; $x++) {
            user_player_teams::create([
                'user_id'=>$user->id,
                'player_id'=>$low[0][$x]['id'],
                'team_id'=>$team[0]->id,
                'position'=>null
            ]);
        }

        for ($x = 0; $x <= 0; $x++) {
            user_player_teams::create([
                'user_id'=>$user->id,
                'player_id'=>$mid[0][$x]['id'],
                'team_id'=>$team[0]->id,
                'position'=>null
            ]);
        }

        for ($x = 0; $x <= 0; $x++) {
            user_player_teams::create([
                'user_id'=>$user->id,
                'player_id'=>$high[0][$x]['id'],
                'team_id'=>$team[0]->id,
                'position'=>null
            ]);
        }

        $pack = user_player_teams::where('user_id', '=', $user->id)->take(3)->latest()->get();
        return response()->json($pack); // returns the opened pack
    }
    public function packPremium(){
        $low[] = Player::whereBetween('rating', [70, 85])->inRandomOrder()->take(7)->get();
        $high[] = Player::whereBetween('rating', [85, 100])->inRandomOrder()->take(3)->get();
        
        $user = Auth::user();
        $team = DB::table('teams')->where('user_id', '=', $user->id)->get('id');

        for ($x = 0; $x <= 6; $x++) {
            user_player_teams::create([
                'user_id'=>$user->id,
                'player_id'=>$low[0][$x]['id'],
                'team_id'=>$team[0]->id,
                'position'=>null
            ]);
        } 

        for ($x = 0; $x <= 2; $x++) {
            user_player_teams::create([
                'user_id'=>$user->id,
                'player_id'=>$high[0][$x]['id'],
                'team_id'=>$team[0]->id,
                'position'=>null
            ]);
        } 
        $playerId[] = user_player_teams::where('user_id', '=', $user->id)->take(10)->latest()->get('id');
        dd($playerId[0][0]);
        $pack=[];
        foreach($playerId as $pId){
            $pack = Player::where('id', '=', $pId)->get();
        }
        return response()->json($pack); // returns the opened pack
    }

    // public function packPremium(){
    //     // get players between certain ratings and take there a amount of 
    //     $low[] = Player::whereBetween('rating', [70, 85])->inRandomOrder()->take(7)->get();
    //     $high[] = Player::whereBetween('rating', [85, 100])->inRandomOrder()->take(3)->get();
        
    //     $pack = array_merge($low, $high);// merge the 2 arrays
    //     // getting the needed id's
    //     // $id = User::find('id');
    //     $id = 5;
    //     // $team = Team::find($id);
    //     $team = 5;
    //     $duplicate_count = 0;
    //     foreach($pack as $player)
    //     {
    //         if(user_player_teams::where('player_id', '=', $player['id'] || 'user_id', '=', $id)) // check if the user allready has the player
    //         {
    //             $duplicate_count += $player['rating']; // add the duplicate players up
    //         }
    //         else{ // if it isn't a duplicate store it inside the database
    //             user_player_teams::create([
    //                 'user_id' => $id,
    //                 'player_id' => $player->id,
    //                 'team_id' => $team,
    //             ]);
    //         }
    //     }
    //     if(Duplicate::find('rating')){
    //         $duplicate_count = $duplicate_count += Duplicate::find('rating'); // adds the duplicate rating up
    //     }
    //     Duplicate::updateOrCreate(
    //         ['id' => $id, 'rating' => $duplicate_count],
    //     );
    //     $pack_update = Pack::where('user_id', '=', $id || 'type', '=', '3');
    //     $pack_update->updated_at = Carbon::now();

    //     return response()->json($pack); // returns the opened pack
    // }

    public function timeBasic()
    {
        // $user = Auth::user();
        $current_time = Carbon::now()->addMinute(30);
        // dd($current_time);

        $packTime = Pack::select('updated_at')
        ->where('user_id', '=', 5)
        ->where('type', '=', '1')
        ->get();
        $packTime = Carbon::parse($this->pack_time);
        $current_time = Carbon::parse($this->current_time);

        $totalDuration = $packTime->diffInSeconds($current_time);
        
    }
}
