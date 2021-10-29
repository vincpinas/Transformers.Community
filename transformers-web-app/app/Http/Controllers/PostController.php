<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function latestPost() {
        return view('posts', [
            'posts' => Post::latest()->get()
        ]);
    }

    public function showPost (Post $post) {
        return view('post', [
            'post' => $post
        ]);
    }

    public function filterAuthors (User $author) {
        return view('posts', [
            'posts' => $author->posts
        ]);
    }

    public function filterCategories (Category $category) {
        return view('posts', [
            'posts' => $category->posts
        ]);
    }
}
