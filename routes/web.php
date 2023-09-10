<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\User;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/',function() {
    return view('home', [
        "title" => "home",
        "active" => "home"
    ]);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);


Route::get('/blog',[PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);


// Route::get('/authors/{author:username}', function(User $author){
//         return view('blog',[
//             'title' => "This is $author->username page",
//             "active"=>'post',
//             'posts' => $author->posts->load('category', 'author')
//         ]);
// });
// Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);