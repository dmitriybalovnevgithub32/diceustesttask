<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootballController;
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

Route::get('/', [FootballController::class, 'index'])->name('homepage');

Route::get('/game-result', [FootballController::class, 'index']);
Route::get('/play-all', [FootballController::class, 'playall']);
Route::get('/next-week', [FootballController::class, 'nextweek']);
Route::get('/addteam', [FootballController::class, 'addteam']);
Route::get('/clearalldatabase', [FootballController::class, 'clearalldatabase']);

//Resource

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
