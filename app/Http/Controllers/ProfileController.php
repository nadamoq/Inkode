<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request, string $username)
    {
        $user = User::query()
            ->where('username', $username)
            ->withCount([
                'followers',
                'posts as published_posts_count' => fn ($query) => $query->published(),
            ])
            ->withSum(['posts as total_views' => fn ($query) => $query->published()], 'views')
            ->with(['posts' => fn ($query) => $query->published()->latest()])
            ->firstOrFail();

        return view('show-author-profile', compact('user'));
    }
}
