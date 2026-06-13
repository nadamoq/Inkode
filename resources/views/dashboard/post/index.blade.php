<x-layouts.front title=":Posts">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Geist+Mono:wght@100..900&family=Inter:wght@400;600&family=JetBrains+Mono&display=swap');

        body {
            font-family: 'Geist', sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        /* Improved Light/Dark Glass Cards */
        .glass-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
        }

        .dark .glass-card {
            background: #171f33;
            /* surface-container */
            border: 1px solid rgba(70, 69, 84, 0.4);
            box-shadow: none;
        }

        /* Dark mode specific backgrounds */
        .dark .dark-bg-inkode {
            background-color: #0b1326;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-dim": "#0b1326",
                        "on-secondary": "#00344d",
                        "background": "#f8fafc",
                        /* Light mode background */
                        "surface-variant": "#f1f5f9",
                        /* Light mode variant */
                        "on-tertiary-fixed": "#2c0051",
                        "on-tertiary-container": "#400071",
                        "outline-variant": "#e2e8f0",
                        /* Light mode outline */
                        "secondary": "#0284c7",
                        "error-container": "#fee2e2",
                        "tertiary-fixed": "#f0dbff",
                        "primary-container": "#6366f1",
                        "on-error": "#ffffff",
                        "surface-container-low": "#ffffff",
                        "surface-container": "#ffffff",
                        "primary-fixed-dim": "#c0c1ff",
                        "on-tertiary-fixed-variant": "#6900b3",
                        "on-primary-fixed-variant": "#2f2ebe",
                        "on-secondary-fixed-variant": "#004c6e",
                        "secondary-container": "#e0f2fe",
                        "inverse-surface": "#0f172a",
                        "inverse-on-surface": "#f8fafc",
                        "tertiary": "#8b5cf6",
                        "surface-container-high": "#f1f5f9",
                        "surface": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "error": "#ef4444",
                        "on-secondary-container": "#00344e",
                        "surface-container-highest": "#e2e8f0",
                        "primary-fixed": "#e1e0ff",
                        "surface-bright": "#ffffff",
                        "on-error-container": "#991b1b",
                        "primary": "#6366f1",
                        "inverse-primary": "#494bd6",
                        "on-background": "#0f172a",
                        "tertiary-container": "#ede9fe",
                        "on-surface-variant": "#475569",
                        "on-primary-container": "#ffffff",
                        "surface-tint": "#6366f1",
                        "on-surface": "#0f172a",
                        "on-tertiary": "#ffffff",
                        "on-secondary-fixed": "#001e2f",
                        "outline": "#94a3b8",
                        "on-primary-fixed": "#07006c",
                        "on-primary": "#ffffff",
                        "secondary-fixed": "#c9e6ff",
                        "secondary-fixed-dim": "#89ceff",
                        "tertiary-fixed-dim": "#ddb7ff"
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
                        "margin": "auto",
                        "xs": "0.5rem",
                        "gutter": "24px",
                        "lg": "2.5rem",
                        "xl": "4rem",
                        "unit": "4px",
                        "container-max": "1280px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg-mobile": ["Geist"],
                        "label-caps": ["Inter"],
                        "headline-lg": ["Geist"],
                        "code-sm": ["JetBrains Mono"],
                        "display": ["Geist"],
                        "headline-md": ["Geist"]
                    },
                    "fontSize": {
                        "body-md": ["16px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "headline-lg-mobile": ["32px", {
                            "lineHeight": "1.2",
                            "fontWeight": "700"
                        }],
                        "label-caps": ["12px", {
                            "lineHeight": "1",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["40px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "code-sm": ["14px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "display": ["64px", {
                            "lineHeight": "1.1",
                            "letterSpacing": "-0.04em",
                            "fontWeight": "800"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }]
                    }
                }
            }
        }
    </script>
    <div class="flex max-w-container-max mx-auto">
        <main class="flex-1 p-gutter min-h-screen dark:bg-[#0b1326]">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-lg mb-xl">
                <div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface dark:text-white mb-xs">Content Management</h1>
                    <p class="font-body-md text-on-surface-variant dark:text-[#c7c4d7]">Manage your intellectual output, track performance, and schedule upcoming pieces.</p>
                </div>
                <a href="{{route('dashboard.posts.create')}}"
                    class="bg-primary dark:bg-[#c0c1ff] hover:bg-primary/90 dark:hover:bg-[#c0c1ff]/90 text-on-primary dark:text-[#07006c] font-bold px-lg py-3 rounded-lg flex items-center gap-sm transition-all shadow-lg active:scale-95">
                    <span class="material-symbols-outlined text-xl">edit_square</span>
                    Create Post
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-lg mb-xl">
                <div class="md:col-span-4 glass-card p-lg rounded-xl flex flex-col justify-between h-48 group">
                    <div>
                        <p class="text-[12px] font-bold text-on-surface-variant dark:text-[#c7c4d7] uppercase tracking-wider mb-sm">Total Reach</p>
                        <div class="flex items-end gap-md">
                            <span class="font-headline-lg text-headline-lg text-on-surface dark:text-white">124.8k</span>
                            <span class="text-primary dark:text-[#c0c1ff] font-bold mb-1">+12%</span>
                        </div>
                    </div>
                    <div class="w-full bg-surface-variant dark:bg-[#2d3449] h-2 rounded-full overflow-hidden">
                        <div class="bg-primary dark:bg-[#c0c1ff] h-full w-[78%] transition-all duration-1000 group-hover:w-[85%]"></div>
                    </div>
                </div>

                <div class="md:col-span-4 glass-card p-lg rounded-xl flex flex-col justify-between h-48">
                    <div>
                        <p class="text-[12px] font-bold text-on-surface-variant dark:text-[#c7c4d7] uppercase tracking-wider mb-sm">Active Readers</p>
                        <div class="flex items-center gap-sm">
                            <span class="font-headline-lg text-headline-lg text-on-surface dark:text-white">3,402</span>
                            <span class="flex items-center gap-1 text-error font-bold text-sm bg-error-container/20 dark:bg-error/10 px-2 py-0.5 rounded">
                                <span class="w-1.5 h-1.5 bg-error rounded-full animate-pulse"></span>
                                Live
                            </span>
                        </div>
                    </div>
                    <div class="flex -space-x-3 overflow-hidden">
                        <img alt="Reader" class="inline-block h-8 w-8 rounded-full ring-2 ring-surface dark:ring-[#171f33]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDSCA2NCcYYG5pT9nbAgNuGXxnCj2ivChvqf2Fh2mp0k9BQl9TdJx1ouTSylCVswuWsV42IrDOnNPuEerQo_ayLn1mSGpBNeWmOqSXSBBAa2oFdGP93TH8zyThyPiX9-ZdBoxMmoFrKSwsxrEkV9FR_lvb4WGv5DL1bDhiB3dSnRcWhCDCHv_JAFQR5iwW2CWskZlQYLCc622NnczDw8264f6O78BgYwE3i1wwo79lp_jy5UpEvK2ZDLCETiC_QlNBpQNHmnR-sZ0" />
                        <img alt="Reader" class="inline-block h-8 w-8 rounded-full ring-2 ring-surface dark:ring-[#171f33]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuANUXsQZxRE6FJHbszsbtjLz3V_FgpuMXZC2CK4UTxuJU0HnO8YjGKIm2RTImpR2wNb6nFfC3SmVbJis8ROUgMXAjW7dCLw7e4n0qvulupSoa0nzcZG5B0PIpsAeofZRS3ZbDyFv22wRnbW7bDyNx2mx-s99F-SjfdpTw8x2J6Tct2jvp4dAB65hm5zzLZ5cGWN_xJcA-uLzP2KCseWHx89RcIbFqRblvEV56962Y7sbURqg2THVgc-ZPvtNrmGOcKC3LLSCi_LhhI" />
                        <img alt="Reader" class="inline-block h-8 w-8 rounded-full ring-2 ring-surface dark:ring-[#171f33]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUzmGaOWZYsC6dqhad6XmogfelYInsBGJ6MH-8msWLSDad_-CvJd8rvM9baVWEDtzjVmKMNHG6JrOCc2ZHQEI9RJ2cIezqSFyUEfzSR3lnIQY-f1ZnPTTtUSOAmI0v3eL_kBj2jyrUq1QkQ8UpNxJ--jndNIERavOcxfDlh15Ck0lSRYKHC2XO65CKJfqY5mqoCmYI-ThQ4oT8NDwRgrZW_0njtrghN9agaBKqLcXmbkMTVHMkUjX9wX-7RtmMbyUeOlL5cBecGHg" />
                        <div class="flex items-center justify-center h-8 w-8 rounded-full ring-2 ring-surface dark:ring-[#171f33] bg-primary/20 dark:bg-[#c0c1ff]/20 text-primary dark:text-[#c0c1ff] text-xs font-bold">+42</div>
                    </div>
                </div>

                <div class="md:col-span-4 bg-surface-variant dark:bg-[#222a3d] p-lg rounded-xl flex flex-col justify-center h-48 relative overflow-hidden border border-outline-variant/30 dark:border-white/10">
                    <div class="absolute top-0 right-0 p-4 opacity-10">
                        <span class="material-symbols-outlined text-on-surface dark:text-white" style="font-size: 80px;">lightbulb</span>
                    </div>
                    <p class="text-[12px] font-bold text-primary dark:text-[#c0c1ff] uppercase mb-xs">Pro Tip</p>
                    <p class="font-body-md text-on-surface dark:text-[#dae2fd] leading-relaxed">
                        Articles published on Tuesdays at 9:00 AM receive 40% more engagement in the "Inkode" ecosystem.
                    </p>
                </div>
            </div>

            @session('success')
                <div class="max-w-3xl mx-auto mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded mb-6">
                    {{ session('message') }}
                </div>
            @endsession

            <div class="mb-lg">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center border-b border-outline-variant/30 dark:border-white/10 gap-md">
                    <div class="flex gap-lg overflow-x-auto pb-0">
                        @foreach ($status_options as $option)
                            <a href="{{route('dashboard.posts.index',['status' => strtolower($option['name'])])}}"
                                class="@if (strtolower($option['name']) == strtolower($status)) font-bold text-primary border-b-2 border-primary dark:text-[#c0c1ff] dark:border-[#c0c1ff] @endif pb-4 px-1 whitespace-nowrap">
                                {{$option['name']}} ({{$option['count']}})
                            </a>
                        @endforeach
                    </div>
                    <div class="flex items-center gap-md pb-4">
                        <button class="p-2 text-on-surface-variant dark:text-[#c7c4d7] hover:bg-surface-variant dark:hover:bg-[#131b2e] rounded-lg transition-colors">
                            <span class="material-symbols-outlined">filter_list</span>
                        </button>
                        <button class="p-2 text-on-surface-variant dark:text-[#c7c4d7] hover:bg-surface-variant dark:hover:bg-[#131b2e] rounded-lg transition-colors">
                            <span class="material-symbols-outlined">sort</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="space-y-md">
                <div class="flex items-center justify-between px-md py-2 bg-surface-variant dark:bg-[#131b2e] rounded-lg border border-outline-variant/30 dark:border-white/10">
                    <div class="flex items-center gap-md">
                        <input class="w-4 h-4 rounded border-outline-variant dark:border-white/20 text-primary bg-surface dark:bg-[#171f33] focus:ring-primary" type="checkbox" />
                        <span class="font-body-md text-on-surface-variant dark:text-[#c7c4d7]">2 posts selected</span>
                    </div>
                    <div class="flex gap-md">
                        <button class="font-body-md text-on-surface-variant dark:text-[#c7c4d7] hover:text-primary dark:hover:text-[#c0c1ff] transition-colors">Unpublish</button>
                        <button class="font-body-md text-error hover:opacity-80 transition-colors">Delete</button>
                    </div>
                </div>

                @forelse ($posts as $post)
                    <div class="group flex items-center gap-md p-md glass-card rounded-xl hover:border-primary/50 dark:hover:border-[#c0c1ff]/50 transition-all duration-300">
                        <input class="w-4 h-4 rounded border-outline-variant dark:border-white/20 text-primary bg-surface dark:bg-[#171f33] focus:ring-primary" type="checkbox" />
                        
                        <div class="flex-1 grid grid-cols-1 md:grid-cols-12 items-center gap-md">
                            <div class="md:col-span-7">
                                <div class="flex items-center gap-sm mb-xs">
                                    <span class="bg-primary/10 dark:bg-[#c0c1ff]/10 text-primary dark:text-[#c0c1ff] px-2 py-0.5 rounded text-[10px] font-bold uppercase">
                                        {{$post->category->name}}
                                    </span>
                                    <span class="text-on-surface-variant dark:text-[#c7c4d7] text-[11px]">• 8 min read</span>
                                </div>
                                <h3 class="font-headline-md text-headline-md text-on-surface dark:text-white leading-snug group-hover:text-primary dark:group-hover:text-[#c0c1ff] transition-colors cursor-pointer">
                                   <a href="{{ route('dashboard.posts.show', $post) }}" class="text-inherit no-underline">
                                        {{$post->title}}
                                    </a>
                                </h3>
                                <p class="font-body-md text-on-surface-variant dark:text-[#c7c4d7] mt-xs">
                                    Published on {{$post->published_at?->format('M j, Y') ?? 'Not published yet'}}
                                </p>
                            </div>

                            <div class="md:col-span-3 flex gap-lg">
                                <div class="flex flex-col">
                                    <span class="text-[10px] font-bold text-on-surface-variant dark:text-[#c7c4d7] uppercase">Engagement</span>
                                    <div class="flex items-center gap-md mt-1">
                                        <span class="flex items-center gap-1 font-mono text-on-surface dark:text-[#dae2fd] text-sm">
                                            <span class="material-symbols-outlined text-base">visibility</span> 
                                            {{ Illuminate\Support\Number::abbreviate($post->views) }}
                                        </span>
                                        <span class="flex items-center gap-1 font-mono text-on-surface dark:text-[#dae2fd] text-sm">
                                            <span class="material-symbols-outlined text-base">forum</span> 
                                            {{$post->comments_count}}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="md:col-span-2 flex justify-end items-center gap-md">
                                @if($post->trashed())
                                    <span class="flex items-center gap-1.5 text-[12px] font-bold text-red-500 bg-red-50 dark:bg-red-950/30 px-3 py-1 rounded-full">
                                        <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                        Deleted
                                    </span>
                                    
                                    <div class="flex justify-end gap-2">
                                        <button onclick="confirm('Are you sure you want to restore this post?') ? document.getElementById('restorepost{{ $post->id }}').submit() : null;"
                                            class="p-2 text-on-surface-variant hover:text-primary rounded-lg transition-all" title="Restore">
                                            <span class="material-symbols-outlined">refresh</span>
                                        </button>
                                        <form style="display: none;" id="restorepost{{ $post->id }}" action="{{ route('dashboard.posts.restore', $post->slug) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                        </form>

                                        <button onclick="confirm('Are you sure you want to delete this post permanently?') ? document.getElementById('force-delete{{ $post->id }}').submit() : null;"
                                            class="p-2 text-on-surface-variant hover:text-error transition-colors" title="Force Delete">
                                            <span class="material-symbols-outlined">delete_forever</span>
                                        </button>
                                        <form style="display: none;" id="force-delete{{ $post->id }}" action="{{ route('dashboard.posts.force-delete', $post->slug) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                @else
                                    <span class="flex items-center gap-1.5 text-[12px] font-bold {{ $post->status->setColor() }} px-3 py-1 rounded-full">
                                        <span class="w-2 h-2 rounded-full bg-current"></span>
                                        {{$post->status->value}}
                                    </span>
                              
                                    <div class="flex justify-end gap-2">
                                        <a href="{{route('dashboard.posts.edit',[$post->slug])}}"
                                            class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors text-[20px]" title="Edit">edit</a>
                                            
                                        <button onclick="confirm('Are you sure you want to delete this post?') ? document.getElementById('deletepost{{ $post->id }}').submit() : null;"
                                            class="material-symbols-outlined text-on-surface-variant hover:text-error transition-colors text-[20px]" title="Trash">
                                            <span class="material-symbols-outlined">delete</span>
                                        </button>
                                        
                                        <form style="display: none;" id="deletepost{{ $post->id }}" action="{{ route('dashboard.posts.destroy', $post->slug) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                @endif
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="text-center py-20"> 
                        <span class="material-symbols-outlined text-6xl text-on-surface-variant dark:text-[#c7c4d7] mb-4">article</span>
                        <p class="text-on-surface-variant dark:text-[#c7c4d7] text-lg">No posts found. Start by creating a new post!</p>
                    </div>
                @endforelse

                <div class="mt-lg">
                    {{$posts->withQueryString()->links()}}
                </div>
            </div>
        </main>
    </div>
</x-layouts.front>