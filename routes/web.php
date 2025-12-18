<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
    // return 'Hello, World!';
});

//for the video 14

// Route::get('/about', function () {
//     return 'This is the about page.';
// })->name('about');

// Route::get('/user/{id}/{slug}', function ($id, $slug) {
//     return 'Hello User! ' . $id . '-' .  $slug;
// })->name('user');



// //for grouping routes
// Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
//     //because of i am using prefix here there is no need to add /blog in the route it will by default add it
//     //because of this  'as' => 'blog.' in the name of the route like - name('create') it added blog.create
//     Route::get('/create', function () {
//         return 'blog create page';
//     })->name('create');

//     Route::get('/edit', function () {
//         return 'blog edit page';
//     })->name('edit');

//     Route::get('/show', function () {
//         return 'blog show page';
//     })->name('show');
// });

//for the video 14


//in below all the type of routes explained

//i already know all except this in below

Route::fallback(function () {
    return 'oops, we could not find the page!';
});

Route::get('/contact', function () {
    $title = 'this is the contact view page again';
    $description = 'Contact refers to the act or means of communicating or connecting with a person, organization, or service.In general terms, a contact provides the necessary information or method that allows someone to reach, communicate, or interact with another party.';
    $books = ['Deep Work', 'Steal like a artist', 'Story Brand'];
    return view('contact.contact', ['title' => $title, 'description' => $description, 'books' => $books]);
});
