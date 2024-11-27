<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', function () {
    return view('hello-world');
});

Route::get('/user/{id}', [UserController::class, 'show']);
