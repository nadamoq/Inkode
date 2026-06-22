<?php

namespace App\Observers;

use App\Enums\PostStatus;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class PostObserver
{
    /**
     * Handle the post "created" event.
     */
    public function creating(post $post): void
    {
        //
        $post->slug=Str::slug($post->title);
        $post->status=PostStatus::Published;
        $post->user_id=Auth::id()??3;
    }

    /**
     * Handle the post "updated" event.
     */
    public function updating(post $post): void
    {
        //
        if($post->isDirty('title')){

            $post->slug=Str::slug($post->title);
        }

    }

    /**
     * Handle the post "deleted" event.
     */
    public function deleted(post $post): void
    {
        //
        $post->status=PostStatus::Archived;
    }

    /**
     * Handle the post "restored" event.
     */
    public function restored(post $post): void
    {
        //
         $post->status=PostStatus::Published;
    }

    /**
     * Handle the post "force deleted" event.
     */
    public function forceDeleted(post $post): void
    {
        //
         if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
    }
}
