<section class="glass-card rounded-xl p-lg transition-colors duration-300">
    <h3 class="font-display text-headline-md text-on-surface-light dark:text-on-surface mb-lg">{{ $title ?? 'Authors' }}
    </h3>

    <div class="space-y-md">

        @foreach ($authors as $author)
            <form method="POST" action="{{ route($author->followers_exists ? 'unFollow' : 'follow', $author->id) }}">
                @csrf
                @if ($author->followers_exists)
                    @method('delete')
                @endif
                <div class="flex items-center justify-between">
                    <a href="{{ route('user.profile', $author->id) }}">
                        <div class="flex items-center gap-sm">
                            <img class="w-12 h-12 rounded-full border border-outline-variant-light dark:border-outline-variant"
                                src="{{ $author->avatar }}" />
                            <div class="flex flex-col">
                                <p class="m-0 font-display font-bold text-on-surface-light dark:text-on-surface">
                                    {{ $author->name }}</p>
                                <p class="m-0 text-xs text-on-surface-variant dark:text-outline">
                                    {{ '@' . $author->username }}</p>
                            </div>
                        </div>
                    </a>
                    <div class="ml-4">
                        <button type="submit" aria-label="Follow {{ $author->name }}"
                            class="border-2 border-outline-light dark:border-primary text-on-surface-light dark:text-primary px-3 py-1 rounded-full text-xs font-bold hover:bg-primary/10 transition-colors active:scale-95">
                            {{ $author->followers_exists ? 'Unfollow' : 'Follow' }} </button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>


</section>
