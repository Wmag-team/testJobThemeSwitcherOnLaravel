<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\PageController;

Route::get( '/', [PageController::class, 'home']);
Route::get( '/contacts', [PageController::class, 'contacts']);
Route::post( '/set-theme', [PageController::class, 'setTheme']);
