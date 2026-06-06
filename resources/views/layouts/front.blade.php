<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Inkode {{ $title }}</title>
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/png" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    {{$headScript ?? ''}}
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
                            light: "#2d3133" // Darkened from 464554 for accessibility
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
    @stack('style')
</head>

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
                <nav class="hidden md:flex gap-md font-display text-body-md">
                    @section('nav')
                        <a class="text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors duration-200 active:scale-95 transition-transform font-medium text-primary font-bold border-b-2 border-primary pb-1"
                            href="{{ route('home') }}">Feed</a><a
                            class="text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors duration-200 active:scale-95 transition-transform font-medium"
                            href="#">Explore</a>
                        <a class="text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors duration-200 active:scale-95 transition-transform font-medium"
                            href="#">Authors</a>
                        <a class="text-on-surface-variant-light dark:text-on-surface-variant hover:text-primary transition-colors duration-200 active:scale-95 transition-transform font-medium"
                            href="#">Dashboard</a>
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
                <a class="bg-[#6366f1] text-white  dark:text-[#07006c] px-md py-xs rounded-xl font-display font-bold text-body-md active:scale-95 transition-transform"
                    href="{{ route('dashboard.posts.create') }}">
                    Create Post
                </a>
                <div
                    class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant-light dark:border-outline-variant">
                    <img alt="User profile"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlFAp98Zvo2XeTwbwRR-Pm6JzUr3JZEZ689tkUZMQTGTIe2hssjJwGnojI2GdXpLLFGOtWx5ymRYzy0uhR7HOqeRh7e55BaaVe9xqgjCciCdhVEmuuPeqdU6sbqags-XvXaoqyJ2GuEdeuAUCEN69sBH5h49Bg8SNbdjZ9ezwgYufct_TeCaXWe997IqeVL_Xxzbl6FXt9HG89h83NDzmu4Ww7lpJaWbda-xseoQNUN6-gfxvwd04UzgxdQ5_3MU1KpZNKzNYOrLs" />
                </div>
            </div>
        </div>
    </header>
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
        //     const themeToggleBtn = document.getElementById('theme-toggle');
        //     const htmlElement = document.documentElement;

        //     themeToggleBtn.addEventListener('click', () => {
        //         if (htmlElement.classList.contains('dark')) {
        //             htmlElement.classList.remove('dark');
        //             htmlElement.classList.add('light');
        //         } else {
        //             htmlElement.classList.remove('light');
        //             htmlElement.classList.add('dark');
        //         }
        //     });
    </script>
    <script>
        // document.addEventListener("DOMContentLoaded", () => {
        //     const html = document.documentElement;

        //     const savedTheme = localStorage.getItem('theme');

        //     if (savedTheme === 'dark') {
        //         html.classList.add('dark');
        //     } else {
        //         html.classList.remove('dark');
        //     }

        //     const btn = document.getElementById('theme-toggle');

        //     if (!btn) return;

        //     btn.addEventListener('click', () => {
        //         html.classList.toggle('dark');

        //         localStorage.setItem(
        //             'theme',
        //             html.classList.contains('dark') ? 'dark' : 'light'
        //         );
        //     });
        // });
    </script>
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

            if (!btn) return;

            btn.addEventListener('click', () => {
                const shouldUseDark = !html.classList.contains('dark');
                html.classList.toggle('dark', shouldUseDark);
                html.classList.toggle('light', !shouldUseDark);

                localStorage.setItem('theme', shouldUseDark ? 'dark' : 'light');
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    @stack('script')
</body>

</html>
