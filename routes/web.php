<?php

use App\Models\Post;
use Illuminate\Support\Arr;
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
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
    // return 'Hello World';
});

// Wildcard

Route::get('/posts/{post:slug}', function(Post $post){
    // $post = Post::find($id);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
    // dd($post);
});

Route::get('/contact', function () {
    // $email = 'igunnawan24@gmail.com';
    // $sosmed = 'igunawan550';
    return view('contact', ['title' => 'Contact Page']);
    // return 'Hello World';
});
