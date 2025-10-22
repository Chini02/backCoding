<?php

use App\Http\Controllers\Static\StaticController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticController::class,'index']);
//
Route::get('/services', [StaticController::class,'services']);
//
Route::get('/contact', [StaticController::class,'contact']);
//
Route::get('/portfolio', [StaticController::class,'portfolio']);



