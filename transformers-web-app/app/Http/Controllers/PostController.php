<?php

namespace App\Http\Controllers;

use Faker\Factory as Faker;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /* Post List Functions */
    public function latestPost() {
        if (Auth::check()) {
            return view('posts', [
                'posts' => Post::latest()->get(),
                'categories' => Category::all()
            ]);
        } else {
            return view('posts', [
                'posts' => Post::latest()->where('user_id', '=', 1)->get(),
                'categories' => Category::all()
            ]);
        }
    }

    public function filterAuthors (User $author) {
        if (Auth::check()) {
            return view('posts', [
                'posts' => $author->posts
            ]);
        } else {

        }
    }

    public function filterCategories (Category $category) {
        if (Auth::check()) {
            return view('posts', [
                'posts' => $category->posts
            ]);
        } else {

        }
    }
    
    /* Single Post Functions */
    public function showPost (Post $post) {
        if (Auth::check()) {
            return view('post', [
                'post' => $post
            ]);
        } else if(Auth::check() == false && $post->author->name == 'Anoniem') {
            return view('post', [
                'post' => $post
            ]);
        } else {
            return redirect('/feed');
        }
    }

    /* Other Functions */
    public function homePageData () {
        return view('welcome', [
            'categories' => Category::all()
        ]);
    }

    public function savePost (Request $request) {
        $category = Category::where('name', $request->category)->get('id')[0]->id;

        if (Auth::check()) {
            Post::create([
                'user_id' => Auth::id(),
                'category_id' => $category,
                'title' => $request->title,
                'slug' => Faker::create()->slug,
                'excerpt' => $request->excerpt,
                'body' => $request->body
            ]);
        } else {
            Post::create([
                'user_id' => 1,
                'category_id' => $category,
                'title' => $request->title,
                'slug' => Faker::create()->slug,
                'excerpt' => $request->excerpt,
                'body' => $request->body
            ]);
        }

        return redirect('/feed');
    }
}
