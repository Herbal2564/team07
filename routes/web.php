<?php

use App\Http\Controllers\ChainsController;
use App\Http\Controllers\CoinsController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('coins');
});
Route::get('coins/senior',[CoinsController::class,'DEX'])->name('coins.DEX');
Route::get('coins/lend',[CoinsController::class,'lend'])->name('coins.lend');
Route::get('coins/token',[CoinsController::class,'token'])->name('coins.token');
Route::get('coins/date',[CoinsController::class,'date'])->name('coins.date');


Route::resource( "coins", CoinsController::class);
Route::resource( "chains", ChainsController::class);
