<?php

namespace App\Http\Controllers\Api\V1;

use App\Enums\PostStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Throwable;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::published()->with('category')->paginate();
        return PostResource::collection($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request, PostService $postService)
    {
        //
        try {
            /**
             * @var \App\Models\User
             */
            $user = Auth::guard('sanctum')->user();
            if (! $user->currentAccessToken()->can('post.create')) {
                return response()->json(['error' => 'unauthorized', 'message' => 'you are not allowed'], 403);
            }


            $post = $postService->store($request);
        } catch (Throwable $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage(),], Response::HTTP_BAD_REQUEST);
        }

        return response()->json(['status' => 'success', 'message' => 'Post created successfully', 'post' => new PostResource($post->refresh())], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        if ($post->status != PostStatus::Published) {
            return  Response::HTTP_NOT_FOUND;
        }
        return $post->load(['category:id,name', 'author:id,username']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post, PostService $postService)
    {
        //
        try {

            $postService->update($request, $post);
        } catch (Throwable $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage(),], Response::HTTP_BAD_REQUEST);
        }

        return response()->json(['status' => 'success', 'message' => 'Post updated successfully'], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return Response::HTTP_NO_CONTENT;
    }
}
