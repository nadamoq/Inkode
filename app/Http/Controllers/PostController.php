<?php

namespace App\Http\Controllers;

use App\Actions\FileUpload;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        $posts=Post::query();
        $status=$request->query('status');

        $status_options = array_map(function ($value) {
            return [
                'name' => ucfirst($value),
                'count' => Post::query()->where('status', $value)->count(),
            ];
        }, [
            'published',
            'draft',
            'archived',
        ]);

        if($status && in_array($status,['published','draft','archived'])){

            $posts->where('status',$status)->with('category');
           
        }
        $posts=$posts->latest()->paginate(10);
        return view('dashboard.post.index', ['posts'=>$posts,'status_options'=>$status_options,'status'=>$status]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('dashboard.post.create',['post' => new Post(), 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request ,FileUpload $file)
    {
        //
       

        $clean= $request->validated();
        $data=array_merge([
            'user_id' => 1, 
            'slug' => Str::slug($request->post('title')),
            'status' => 'published',
            'image'=>$file->handle('cover_image','posts','public') ?? null,
        ], $clean);

        $post = Post::create($data);

       
       return redirect()->route('dashboard.posts.index')->with(['success'=>true,'message'=>'Post created successfully']);
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
        return view('dashboard.post.edit', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, FileUpload $file,Post $post)
    {
        //
        $clean = $request->validated();
        $data = array_merge([
            'user_id' => 1,
            'slug' => Str::slug($request->post('title')),
            'image'=>$file->handle('cover_image','posts','public') ?? null,
        ], $clean);

        $result=$post->update($data);

        if($result && $request->hasFile('cover_image') && $previous=$post->getPrevious()['image']){
            Storage::disk('public')->delete($previous);
        }
        return redirect()->route('dashboard.posts.index')->with(['success'=>true,'message'=>'Post updated successfully']);
    }

  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $post = Post::findOrFail($id);
        $result=$post->delete();
        if($result && $post->image){
            Storage::disk('public')->delete($post->image);
        }
        return redirect()->route('dashboard.posts.index')->with(['success'=>true,'message'=>'Post deleted successfully']);
    }
}
