@props(['post'])

@php
    $comments = $post->comments()->with('user')->oldest()->get();
@endphp

<section class="mt-12 pt-8 border-t border-outline-variant-light dark:border-outline-variant/10">
    <div class="flex items-center justify-between mb-6">
        <h3 class="font-display text-headline-sm text-on-surface-light dark:text-primary">
            Discussion ({{ $comments->count() }})
        </h3>
    </div>

    <!-- Error/Success Messages -->
    @if ($errors->any())
        <div class="mb-4 p-4 bg-error/15 text-error text-sm rounded-lg">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="mb-4 p-4 bg-success/15 text-success text-sm rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <!-- Comment Creation Form -->
    <div class="mb-8">
        @auth
            <form action="{{ route('comments.store', $post) }}" method="POST" class="space-y-4">
                @csrf
                <div class="flex gap-4">
                    <img class="w-10 h-10 rounded-full object-cover border border-outline-variant-light dark:border-outline-variant"
                         src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}" />
                    <div class="flex-grow">
                        <label for="comment-content" class="sr-only">Add a comment</label>
                        <textarea id="comment-content" name="content" rows="3" 
                                  placeholder="Share your thoughts on this article..."
                                  class="w-full rounded-xl bg-surface-container border border-outline-variant-light dark:border-outline-variant p-4 text-on-surface text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors resize-none"
                                  required>{{ old('content') }}</textarea>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" 
                            class="px-6 py-2.5 rounded-full bg-primary text-on-primary font-semibold hover:opacity-90 transition-all text-sm cursor-pointer shadow-md">
                        Post Comment
                    </button>
                </div>
            </form>
        @else
            <div class="glass-card p-6 rounded-xl border border-dashed border-outline-variant text-center">
                <p class="text-on-surface-variant-light dark:text-on-surface-variant text-sm mb-3">
                    You must be signed in to add comments to this article.
                </p>
                <a href="{{ route('login') }}" 
                   class="inline-block px-6 py-2 rounded-full bg-primary text-on-primary font-semibold hover:opacity-90 transition-all text-sm">
                    Sign In to Comment
                </a>
            </div>
        @endauth
    </div>

    <!-- Comments List -->
    <div class="space-y-4">
        @forelse($comments as $comment)
            <x-comment-item :comment="$comment" />
        @empty
            <div class="text-center py-8 text-on-surface-variant-light dark:text-outline">
                <span class="material-symbols-outlined text-4xl mb-2 opacity-50">forum</span>
                <p class="text-sm">No comments yet. Be the first to share your thoughts!</p>
            </div>
        @endforelse
    </div>
</section>
