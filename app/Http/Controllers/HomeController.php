<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //

        $key='home-page-'.$request->query('page',1);
        $posts=Cache::get($key);
  $post = Post::withoutGlobalScope('owner')->with('category', 'tags')->published()->orderByDesc('views')->first();
          
        if(!$posts){

            $posts = Post::withoutGlobalScope('owner')->with('category', 'author', 'comments')->where('id', '<>', $post->id??0)->published()->where('user_id', '!=', auth()->id ?? 1)->latest()->paginate(5);
            Cache::put($key,$posts,Carbon::now()->addMinutes(2));
            
        }
       
        $tags = Tag::latest()->limit(10)->get();

        return view('blog.home', [
            'posts' => $posts,
            'post' => $post,
            'tags' => $tags,
        ]);
    }
}
