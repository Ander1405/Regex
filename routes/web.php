<?php

use App\Http\Controllers\RegExController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/', [RegExController::class, 'store'])
    ->name('regex');
