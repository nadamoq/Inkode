<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\Post;
use Illuminate\Support\Collection;

class TrendingsPost extends Component
{
    public Collection $posts;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $title)
    {
        $user = auth()->user();

        if ($user) {
            $followingIds = $user->followings()->pluck('users.id');

            $this->posts = Post::withoutGlobalScope('owner')
                ->published()
                ->whereIn('user_id', $followingIds)
                ->orderByDesc('views')
                ->limit(3)
                ->get();
        } else {
            $this->posts = collect();
        }

        if ($this->posts->isEmpty()) {
            $this->posts = Post::withoutGlobalScope('owner')
                ->published()
                ->orderByDesc('views')
                ->limit(3)
                ->get();
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.trendings-post');
    }
}
