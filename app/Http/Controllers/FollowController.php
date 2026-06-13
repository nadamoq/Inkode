<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\FollowNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FollowController extends Controller
{
    //
    public function store(Request $request, string $id)
    {
        $follower = $request->user();
        $user = User::query()->findOrFail($id);
        $exists = $follower->followings()->where('user_id', $user->id)->exists();
        if (!$exists && $user->id != $follower->id) {

            $follower->followings()->attach($user->id, ['id' => Str::uuid()]);

            $user->notify(new FollowNotification($user, $follower));
        }
        return redirect()->back();
    }
    public function destroy(Request $request, string $id)
    {

        $follower = $request->user();
        $user = User::query()->findOrFail($id);

        $follower->followings()->detach($user->id);
        return redirect()->back();
    }
}
