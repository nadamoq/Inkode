@props([
    'user',
    'variant' => 'compact',
])

@php
    $isFollowing = $user->followers_exists ?? false;
    $classes = match ($variant) {
        'full' => 'w-full bg-primary text-on-primary font-bold py-2.5 rounded-lg transition-all hover:opacity-90 active:scale-95',
        'profile' => 'bg-primary-container text-white px-8 py-3.5 rounded-xl font-bold hover:brightness-110 active:scale-[0.98] transition-all shadow-lg shadow-primary-container/25',
        'sidebar-mobile' => 'bg-secondary text-on-secondary px-4 py-1.5 rounded-full text-xs font-bold',
        default => 'border-2 border-outline-light dark:border-primary text-on-surface-light dark:text-primary px-3 py-1 rounded-full text-xs font-bold hover:bg-primary/10 transition-colors active:scale-95',
    };
    $label = match ($variant) {
        'profile' => $isFollowing ? 'Unfollow Author' : 'Follow Author',
        default => $isFollowing ? 'Unfollow' : 'Follow',
    };
@endphp

@guest
    <a href="{{ route('login') }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $variant === 'profile' ? 'Follow Author' : 'Follow' }}</a>
@else
    @if (auth()->id() !== $user->id)
        <form method="POST" action="{{ route($isFollowing ? 'unFollow' : 'follow', $user) }}">
            @csrf
            @if ($isFollowing)
                @method('DELETE')
            @endif
            <button type="submit" aria-label="{{ $label }} {{ $user->name }}" {{ $attributes->merge(['class' => $classes]) }}>
                {{ $label }}
            </button>
        </form>
    @endif
@endguest
