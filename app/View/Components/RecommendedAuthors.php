<?php

namespace App\View\Components;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class RecommendedAuthors extends Component
{
    /**
     * Create a new component instance.
     */

    public  $authors;

    public function __construct(public string  $title = 'Reccomended Authors', public $count = 1,) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        //بجيب اليوزرز اللي بتابعهم عشان استثنيهم
        $this->authors = User::query()
            ->withExists([
                'followers' => function ($q) {
                    $q->where('follower_id', Auth::id() ?? 0);
                }
            ])
            ->where('id', '<>', Auth::id() ?? 0)
            ->limit(20)
            ->get();
        return view('components.recommended-authors');
    }
}
