<style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        display: inline-block;
        line-height: 1;
        text-transform: none;
        letter-spacing: normal;
        word-wrap: normal;
        white-space: nowrap;
        direction: ltr;
    }

    .dark .light-only {
        display: none;
    }

    .light .dark-only {
        display: none;
    }

    /* Light Mode Overrides based on Inkode Light Design System */
    .light {
        --surface: #f7f9fb;
        --on-surface: #191c1e;
        --on-surface-variant: #44474a;
        --outline-variant: rgba(0, 0, 0, 0.12);
        --surface-container-lowest: #ffffff;
        --surface-container-low: #f2f4f6;
        --surface-container: #eceef0;
        --primary: #6366f1;
    }

    .light body {
        background-color: var(--surface);
        color: var(--on-surface);
    }

    .light .bg-white {
        background-color: var(--surface-container-lowest);
    }

    .light .bg-surface-container-low {
        background-color: var(--surface-container-low);
    }

    .light .bg-surface-container {
        background-color: var(--surface-container);
    }

    .light .text-on-surface {
        color: var(--on-surface);
    }

    .light .text-on-surface-variant {
        color: var(--on-surface-variant);
    }

    .light .border-outline-variant {
        border-color: var(--outline-variant);
    }

    .light .text-primary {
        color: var(--primary);
    }

    .light .bg-primary {
        background-color: var(--primary);
        color: #ffffff;
    }
</style>
</head>

