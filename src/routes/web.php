<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlayceController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', [MyPlayceController::class, 'index']);

