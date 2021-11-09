<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
require __DIR__.'/auth.php';


Route::get('/', [PostController::class, "homePageData"]);
Route::post('/posts/save', [PostController::class, "savePost"])->name("post.save");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Post/Topics routes
Route::get('/feed', [PostController::class, "latestPost"]);
Route::get('bericht/{post:slug}', [PostController::class, "showPost"])->name("post.show");
Route::get('categories/{category:slug}', [PostController::class, "filterCategories"]);
Route::get('author/{author:username}', [PostController::class, "filterAuthors"]);