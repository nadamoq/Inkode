<x-layouts.front>
    <style>
        :root {
            --glass-bg: rgba(255, 255, 255, 0.8);
            --glass-border: rgba(0, 0, 0, 0.1);
        }

        .dark {
            --glass-bg: rgba(11, 19, 38, 0.8);
            --glass-border: rgba(255, 255, 255, 0.05);
        }

        .glassmorphism {
            backdrop-filter: blur(12px);
            background-color: var(--glass-bg);
            border: 1px solid var(--glass-border);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #464554;
            border-radius: 10px;
        }

        .light ::-webkit-scrollbar-thumb {
            background: #d1d5db;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "inverse-primary": "#494bd6",
                        "secondary": "#89ceff",
                        "on-primary-fixed": "#07006c",
                        "on-tertiary-fixed-variant": "#6900b3",
                        "on-surface-variant": "#c7c4d7",
                        "on-primary-fixed-variant": "#2f2ebe",
                        "surface-container-lowest": "#060e20",
                        "surface-bright": "#31394d",
                        "on-tertiary-container": "#400071",
                        "secondary-fixed": "#c9e6ff",
                        "tertiary": "#ddb7ff",
                        "on-tertiary": "#490080",
                        "tertiary-container": "#b76dff",
                        "surface-variant": "#2d3449",
                        "on-secondary-container": "#00344e",
                        "surface-dim": "#0b1326",
                        "primary-fixed": "#e1e0ff",
                        "on-error-container": "#ffdad6",
                        "tertiary-fixed-dim": "#ddb7ff",
                        "error": "#ffb4ab",
                        "surface-container-low": "#131b2e",
                        "secondary-container": "#00a2e6",
                        "on-primary-container": "#0d0096",
                        "tertiary-fixed": "#f0dbff",
                        "outline-variant": "#464554",
                        "secondary-fixed-dim": "#89ceff",
                        "outline": "#908fa0",
                        "surface-container": "#171f33",
                        "on-error": "#690005",
                        "on-background": "#dae2fd",
                        "surface-tint": "#c0c1ff",
                        "on-secondary": "#00344d",
                        "on-tertiary-fixed": "#2c0051",
                        "surface": "#0b1326",
                        "background": "#0b1326",
                        "primary-fixed-dim": "#c0c1ff",
                        "on-primary": "#1000a9",
                        "inverse-on-surface": "#283044",
                        "error-container": "#93000a",
                        "on-surface": "#dae2fd",
                        "on-secondary-fixed": "#001e2f",
                        "surface-container-highest": "#2d3449",
                        "primary-container": "#8083ff",
                        "surface-container-high": "#222a3d",
                        "primary": "#c0c1ff",
                        "inverse-surface": "#dae2fd",
                        "on-secondary-fixed-variant": "#004c6e",
                        "light-bg": "#ffffff",
                        "light-text": "#1a1a1a",
                        "light-primary": "#6366f1"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sm": "1rem",
                        "md": "1.5rem",
                        "unit": "4px",
                        "xs": "0.5rem",
                        "gutter": "24px",
                        "xl": "4rem",
                        "lg": "2.5rem",
                        "max_width": "1280px",
                        "margin": "auto"
                    },
                    "fontFamily": {
                        "display": ["Geist"],
                        "code-sm": ["JetBrains Mono"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Geist"],
                        "label-caps": ["Inter"]
                    }
                }
            }
        }
    </script>



    <!-- Main Content Area -->
    <div class="max-w-4xl mx-auto px-md py-lg space-y-xl">
        <!-- User Identity Header -->
        <header
            class="flex flex-col md:flex-row md:items-center justify-between gap-md p-lg rounded-xl glassmorphism border border-light-primary/20 dark:border-primary/20 shadow-xl shadow-light-primary/5 dark:shadow-primary/5">
            <div class="flex items-center gap-md">
                <div class="relative">
                    <div
                        class="w-20 h-20 rounded-xl bg-gradient-to-br from-light-primary to-secondary dark:from-primary dark:to-secondary p-[2px]">
                        <div
                            class="w-full h-full rounded-lg bg-white dark:bg-surface flex items-center justify-center overflow-hidden">
                            <img class="w-full h-full object-cover"
                                data-alt="A close-up portrait of a professional developer" src="{{ $user->avatar }}" />
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-1 -right-1 w-6 h-6 bg-light-primary dark:bg-secondary-container rounded-full border-4 border-white dark:border-surface flex items-center justify-center">
                        <span class="material-symbols-outlined text-[12px] text-white dark:text-on-secondary-container"
                            style="font-variation-settings: 'FILL' 1;">verified</span>
                    </div>
                </div>
                <div>
                    <h1 class="font-display text-headline-md text-light-text dark:text-on-surface">{{ $user->name }}
                    </h1>
                    <p class="font-code-sm text-code-sm text-slate-500 dark:text-outline">{{ $user->username }}</p>
                    <div class="mt-xs flex gap-xs">
                        @foreach ($user->roles as $item)
                            <span
                                class="px-2 py-0.5 rounded-md bg-light-primary/10 dark:bg-secondary/10 text-light-primary dark:text-secondary text-[10px] font-label-caps border border-light-primary/20 dark:border-secondary/20">
                                {{ $item->name }}
                            </span>
                        @endforeach
                        <span
                            class="px-2 py-0.5 rounded-md bg-slate-100 dark:bg-tertiary/10 text-slate-600 dark:text-tertiary text-[10px] font-label-caps border border-slate-200 dark:border-tertiary/20">ID:
                            {{ $user->email }}</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-end">
                <span
                    class="text-label-caps font-label-caps text-slate-400 dark:text-outline mb-1 uppercase tracking-tighter">Account
                    Status</span>
                <span class="flex items-center gap-xs text-light-primary dark:text-primary font-bold">
                    <span class="w-2 h-2 rounded-full bg-light-primary dark:bg-primary animate-pulse"></span>
                    {{ $user->active ? 'Active' : 'Inactive' }}
                </span>
            </div>
        </header>
        <!-- Permission Categories -->
        <div class="grid grid-cols-1 gap-lg">
            <!-- Category: Content -->
            <section class="permission-group space-y-md">
                <div class="flex items-center justify-between border-b border-black/5 dark:border-white/10 pb-xs">
                    <div class="flex items-center gap-xs">
                        <span class="material-symbols-outlined text-light-primary dark:text-primary">article</span>
                        <h2 class="font-display text-headline-md text-light-text dark:text-on-surface">Content
                            Management</h2>
                    </div>
                    <label class="flex items-center gap-sm cursor-pointer group">
                        <span
                            class="font-label-caps text-label-caps text-slate-400 dark:text-outline group-hover:text-light-primary dark:group-hover:text-primary transition-colors">Select
                            All</span>
                        <input
                            class="category-toggle w-10 h-5 bg-slate-200 dark:bg-surface-container-high rounded-full appearance-none relative cursor-pointer checked:bg-light-primary dark:checked:bg-primary transition-colors before:content-[''] before:absolute before:w-4 before:h-4 before:bg-white before:rounded-full before:top-0.5 before:left-0.5 before:transition-transform checked:before:translate-x-5"
                            type="checkbox" />
                    </label>
                </div>
                <form method="POST" action="{{ route('dashboard.assignRole', ['user' => $user]) }}" id="assignRole" >
                    @csrf
                    <div class="grid md:grid-cols-2 gap-md">

                    @foreach ($roles as $role)
                        
                            <div
                                class="p-md rounded-lg bg-white dark:bg-surface-container-low border border-black/5 dark:border-white/5 hover:border-light-primary/30 dark:hover:border-primary/30 transition-all flex gap-md items-start shadow-sm dark:shadow-none">
                                <input @checked($user->hasRole($role)) name='roles[]' value='{{$role->id}}'
                                    class="mt-1 rounded border-slate-300 dark:border-outline bg-transparent text-light-primary dark:text-primary focus:ring-light-primary dark:focus:ring-primary"
                                    type="checkbox" />
                                <div>
                                    <p class="font-semibold text-light-text dark:text-on-surface">{{ $role->name }}
                                    </p>
                                    @foreach ($role->abilities as $ability)
                                        <p class="text-sm text-slate-500 dark:text-outline">{{ $ability }}</p>
                                    @endforeach
                                </div>
                            </div>

                        
                    @endforeach
                    </div>
                </form>
            </section>
            {{-- <!-- Category: Users -->
            <section class="permission-group space-y-md">
                <div class="flex items-center justify-between border-b border-black/5 dark:border-white/10 pb-xs">
                    <div class="flex items-center gap-xs">
                        <span class="material-symbols-outlined text-secondary">group_add</span>
                        <h2 class="font-display text-headline-md text-light-text dark:text-on-surface">User &amp;
                            Access</h2>
                    </div>
                    <label class="flex items-center gap-sm cursor-pointer group">
                        <span
                            class="font-label-caps text-label-caps text-slate-400 dark:text-outline group-hover:text-secondary transition-colors">Select
                            All</span>
                        <input
                            class="category-toggle w-10 h-5 bg-slate-200 dark:bg-surface-container-high rounded-full appearance-none relative cursor-pointer checked:bg-secondary transition-colors before:content-[''] before:absolute before:w-4 before:h-4 before:bg-white before:rounded-full before:top-0.5 before:left-0.5 before:transition-transform checked:before:translate-x-5"
                            type="checkbox" />
                    </label>
                </div>
                <div class="grid md:grid-cols-2 gap-md">
                    <div
                        class="p-md rounded-lg bg-white dark:bg-surface-container-low border border-black/5 dark:border-white/5 hover:border-secondary/30 transition-all flex gap-md items-start shadow-sm dark:shadow-none">
                        <input
                            class="mt-1 rounded border-slate-300 dark:border-outline bg-transparent text-secondary focus:ring-secondary"
                            type="checkbox" />
                        <div>
                            <p class="font-semibold text-light-text dark:text-on-surface">Invite Members</p>
                            <p class="text-sm text-slate-500 dark:text-outline">Send invitation links to new
                                organization members.</p>
                        </div>
                    </div>
                    <div
                        class="p-md rounded-lg bg-white dark:bg-surface-container-low border border-black/5 dark:border-white/5 hover:border-secondary/30 transition-all flex gap-md items-start shadow-sm dark:shadow-none">
                        <input
                            class="mt-1 rounded border-slate-300 dark:border-outline bg-transparent text-secondary focus:ring-secondary"
                            type="checkbox" />
                        <div>
                            <p class="font-semibold text-light-text dark:text-on-surface">Manage Roles</p>
                            <p class="text-sm text-slate-500 dark:text-outline">Change user permission sets and
                                security levels.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Category: System -->
            <section class="permission-group space-y-md">
                <div class="flex items-center justify-between border-b border-black/5 dark:border-white/10 pb-xs">
                    <div class="flex items-center gap-xs">
                        <span class="material-symbols-outlined text-tertiary">settings_suggest</span>
                        <h2 class="font-display text-headline-md text-light-text dark:text-on-surface">System
                            Controls</h2>
                    </div>
                    <label class="flex items-center gap-sm cursor-pointer group">
                        <span
                            class="font-label-caps text-label-caps text-slate-400 dark:text-outline group-hover:text-tertiary transition-colors">Select
                            All</span>
                        <input
                            class="category-toggle w-10 h-5 bg-slate-200 dark:bg-surface-container-high rounded-full appearance-none relative cursor-pointer checked:bg-tertiary transition-colors before:content-[''] before:absolute before:w-4 before:h-4 before:bg-white before:rounded-full before:top-0.5 before:left-0.5 before:transition-transform checked:before:translate-x-5"
                            type="checkbox" />
                    </label>
                </div>
                <div class="grid md:grid-cols-2 gap-md">
                    <div
                        class="p-md rounded-lg bg-white dark:bg-surface-container-low border border-black/5 dark:border-white/5 hover:border-tertiary/30 transition-all flex gap-md items-start shadow-sm dark:shadow-none">
                        <input
                            class="mt-1 rounded border-slate-300 dark:border-outline bg-transparent text-tertiary focus:ring-tertiary"
                            type="checkbox" />
                        <div>
                            <p class="font-semibold text-light-text dark:text-on-surface">API Access</p>
                            <p class="text-sm text-slate-500 dark:text-outline">Generate and manage secret keys for
                                API integration.</p>
                        </div>
                    </div>
                    <div
                        class="p-md rounded-lg bg-white dark:bg-surface-container-low border border-black/5 dark:border-white/5 hover:border-tertiary/30 transition-all flex gap-md items-start shadow-sm dark:shadow-none">
                        <input
                            class="mt-1 rounded border-slate-300 dark:border-outline bg-transparent text-tertiary focus:ring-tertiary"
                            type="checkbox" />
                        <div>
                            <p class="font-semibold text-light-text dark:text-on-surface">Webhooks</p>
                            <p class="text-sm text-slate-500 dark:text-outline">Configure system callbacks and
                                external triggers.</p>
                        </div>
                    </div>
                    <div
                        class="p-md rounded-lg bg-white dark:bg-surface-container-low border border-black/5 dark:border-white/5 hover:border-tertiary/30 transition-all flex gap-md items-start opacity-60 shadow-sm dark:shadow-none">
                        <input
                            class="mt-1 rounded border-slate-200 dark:border-outline/30 bg-transparent text-slate-300 dark:text-tertiary/30"
                            disabled="" type="checkbox" />
                        <div>
                            <p class="font-semibold text-light-text dark:text-on-surface">Core Infrastructure</p>
                            <p class="text-sm text-slate-500 dark:text-outline">Restricted: Only available to Root
                                Admin.</p>
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>
    </div>
    </main>
    <!-- Sticky Action Bar -->
    <footer
        class="fixed bottom-0 left-0 right-0 glassmorphism p-md z-50 border-t border-black/5 dark:border-white/10 flex justify-between items-center md:pl-72 transition-colors duration-300">
        <div class="hidden md:flex items-center gap-xs text-slate-500 dark:text-outline text-sm">
            <span class="material-symbols-outlined text-sm">info</span>
            Changes are logged for security audits
        </div>
        <div class="flex items-center gap-md w-full md:w-auto">
            <button
                class="flex-1 md:flex-none px-lg py-sm rounded-lg border border-slate-300 dark:border-outline/30 text-light-text dark:text-on-surface font-semibold hover:bg-black/5 dark:hover:bg-surface-variant/30 transition-all active:scale-95">
                Cancel
            </button>
            <button onclick="document.getElementById('assignRole').submit()"
                class="flex-1 md:flex-none px-lg py-sm rounded-lg bg-light-primary dark:bg-primary text-white dark:text-on-primary font-bold shadow-lg shadow-light-primary/20 dark:shadow-primary/20 hover:brightness-110 transition-all active:scale-95">
                Save Changes
            </button>
        </div>
    </footer>

</x-layouts.front>
