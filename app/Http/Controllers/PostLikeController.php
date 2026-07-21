<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    /**
     * Toggle the like status of a post.
     */
    public function toggle(Request $request, Post $post): JsonResponse|RedirectResponse
    {
        $user = $request->user();

        if (! $user) {
            if ($request->wantsJson()) {
                return response()->json(['message' => 'Unauthenticated.'], 401);
            }

            return redirect()->route('login');
        }

        $result = $user->likedPosts()->toggle($post->id);
        $liked = count($result['attached']) > 0;

        // Refresh the post's likedByUsers count
        $likesCount = $post->likedByUsers()->count();

        if ($request->expectsJson() || $request->ajax() || $request->wantsJson()) {
            return response()->json([
                'liked' => $liked,
                'likes_count' => $likesCount,
            ]);
        }

        return back();
    }
}
