<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/users/list', [UserController::class, 'index'])->middleware('auth');

Route::get('/hello', [HelloController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ------------------------------------------------------

Route::get('equipment', [GameController::class, 'equipment'])
    ->name('get.equipment')
    ->middleware('auth');

Route::get('stats', [GameController::class, 'stats'])
    ->name('get.stats')
    ->middleware('auth');

Route::get('rest', [GameController::class, 'rest'])
    ->name('get.rest')
    ->middleware('auth');

Route::get('monsters', [GameController::class, 'monsters'])
    ->name('get.monsters')
    ->middleware('auth');

Route::get('characters', [GameController::class, 'characters'])
    ->name('get.characters')
    ->middleware('auth');

Route::get('fights', [GameController::class, 'fights'])
    ->name('get.fights')
    ->middleware('auth');

Route::get('animals', [GameController::class, 'animals'])
    ->name('get.animals')
    ->middleware('auth');

Route::get('shop', [GameController::class, 'shop'])
    ->name('get.shop')
    ->middleware('auth');

Route::get('privateHandel', [GameController::class, 'privateHandel'])
    ->name('get.privateHandel')
    ->middleware('auth');

Route::get('playerShop', [GameController::class, 'playerShop'])
    ->name('get.playerShop')
    ->middleware('auth');

Route::get('news', [GameController::class, 'news'])
    ->name('get.news')
    ->middleware('auth');

Route::get('king', [GameController::class, 'king'])
    ->name('get.king')
    ->middleware('auth');

Route::get('jobs', [GameController::class, 'jobs'])
    ->name('get.jobs')
    ->middleware('auth');

Route::get('guilds', [GameController::class, 'guilds'])
    ->name('get.guilds')
    ->middleware('auth');
