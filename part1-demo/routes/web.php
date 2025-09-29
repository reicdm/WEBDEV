<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function(){
    return "<h1>Reina Chloe Magpantay</h1>";
});

Route::get('/employee', function(){
    return "<h1>Employee Page</h1>";
});