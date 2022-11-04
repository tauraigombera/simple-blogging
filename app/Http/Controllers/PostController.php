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

    public function create(){
        $categories = Category::all();
        return view ('posts.create', compact('categories'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required'],
            'thumbnail' => ['required','image'],
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => ['required'],
            'body' => ['required'],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth() -> id();

        $path = null;
        if(request()->hasFile('thumbnail')){
            $path = (request()->file('thumbnail')->store('thumbnails', 'public'));
        }

        $attributes['thumbnail'] = $path;

        Post::create($attributes);

        return redirect('/');
    }

    public function show(post $post){
        return view ('posts.show',[
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get(),
            'post' => $post
        ]);
    }
}
