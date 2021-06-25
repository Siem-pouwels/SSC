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
    public function packBasic(){
        $low  = Player::whereBetween('rating', [80, 100])->inRandomOrder()->take(1)->get();
        $mid  = Player::whereBetween('rating', [80, 100])->inRandomOrder()->take(1)->get();
        $high = Player::whereBetween('rating', [80, 100])->inRandomOrder()->take(1)->get();
        $pack = $low.=$mid.=$high;
        // check for duplicates 
        // add rating for duplicated players
        dd(json_encode($pack));
    }

    public function packNormal(){
        $low = Player::whereBetween('rating', [50, 70])->inRandomOrder()->take(3)->get();
        $mid = Player::whereBetween('rating', [70, 80])->inRandomOrder()->take(1)->get();
        $high = Player::whereBetween('rating', [80, 100])->inRandomOrder()->take(1)->get();

        $pack = $low.=$mid.=$high;
        return Storage::url("app/hondje.jpg");
        // dd(Storage::get('hondje.jpg'));

        // dd(json_encode($pack));
        // check for duplicates 
        // add rating for duplicated players


        // return Storage::disk('local')->put('pd'.$high[0]['id'].'.png', 'Contents');
        // echo asset('storage/file.txt');
    }

    public function packPremium(){
        // get players between certain ratings and take there a amount of 
        $low[] = Player::whereBetween('rating', [70, 85])->inRandomOrder()->take(7)->get();
        $high[] = Player::whereBetween('rating', [85, 100])->inRandomOrder()->take(3)->get();
        
        $pack = array_merge($low, $high);// merge the 2 arrays
        // getting the needed id's
        $id = User::find('id');
        $team = Team::find($id);
        $duplicate_count = 0;
        foreach($pack as $player)
        {
            if(user_player_teams::where('player_id', '=', $player['id'] || 'user_id', '=', $id)) // check if the user allready has the player
            {
                $duplicate_count += $player['rating']; // add the duplicate players up
            }
            else{ // if it isn't a duplicate store it inside the database
                user_player_teams::create([
                    'user_id' => $id,
                    'player_id' => $player->id,
                    'team_id' => $team->id,
                ]);
            }
        }
        if(Duplicate::find('rating')){
            $duplicate_count = $duplicate_count += Duplicate::find('rating'); // adds the duplicate rating up
        }
        Duplicate::updateOrCreate(
            ['id' => $id, 'rating' => $duplicate_count],
        );
        $pack_update = Pack::where('user_id', '=', $id || 'type', '=', '3');
        $pack_update->updated_at = Carbon::now();

        return response()->json($pack); // returns the opened pack
    }

    public function timeBasic()
    {
        $user = Auth::user();
        $current_time = Carbon::now();

        $pack_time = Pack::select('updated_at')
        ->where('user_id', '=', $user->id)
        ->where('type', '=', '2')
        ->get()
        ->diff($current_time);
        dd($pack_time->diffForHumans());
        // $remainingTime = $pack_time
        // dd($current_time->diffInSeconds($pack_time));
        $remainingTime = $pack_time->diff($current_time);
        // $remainingTime = 4;
        // $interval = $pack_time->diff($current_time);
        print_r($remainingTime);
        // Pack::
        // $pack_time =+ Carbon();
        // $time_left = $current_time $pack_time;
        // dd($time_left);
    }
}
