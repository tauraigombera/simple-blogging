<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index(){
        return view('posts.index',[
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get(),
            'categories' => Category::all(),
            'currentCategory'=> Category::firstWhere('slug', request('category'))
        ]);
    }

    public function show(post $post){
        return view ('posts.show',[
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get(),
            'post' => $post
        ]);
    }
}
