<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog/create', [BlogController::class, 'create']);

Route::post('/blogs', [BlogController::class, 'store']);
