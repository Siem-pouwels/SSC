<?php

namespace Database\Seeders;
use App\Models\Player;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('players')->delete();
      $json = Storage::disk('local')->get('player.json');
      $data = json_decode($json);
      $storage_path = Storage::url('public/Minifaces_png/');
      // dd($storage_path);
            foreach($data as $player)
            {
              $image_path = $storage_path."p".strval($player->id).".png";
                Player::create(array(
                  'id' => $player->id,
                  'name' => $player->name,
                  'nationality' => $player->nationality,
                  'rating' => $player->rating,
                  'position' => $player->position,
                  'image' => $image_path,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ));
            }
    }
    
}
