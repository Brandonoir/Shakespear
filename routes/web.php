<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\userController;

Route::get('/', function () {
    $blogs = Post::all();
    return view('home', ['blogs' => $blogs]);
});
Route::get('/personal', function () {
    $blogs = auth()->user()->userPersonalPost()->latest()->get();
    return view('personal', ['blogs' => $blogs]);
});

//authentication related routes
Route::post('/register', [userController::class, 'register']);
Route::post('/logout', [userController::class, 'logout']);
Route::post('/login', [userController::class, 'login']);

//post related routes
Route::post('/compose-blog', [postController::class, 'showComposeScreen']);
Route::post('/createPost', [postController::class, 'createPost']);
Route::get('/edit-post/{post}', [postController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [postController::class, 'commitEditPost']);
Route::delete('/delete-post/{post}', [postController::class, 'deletePost']);