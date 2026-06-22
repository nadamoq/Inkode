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
            // ->withFollowStatus()
            ->withCount(['followers', 'posts'])
            ->firstOrFail();

        return view('show-author-profile', compact('user'));
    }
}
