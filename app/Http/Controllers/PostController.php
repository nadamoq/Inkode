<?php

namespace App\Http\Controllers;

use App\Actions\FileUpload;
use App\Actions\SyncPostTags;
use App\Events\PostViewed;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Throwable;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //


        $status = $request->query('status');

        $status_options = array_map(function ($value) {
            return [
                'name' => ucfirst($value),
                'count' => auth()->user()->posts()->where('status', $value)->count(),
            ];
        }, [
            'published',
            'draft',
            'archived',
        ]);
        $user = Auth::user();
        $posts = $user->posts();

        if ($status && in_array($status, ['published', 'draft', 'archived'])) {

            $posts->where('status', $status);
        }

        $posts = $posts->withTrashed()
                ->with('category')
                ->select(
                    'id',
                    'title',
                    'slug',
                    'excerpt',
                    'content',
                    'status',
                    'category_id',
                    'image',
                    'published_at',
                    'views',
                    'deleted_at'
                )->withCount('comments')
                ->latest()
                ->paginate(5);

        return view('dashboard.post.index', ['posts' => $posts, 'status_options' => $status_options, 'status' => $status]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        $allTags = Tag::pluck('name');
        return view('dashboard.post.create', ['post' => new Post(), 'categories' => $categories, 'allTags' => $allTags, 'existingTags' => []]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request, FileUpload $file,PostService $postService)
    {
        //
        try{
            $postService->store($request);

        }
        catch(Throwable $e){
            return  back()->withInput()->withErrors(['error'=>'Failed to create Post '.$e->getMessage()]);
    
        }
  
        return redirect()->route('dashboard.posts.index')->with(['success' => true, 'message' => 'Post created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $slug)
    {
        
        $post = Post::query()
            ->published()
            ->withoutGlobalScope('owner')
            ->slug($slug)
            ->firstOrFail();

        $more = Post::query()->withoutGlobalScope('owner')
            ->where('user_id', $post->user_id)
            ->where('slug', '!=', $post->slug)
            ->take(2);

        PostViewed::dispatch($post);

        return view('blog.posts.show', compact('post', 'more'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $post = Post::slug($slug)->firstOrFail();
        $categories = Category::all();
        $allTags = Tag::pluck('name')->toArray();
        $existingTags = $post->tags()->pluck('name')->toArray();
        return view('dashboard.post.edit', ['post' => $post, 'categories' => $categories, 'allTags' => $allTags, 'existingTags' => $existingTags]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, FileUpload $file, Post $post,PostService $postService)
    {   
        $postService->update($request,$post);
        return redirect()->route('dashboard.posts.index')->with(['success' => true, 'message' => 'Post updated successfully']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $result = $post->delete();

        return redirect()->route('dashboard.posts.index')->with(['success' => $result, 'message' => 'Post deleted successfully']);
    }
    public function restore(string $slug)
    {
        $post = Post::onlyTrashed()->slug($slug)->firstOrFail();
        $post->restore();

        // PRG: POST Redirect GET
        return redirect()->route('dashboard.posts.index')
            ->with('status', 'Post restored!');
    }
    public function forceDelete(string $slug)
    {
        $post = Post::onlyTrashed()->slug($slug)->firstOrFail();

        $post->forceDelete();

       

        // PRG: POST Redirect GET
        return redirect()->route('dashboard.posts.index')
            ->with('status', 'Post permanently deleted!');
    }
}
