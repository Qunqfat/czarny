<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MonstersController;
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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware(['can:isAdmin'])->group(function () {
        Route::get('/users', [UserController::class, 'index']);

        Route::get('/equipments', [EquipmentController::class, 'index'])
            ->name('equipment.index');
        Route::get('/equipments/create', [EquipmentController::class, 'create'])
            ->name('equipment.create');
        Route::post('/equipments', [EquipmentController::class, 'store'])
            ->name('equipment.store');
        Route::get('/equipments/{equipment}', [EquipmentController::class, 'show'])
            ->name('equipment.show');
        Route::get('/equipments/edit/{equipment}', [EquipmentController::class, 'edit'])
            ->name('equipment.edit');
        Route::post('/equipments/{equipment}', [EquipmentController::class, 'update'])
            ->name('equipment.update');
        Route::delete('/equipments/{equipment}', [EquipmentController::class, 'destroy'])
            ->name('equipment.destroy');

        // -------------------------------------------------------------------------------

        Route::get('/monsters', [MonstersController::class, 'index'])
            ->name('monsters.index');
        Route::get('/monsters/create', [MonstersController::class, 'create'])
            ->name('monsters.create');
        Route::post('/monsters', [MonstersController::class, 'store'])
            ->name('monsters.store');
        Route::get('/monsters/{monsters}', [MonstersController::class, 'show'])
            ->name('monsters.show');
        Route::get('/monsters/edit/{monsters}', [MonstersController::class, 'edit'])
            ->name('monsters.edit');
        Route::post('/monsters/{monsters}', [MonstersController::class, 'update'])
            ->name('monsters.update');
        Route::delete('/monsters/{monsters}', [MonstersController::class, 'destroy'])
            ->name('monsters.destroy');
    });
});



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

Route::get('monsters2', [GameController::class, 'monsters'])
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
