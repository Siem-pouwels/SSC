<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PackTimeCheck;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
    |
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/athenticated', function () {
    return true;
});
Route::post('register', 'App\Http\Controllers\RegisterController@register');
Route::post('login', 'App\Http\Controllers\LoginController@login');
Route::post('logout', 'App\Http\Controllers\LoginController@logout');

Route::get('players', 'App\Http\Controllers\PlayerController@getPlayers');

Route::middleware([PackTimeCheck::class])->group(function () {
    Route::post('pack_1', 'App\Http\Controllers\PackController@packBasic');
    Route::post('pack_2', 'App\Http\Controllers\PackController@packNormal');
    Route::post('pack_3', 'App\Http\Controllers\PackController@packPremium');
});