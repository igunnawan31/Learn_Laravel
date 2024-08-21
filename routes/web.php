<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
    // $posts = Post::all();
    // dump(request('search'));

    // $posts = Post::latest();

    // if(request('search')) {
    //     $posts->where('title', 'like', '%' . request('search') . '%');
    // }

    // $posts = Post::with(['author', 'category'])->latest()->get(); 
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::filter(request(['search'
    ,'category', 'author']))->latest()->get()]);
    // return 'Hello World';
});

// Wildcard

Route::get('/posts/{post:slug}', function(Post $post){
    // $post = Post::find($id);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
    // dd($post);
});

Route::get('/authors/{user:username}', function(User $user){
    // $post = Post::find($id);
    // $posts = $user->release->load('category', 'author');
    return view('posts', ['title' => count($user->release) . ' Articles by ' . $user->name, 'posts' => $user->release]);
    // dd($post);
});

Route::get('/categories/{category:name}', function(Category $category){
    // $post = Post::find($id);
    // $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => count($category->posts) . ' Categories for ' . $category->name, 'posts' => $category->posts]);
    // dd($post);
});

Route::get('/contact', function () {
    // $email = 'igunnawan24@gmail.com';
    // $sosmed = 'igunawan550';
    return view('contact', ['title' => 'Contact Page']);
    // return 'Hello World';
});
