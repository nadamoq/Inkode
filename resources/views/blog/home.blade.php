<x-layouts.front>

    <div class="grid grid-cols-12 gap-xl">
        <!-- Main Content Area -->
        <div class="col-span-12 lg:col-span-8 space-y-xl">
            <!-- Featured Article -->
            <section class="group relative">
                <a href="{{ route('posts.show', $post->slug) }}">
                    <div class="featured-border rounded-xl overflow-hidden glass-card transition-all duration-300">
                        <div class="flex flex-col md:flex-row h-full">
                            <div class="md:w-1/2 overflow-hidden h-[300px] md:h-auto">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                    src="{{ $post->thumbnailUrl }}" alt="{{ $post->title }}" />
                            </div>
                            <div class="md:w-1/2 p-lg flex flex-col justify-center">
                                <div class="flex gap-xs mb-sm">
                                    <span
                                        class="bg-primary/10 px-xs py-1 rounded-full text-label-caps font-label-caps text-on-primary-fixed-variant">
                                        #{{ $post->tags->first()->name }}</span>
                                    <span
                                        class="dark:text-on-surface-variant text-label-caps font-label-caps text-on-surface-light">12
                                        MIN READ</span>
                                </div>
                                <h2
                                    class="font-display text-headline-lg text-on-surface-light dark:text-on-surface mb-md group-hover:text-primary transition-colors">
                                    {{ $post->title }}</h2>
                                <p
                                    class="text-on-surface-variant-light dark:text-on-surface-variant font-body-md mb-lg line-clamp-3">
                                    {{ $post->excerpt }}
                                </p>
                                <div class="flex items-center gap-sm">
                                    <img class="w-10 h-10 rounded-full object-cover border border-outline-variant-light dark:border-outline-variant"
                                        src="{{ $post->author->avatar }}" />
                                    <div>
                                        <p
                                            class="font-display font-bold text-on-surface-light dark:text-on-surface text-body-md">
                                            {{ $post->author->name }}</p>
                                        <p
                                            class="text-on-surface-variant-light dark:text-on-surface-variant text-label-caps font-label-caps">
                                            PRINCIPAL ARCHITECT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
            <section class="py-md">
                <h3 class="font-display text-label-caps dark:text-outline mb-sm text-on-surface-variant-light">
                    POPULAR TOPICS</h3>

                <div class="flex gap-sm overflow-x-auto pb-2 scrollbar-hide no-scrollbar">
                    @foreach ($tags as $tag)
                        <a class="whitespace-nowrap px-md py-2 rounded-full bg-white dark:bg-surface-container-high border border-outline-light/40 dark:border-outline-variant/30 text-on-surface-light font-medium dark:text-on-surface hover:border-primary transition-colors text-body-md"
                            href="#">#{{ $tag->name }}</a>
                    @endforeach

                </div>
            </section>

            <section class="space-y-md">
                <div
                    class="flex justify-between items-end border-b border-outline-variant-light dark:border-outline-variant/10 pb-md">
                    <h3 class="font-display text-headline-md dark:text-primary text-on-surface-light">Explore</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-md">
                    <!-- Top Collections Card -->
                    <div
                        class="glass-card p-md rounded-xl group cursor-pointer hover:border-primary/50 transition-all duration-300">
                        <div class="flex items-center justify-between mb-sm">
                            <div class="flex -space-x-2">
                                <div
                                    class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center border border-primary/20">
                                    <span
                                        class="material-symbols-outlined text-primary text-[18px]">library_books</span>
                                </div>
                                <div
                                    class="w-8 h-8 rounded-lg bg-secondary-container-light/30 dark:bg-secondary/20 flex items-center justify-center border border-secondary/30 backdrop-blur-sm">
                                    <span
                                        class="material-symbols-outlined text-primary dark:text-secondary text-[18px]">auto_stories</span>
                                </div>
                            </div>
                            <span
                                class="material-symbols-outlined text-outline-light dark:text-outline text-sm group-hover:text-primary transition-colors">arrow_forward</span>
                        </div>
                        <h4
                            class="font-display font-bold text-on-surface-light dark:text-on-surface mb-1 group-hover:text-primary transition-colors">
                            Top Collections</h4>
                        <p class="dark:text-outline text-label-caps font-label-caps">Curated by the community</p>
                    </div>
                    <!-- Trending Authors Card -->
                    <div
                        class="glass-card p-md rounded-xl group cursor-pointer hover:border-primary/50 transition-all duration-300">
                        <div class="flex items-center justify-between mb-sm">
                            <div class="flex -space-x-2">
                                <img alt="Author"
                                    class="w-8 h-8 rounded-full border-2 border-white dark:border-surface-container-high"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdGFiLJUGlj9AEY4b2QwfMuwfKZwDmE4tT7fOZvWCSBXsjX6rkvja5tVuW6olewVjxDyR7RD8le0HjE47XGVid5uFwyGOmASyCc-gYvj7jUFfEwktxw6LEiTAERAqzxYdGdMSP9hiQowmZvqFNW9WEsbokNrgoWkmzQbcTk-ScfgozSZSo6AcK6eJdjvvZ7J4AL70ZdvRJ7NkMxl22AoAD-i6uHIpsXykybB00org6u3JnJqFS4OScg8QBVCRDFT_Qeu1H0d95ci8" />
                                <img alt="Author"
                                    class="w-8 h-8 rounded-full border-2 border-white dark:border-surface-container-high"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCP1TKi6c5iUwt2Fd93_8lnYmodmTj1aY03X7IPEarOso-x66rl_5pLKjuUMUDd7Sb34fhwgHxDaqM-1mW55LoCel7N10nhnzqKEWOR_v98EFW6awVPqTkzFRfhA_ucBLQM8kRTO55rC7IF0oK0mToyGH2WWUcwL2rM8WusLzZNDrs8tW2C3rFFB5j8MYDT6R8DtmftIKxC_jqNLDWcdrOyYGMkir57Wpl30ihglnHB3dDt6Xo_qbhSwpfAfkfJiE2rUHSg2HYN2_E" />
                                <div
                                    class="w-8 h-8 rounded-full bg-surface-container-high-light dark:bg-surface-container-high border-2 border-white dark:border-surface-container-high flex items-center justify-center text-[10px] font-bold text-primary">
                                    +12</div>
                            </div>
                            <span
                                class="material-symbols-outlined text-outline-light dark:text-outline text-sm group-hover:text-primary transition-colors">trending_up</span>
                        </div>
                        <h4
                            class="font-display font-bold text-on-surface-light dark:text-on-surface mb-1 group-hover:text-primary transition-colors">
                            Trending Authors</h4>
                        <p class="dark:text-outline text-label-caps font-label-caps">Rising stars this week</p>
                    </div>
                    <!-- Topic Deep Dives Card -->
                    <div
                        class="glass-card p-md rounded-xl group cursor-pointer hover:border-primary/50 transition-all duration-300">
                        <div class="flex items-center justify-between mb-sm">
                            <div
                                class="w-8 h-8 rounded-lg bg-tertiary-fixed dark:bg-tertiary/10 flex items-center justify-center border border-tertiary-container/20">
                                <span class="material-symbols-outlined text-tertiary text-[18px]">terminal</span>
                            </div>
                            <span
                                class="material-symbols-outlined text-outline-light dark:text-outline text-sm group-hover:text-primary transition-colors">search</span>
                        </div>
                        <h4
                            class="font-display font-bold text-on-surface-light dark:text-on-surface mb-1 group-hover:text-primary transition-colors">
                            Topic Deep Dives</h4>
                        <p class="dark:text-outline text-label-caps font-label-caps">Advanced technical guides</p>
                    </div>
                </div>
            </section>
            <!-- Secondary Articles List -->
            {{-- {{-- <section class="space-y-lg"> --}}
            <div
                class="flex justify-between items-end border-b border-outline-variant-light dark:border-outline-variant/10 pb-md">
                <h3 class="font-display text-headline-md dark:text-primary text-on-surface-light">Recent
                    Insights</h3>
                <a class="text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary text-label-caps font-label-caps flex items-center gap-xs transition-colors"
                    href="{{ route('dashboard.posts.index') }}">
                    VIEW ALL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
            </div>
            @foreach ($posts as $post)
                <div class="space-y-md">
                    <!-- Article 1 -->
                    <x-post-list-item :post="$post" />
                    {{-- <!-- Article 2 -->
                        <article
                            class="glass-card p-md rounded-xl flex gap-md items-start group hover:border-primary/50 transition-colors duration-300">
                            <div class="w-24 h-24 md:w-32 md:h-32 rounded-lg overflow-hidden flex-shrink-0">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9Cs2A5a3Ave-V_0ksdprCTMFTBUAsbWMJ-wh9kGskb2kKmiq4uCA2QhiwZ1OJIcBzXiOnqnX-hKTgJgMmrePwhBaaMK-D0B7QS67M9ooOJsb1PXhJwvsLYaID1gknwMR7pknJzBKUuV6ShfaZ21ObkBiR1mC2l0rr9tu045XoNi5WtYn6l5rWJ7wN_v3lvwjmUdZxXt_QGUEBQB7pFwHpodRQV5BuX67ZAXDYXzCi6M1y63ToobhtGkvg0Rd2pfi3yhJnmvgm8E8" />
                            </div>
                            <div class="flex-grow">
                                <div class="flex gap-xs mb-xs">
                                    <span
                                        class="text-primary-container-light dark:text-secondary text-label-caps font-label-caps">TYPESCRIPT</span>
                                    <span
                                        class="text-on-surface-variant-light dark:text-outline text-label-caps font-label-caps">8
                                        MIN READ</span>
                                </div>
                                <h4
                                    class="font-display text-body-lg font-bold text-on-surface-light dark:text-on-surface mb-sm group-hover:text-primary transition-colors">
                                    Type-Safe Middleware in Distributed Systems</h4>
                                <p
                                    class="text-on-surface-variant-light dark:text-on-surface-variant text-body-md line-clamp-2 hidden md:block">
                                    Leveraging advanced TypeScript features to ensure data integrity across microservice
                                    boundaries without overhead.
                                </p>
                                <div class="mt-sm flex items-center justify-between">
                                    <div class="flex items-center gap-xs">
                                        <span
                                            class="text-on-surface-light dark:text-on-surface text-body-md font-bold">David
                                            Chen</span>
                                        <span
                                            class="text-on-surface-variant-light dark:text-outline text-label-caps font-label-caps">•
                                            MAY 22, 2024</span>
                                    </div>
                                    <button
                                        class="material-symbols-outlined text-outline-light dark:text-outline hover:text-primary transition-colors">bookmark</button>
                                </div>
                            </div>
                        </article> --}}
                </div>
            @endforeach
            </section>
            <!-- Pagination -->
            <div class="flex justify-center mt-lg">
                {{ $posts->withQueryString()->links() }}
            </div>
        </div>
        <!-- Sidebar -->
        <aside class="col-span-12 lg:col-span-4 space-y-xl">
            <!-- Trending Stories -->
            <x-trendings-post title="Trendings Now" />
            <!-- Newsletter Signup -->
            <x-news-letter-signup title="The Inkode protocol" />
            <!-- Live Activity -->
            <x-live-activity title="Live Activity" />
            <!-- Top Minds -->
            <x-recommended-authors title="Top Authors" count=4 />
        </aside>
    </div>
</x-layouts.front>
