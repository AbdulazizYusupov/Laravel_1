<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AdminController::class, 'index']);
Route::get('/user',[UserController::class,'index']);
Route::get('/login',  [AuthController::class,'login']);
Route::get('/register',[AuthController::class,'register']);