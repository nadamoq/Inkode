<section class="glass-card rounded-xl p-lg transition-colors duration-300">
    <h3
        class="font-display text-headline-md text-on-surface-light dark:text-on-surface mb-lg flex items-center gap-sm">
        <span class="material-symbols-outlined text-primary dark:text-secondary"
            style="font-variation-settings: 'FILL' 1;">trending_up</span>
        {{$title}}
    </h3>
    <div class="space-y-lg">
        @foreach($posts as $post)
            <div class="flex gap-md group">
                <span
                    class="font-display text-display text-on-surface-variant-light/20 dark:text-surface-container-highest/50 leading-none">{{ sprintf('%02d', $loop->iteration) }}</span>
                <div>
                    <a href="{{ route('posts.show', $post) }}">
                        <h4
                            class="font-display font-bold text-body-lg text-on-surface-light dark:text-on-surface leading-tight group-hover:text-primary transition-colors">
                            {{ $post->title }}</h4>
                    </a>
                    <p class="dark:text-outline text-label-caps font-label-caps mt-1">
                        {{ \Illuminate\Support\Number::abbreviate($post->views) }} {{ Str::plural('READ', $post->views) }} • {{ strtoupper($post->published_at?->diffForHumans() ?? $post->created_at->diffForHumans()) }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>