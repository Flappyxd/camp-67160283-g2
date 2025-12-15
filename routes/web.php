<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/view2', function () {
    return view('myview2');
});

Route::get('/mycontroller', [App\Http\Controllers\Mycontroller::class, 'index']);
Route::get('/mycontroller', [App\Http\Controllers\Mycontroller::class, 'process']);
