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



//for grouping routes
Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    //because of i am using prefix here there is no need to add /blog in the route it will by default add it
    //because of this  'as' => 'blog.' in the name of the route like - name('create') it added blog.create
    Route::get('/create', function () {
        return 'blog create page';
    })->name('create');

    Route::get('/edit', function () {
        return 'blog edit page';
    })->name('edit');

    Route::get('/show', function () {
        return 'blog show page';
    })->name('show');
});
