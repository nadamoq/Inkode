<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;

class CommentPolicy
{
    /**
     * Determine whether the user can update the comment.
     */
    public function update(User $user, Comment $comment): bool
    {
        return $user->id === $comment->user_id;
    }

    /**
     * Determine whether the user can delete the comment.
     */
    public function delete(User $user, Comment $comment): bool
    {
        // Owner of the comment or admin or super-admin can delete comments.
        return $user->id === $comment->user_id
            || in_array($user->type, ['admin', 'super-admin'])
            || $user->hasAbility('comments.delete');
    }
}
