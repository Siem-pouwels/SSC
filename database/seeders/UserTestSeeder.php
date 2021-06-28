<?php

namespace Database\Seeders;

use App\Models\Pack;
use App\Models\Team;
use App\Models\User;
use App\Models\user_player_teams;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pw = 'admin12345';
        $user = User::create([
            'name'=>'Admin',
            'email'=>'adminn@admin.nl',
            'password'=> Hash::make($pw)
        ]);
            // dd($user->id);
        $team = Team::create([
            'user_id'=>$user->id,
            'name'=>'Adminteam'
        ]);

        $player = user_player_teams::create([
            'user_id'=>$user->id,
            'player_id'=>158023,
            'team_id'=>$team->id,
            'position'=>11
        ]);

        $player = user_player_teams::create([
            'user_id'=>$user->id,
            'player_id'=>183277,
            'team_id'=>$team->id,
            'position'=>10
        ]);

        $player = user_player_teams::create([
            'user_id'=>$user->id,
            'player_id'=>202652,
            'team_id'=>$team->id,
            'position'=>9
        ]);

        $player = user_player_teams::create([
            'user_id'=>$user->id,
            'player_id'=>182521,
            'team_id'=>$team->id,
            'position'=>8
        ]);

        $player = user_player_teams::create([
            'user_id'=>$user->id,
            'player_id'=>215914,
            'team_id'=>$team->id,
            'position'=>7
        ]);

        $player = user_player_teams::create([
            'user_id'=>$user->id,
            'player_id'=>212622,
            'team_id'=>$team->id,
            'position'=>6
        ]);
        $player = user_player_teams::create([
            'user_id'=>$user->id,
            'player_id'=>177003,
            'team_id'=>$team->id,
            'position'=>5
        ]);

        $player = user_player_teams::create([
            'user_id'=>$user->id,
            'player_id'=>189332,
            'team_id'=>$team->id,
            'position'=>4
        ]);

        $player = user_player_teams::create([
            'user_id'=>$user->id,
            'player_id'=>155862,
            'team_id'=>$team->id,
            'position'=>3
        ]);

        $player = user_player_teams::create([
            'user_id'=>$user->id,
            'player_id'=>201024,
            'team_id'=>$team->id,
            'position'=>2
        ]);

        $player = user_player_teams::create([
            'user_id'=>$user->id,
            'player_id'=>2147,
            'team_id'=>$team->id,
            'position'=>1
        ]);

        $player = user_player_teams::create([
            'user_id'=>$user->id,
            'player_id'=>178603,
            'team_id'=>$team->id,
            'position'=>null
        ]);
        
        Pack::create([
            'user_id' => $user->id,
            'type' => '1',
        ]);

        Pack::create([
            'user_id' => $user->id,
            'type' => '2',
        ]);

        Pack::create([
            'user_id' => $user->id,
            'type' => '3',
        ]);
    }
}
