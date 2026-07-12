@props(['comment'])

<div class="glass-card p-4 rounded-xl border border-outline-variant transition-colors mb-4 relative" id="comment-container-{{ $comment->id }}">
    <!-- View Mode -->
    <div id="comment-view-{{ $comment->id }}">
        <div class="flex items-start justify-between">
            <div class="flex items-center gap-3">
                <img class="w-10 h-10 rounded-full object-cover border border-outline-variant-light dark:border-outline-variant"
                     src="{{ $comment->user ? $comment->user->avatar : asset('assets/images/DefaultUser.png') }}" 
                     alt="{{ $comment->user_name }}" />
                <div>
                    <h5 class="font-display font-bold text-on-surface-light dark:text-on-surface text-sm">
                        {{ $comment->user_name }}
                    </h5>
                    <p class="text-xs text-on-surface-variant-light dark:text-outline">
                        {{ $comment->created_at->diffForHumans() }}
                    </p>
                </div>
            </div>

            <!-- Edit/Delete Action Buttons -->
            <div class="flex items-center gap-2">
                @can('update', $comment)
                    <button type="button" 
                            onclick="document.getElementById('comment-view-{{ $comment->id }}').classList.add('hidden'); document.getElementById('comment-edit-form-{{ $comment->id }}').classList.remove('hidden');" 
                            class="material-symbols-outlined text-sm text-outline-light dark:text-outline hover:text-primary transition-colors cursor-pointer"
                            title="Edit Comment">
                        edit
                    </button>
                @endcan

                @can('delete', $comment)
                    <form action="{{ route('comments.destroy', $comment) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this comment?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="material-symbols-outlined text-sm text-outline-light dark:text-outline hover:text-error transition-colors cursor-pointer"
                                title="Delete Comment">
                            delete
                        </button>
                    </form>
                @endcan
            </div>
        </div>

        <div class="mt-3 text-on-surface-variant-light dark:text-on-surface-variant text-sm whitespace-pre-line">
            {{ $comment->content }}
        </div>
    </div>

    <!-- Edit Mode Form (Hidden by default) -->
    @can('update', $comment)
        <form id="comment-edit-form-{{ $comment->id }}" class="hidden space-y-3" action="{{ route('comments.update', $comment) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div>
                <label for="content-{{ $comment->id }}" class="sr-only">Edit Comment</label>
                <textarea id="content-{{ $comment->id }}" name="content" rows="3" 
                          class="w-full rounded-lg bg-surface-container border border-outline-variant-light dark:border-outline-variant p-3 text-on-surface text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors resize-none"
                          required>{{ $comment->content }}</textarea>
            </div>

            <div class="flex items-center justify-end gap-2 text-xs">
                <button type="button" 
                        onclick="document.getElementById('comment-view-{{ $comment->id }}').classList.remove('hidden'); document.getElementById('comment-edit-form-{{ $comment->id }}').classList.add('hidden');" 
                        class="px-3 py-1.5 rounded-full border border-outline text-on-surface-variant hover:bg-surface-container transition-colors cursor-pointer">
                    Cancel
                </button>
                <button type="submit" 
                        class="px-3 py-1.5 rounded-full bg-primary text-on-primary font-semibold hover:opacity-90 transition-colors cursor-pointer">
                    Save Changes
                </button>
            </div>
        </form>
    @endcan
</div>
