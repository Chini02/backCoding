<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Static\StaticController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticController::class,'index'])->name('home.index');
//
Route::get('/services', [StaticController::class,'services'])->name('home.services');
//
Route::get('/contact', [StaticController::class,'contact'])->name('home.contact');
//
Route::get('/about', [StaticController::class,'about'])->name('home.about');

Route::resource('computers',ComputerController::class);



