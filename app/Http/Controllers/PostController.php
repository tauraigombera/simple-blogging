<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index(){
        return view('posts.index',[
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get(),

            'trendingPosts' => Post::withCount('likes')->whereHas('likes', function ($query) {
                $query->where('created_at', '>=', Carbon::now()->subWeeks(1));
            })->orderBy('likes_count', 'desc')->paginate(6),

            'categories' => Category::all(),
            'currentCategory'=> Category::firstWhere('slug', request('category')),
        ]);
    }

    public function show(post $post){
        return view ('posts.show',[
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get(),
            'post' => $post
        ]);
    }
}