<body
    class="bg-surface dark:bg-surface text-on-surface dark:text-on-surface font-body-md transition-colors duration-300">

    <div class="max-w-max_width mx-auto flex gap-lg px-md md:px-lg py-xl min-h-[calc(100vh-144px)]">
        <!-- SideNavBar -->
        <aside
            class="hidden lg:flex flex-col w-64 gap-xs py-md bg-white dark:bg-surface-container-low rounded-xl h-fit sticky top-24 shadow-xl shadow-on-secondary-fixed-variant/5 border border-outline-variant/30 dark:border-outline-variant/10 transition-colors">
            <div class="px-4 py-2 mb-2">
                <h3 class="font-display text-headline-md font-bold text-primary">Trending</h3>
                <p class="text-label-caps font-label-caps tracking-widest text-on-surface-variant/70">Live developer
                    activity</p>
            </div>
            <nav class="flex flex-col">
                <a class="text-on-surface-variant dark:text-on-surface-variant px-4 py-3 hover:bg-black/5 dark:hover:bg-surface-variant/30 hover:translate-x-1 transition-all duration-200 flex items-center gap-3"
                    href="#">
                    <span class="material-symbols-outlined">architecture</span>
                    Architecture
                </a>
                <a class="text-on-surface-variant dark:text-on-surface-variant px-4 py-3 hover:bg-black/5 dark:hover:bg-surface-variant/30 hover:translate-x-1 transition-all duration-200 flex items-center gap-3"
                    href="#">
                    <span class="material-symbols-outlined">code</span>
                    Rust
                </a>
                <a class="text-on-surface-variant dark:text-on-surface-variant px-4 py-3 hover:bg-black/5 dark:hover:bg-surface-variant/30 hover:translate-x-1 transition-all duration-200 flex items-center gap-3"
                    href="#">
                    <span class="material-symbols-outlined">terminal</span>
                    TypeScript
                </a>
                <!-- Active Item for Category Page -->
                <a class="bg-primary/10 dark:bg-primary-container/20 text-primary dark:text-primary font-black border-r-4 border-primary px-4 py-3 flex items-center gap-3"
                    href="#"><span class="material-symbols-outlined">psychology</span>AI/ML</a>
                <a class="text-on-surface-variant dark:text-on-surface-variant px-4 py-3 hover:bg-black/5 dark:hover:bg-surface-variant/30 hover:translate-x-1 transition-all duration-200 flex items-center gap-3"
                    href="#">
                    <span class="material-symbols-outlined">settings_input_component</span>
                    DevOps
                </a>
            </nav>
            <div class="px-4 mt-4">
                <button
                    class="w-full py-2 px-4 rounded-lg border border-primary dark:border-primary/30 text-primary dark:text-primary text-label-caps font-black hover:bg-primary/10 transition-colors">Explore
                    All Topics</button>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 flex justify-center items-start">
            <div
                class="w-full max-w-2xl bg-white dark:bg-surface-container rounded-xl p-lg shadow-2xl shadow-primary/5 border border-outline-variant/30 dark:border-outline-variant/20 backdrop-blur-sm transition-colors">
                <div class="mb-xl text-center">
                    <h1
                        class="font-headline-lg text-headline-lg text-on-surface dark:text-on-surface mb-2 transition-colors">
                        Create Role</h1>
                    <p class="text-body-md text-on-surface-variant dark:text-on-surface-variant transition-colors">
                        Organize your technical content into focused taxonomies.</p>
                </div>
                @if ($errors->any())
                    <div class="mb-md p-md bg-error/10 border border-error/30 text-error rounded-lg">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="mb-md p-md bg-success/10 border border-success/30 text-success rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif
                <form class="space-y-lg" method="POST" action="{{ $action ?? route('dashboard.roles.store') }}">
                    @csrf
                    @method($method ?? 'POST')
                    <!-- Name Field -->
                    <div class="space-y-xs">
                        <label
                            class="font-label-caps text-label-caps text-on-surface dark:text-on-surface-variant font-bold tracking-widest uppercase"
                            for="role-name">Role Name</label>
                        <input name="name" value="{{ old('name', $role->name ?? '') }}"
                            class="w-full bg-white dark:bg-surface-container-low border border-outline-variant/30 dark:border-outline-variant/30 rounded-lg px-md py-3 text-on-surface dark:text-on-surface focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all placeholder:text-on-surface-variant/50"
                            id="role-name" placeholder="e.g. Writer" type="text" />
                    </div>


                    <div class="space-y-xs">
                        <label
                            class="font-label-caps text-label-caps text-on-surface dark:text-on-surface-variant font-bold tracking-widest uppercase"
                            for="type"> type</label>
                        <div class="relative">
                            <input name="type" value="{{ old('type', $role->type ?? '') }}"
                                class="w-full bg-white dark:bg-surface-container-low border border-outline-variant/30 dark:border-outline-variant/30 rounded-lg px-md py-3 text-on-surface dark:text-on-surface focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all placeholder:text-on-surface-variant/50"
                                id="type" placeholder="e.g. Content Managment" type="text" />
                        </div>
                    </div>

                    <div class="space-y-xs">

                        <label
                            class="font-label-caps text-label-caps text-on-surface dark:text-on-surface-variant font-bold tracking-widest uppercase"
                            for="abilities"> Abilities</label>
                        <div class="grid md:grid-cols-2 gap-md">

                            @foreach ($abilities as $ability)
                                <div
                                    class="p-md rounded-lg bg-white dark:bg-surface-container-low border border-black/5 dark:border-white/5 hover:border-light-primary/30 dark:hover:border-primary/30 transition-all flex gap-md items-start shadow-sm dark:shadow-none">
                                    <input type="checkbox" name="abilities[]" value="{{ $ability }}" id='abilities' @checked(in_array($ability, $role->abilities ?? []))
                                        class="mt-1 rounded border-slate-300 dark:border-outline bg-transparent text-light-primary dark:text-primary focus:ring-light-primary dark:focus:ring-primary" />
                                          
                                    <div>
                                        <p class="font-semibold text-light-text dark:text-on-surface">
                                            {{ $ability }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="pt-md flex items-center justify-between gap-md">

                        <button
                            class="bg-primary dark:bg-primary text-white dark:text-on-primary font-bold px-xl py-3 rounded-lg shadow-lg shadow-primary/20 hover:shadow-primary/40 active:scale-95 transition-all"
                            type="submit">submit</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    @push('scripts')
        <script>
            const toggleBtn = document.getElementById('theme-toggle');
            const htmlElement = document.documentElement;

            const updateTheme = (theme) => {
                if (theme === 'dark') {
                    htmlElement.classList.remove('light');
                    htmlElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                } else {
                    htmlElement.classList.remove('dark');
                    htmlElement.classList.add('light');
                    localStorage.setItem('theme', 'light');
                }
            };

            toggleBtn.addEventListener('click', () => {
                const isDark = htmlElement.classList.contains('dark');
                updateTheme(isDark ? 'light' : 'dark');
            });

            // Check for saved user preference or default to light
            const savedTheme = localStorage.getItem('theme') || 'light';
            updateTheme(savedTheme);
        </script>
    @endpush
