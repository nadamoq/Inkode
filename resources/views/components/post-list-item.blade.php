<article
    class="glass-card p-md rounded-xl flex gap-md items-start group hover:border-primary/50 transition-colors duration-300">
    <div class="w-24 h-24 md:w-32 md:h-32 rounded-lg overflow-hidden flex-shrink-0">
        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
            src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" />
    </div>
    <div class="flex-grow">
        <div class="flex gap-xs mb-xs">
            <span
                class="text-primary-container-light dark:text-tertiary text-label-caps font-label-caps">{{ $post->category->name }}</span>
            <span class="text-on-surface-variant-light dark:text-outline text-label-caps font-label-caps">

                {{$post->read_time}} MIN READ</span>
        </div>
        <h4
            class="font-display text-body-lg font-bold text-on-surface-light dark:text-on-surface mb-sm group-hover:text-primary transition-colors">
           <a href="{{ route('posts.show', $post->slug) }}" class="hover:underline">{{ $post->title }}</a>
        </h4>
        <p class="text-on-surface-variant-light dark:text-on-surface-variant text-body-md line-clamp-2 hidden md:block">
            {{ $post->description }}
        </p>
        <div class="mt-sm flex items-center justify-between">
            <div class="flex items-center gap-xs">
                <span class="text-on-surface-light dark:text-on-surface text-body-md font-bold">{{ $post->author->name }}</span>
                <span class="text-on-surface-variant-light dark:text-outline text-label-caps font-label-caps">•
                    {{ $post->publish_time }}
                </span>
            </div>
            
            <button
                class="material-symbols-outlined text-outline-light dark:text-outline hover:text-primary transition-colors">bookmark</button>
        </div>
    </div>
</article>
