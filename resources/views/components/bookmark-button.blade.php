@props(['post'])
@php
    $isBookmarked = auth()->check() && $post->isBookmarkedBy(auth()->user());
@endphp
<form action="{{ $isBookmarked ? route('bookmark.destroy', $post) : route('bookmark.store', $post) }}" method="POST" class="inline">
    @csrf
    @if($isBookmarked)
        @method('DELETE')
    @endif
    <button type="submit" {{ $attributes->merge(['class' => 'cursor-pointer select-none']) }}>
        <span class="material-symbols-outlined transition-colors {{ $isBookmarked ? 'text-primary' : '' }}" 
              @if($isBookmarked) style="font-variation-settings: 'FILL' 1;" @endif>
            bookmark
        </span>
    </button>
</form>
