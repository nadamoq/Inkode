@props(['post', 'layout' => 'inline'])

@php
    $isLiked = auth()->check() && $post->isLikedBy(auth()->user());
    $likesCount = $post->liked_by_users_count ?? $post->likedByUsers()->count();
@endphp

@if ($layout === 'stacked')
    <div class="flex flex-col items-center gap-1 group cursor-pointer like-button-container" data-post-id="{{ $post->id }}">
        <form action="{{ route('posts.like', $post) }}" method="POST" class="like-button-form m-0 p-0">
            @csrf
            <button type="submit" class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-primary/20 hover:text-primary transition-colors {{ $isLiked ? 'text-primary' : 'text-on-surface-variant' }} like-btn-trigger">
                <span class="material-symbols-outlined like-icon" @if($isLiked) style="font-variation-settings: 'FILL' 1;" @endif>favorite</span>
            </button>
        </form>
        <span class="text-xs font-semibold text-secondary like-count">{{ $likesCount }}</span>
    </div>
@else
    <div class="inline-flex items-center like-button-container" data-post-id="{{ $post->id }}">
        <form action="{{ route('posts.like', $post) }}" method="POST" class="like-button-form m-0 p-0 inline">
            @csrf
            <button type="submit" class="inline-flex items-center gap-1 text-on-surface-variant hover:text-primary transition-colors text-label-caps font-label-caps like-btn-trigger">
                <span class="material-symbols-outlined text-[18px] align-middle like-icon {{ $isLiked ? 'text-primary' : '' }}" @if($isLiked) style="font-variation-settings: 'FILL' 1;" @endif>favorite</span>
                <span class="align-middle like-count-text"><span class="like-count">{{ $likesCount }}</span> {{ $likesCount === 1 ? 'LIKE' : 'LIKES' }}</span>
            </button>
        </form>
    </div>
@endif

@once
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (!window.likeButtonScriptInitialized) {
            window.likeButtonScriptInitialized = true;
            document.addEventListener('submit', function(e) {
                if (e.target && e.target.classList.contains('like-button-form')) {
                    e.preventDefault();
                    const form = e.target;
                    const container = form.closest('.like-button-container');
                    const postId = container.getAttribute('data-post-id');
                    const url = form.action;
                    const token = form.querySelector('input[name="_token"]').value;

                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': token
                        },
                        body: JSON.stringify({})
                    })
                    .then(async response => {
                        if (response.status === 401) {
                            window.location.href = "{{ route('login') }}";
                            return;
                        }

                        if (!response.ok) {
                            const text = await response.text();
                            console.error('Like request failed:', response.status, text);
                            return;
                        }

                        return response.json();
                    })
                    .then(data => {
                        if (!data) return;
                        
                        // Find all containers for this post on the page to keep them in sync
                        const containers = document.querySelectorAll(`.like-button-container[data-post-id="${postId}"]`);
                        containers.forEach(c => {
                            const icon = c.querySelector('.like-icon');
                            const counts = c.querySelectorAll('.like-count');
                            const triggers = c.querySelectorAll('.like-btn-trigger');
                            const countTexts = c.querySelectorAll('.like-count-text');

                            // Toggle icon fill & classes
                            if (data.liked) {
                                icon.style.fontVariationSettings = "'FILL' 1";
                                icon.classList.add('text-primary');
                                triggers.forEach(t => t.classList.add('text-primary'));
                                window.location.hrefreload()
                            } else {
                                icon.style.fontVariationSettings = "";
                                icon.classList.remove('text-primary');
                                triggers.forEach(t => t.classList.remove('text-primary'));
                            }

                            // Update count
                            counts.forEach(countSpan => {
                                countSpan.textContent = data.likes_count;
                            });

                            // Update count label (like/likes)
                            countTexts.forEach(label => {
                                label.innerHTML = `<span class="like-count">${data.likes_count}</span> ${data.likes_count === 1 ? 'LIKE' : 'LIKES'}`;
                            });
                        });
                    })
                    .catch(error => console.error('Error toggling like:', error));
                }
            });
        }
    });
</script>
@endonce
