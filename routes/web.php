<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return 'Hello, World!';
});

Route::get('/about', function () {
    return 'This is the about page.';
})->name('about');

Route::get('/user/{id}/{slug}', function ($id, $slug) {
    return 'Hello User! ' . $id . '-' .  $slug;
})->name('user');
