<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Inkode {{ $title }}</title>
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/png" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    {{ $headScript ?? '' }}
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;family=JetBrains+Mono:wght@100..800&amp;display=swap"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        /* Active Navbar Link Styling */
        .nav-link {
            position: relative;
            padding-bottom: 4px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            right: 0;
            height: 3px;
            border-radius: 9999px;
            background: transparent;
            transform: scaleX(0);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), background-color 0.3s ease;
        }
        .nav-link:hover::after {
            transform: scaleX(0.7);
            background-color: rgba(99, 102, 241, 0.4);
        }
        .dark .nav-link:hover::after {
            background-color: rgba(192, 193, 255, 0.4);
        }
        .nav-link.active {
            color: #6366f1 !important;
            font-weight: 700;
        }
        .dark .nav-link.active {
            color: #c0c1ff !important;
        }
        .nav-link.active::after {
            transform: scaleX(1);
            background: linear-gradient(to right, #6366f1, #89ceff);
            box-shadow: 0 2px 8px rgba(99, 102, 241, 0.4);
        }
        .dark .nav-link.active::after {
            background: linear-gradient(to right, #c0c1ff, #89ceff);
            box-shadow: 0 2px 8px rgba(192, 193, 255, 0.4);
        }

        /* Mobile Drawer Link Styling */
        .mobile-nav-link {
            display: block;
            padding: 10px 16px;
            border-radius: 12px;
            transition: all 0.2s ease;
        }
        .mobile-nav-link.active {
            background-color: rgba(99, 102, 241, 0.1);
            color: #6366f1 !important;
            font-weight: 700;
        }
        .dark .mobile-nav-link.active {
            background-color: rgba(192, 193, 255, 0.1);
            color: #c0c1ff !important;
        }

        /* Dark Theme Glass Cards */
        .dark .glass-card {
            background: rgba(23, 31, 51, 0.4);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* Light Theme Cards - matching SCREEN_131 */
        .light .glass-card {
            background: #ffffff;
            backdrop-filter: none;
            border: 1px solid rgba(0, 0, 0, 0.12);
            box-shadow: 0 4px 24px -1px rgba(0, 0, 0, 0.04);
        }

        /* Featured Border - Dark */
        .dark .featured-border {
            position: relative;
        }

        .dark .featured-border::after {
            content: '';
            position: absolute;
            inset: -1px;
            background: linear-gradient(to right, #c0c1ff, #89ceff);
            z-index: -1;
            border-radius: 0.85rem;
            opacity: 0.3;
        }

        /* Featured Border - Light matching SCREEN_131 */
        .light .featured-border {
            position: relative;
        }

        .light .featured-border::after {
            content: '';
            position: absolute;
            inset: -1px;
            background: linear-gradient(to right, #6366f1, #0a2ee2);
            z-index: -1;
            border-radius: 0.85rem;
            opacity: 0.25;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <style>
        /* Ensure layout areas follow dark mode even if utilities are missing */
        html.dark body,
        html.dark main {
            background-color: #0b1326 !important;
            color: #dae2fd !important;
        }

        html.dark header {
            background-color: rgba(23, 31, 51, 0.8) !important;
            color: #dae2fd !important;
            border-color: rgba(70, 69, 84, 0.08) !important;
        }

        html.dark footer {
            background-color: #060e20 !important;
            color: #c7c4d7 !important;
            border-color: rgba(70, 69, 84, 0.06) !important;
        }

        html.dark header a,
        html.dark header .material-symbols-outlined,
        html.dark footer a {
            color: #c7c4d7 !important;
        }

        html.dark header a.bg-primary,
        html.dark header a.bg-primary * {
            color: #1000a9 !important;
        }
    </style>



    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface": {
                            DEFAULT: "#0b1326", // Dark
                            light: "#f7f9fb" // SCREEN_131 light
                        },
                        "primary-fixed-dim": "#c0c1ff",
                        "surface-container-low": {
                            DEFAULT: "#131b2e",
                            light: "#f2f4f6"
                        },
                        "on-tertiary-fixed-variant": "#6900b3",
                        "surface-container-high": {
                            DEFAULT: "#222a3d",
                            light: "#e6e8ea"
                        },
                        "error": "#ffb4ab",
                        "secondary-container": "#00a2e6",
                        "surface-container-highest": {
                            DEFAULT: "#2d3449",
                            light: "#e0e3e5"
                        },
                        "on-primary-container": {
                            DEFAULT: "#0d0096",
                            light: "#fffbff"
                        },
                        "on-secondary": "#00344d",
                        "inverse-surface": {
                            DEFAULT: "#dae2fd",
                            light: "#2d3133"
                        },
                        "surface-variant": "#2d3449",
                        "on-surface": {
                            DEFAULT: "#dae2fd",
                            light: "#191c1e"
                        },
                        "on-error-container": "#ffdad6",
                        "error-container": "#93000a",
                        "secondary-fixed-dim": "#89ceff",
                        "primary-fixed": "#e1e0ff",
                        "on-surface-variant": {
                            DEFAULT: "#c7c4d7",
                            light: "#2d3133"
                        },
                        "secondary": "#89ceff",
                        "secondary-fixed": "#c9e6ff",
                        "on-error": "#690005",
                        "on-secondary-fixed": "#001e2f",
                        "inverse-on-surface": "#283044",
                        "surface-bright": "#31394d",
                        "background": {
                            DEFAULT: "#0b1326",
                            light: "#f7f9fb"
                        },
                        "tertiary": "#ddb7ff",
                        "on-primary-fixed-variant": "#2f2ebe",
                        "on-background": {
                            DEFAULT: "#dae2fd",
                            light: "#191c1e"
                        },
                        "on-primary": "#1000a9",
                        "outline-variant": {
                            DEFAULT: "#464554",
                            light: "#908fa0" // Improved contrast
                        },
                        "tertiary-container": "#b76dff",
                        "on-tertiary-fixed": "#2c0051",
                        "surface-dim": "#0b1326",
                        "surface-tint": "#c0c1ff",
                        "primary": "#c0c1ff",
                        "tertiary-fixed": "#f0dbff",
                        "surface-container": {
                            DEFAULT: "#171f33",
                            light: "#eceef0"
                        },
                        "on-primary-fixed": "#07006c",
                        "inverse-primary": "#494bd6",
                        "surface-container-lowest": {
                            DEFAULT: "#060e20",
                            light: "#ffffff"
                        },
                        "on-secondary-container": "#00344e",
                        "on-tertiary": "#490080",
                        "primary-container": {
                            DEFAULT: "#8083ff",
                            light: "#6063ee"
                        },
                        "on-tertiary-container": "#400071",
                        "outline": {
                            DEFAULT: "#908fa0",
                            light: "#464554" // Darkened for accessibility
                        },
                        "tertiary-fixed-dim": "#ddb7ff",
                        "on-secondary-fixed-variant": "#004c6e"
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
                        "xl": "4rem",
                        "lg": "2.5rem",
                        "gutter": "24px",
                        "max_width": "1280px",
                        "unit": "4px",
                        "margin": "auto",
                        "xs": "0.5rem"
                    },
                    "fontFamily": {
                        "label-caps": ["Inter"],
                        "headline-md": ["Geist"],
                        "headline-lg": ["Geist"],
                        "display": ["Geist"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg-mobile": ["Geist"],
                        "code-sm": ["JetBrains Mono"]
                    },
                    "fontSize": {
                        "label-caps": ["12px", {
                            "lineHeight": "1",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["40px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "display": ["64px", {
                            "lineHeight": "1.1",
                            "letterSpacing": "-0.04em",
                            "fontWeight": "800"
                        }],
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
                        "code-sm": ["14px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }]
                    }
                }
            }
        }
    </script>
    <script>
        const User_ID = "{{ auth()->id() }}"
    </script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('style')
</head>

@php
    $isHome = request()->routeIs('home');
    $isDashboard = request()->is('dashboard*') || request()->routeIs('dashboard.*') || request()->routeIs('assignRolePage') || request()->routeIs('assignRole');
@endphp

<body
    class="bg-background-light dark:bg-background text-on-surface-light dark:text-on-surface font-body-md selection:bg-primary-container selection:text-on-primary-container transition-colors duration-300">
    <!-- TopNavBar -->
    <header
        class="fixed top-0 w-full z-50 bg-white/80 dark:bg-surface/80 backdrop-blur-xl border-b border-outline-variant-light/30 dark:border-outline-variant/10 shadow-2xl shadow-primary/5 transition-colors">
        <div class="flex justify-between items-center max-w-max_width mx-auto px-gutter h-16">
            <div class="flex items-center gap-xl">
                <a class="text-headline-md font-display font-extrabold text-primary tracking-tighter"
                    href="{{ route('home') }}">
                    <div class="flex items-center gap-2">
                        <img alt="Inkode Logo" class="h-8 w-auto object-contain"
                            src="{{ asset('assets/images/logo.png') }}" />
                        <span class="dark:text-primary text-on-surface-light">Inkode</span>
                    </div>
                </a>
                <nav class="hidden md:flex gap-md font-display text-body-md items-center">
                    @section('nav')
                        <a class="nav-link text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors duration-200 active:scale-95 transition-transform font-medium {{ ($isHome && !request()->has('explore') && !request()->has('authors')) ? 'active' : '' }}"
                            href="{{ route('home') }}" data-nav="feed">Feed</a>
                        <a class="nav-link text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors duration-200 active:scale-95 transition-transform font-medium"
                            href="{{ route('home') }}#explore" data-nav="explore">Explore</a>
                        <a class="nav-link text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors duration-200 active:scale-95 transition-transform font-medium"
                            href="{{ route('home') }}#authors" data-nav="authors">Authors</a>
                        <a class="nav-link text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors duration-200 active:scale-95 transition-transform font-medium {{ $isDashboard ? 'active' : '' }}"
                            href="{{ route('dashboard.posts.index') }}" data-nav="dashboard">Dashboard</a>
                    @show
                </nav>
            </div>
            <div class="flex items-center gap-md">
                <button
                    class="material-symbols-outlined text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors">search</button>
                <button
                    class="material-symbols-outlined text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-all p-2 rounded-lg hover:bg-primary/10"
                    id="theme-toggle">
                    <span class="block dark:hidden">dark_mode</span>
                    <span class="hidden dark:block">light_mode</span>
                </button>
                <a class="hidden sm:inline-block bg-[#6366f1] text-white dark:text-[#07006c] px-md py-xs rounded-xl font-display font-bold text-body-md active:scale-95 transition-transform"
                    href="{{ route('dashboard.posts.create') }}">
                    Create Post
                </a>
                @auth
                    <!-- Notifications Bell -->
                    <a href="{{ route('dashboard.index') }}" class="relative p-2 text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors flex items-center mr-1" title="Notifications">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' {{ auth()->user()->unreadNotifications()->count() > 0 ? '1' : '0' }};">notifications</span>
                        @if(auth()->user()->unreadNotifications()->count() > 0)
                            <span class="absolute top-1.5 right-1.5 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 text-[10px] font-bold text-white leading-none">
                                {{ auth()->user()->unreadNotifications()->count() }}
                            </span>
                        @endif
                    </a>

                    <div class="hidden md:flex items-center gap-sm bg-slate-50 dark:bg-surface-container-high/40 py-1.5 px-3 rounded-full border border-outline-variant-light/20 dark:border-outline-variant/10">
                        <div class="w-7 h-7 rounded-full overflow-hidden border border-primary/20">
                            <img alt="User profile" class="w-full h-full object-cover" src="{{ Auth::user()?->avatar }}" />
                        </div>
                        <span class="font-display font-semibold text-sm text-on-surface-light dark:text-on-surface">{{ auth()->user()->username }}</span>
                        <button onclick="document.getElementById('logout').submit()" class="material-symbols-outlined text-sm text-on-surface-variant-light dark:text-on-surface-variant hover:text-red-500 transition-colors ml-1" title="Logout">
                            logout
                        </button>
                        <form action="{{ route('logout') }}" method="POST" class="hidden" id="logout">@csrf</form>
                    </div>
                @else
                    <a class="hidden md:inline-block text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary font-semibold text-body-md transition-colors" href="{{ route('login') }}">
                        Login
                    </a>
                @endauth

                <!-- Hamburger Menu Button -->
                <button id="mobile-menu-toggle" class="md:hidden material-symbols-outlined text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-all p-2 rounded-lg hover:bg-primary/10">
                    menu
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-drawer" class="fixed inset-0 z-[100] transform translate-x-full transition-transform duration-300 ease-in-out md:hidden" aria-hidden="true">
        <!-- Backdrop -->
        <div id="mobile-drawer-backdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm opacity-0 transition-opacity duration-300 pointer-events-none"></div>
        <!-- Drawer Panel -->
        <div class="absolute right-0 top-0 bottom-0 w-72 bg-white dark:bg-[#0b1326] border-l border-outline-variant-light/30 dark:border-outline-variant/10 p-6 flex flex-col gap-6 shadow-2xl h-full">
            <div class="flex justify-between items-center">
                <span class="font-display text-headline-md font-bold text-primary">Inkode Navigation</span>
                <button id="mobile-drawer-close" class="material-symbols-outlined text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors p-1">
                    close
                </button>
            </div>
            
            <nav class="flex flex-col gap-3 font-display text-body-md">
                <a class="mobile-nav-link text-on-surface-variant-light dark:text-on-surface-variant hover:bg-primary/5 hover:text-primary {{ ($isHome && !request()->has('explore') && !request()->has('authors')) ? 'active' : '' }}"
                    href="{{ route('home') }}" data-nav="feed">Feed</a>
                <a class="mobile-nav-link text-on-surface-variant-light dark:text-on-surface-variant hover:bg-primary/5 hover:text-primary"
                    href="{{ route('home') }}#explore" data-nav="explore">Explore</a>
                <a class="mobile-nav-link text-on-surface-variant-light dark:text-on-surface-variant hover:bg-primary/5 hover:text-primary"
                    href="{{ route('home') }}#authors" data-nav="authors">Authors</a>
                <a class="mobile-nav-link text-on-surface-variant-light dark:text-on-surface-variant hover:bg-primary/5 hover:text-primary {{ $isDashboard ? 'active' : '' }}"
                    href="{{ route('dashboard.posts.index') }}" data-nav="dashboard">Dashboard</a>
                @auth
                    <a class="mobile-nav-link text-on-surface-variant-light dark:text-on-surface-variant hover:bg-primary/5 hover:text-primary flex items-center justify-between {{ request()->routeIs('dashboard.index') ? 'active' : '' }}"
                        href="{{ route('dashboard.index') }}" data-nav="notifications">
                        <span>Notifications</span>
                        @if(auth()->user()->unreadNotifications()->count() > 0)
                            <span class="bg-red-500 text-white text-xs font-bold px-2 py-0.5 rounded-full">
                                {{ auth()->user()->unreadNotifications()->count() }}
                            </span>
                        @endif
                    </a>
                @endauth
            </nav>
            
            <hr class="border-outline-variant-light/30 dark:border-outline-variant/10 my-1" />
            
            <!-- Auth options in mobile drawer -->
            <div class="flex flex-col gap-4 mt-auto">
                <a class="sm:hidden block text-center bg-[#6366f1] text-white dark:text-[#07006c] px-md py-3 rounded-xl font-display font-bold text-body-md active:scale-95 transition-transform"
                    href="{{ route('dashboard.posts.create') }}">
                    Create Post
                </a>
                @auth
                    <div class="flex items-center gap-sm p-3 rounded-xl bg-slate-50 dark:bg-surface-container-high/20 border border-outline-variant-light/20 dark:border-outline-variant/10">
                        <img alt="User profile" class="w-10 h-10 rounded-full border border-outline-variant-light dark:border-outline-variant object-cover" src="{{ Auth::user()?->avatar }}" />
                        <div class="flex flex-col">
                            <span class="font-bold text-on-surface-light dark:text-on-surface">{{ auth()->user()->username }}</span>
                            <span class="text-xs text-on-surface-variant-light dark:text-on-surface-variant">Active Developer</span>
                        </div>
                    </div>
                    <button onclick="document.getElementById('logout-mobile').submit()" class="flex items-center justify-center gap-2 w-full py-3 rounded-xl border border-red-500/20 text-red-500 hover:bg-red-500/5 transition-colors font-medium">
                        <span class="material-symbols-outlined text-sm">logout</span> Logout
                    </button>
                    <form action="{{ route('logout') }}" method="POST" class="hidden" id="logout-mobile">@csrf</form>
                @else
                    <a href="{{ route('login') }}" class="flex items-center justify-center gap-2 w-full py-3 rounded-xl bg-primary/10 text-primary font-bold hover:bg-primary/20 transition-all">
                        <span class="material-symbols-outlined text-sm">login</span> Login
                    </a>
                @endauth
            </div>
        </div>
    </div>
    <main class="pt-16 pb-xl max-w-max_width mx-auto px-gutter {{ $mainClass }}">
        {{ $slot }}
    </main>
    <!-- Footer -->
    <footer
        class="w-full py-xl bg-white dark:bg-surface-container-lowest border-t border-outline-variant-light/30 dark:border-outline-variant/5 transition-colors duration-300">
        <div class="flex flex-col md:flex-row justify-between items-center max-w-max_width mx-auto px-gutter gap-md">
            <div class="flex flex-col items-center md:items-start gap-sm">
                <span
                    class="font-display text-headline-md font-bold text-on-surface-light dark:text-on-surface">Inkode</span>
                <p
                    class="font-body-md text-body-md text-on-surface-variant-light dark:text-on-surface-variant max-w-xs text-center md:text-left">
                    © 2024 Inkode Technologies. Built for the future of development.
                </p>
            </div>
            <nav class="flex gap-lg">
                <a class="text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors duration-200 active:scale-95 transition-transform font-medium"
                    href="#">About</a>
                <a class="text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors duration-200 active:scale-95 transition-transform font-medium"
                    href="#">Privacy</a>
                <a class="text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors duration-200 active:scale-95 transition-transform font-medium"
                    href="#">Terms</a>
                <a class="text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors duration-200 active:scale-95 transition-transform font-medium"
                    href="#">API</a>
            </nav>
            <div class="flex gap-md">
                <button
                    class="material-symbols-outlined text-primary-container-light dark:text-secondary hover:opacity-80 transition-opacity">brand_awareness</button>
                <button
                    class="material-symbols-outlined text-primary-container-light dark:text-secondary hover:opacity-80 transition-opacity">hub</button>
                <button
                    class="material-symbols-outlined text-primary-container-light dark:text-secondary hover:opacity-80 transition-opacity">code</button>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const html = document.documentElement;
            const btn = document.getElementById('theme-toggle');

            const saved = localStorage.getItem('theme');

            if (saved === 'dark') {
                html.classList.add('dark');
                html.classList.remove('light');
            } else {
                html.classList.remove('dark');
                html.classList.add('light');
            }

            if (btn) {
                btn.addEventListener('click', () => {
                    const shouldUseDark = !html.classList.contains('dark');
                    html.classList.toggle('dark', shouldUseDark);
                    html.classList.toggle('light', !shouldUseDark);

                    localStorage.setItem('theme', shouldUseDark ? 'dark' : 'light');
                });
            }

            // Mobile Menu Open/Close
            const drawer = document.getElementById('mobile-drawer');
            const backdrop = document.getElementById('mobile-drawer-backdrop');
            const toggleBtn = document.getElementById('mobile-menu-toggle');
            const closeBtn = document.getElementById('mobile-drawer-close');

            function openDrawer() {
                drawer.classList.remove('translate-x-full');
                backdrop.classList.remove('pointer-events-none', 'opacity-0');
                backdrop.classList.add('opacity-100');
            }

            function closeDrawer() {
                drawer.classList.add('translate-x-full');
                backdrop.classList.remove('opacity-100');
                backdrop.classList.add('opacity-0', 'pointer-events-none');
            }

            if (toggleBtn) toggleBtn.addEventListener('click', openDrawer);
            if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
            if (backdrop) backdrop.addEventListener('click', closeDrawer);

            // Active Menu Item Highlighting
            const isHomePage = @json($isHome);
            const isDashboardPage = @json($isDashboard);

            // Select all links (desktop + mobile)
            const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');

            function setActiveLink(navKey) {
                navLinks.forEach(link => {
                    if (link.getAttribute('data-nav') === navKey) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }

            if (isHomePage) {
                // If it is home page, track scrolling of sections
                const sections = [
                    { id: 'explore', key: 'explore' },
                    { id: 'authors', key: 'authors' }
                ];

                const observerOptions = {
                    root: null,
                    rootMargin: '-20% 0px -60% 0px', // Trigger when section is in the middle of viewport
                    threshold: 0
                };

                const observer = new IntersectionObserver((entries) => {
                    let activeSection = null;
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            activeSection = entry.target.id;
                        }
                    });

                    if (activeSection) {
                        setActiveLink(activeSection);
                    } else {
                        // Check if we are scrolled to the top
                        if (window.scrollY < 200) {
                            setActiveLink('feed');
                        }
                    }
                }, observerOptions);

                sections.forEach(sec => {
                    const el = document.getElementById(sec.id);
                    if (el) observer.observe(el);
                });

                // Listen to hash change manually
                window.addEventListener('hashchange', () => {
                    const hash = window.location.hash.substring(1);
                    if (hash === 'explore' || hash === 'authors') {
                        setActiveLink(hash);
                    } else if (!hash) {
                        setActiveLink('feed');
                    }
                });
            } else if (isDashboardPage) {
                setActiveLink('dashboard');
            } else {
                setActiveLink('feed'); // Fallback for other pages
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    @stack('script')
</body>

</html>
