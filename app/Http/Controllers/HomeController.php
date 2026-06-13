<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $posts=Post::withoutGlobalScope('owner')->with('category', 'author','comments')->latest()->paginate(5);
        $post=Post::withoutGlobalScope('owner')->with('category','tags')->latest()->first();
        $tags=Tag::latest()->limit(10)->get();
        return view('blog.home',[
            'posts' => $posts,
            'post' => $post,
            'tags' => $tags
        ]);
    }
}
