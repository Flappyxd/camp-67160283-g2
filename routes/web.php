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
