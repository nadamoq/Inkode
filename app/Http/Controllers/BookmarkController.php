<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    /**
     * Bookmark a post.
     */
    public function store(Request $request, Post $post): RedirectResponse
    {
        $user = $request->user();

        // Check if already bookmarked
        if (! $user->bookmarkedPosts()->where('post_id', $post->id)->exists()) {
            $user->bookmarkedPosts()->attach($post->id);
        }

        return back();
    }

    /**
     * Remove a post from bookmarks.
     */
    public function destroy(Request $request, Post $post): RedirectResponse
    {
        $user = $request->user();

        $user->bookmarkedPosts()->detach($post->id);

        return back();
    }
}
