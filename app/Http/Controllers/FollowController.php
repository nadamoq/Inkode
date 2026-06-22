<?php

namespace App\Http\Controllers;

use App\Jobs\SendNotification;
use App\Models\User;
use App\Notifications\FollowNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FollowController extends Controller
{
    //
    public function store(Request $request, User $user)
    {
        $follower = $request->user();
        $exists = $follower->followings()->where('user_id', $user->id)->exists();
        if (!$exists && $user->id != $follower->id) {

            $follower->followings()->attach($user->id, ['id' => Str::uuid()]);

            dispatch( new SendNotification( new FollowNotification($user,$follower),$user))->onConnection('notifications');
        }
        return redirect()->back();
    }
    public function destroy(Request $request, User $user)
    {

        $follower = $request->user();

        $follower->followings()->detach($user->id);
        return redirect()->back();
    }
}
