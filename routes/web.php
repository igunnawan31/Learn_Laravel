<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
//     // return 'Hello World';
// });

Route::get('home', function () {
    return view('home', ['title' => 'Home Page']);
    // return 'Hello World';
});

Route::get('/about', function () {
    // $nama = 'Muhamad Gunawan';
    return view('about', ['nama'=> 'Muhamad Gunawan','title' => 'About Page']);
    // return 'Hello World';
});

Route::get('/posts', function () {
    // $judulblog = 'Blog Pribadi';
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Muhamad Gunawan',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex at expedita atque 
            earum debitis eos possimus molestias qui saepe praesentium tenetur, repellendus voluptatibus 
            aspernatur! Consequatur numquam recusandae nam fugiat voluptatibus.'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Muhamad Gunawan',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex at expedita atque 
            earum debitis eos possimus molestias qui saepe praesentium tenetur, repellendus voluptatibus 
            aspernatur! Consequatur numquam recusandae nam fugiat voluptatibus.'
        ],
        [
            'title' => 'Judul Artikel 3',
            'author' => 'Muhamad Gunawan',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex at expedita atque 
            earum debitis eos possimus molestias qui saepe praesentium tenetur, repellendus voluptatibus 
            aspernatur! Consequatur numquam recusandae nam fugiat voluptatibus.'
        ]
    ]]);
    // return 'Hello World';
});

Route::get('/contact', function () {
    // $email = 'igunnawan24@gmail.com';
    // $sosmed = 'igunawan550';
    return view('contact', ['title' => 'Contact Page']);
    // return 'Hello World';
});
