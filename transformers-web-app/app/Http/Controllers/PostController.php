<?php

namespace App\Http\Controllers;

use Faker\Factory as Faker;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    /* Post List Functions */
    public function latestPost() {
        return view('posts', [
            'posts' => Post::latest()->get()
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
    
    /* Single Post Functions */
    public function showPost (Post $post) {
        return view('post', [
            'post' => $post
        ]);
    }

    /* Other Functions */
    public function homePageData () {
        return view('welcome', [
            'categories' => Category::all()
        ]);
    }

    public function savePost (Request $request) {
        $category = Category::where('name', $request->category)->get('id')[0]->id;

        Post::create([
            'user_id' => 1,
            'category_id' => $category,
            'title' => $request->title,
            'slug' => Faker::create()->slug,
            'excerpt' => $request->excerpt,
            'body' => $request->body
        ]);

        return redirect('/feed');
    }
}
