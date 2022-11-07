<?php

namespace App\Http\Controllers;

use App\Models\Post;
use http\Env\Response;
use Illuminate\Http\Request;

class PostLikesController extends Controller
{
    public function _construct()
    {
        $this->middleware(['auth']);
    }

    public function store(Post $post)
    {
        if($post->likedBy(request()->user())){
            return response(null,409);
        }

        $post->likes()->create([
            'user_id' => request()->user()->id,
        ]);
        return back();
    }

    public function destroy(Post $post)
    {
        request()->user()->likes()->where('post_id', $post->id)->delete();
        return back();
    }
}
