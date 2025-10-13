<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', function () {
        return view('Users.user');
    })->name("userName");

    Route::get('/{id}', function ($id) {
        // return "Your ID is: " . $id;
        return "<a href= '" . route('editUser', $id) . "'>Edit</a>";
    });

    Route::get('/{id}/{name}', function ($id, $name) {
        return "Your ID is: " . $id . " " . $name;
    });
});

Route::get('/edit/{id}', function ($id) {
    return "<a href='" . route('homeUser', $id) . "'>Home</a>";
})->name("editUser");

Route::get('/home/{id}', function ($id) {
    return "Welcome " . $id;
})->name("homeUser");


Route::get('/admin/edit', function () {
    return "<h1>Employee Page</h1>";
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/responsive', function () {
    return view('sample.responsive');
});

Route::fallback(function () {
    return view('error');
});
