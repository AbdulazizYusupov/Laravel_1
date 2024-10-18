<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/user',function () {
    return view('user');
});
Route::get('/admin',function () { 
    return view('admin');
});
Route::get('/register',function () {
    return view('register');
});
Route::post('/task',function () { 
    return view('taks');
});
Route::get('/members',function () { 
    return view('members');
});