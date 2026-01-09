<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokedexController;


Route::get('/', function () {
    return view('myview.index');
});

Route::get('/view2', function () {
    return view('myview2');
});

Route::get('/mycontroller', [App\Http\Controllers\Mycontroller::class, 'index']);
Route::post('/mycontroller', [App\Http\Controllers\Mycontroller::class, 'store']);


Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/flights', 'FlightController@index');
    Route::get('/flight/{id}', 'FlightController@update');
    Route::post('/flight', 'FlightController@store');
    Route::put('/flight/{id}', 'FlightController@update_action');
    Route::delete('/flight/{id}', 'FlightController@delete_action');
});

Route::get('/pokedex', [PokedexController::class, 'index']);
Route::post('/pokedex', [PokedexController::class, 'store']);
Route::get('/pokedex/{id}', [PokedexController::class, 'update']);
Route::post('/pokedex/{id}', [PokedexController::class, 'update_action']);
Route::get('/pokedex/delete/{id}', [PokedexController::class, 'delete_action']);


