<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('myview.index');
});

Route::get('/view2', function () {
    return view('myview2');
});

Route::get('/mycontroller', [App\Http\Controllers\Mycontroller::class, 'index']);
Route::post('/mycontroller', [App\Http\Controllers\Mycontroller::class, 'store']);


Route::namespace('App\Http\Controllers')->group(function () {
     Route::get('/flights', 'FlightController@index');
     Route::get('/flight/{id}, )
     Route::post('/flight', 'FlightController@store');
});

