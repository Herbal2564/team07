<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChainsController;
use App\Http\Controllers\CoinsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  //  return $request->user();
//});

route::post('register', [AuthController::class, 'register']);
route::post('login', [AuthController::class, 'login']);
route::group(['middleware' => 'auth:sanctum'], function() {
    route::get('chains',[ChainsController::class, 'api_chains']);
    route::patch('chains',[ChainsController::class, 'api_update']);
    route::delete('chains',[ChainsController::class, 'api_delete']);
    route::get('coins',[CoinsController::class, 'api_coins']);
    route::patch('coins',[CoinsController::class, 'api_update']);
    route::delete('coins',[CoinsController::class, 'api_delete']);
});
