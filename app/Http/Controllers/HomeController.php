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
        $post=Post::withoutGlobalScope('owner')->with('category','tags')->published()->latest()->first();
        $posts=Post::withoutGlobalScope('owner')->with('category', 'author','comments')->where('id','<>',$post->id)->published()->where('user_id','!=',auth()->id??1)->latest()->paginate(5);
       
        $tags=Tag::latest()->limit(10)->get();
        return view('blog.home',[
            'posts' => $posts,
            'post' => $post,
            'tags' => $tags
        ]);
    }
}
