<?php

namespace App\Http\Controllers\User;

use App\Events\PostViewed;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Scopes\OwnerScope;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
     public function index()
    {
        $posts = Post::query()->published()->latest()->get();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(string $slug)
    {
        $post = Post::query()
            ->with('comments')
            ->published()
            ->slug($slug)
            ->firstOrFail();
        $morePosts=Post::where('user_id',$post->user_id)
                        ->where('id','!=',$post->id)
                        ->published()
                        ->take(2);
        PostViewed::dispatch($post);
        return view('blog.posts.show', [
            'post' => $post,'more'=>$morePosts
        ]);
    }
}
