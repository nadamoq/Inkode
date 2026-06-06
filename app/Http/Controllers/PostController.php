<?php

namespace App\Http\Controllers;

use App\Actions\FileUpload;
use App\Actions\SyncPostTags;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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

            $posts->where('status', $status)->with('category');
        }

        $posts = $posts->select('id', 'title', 'excerpt', 'content', 'status', 'category_id', 'image', 'published_at', 'views')->withCount('comments')->latest()->paginate(5);

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
    public function store(PostRequest $request, FileUpload $file, SyncPostTags $Synctags)
    {
        //
        $clean = $request->validated();
        DB::beginTransaction();

        try {

            $data = array_merge([
                'user_id' => auth()->id(),
                'slug' => Str::slug($request->post('title')),
                'status' => 'published',
                'image' => $file->handle('cover_image', 'posts', 'public') ?? null,
                'published_at' => now(),
            ], $clean);

            $post = Post::create($data);
            $Synctags->handle($post, $data['tags']);

            DB::commit();
        } catch (Throwable $e) {

            DB::rollBack();
            return back()->withInput()->withErrors(['error' => 'Failed to create Post' . $e->getMessage()]);
        }

        return redirect()->route('dashboard.posts.index')->with(['success' => true, 'message' => 'Post created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        $categories = Category::all();
        $allTags = Tag::pluck('name')->toArray();
        $existingTags = $post->tags()->pluck('name')->toArray();
        return view('dashboard.post.edit', ['post' => $post, 'categories' => $categories, 'allTags' => $allTags, 'existingTags' => $existingTags]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, FileUpload $file, Post $post)
    {
        //
        $clean = $request->validated();
        $data = array_merge([
            'user_id' => 1,
            'slug' => Str::slug($request->post('title')),
            'image' => $file->handle('cover_image', 'posts', 'public') ?? null,
        ], $clean);

        $result = $post->update($data);

        if ($result && $request->hasFile('cover_image') && $previous = $post->getOriginal('image')) {
            Storage::disk('public')->delete($previous);
        }

        $tags = json_decode($request->input('tags', '[]'), true);
        if (!is_array($tags)) {
            $tags = [];
        }

        $tagIds = [];
        foreach (array_filter($tags) as $tag) {
            $tagIds[] = Tag::firstOrCreate(['name' => $tag])->id;
        }

        $post->tags()->sync($tagIds);
        return redirect()->route('dashboard.posts.index')->with(['success' => true, 'message' => 'Post updated successfully']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $post = Post::findOrFail($id);
        $result = $post->delete();
        if ($result && $post->image) {
            Storage::disk('public')->delete($post->image);
        }
        return redirect()->route('dashboard.posts.index')->with(['success' => true, 'message' => 'Post deleted successfully']);
    }
}
