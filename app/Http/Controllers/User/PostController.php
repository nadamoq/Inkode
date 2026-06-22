<?php

namespace App\Http\Controllers\User;

use App\Events\PostViewed;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Scopes\OwnerScope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Broadcast;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::query()->withoutGlobalScope('owner')->published()->latest()->get();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(string $slug)
    {
        $post = Post::query()
            ->with(['comments', 'author'])
            ->published()
            ->slug($slug)
            ->withoutGlobalScope('owner')
            ->firstOrFail();
        $more = Post::where('user_id', $post->user_id)
            ->where('id', '!=', $post->id)
            ->withoutGlobalScope('owner')
            ->published()
            ->take(2);
        if (!($post->user_id == auth()->id())) {
            Broadcast(new PostViewed($post))->toOthers();
        }
        return view('blog.posts.show', [
            'post' => $post,
            'more' => $more,
        ]);
    }
}
