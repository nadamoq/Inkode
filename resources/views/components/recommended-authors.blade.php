<section class="glass-card rounded-xl p-lg transition-colors duration-300">
    <h3 class="font-display text-headline-md text-on-surface-light dark:text-on-surface mb-lg">{{ $title ?? 'Authors' }}
    </h3>

    <div class="space-y-md">
        @foreach ($authors as $author)
            <div class="flex items-center justify-between">
                <a href="{{ route('user.profile', $author->username) }}">
                    <div class="flex items-center gap-sm">
                        <img class="w-12 h-12 rounded-full border border-outline-variant-light dark:border-outline-variant object-cover"
                            src="{{ $author->avatar }}" alt="{{ $author->name }}" />
                        <div class="flex flex-col">
                            <p class="m-0 font-display font-bold text-on-surface-light dark:text-on-surface">
                                {{ $author->name }}</p>
                            <p class="m-0 text-xs text-on-surface-variant dark:text-outline">
                                {{ '@' . $author->username }}</p>
                        </div>
                    </div>
                </a>
                <div class="ml-4">
                    <x-follow-button :user="$author" />
                </div>
            </div>
        @endforeach
    </div>
</section>
