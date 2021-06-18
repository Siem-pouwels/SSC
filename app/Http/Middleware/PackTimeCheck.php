<?php

namespace App\Http\Middleware;

use App\Models\Pack;
use App\Models\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class PackTimeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $pack = Pack::where('user_id', '=', User::find('id') || 'type', '=', $request->type);

        if(!$pack) return 'No pack found';
        // dd($request->type);
        switch ($request->type) {
            case '1':
                $time = 30;
                break;
            case '2':
                $time = 120;
                break;
            case '3':
                $time = 240;
                break;
            default:
                return "Type of pack didn't match";
        }
        
        dd($request);
        $packUpdate = $pack->updated_at;
        $currentTime = Carbon::now();
        $elapsedTime =  $packUpdate->diffInMinutes($currentTime);
        dd($elapsedTime);
        // if()
    }
}
