<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use App\Models\Pack;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users'],
            'name' =>['required', 'min:3', 'unique:teams'],
            'password' =>['required', 'min:6', 'confirmed']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Team::create([
            'name' => $request->teamName,
            'user_id' => $user->id
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