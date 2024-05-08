<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/create', 'TeamController@create')->name('teams.create');
Route::post('/teams', 'TeamController@store')->name('teams.store');
Route::get('/teams/{team}', 'TeamController@show')->name('teams.show');
Route::get('/teams/{team}/edit', 'TeamController@edit')->name('teams.edit');
Route::put('/teams/{team}', 'TeamController@update')->name('teams.update');
Route::delete('/teams/{team}', 'TeamController@destroy')->name('teams.destroy');


Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
Route::get('/players/create', 'PlayerController@create')->name('players.create');
Route::post('/players', 'PlayerController@store')->name('players.store');
Route::get('/players/{player}', 'PlayerController@show')->name('players.show');
Route::get('/players/{player}/edit', 'PlayerController@edit')->name('players.edit');
Route::put('/players/{player}', 'PlayerController@update')->name('players.update');
Route::delete('/players/{player}', 'PlayerController@destroy')->name('players.destroy');
