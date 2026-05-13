<x-layouts.front title="Article">
    @push('style')
        <!-- Geist font emulation -->
        <link href="https://cdn.jsdelivr.net/npm/geist@1.3.0/dist/fonts/geist-sans/style.css" rel="stylesheet" />
    @endpush
    @push('script')
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        "colors": {
                            "secondary-fixed": "#c9e6ff",
                            "tertiary-fixed": "#f0dbff",
                            "on-primary-fixed-variant": "#2f2ebe",
                            "on-primary-fixed": "#07006c",
                            "surface-container-high": "#222a3d",
                            "secondary": "#89ceff",
                            "surface-container-highest": "#2d3449",
                            "surface-dim": "#0b1326",
                            "secondary-container": "#00a2e6",
                            "on-primary": "#1000a9",
                            "tertiary-fixed-dim": "#ddb7ff",
                            "tertiary": "#ddb7ff",
                            "on-secondary-fixed": "#001e2f",
                            "on-background": "#dae2fd",
                            "on-primary-container": "#0d0096",
                            "on-secondary-fixed-variant": "#004c6e",
                            "secondary-fixed-dim": "#89ceff",
                            "on-error": "#690005",
                            "inverse-surface": "#dae2fd",
                            "outline-variant": "#464554",
                            "on-tertiary-fixed-variant": "#6900b3",
                            "inverse-primary": "#494bd6",
                            "surface-bright": "#31394d",
                            "primary-fixed-dim": "#c0c1ff",
                            "surface-container": "#171f33",
                            "outline": "#908fa0",
                            "error": "#ffb4ab",
                            "on-secondary-container": "#00344e",
                            "on-surface": "#dae2fd",
                            "surface-variant": "#2d3449",
                            "surface-container-low": "#131b2e",
                            "surface": "#0b1326",
                            "primary-fixed": "#e1e0ff",
                            "primary": "#c0c1ff",
                            "on-error-container": "#ffdad6",
                            "on-tertiary-fixed": "#2c0051",
                            "tertiary-container": "#b76dff",
                            "primary-container": "#8083ff",
                            "background": "#0b1326",
                            "surface-container-lowest": "#060e20",
                            "on-tertiary-container": "#400071",
                            "on-tertiary": "#490080",
                            "on-surface-variant": "#c7c4d7",
                            "error-container": "#93000a",
                            "on-secondary": "#00344d",
                            "surface-tint": "#c0c1ff"
                        },
                        "borderRadius": {
                            "DEFAULT": "0.5rem",
                            "lg": "0.5rem",
                            "xl": "0.75rem",
                            "full": "9999px"
                        },
                        "spacing": {
                            "xl": "4rem",
                            "margin": "auto",
                            "gutter": "24px",
                            "sm": "1rem",
                            "max_width": "1280px",
                            "unit": "4px",
                            "xs": "0.5rem",
                            "lg": "2.5rem",
                            "md": "1.5rem"
                        },
                        "fontFamily": {
                            "code-sm": ["JetBrains Mono"],
                            "body-lg": ["Inter"],
                            "body-md": ["Inter"],
                            "label-caps": ["Inter"],
                            "headline-md": ["Geist Sans", "Inter"],
                            "headline-lg": ["Geist Sans", "Inter"],
                            "display": ["Geist Sans", "Inter"]
                        },
                        "fontSize": {
                            "code-sm": ["14px", {
                                "lineHeight": "1.5",
                                "fontWeight": "400"
                            }],
                            "body-lg": ["18px", {
                                "lineHeight": "1.6",
                                "fontWeight": "400"
                            }],
                            "body-md": ["16px", {
                                "lineHeight": "1.6",
                                "fontWeight": "400"
                            }],
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
                            }]
                        }
                    },
                },
            }
        </script>
    @endpush
    @push('style')
        <style>
            body {
                font-family: 'Inter', sans-serif;
                transition: background-color 0.3s ease, color 0.3s ease;
            }


            .article-max-width {
                max-width: 720px;
            }

            .geist-font {
                font-family: 'Geist Sans', sans-serif;
            }

            .code-font {
                font-family: 'JetBrains Mono', monospace;
                
            }

            /* Light mode color overrides to match SCREEN_110 */
            .light {
                --background: #fdfbff;
                --on-background: #1b1b1f;
                --surface: #fdfbff;
                --on-surface: #1b1b1f;
                --surface-variant: #e3e2e6;
                --on-surface-variant: #46464f;
                --outline-variant: #c7c6ca;
                --primary: #4e56af;
                --on-primary: #ffffff;
                --secondary: #5b5d72;
                --on-secondary: #ffffff;
                --surface-container: #f2f0f4;
                --surface-container-low: #f8f6fa;
                --surface-container-lowest: #ffffff;
                --surface-container-high: #eceaf0;
                --surface-container-highest: #e6e4ea;
            }

            .dark {
                --background: #0b1326;
                --on-background: #dae2fd;
                --surface: #0b1326;
                --on-surface: #dae2fd;
                --surface-variant: #2d3449;
                --on-surface-variant: #c7c4d7;
                --outline-variant: #464554;
                --primary: #c0c1ff;
                --on-primary: #1000a9;
                --secondary: #89ceff;
                --on-secondary: #00344d;
                --surface-container: #171f33;
                --surface-container-low: #131b2e;
                --surface-container-lowest: #060e20;
                --surface-container-high: #222a3d;
                --surface-container-highest: #2d3449;
            }

            .light body {
                background-color: var(--background);
                color: var(--on-background);
            }

            .light nav {
                background-color: rgba(253, 251, 255, 0.8);
                border-color: var(--outline-variant);
            }

            .light .bg-surface-container {
                background-color: var(--surface-container);
            }

            .light .bg-surface-container-low {
                background-color: var(--surface-container-low);
            }

            .light .bg-surface-container-lowest {
                background-color: var(--surface-container-lowest);
            }

            .light .bg-surface-container-highest\/30 {
                background-color: rgba(230, 228, 234, 0.3);
            }

            .light .border-outline-variant {
                border-color: var(--outline-variant);
            }

            .light .text-on-surface {
                color: var(--on-surface);
            }

            .light .text-on-surface-variant {
                color: var(--on-surface-variant);
            }

            .light .text-primary {
                color: var(--primary);
            }

            .light .text-secondary {
                color: var(--secondary);
            }

            .light .bg-primary {
                background-color: var(--primary);
                color: var(--on-primary);
            }

            .light .bg-secondary {
                background-color: var(--secondary);
                color: var(--on-secondary);
            }

            .light .border-primary {
                border-color: var(--primary);
            }

            .light .grayscale {
                filter: grayscale(0);
            }

            /* Option to keep images vivid in light mode if preferred */

            .light .article-max-width p {
                color: #666666 !important;
            }

            .light .text-on-surface\/90,
            .light .text-on-surface\/80 {
                color: #666666 !important;
            } 
        </style>
        
    @endpush

    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-12">
        <!-- Left Sidebar: Actions (Floating Style) -->
        <aside class="hidden lg:block w-16">
            <div
                class="sticky top-32 space-y-8 flex flex-col items-center py-4 bg-surface-container rounded-2xl border border-outline-variant transition-colors">
                <div class="flex flex-col items-center gap-1 group cursor-pointer">
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-primary/20 hover:text-primary transition-colors text-on-surface-variant">
                        <span class="material-symbols-outlined">favorite</span>
                    </button>
                    <span class="text-xs font-semibold text-secondary">1.2k</span>
                </div>
                <div class="flex flex-col items-center gap-1 group cursor-pointer">
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-primary/20 hover:text-primary transition-colors text-on-surface-variant">
                        <span class="material-symbols-outlined">chat_bubble</span>
                    </button>
                    <span class="text-xs font-semibold text-secondary">84</span>
                </div>
                <div class="w-8 h-px bg-outline-variant"></div>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-primary/20 hover:text-primary transition-colors text-on-surface-variant">
                    <span class="material-symbols-outlined">bookmark</span>
                </button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-primary/20 hover:text-primary transition-colors text-on-surface-variant">
                    <span class="material-symbols-outlined">share</span>
                </button>
            </div>
        </aside>
        <!-- Main Content Column -->
        <article class="flex-1 article-max-width mx-auto lg:mx-0">
            <header class="mb-12">
                <nav class="flex items-center gap-2 mb-6 text-sm font-medium text-primary">
                    <span>Development</span>
                    <span class="material-symbols-outlined text-xs">chevron_right</span>
                    <span>Cognition</span>
                </nav>
                <h1 class="geist-font text-headline-lg md:text-display font-extrabold text-on-surface leading-tight mb-8 "
                    style="margin-top: 50px">
                    The Architecture of Silence: Designing for Focused Cognition
                </h1>
                <!-- Author Block (Repositioned for Inkode) -->
                <div
                    class="lg:hidden flex items-center justify-between mb-8 p-4 bg-surface-container rounded-xl border border-outline-variant transition-colors">
                    <div class="flex items-center gap-4">
                        <img class="w-10 h-10 rounded-full grayscale border border-outline"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrB-fTH_sGc-EoJs3tiJjk17n12cNKJM223VhyTD5FfEtDknySO7GKIj0HvaJ3d-MoqtVOP8Yfk-dObjmX9mmt7mFiMRgqqpHWCsYFFpmpKBTaBXmgoB4M75gSnf4MJhP1WCx3DUb1E9iLnP1S039Q9dKb0JB_82yuO9S-WADZqyUPUVc_7lpe6Od7eVj2dcesczICWUxGQu7qeDZM0cH-Zqb8erGsQU-AEaICg0K2DynpHlKKOtRY0rPe9qhTIpUEN05vqmFz9_FG" />
                        <div>
                            <p class="font-bold text-on-surface">Julian Thorne</p>
                            <p class="text-xs text-on-surface-variant">Oct 24, 2024 · 12 min read</p>
                        </div>
                    </div>
                    <button
                        class="bg-secondary text-on-secondary px-4 py-1.5 rounded-full text-xs font-bold">Follow</button>
                </div>
            </header>
            <!-- Article Body -->
            <div class="space-y-8">
                <p class="text-body-lg text-on-surface/90 leading-relaxed">
                    In an era defined by the constant hum of notification-driven anxiety, the true luxury of the
                    modern interface is not feature density, but intentional absence. We have spent decades filling
                    every pixel with utility, forgetting that the primary purpose of reading is a solitary, quiet
                    dialogue between the ink and the mind.
                </p>
                <h2 class="geist-font text-headline-md mt-12 mb-4 text-on-surface tracking-tight">The Psychology of
                    White Space</h2>
                <p class="text-body-md text-on-surface/80">
                    When we strip away the secondary sidebars, the flashing banners, and the sticky social widgets,
                    we allow the reader's cognitive load to reset. This isn't just a stylistic choice; it's a
                    neurological necessity for deep comprehension. The grid must breathe.
                </p>
                <figure class="my-12">
                    <div class="relative overflow-hidden rounded-2xl border border-outline-variant group">
                        <img class="w-full grayscale hover:grayscale-0 transition-all duration-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCe9z5-CMxvCeCQThs7kHzXQ5geJGBesnpuQA7xMHfACS22Pxtkz4R7KK9r2bvlMMQw0dcote6RP0On5Tfiu4fPCTiAUZD7FMlSMV5mGUEbKYzWeebVMGq3fVli3vncJYSUj8lHI5od9K87xxH50MrEwLkFtOqVf7isIQFSMFZNyPWjKcLqU9cy4ueAsQnu3Q-sn7a3GaYWe-h3MpWxNwyaLxKSk3xhfxcVEi_H6xbFghZghxTOkCJnEq6APCaOSL0cc2jtB8-DzQ59" />
                        <div class="absolute inset-0 bg-gradient-to-t from-background/20 to-transparent"></div>
                    </div>
                    <figcaption
                        class="mt-4 px-4 py-3 bg-surface-container-low border-l-2 border-primary rounded-r-lg transition-colors">
                        <span
                            class="code-font text-xs font-bold text-primary uppercase tracking-widest block mb-1">Figure
                            1.1</span>
                        <p class="text-xs text-secondary italic">The visual representation of cognitive breathing
                            room in physical architecture.</p>
                    </figcaption>
                </figure>
                <blockquote
                    class="relative py-8 px-10 my-12 bg-surface-container-highest/30 rounded-2xl border border-outline-variant overflow-hidden transition-colors">
                    <div class="absolute top-0 left-0 w-1 h-full bg-primary"></div>
                    <span
                        class="material-symbols-outlined absolute top-4 left-4 text-primary/20 text-4xl select-none">format_quote</span>
                    <p class="geist-font text-xl md:text-2xl text-on-surface font-medium leading-normal relative z-10">
                        "True design is reached not when there is nothing left to add, but when there is nothing
                        left to take away from the core message."
                    </p>
                </blockquote>
                <h3
                    class="code-font text-sm font-bold uppercase tracking-[0.2em] text-primary mt-16 mb-4 flex items-center gap-3">
                    <span class="w-8 h-px bg-primary/30"></span>
                    Intentional Constraints
                </h3>
                <p class="text-body-md text-on-surface/80">
                    Standardizing column widths to 720px is more than a convention. It respects the physiological
                    limits of the human eye, ensuring that the transition from the end of one line to the beginning
                    of the next remains fluid and effortless. Any wider, and the brain begins to work too hard just
                    to track the sequence.
                </p>
                <!-- Key Takeaways (Inkode Tech Card style) -->
                <div
                    class="p-8 bg-surface-container border border-outline-variant rounded-2xl my-16 shadow-2xl shadow-primary/5 transition-colors">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="material-symbols-outlined text-primary">terminal</span>
                        <h4 class="geist-font font-bold text-lg text-on-surface">Key Takeaways for Designers</h4>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4">
                            <span class="code-font text-primary font-bold mt-1 text-sm">01</span>
                            <p class="text-on-surface-variant leading-relaxed">Prioritize monochromatic foundations
                                for reading areas.</p>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="code-font text-primary font-bold mt-1 text-sm">02</span>
                            <p class="text-on-surface-variant leading-relaxed">Use 8px-based spacing for a rigorous
                                vertical rhythm.</p>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="code-font text-primary font-bold mt-1 text-sm">03</span>
                            <p class="text-on-surface-variant leading-relaxed">Introduce a single high-energy
                                digital accent (e.g., Electric Violet).</p>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        <!-- Right Sidebar: Author Metadata (Sticky) -->
        <aside class="hidden lg:block w-72">
            <div class="sticky top-32 space-y-6">
                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant transition-colors">
                    <div class="flex flex-col items-center text-center">
                        <img class="w-20 h-20 rounded-full grayscale border-2 border-primary mb-4"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrB-fTH_sGc-EoJs3tiJjk17n12cNKJM223VhyTD5FfEtDknySO7GKIj0HvaJ3d-MoqtVOP8Yfk-dObjmX9mmt7mFiMRgqqpHWCsYFFpmpKBTaBXmgoB4M75gSnf4MJhP1WCx3DUb1E9iLnP1S039Q9dKb0JB_82yuO9S-WADZqyUPUVc_7lpe6Od7eVj2dcesczICWUxGQu7qeDZM0cH-Zqb8erGsQU-AEaICg0K2DynpHlKKOtRY0rPe9qhTIpUEN05vqmFz9_FG" />
                        <h3 class="geist-font font-bold text-xl text-on-surface">Julian Thorne</h3>
                        <p class="text-sm text-secondary mb-6">Interface Philosopher &amp; Architect</p>
                        <button
                            class="w-full bg-primary text-on-primary font-bold py-2.5 rounded-lg transition-all hover:opacity-90 active:scale-95 mb-4">Follow</button>
                        <div class="grid grid-cols-2 gap-4 w-full text-center">
                            <div>
                                <p class="text-xs text-on-surface-variant uppercase tracking-wider font-bold">Read
                                    Time</p>
                                <p class="font-bold text-on-surface">12 min</p>
                            </div>
                            <div>
                                <p class="text-xs text-on-surface-variant uppercase tracking-wider font-bold">
                                    Published</p>
                                <p class="font-bold text-on-surface">Oct 24</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 bg-surface-container-low rounded-2xl border border-outline-variant transition-colors">
                    <h4 class="text-xs font-bold text-on-surface-variant uppercase tracking-widest mb-4">More from
                        Julian</h4>
                    <div class="space-y-4">
                        <a class="block group" href="#">
                            <p
                                class="text-sm font-semibold text-on-surface group-hover:text-primary transition-colors mb-1">
                                The Ethics of Engagement</p>
                            <p class="text-xs text-secondary">5 min read</p>
                        </a>
                        <a class="block group" href="#">
                            <p
                                class="text-sm font-semibold text-on-surface group-hover:text-primary transition-colors mb-1">
                                Monochromatic Accessibility</p>
                            <p class="text-xs text-secondary">8 min read</p>
                        </a>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</x-layouts.front>
