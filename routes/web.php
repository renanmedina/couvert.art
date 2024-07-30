<?php

use Illuminate\Support\Facades\Route;
use App\Frontend\Controllers\HomeController;
use App\Authentication\Controllers\FacebookAuthController;


Route::get('/', [HomeController::class, 'index']);

// Social Authentication
Route::get('/auth/facebook', [FacebookAuthController::class, 'redirect']);
Route::get('/auth/facebook/callback', [FacebookAuthController::class, 'callback']);
