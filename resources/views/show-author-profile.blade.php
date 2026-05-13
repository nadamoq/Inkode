<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;600;700;800&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at 50% 0%, #171f33 0%, #0b1326 100%);
        }

        .font-display {
            font-family: 'Geist', sans-serif;
        }

        .font-headline {
            font-family: 'Geist', sans-serif;
        }

        .author-gradient {
            background: radial-gradient(circle at 20% 30%, rgba(99, 102, 241, 0.1) 0%, transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(183, 109, 255, 0.08) 0%, transparent 40%);
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline-variant": "#464554",
                        "surface-container-lowest": "#060e20",
                        "surface-container-high": "#222a3d",
                        "surface-variant": "#2d3449",
                        "surface": "#0b1326",
                        "surface-container-highest": "#2d3449",
                        "on-primary-fixed-variant": "#2f2ebe",
                        "primary-fixed": "#e1e0ff",
                        "outline": "#908fa0",
                        "on-tertiary-fixed-variant": "#6900b3",
                        "on-secondary-container": "#00344e",
                        "on-tertiary-container": "#400071",
                        "tertiary-container": "#b76dff",
                        "on-tertiary-fixed": "#2c0051",
                        "background": "#0b1326",
                        "tertiary": "#ddb7ff",
                        "secondary-fixed-dim": "#89ceff",
                        "error": "#ffb4ab",
                        "on-secondary-fixed-variant": "#004c6e",
                        "on-primary": "#1000a9",
                        "error-container": "#93000a",
                        "on-background": "#dae2fd",
                        "secondary": "#89ceff",
                        "on-secondary": "#00344d",
                        "surface-container-low": "#131b2e",
                        "secondary-container": "#00a2e6",
                        "tertiary-fixed": "#f0dbff",
                        "surface-container": "#171f33",
                        "on-primary-fixed": "#07006c",
                        "surface-dim": "#0b1326",
                        "on-error-container": "#ffdad6",
                        "inverse-on-surface": "#283044",
                        "primary-container": "#6366f1",
                        "on-surface": "#dae2fd",
                        "primary": "#c0c1ff",
                        "on-secondary-fixed": "#001e2f",
                        "surface-bright": "#31394d",
                        "surface-tint": "#c0c1ff",
                        "primary-fixed-dim": "#c0c1ff",
                        "on-error": "#690005",
                        "inverse-surface": "#dae2fd",
                        "on-primary-container": "#ffffff",
                        "tertiary-fixed-dim": "#ddb7ff",
                        "inverse-primary": "#494bd6",
                        "on-tertiary": "#490080",
                        "on-surface-variant": "#c7c4d7",
                        "secondary-fixed": "#c9e6ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xs": "0.5rem",
                        "max_width": "1280px",
                        "xl": "4rem",
                        "md": "1.5rem",
                        "sm": "1rem",
                        "gutter": "24px",
                        "margin": "auto",
                        "lg": "2.5rem",
                        "unit": "4px"
                    },
                    "fontFamily": {
                        "display": ["Geist", "Inter", "sans-serif"],
                        "headline": ["Geist", "Inter", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                        "code": ["JetBrains Mono", "monospace"]
                    }
                },
            },
        }
    </script>
    <style>
        /* Smooth theme transitions */
        body {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Light Mode Overrides */
        html.light body {
            background: #f8fafc;
            /* Clean light background from SCREEN_65 style */
            color: #0f172a;
            /* Deep neutral for maximum readability */
        }

        html.light .bg-surface\/80 {
            background-color: rgba(255, 255, 255, 0.8) !important;
        }

        html.light .text-on-surface {
            color: #0f172a !important;
        }

        html.light .text-on-surface-variant {
            color: #475569 !important;
        }

        html.light .bg-surface-container\/40,
        html.light .bg-surface-container-low\/40,
        html.light .bg-surface-container-high\/40 {
            background-color: rgba(241, 245, 249, 0.7) !important;
            border-color: rgba(203, 213, 225, 0.5) !important;
        }

        html.light .author-gradient {
            background: radial-gradient(circle at 20% 30%, rgba(99, 102, 241, 0.05) 0%, transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(183, 109, 255, 0.04) 0%, transparent 40%);
            background-color: #ffffff !important;
        }

        html.light .border-outline-variant\/20,
        html.light .border-outline-variant\/30,
        html.light .border-outline-variant {
            border-color: #e2e8f0 !important;
        }

        html.light .text-outline {
            color: #64748b !important;
        }

        html.light .bg-surface-container-lowest\/30 {
            background-color: rgba(248, 250, 252, 0.8) !important;
        }

        html.light article img {
            grayscale: 0 !important;
            /* Remove grayscale in light mode for better visual appeal */
        }
    </style>
</head>

<body class="text-on-surface font-body selection:bg-primary-container/30">
    <header class="bg-surface/80 backdrop-blur-md fixed top-0 w-full z-50 border-b border-outline-variant">
        <div class="flex justify-between items-center w-full px-gutter max-w-max_width mx-auto h-16">
            <div class="flex items-center gap-8">
                <a class="flex items-center gap-2" href="#">
                    <img alt="Inkode Logo" class="h-8 w-auto object-contain"
                        src="https://lh3.googleusercontent.com/aida/ADBb0ui30ko4UMNN_Q9JhQJwDhJXAx5McozfADfdneYDQsmS10-PvmhIWSqwItjGf9vIE1byJn8QHRGj2Me6rll7T6lQTbgB6fXp2IQMeQsXzSBoiNd-n3KfZlpUQAuhmP_yVMFX1pRkMVOi1n_3g5OJpFVuYLCPpomOhXfkZSHSDhZ2TOCbzt8ssYRMod16B36CPXTRcdNhzhMzhYQmHwxCCc5UwBNTHnwxeT5pNEUJlcGTQlSk9FbYu-3hSyQpn0QO1vVOs3R5zL90hA" />
                    <span
                        class="font-display text-2xl font-extrabold tracking-tight text-on-surface hidden sm:block">Inkode</span>
                </a>
                <nav class="hidden md:flex items-center gap-6">
                    <a class="text-on-surface-variant font-medium hover:text-primary-container transition-colors duration-200 text-sm"
                        href="#">Feed</a>
                    <a class="text-on-surface font-bold border-b-2 border-primary-container pb-1 text-sm"
                        href="#">Authors</a>
                    <a class="text-on-surface-variant font-medium hover:text-primary-container transition-colors duration-200 text-sm"
                        href="#">Dashboard</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-2">
                    <button
                        class="p-2 text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center"
                        id="theme-toggle">
                        <span class="material-symbols-outlined" id="theme-toggle-icon">light_mode</span>
                    </button><button class="p-2 text-on-surface-variant hover:text-on-surface transition-colors"><span
                            class="material-symbols-outlined" data-icon="notifications">notifications</span></button>
                    <button class="p-2 text-on-surface-variant hover:text-on-surface transition-colors"><span
                            class="material-symbols-outlined" data-icon="bookmark">bookmark</span></button>
                </div>
                <button
                    class="bg-primary-container text-white px-5 py-2 rounded-lg font-semibold text-sm hover:brightness-110 active:scale-95 transition-all">Create
                    Post</button>
                <div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant">
                    <img alt="User Avatar" class="w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgpCAfLUu97bCFrN0DDuxxX7S3f9kTFGWV3vpiOARFuYoWeD92p2rp69MCftv3uDhiCesTcoBE9v2M9qWPHdQzkHnB4mc_4s8CP38wYsymOO5S6r_mLh_o6bfLgrO2rdKtsjV8VKfZF--EwnAMvy6uYprZP5DgeSiRgfBR91lLn-TqWicpQzotBQgxJNMwnvcTuiKE_-B8Vw7gAHpMJ2vB82yBlufNwsUBbK1vxlLfem_o4UsI2nwmKuyhDlO6wRzOYF3ByX6HFdm3" />
                </div>
            </div>
        </div>
    </header>
    <main class="pt-24 pb-24">
        <!-- Redesigned Hero Header Section -->
        <section class="author-gradient border-b border-outline-variant/20 mb-16 bg-surface/30 backdrop-blur-[2px]">
            <div class="max-w-max_width mx-auto px-gutter py-16">
                <div class="flex flex-col lg:flex-row gap-12 lg:items-center">
                    <!-- Asymmetrical Profile Arrangement -->
                    <div class="relative w-max mx-auto lg:mx-0">
                        <div
                            class="w-48 h-48 md:w-64 md:h-64 rounded-[2.5rem] overflow-hidden border-2 border-primary-container/30 bg-surface-container rotate-3 hover:rotate-0 transition-transform duration-500 shadow-2xl">
                            <img alt="Elena Rostova"
                                class="w-full h-full object-cover -rotate-3 hover:rotate-0 transition-transform duration-500"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAiRWN3pX-JZTudAkeRHtO8BUH6GeyR4MDn_q1PVzjMOP56i9AWDTRln0ThdXi8Nq-vWDEDKwVpaFB45BsWzXGKBNlJoTGn0ir2f1Mw6n_VXYE23CpO_9O8EejyitzfJGNz1nfCTX-d8KsOEvo3Ks0vUWaNzBQnWlY06BW8vnAxLfG0JgYhgl8SFkAPpcOMYqrBNCZpZ-1vcPByLfWOX63lUZHsr8-sez_N-Cki4UCLHEeUu5UTNwTjdJEY0Wy8NBidWLAucNQmEk" />
                        </div>
                        <div
                            class="absolute -bottom-1 -right-1 bg-primary-container text-white p-3 rounded-2xl shadow-xl border-4 border-surface rotate-6">
                            <span class="material-symbols-outlined text-[24px]" data-icon="verified"
                                style="font-variation-settings: 'FILL' 1;">verified</span>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col md:flex-row gap-12 items-start">
                        <div class="flex-1 space-y-6 text-center lg:text-left">
                            <div>
                                <div
                                    class="inline-flex items-center px-3 py-1 rounded-full bg-primary-container/10 border border-primary-container/20 text-primary-container text-xs font-bold uppercase tracking-widest mb-4">
                                    Top Author</div>
                                <h1
                                    class="font-display text-4xl md:text-6xl font-extrabold text-on-surface mb-4 tracking-tighter leading-none">
                                    Elena Rostova</h1>
                                <p
                                    class="text-lg md:text-xl text-on-surface-variant max-w-2xl leading-relaxed font-medium">
                                    Critical thinker, system architect, and full-stack storyteller. Exploring the
                                    intersection of human psychology and decentralized technologies.</p>
                            </div>
                            <div class="flex flex-wrap justify-center lg:justify-start gap-x-8 gap-y-4">
                                <a class="flex items-center gap-2 text-on-surface-variant hover:text-primary-container transition-colors text-sm font-semibold"
                                    href="#">
                                    <span class="material-symbols-outlined text-[18px]" data-icon="link">link</span>
                                    <span>elenarostova.io</span>
                                </a>
                                <a class="flex items-center gap-2 text-on-surface-variant hover:text-primary-container transition-colors text-sm font-semibold"
                                    href="#">
                                    <span class="material-symbols-outlined text-[18px]"
                                        data-icon="alternate_email">alternate_email</span>
                                    <span>@elena_writes</span>
                                </a>
                                <a class="flex items-center gap-2 text-on-surface-variant hover:text-primary-container transition-colors text-sm font-semibold"
                                    href="#">
                                    <span class="material-symbols-outlined text-[18px]"
                                        data-icon="location_on">location_on</span>
                                    <span>Berlin, Germany</span>
                                </a>
                            </div>
                            <div class="flex flex-wrap justify-center lg:justify-start gap-4 pt-2">
                                <button
                                    class="bg-primary-container text-white px-8 py-3.5 rounded-xl font-bold hover:brightness-110 active:scale-[0.98] transition-all shadow-lg shadow-primary-container/25">Follow
                                    Author</button>
                                <button
                                    class="border border-outline-variant bg-surface-container-low/50 backdrop-blur-sm text-on-surface px-8 py-3.5 rounded-xl font-bold hover:bg-surface-container transition-all">Share
                                    Profile</button>
                            </div>
                        </div>
                        <!-- Repositioned Metrics: Integrated sidebar-style layout -->
                        <div class="w-full md:w-auto grid grid-cols-2 md:flex md:flex-col gap-4">
                            <div
                                class="bg-surface-container/40 backdrop-blur-xl border border-outline-variant/30 p-5 rounded-2xl min-w-[140px] hover:bg-surface-container/60 transition-colors">
                                <span
                                    class="block font-display text-2xl font-bold text-primary-container leading-none mb-1">12.4k</span>
                                <span
                                    class="text-[10px] font-bold text-outline uppercase tracking-wider">Followers</span>
                            </div>
                            <div
                                class="bg-surface-container/40 backdrop-blur-xl border border-outline-variant/30 p-5 rounded-2xl min-w-[140px] hover:bg-surface-container/60 transition-colors">
                                <span
                                    class="block font-display text-2xl font-bold text-on-surface leading-none mb-1">840k</span>
                                <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Total
                                    Views</span>
                            </div>
                            <div
                                class="bg-surface-container/40 backdrop-blur-xl border border-outline-variant/30 p-5 rounded-2xl min-w-[140px] hover:bg-surface-container/60 transition-colors">
                                <span
                                    class="block font-display text-2xl font-bold text-on-surface leading-none mb-1">142</span>
                                <span
                                    class="text-[10px] font-bold text-outline uppercase tracking-wider">Articles</span>
                            </div>
                            <div
                                class="bg-surface-container/40 backdrop-blur-xl border border-outline-variant/30 p-5 rounded-2xl min-w-[140px] hover:bg-surface-container/60 transition-colors">
                                <span
                                    class="block font-display text-2xl font-bold text-on-surface leading-none mb-1">4.9</span>
                                <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Avg
                                    Rating</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="max-w-max_width mx-auto px-gutter">
            <div class="flex items-center justify-between mb-12">
                <div>
                    <h2 class="font-headline text-3xl font-bold text-on-surface tracking-tight mb-2">Published Articles
                    </h2>
                    <div class="h-1 w-12 bg-primary-container rounded-full"></div>
                </div>
                <div
                    class="flex bg-surface-container/40 backdrop-blur-md p-1 rounded-xl border border-outline-variant/30">
                    <button class="p-2.5 rounded-lg text-white bg-primary-container shadow-sm">
                        <span class="material-symbols-outlined" data-icon="grid_view">grid_view</span>
                    </button>
                    <button class="p-2.5 rounded-lg text-on-surface-variant hover:text-on-surface transition-colors">
                        <span class="material-symbols-outlined" data-icon="list">list</span>
                    </button>
                </div>
            </div>
            <!-- Updated Articles Feed: Modern Grid with Fresh Imagery -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <article
                    class="group bg-surface-container-low/40 backdrop-blur-md border border-outline-variant/20 rounded-[1.5rem] overflow-hidden hover:border-primary-container/40 hover:bg-surface-container-low/60 transition-all duration-300 flex flex-col">
                    <div class="aspect-video overflow-hidden bg-surface-container-high relative">
                        <img alt="Abstract architectural circuit"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkAdhqbPORL_OtecGEqHe8EKvec_2Q633TezbebqoLixbZb3RWSk7a1Y9jFu5x31wH8FVzV1tsfTpsvyB5w3iQUCsaYtNyMqW1nwJUF5jWl0W9r_nlc4ULk5oSUHeqnkKByYkTqD0UuuMRgjfpRvQOPyGvdcvk7uT7SK9vtHC1mCaiAddpIxhUgeLZETBMC0TzIE3rrZWce1FfWjW_jqWNJp-raNTGGe8wrMJdtpSV0WB6qBRIv9WbajADHgZAQwFxlx-M1J6DAN4" />
                        <div class="absolute inset-0 bg-gradient-to-t from-surface/80 to-transparent opacity-60"></div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-primary-container text-white px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-widest backdrop-blur-md">Technology</span>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col space-y-4">
                        <span class="text-xs text-outline font-semibold">Oct 14, 2024 · 8 min read</span>
                        <h3
                            class="font-headline text-xl font-bold text-on-surface group-hover:text-primary-container transition-colors leading-snug">
                            The Ghost in the Machine: Why Architecture Still Matters in a No-Code World</h3>
                        <p class="text-on-surface-variant text-sm line-clamp-3 leading-relaxed flex-1">In an era where
                            abstraction layers are thicker than ever, understanding the fundamental physics of software
                            remains the only true competitive advantage for developers.</p>
                        <div class="flex items-center justify-between pt-4 border-t border-outline-variant/20">
                            <div class="flex items-center gap-4">
                                <button
                                    class="flex items-center gap-1.5 text-xs font-bold text-outline hover:text-on-surface transition-colors">
                                    <span class="material-symbols-outlined text-[16px]"
                                        data-icon="thumb_up">thumb_up</span> 2.1k
                                </button>
                                <button
                                    class="flex items-center gap-1.5 text-xs font-bold text-outline hover:text-on-surface transition-colors">
                                    <span class="material-symbols-outlined text-[16px]"
                                        data-icon="chat_bubble">chat_bubble</span> 84
                                </button>
                            </div>
                            <button class="text-outline hover:text-primary-container transition-colors">
                                <span class="material-symbols-outlined text-[20px]"
                                    data-icon="bookmark_add">bookmark_add</span>
                            </button>
                        </div>
                    </div>
                </article>
                <!-- Article 2 -->
                <article
                    class="group bg-surface-container-low/40 backdrop-blur-md border border-outline-variant/20 rounded-[1.5rem] overflow-hidden hover:border-primary-container/40 hover:bg-surface-container-low/60 transition-all duration-300 flex flex-col">
                    <div class="aspect-video overflow-hidden bg-surface-container-high relative">
                        <img alt="Modern concrete architecture"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVLaxis6ypo2qQ31uu7GfLMJtGJiayA8s2uszVnso4hGqqmQqopf1AAJzi7O6wXcOIwf4U4H9dZozp2LGU-AwAI5_5dyQeS8DE5nzY8W-0JwTVPQM8obQ5YjqeggI6a2u8hPbP3asoLpIF5WmNN4y1W49NTGs1izAXE9_ieo5Sd8yepuOkbRCxzU4aMu6cVCdpLlPoWFEpDo85q_METwcgw2DSC3GRhdDqrMgRGvK1AxKeQOTJhEm2OG3H-xUv5kCTh2WcY_PNjvk" />
                        <div class="absolute inset-0 bg-gradient-to-t from-surface/80 to-transparent opacity-60"></div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-primary-container text-white px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-widest backdrop-blur-md">Philosophy</span>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col space-y-4">
                        <span class="text-xs text-outline font-semibold">Sep 28, 2024 · 12 min read</span>
                        <h3
                            class="font-headline text-xl font-bold text-on-surface group-hover:text-primary-container transition-colors leading-snug">
                            Deep Work in a Surface World: Lessons from the Great Polymaths</h3>
                        <p class="text-on-surface-variant text-sm line-clamp-3 leading-relaxed flex-1">The attention
                            economy has fractured our ability to sit with a single problem for more than ten minutes.
                            Reclaiming intellectual autonomy through focus.</p>
                        <div class="flex items-center justify-between pt-4 border-t border-outline-variant/20">
                            <div class="flex items-center gap-4">
                                <button
                                    class="flex items-center gap-1.5 text-xs font-bold text-outline hover:text-on-surface transition-colors">
                                    <span class="material-symbols-outlined text-[16px]"
                                        data-icon="thumb_up">thumb_up</span> 1.8k
                                </button>
                                <button
                                    class="flex items-center gap-1.5 text-xs font-bold text-outline hover:text-on-surface transition-colors">
                                    <span class="material-symbols-outlined text-[16px]"
                                        data-icon="chat_bubble">chat_bubble</span> 56
                                </button>
                            </div>
                            <button class="text-outline hover:text-primary-container transition-colors">
                                <span class="material-symbols-outlined text-[20px]"
                                    data-icon="bookmark_add">bookmark_add</span>
                            </button>
                        </div>
                    </div>
                </article>
                <!-- Article 3 -->
                <article
                    class="group bg-surface-container-low/40 backdrop-blur-md border border-outline-variant/20 rounded-[1.5rem] overflow-hidden hover:border-primary-container/40 hover:bg-surface-container-low/60 transition-all duration-300 flex flex-col">
                    <div class="aspect-video overflow-hidden bg-surface-container-high relative">
                        <img alt="Abstract digital network"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSGNYLcxCv07Wlu6NswYWYFbwiLzplP-as4aQXSGJ5hIGtcvaK7sBZuGcwo5ncNuiyHPK969yCyZ1wR8G-a2BAPJOsN1CS0P_AbnAJfLeOMmaBQboRmYwbRuMur5im8YCpCyNlyuGl60PML46Kf1qvAqmJ4pSKDSZSgVWuAbr7WAd6BHJg6HRP6P0r8bYo-7nWv7JgoyGdb9FG0w2Xk9LCIOtpIyXp4mCuZA7vbfOW-0hI_NWMHL-1qEHCWmOV37qx_CxhBhiuOUY" />
                        <div class="absolute inset-0 bg-gradient-to-t from-surface/80 to-transparent opacity-60"></div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-primary-container text-white px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-widest backdrop-blur-md">Web3</span>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col space-y-4">
                        <span class="text-xs text-outline font-semibold">Sep 15, 2024 · 15 min read</span>
                        <h3
                            class="font-headline text-xl font-bold text-on-surface group-hover:text-primary-container transition-colors leading-snug">
                            The Social Consensus: Rethinking Governance for Digital Cooperatives</h3>
                        <p class="text-on-surface-variant text-sm line-clamp-3 leading-relaxed flex-1">Most DAOs fail
                            because they try to automate human politics with smart contracts. We need a new layer of
                            social coordination prioritized on judgment.</p>
                        <div class="flex items-center justify-between pt-4 border-t border-outline-variant/20">
                            <div class="flex items-center gap-4">
                                <button
                                    class="flex items-center gap-1.5 text-xs font-bold text-outline hover:text-on-surface transition-colors">
                                    <span class="material-symbols-outlined text-[16px]"
                                        data-icon="thumb_up">thumb_up</span> 3.4k
                                </button>
                                <button
                                    class="flex items-center gap-1.5 text-xs font-bold text-outline hover:text-on-surface transition-colors">
                                    <span class="material-symbols-outlined text-[16px]"
                                        data-icon="chat_bubble">chat_bubble</span> 112
                                </button>
                            </div>
                            <button class="text-outline hover:text-primary-container transition-colors">
                                <span class="material-symbols-outlined text-[20px]"
                                    data-icon="bookmark_add">bookmark_add</span>
                            </button>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Pagination -->
            <div class="mt-20 text-center">
                <button
                    class="group inline-flex items-center gap-3 bg-surface-container-high/40 backdrop-blur-md border border-outline-variant/30 text-on-surface px-10 py-4 rounded-2xl font-bold hover:bg-primary-container hover:text-white transition-all active:scale-95 shadow-xl">
                    Load More Articles
                    <span class="material-symbols-outlined group-hover:translate-y-1 transition-transform"
                        data-icon="expand_more">expand_more</span>
                </button>
            </div>
        </div>
    </main>
    <footer class="bg-surface-container-lowest/30 backdrop-blur-sm border-t border-outline-variant/20">
        <div class="w-full py-16 px-gutter max-w-max_width mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 items-start">
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <img alt="Inkode Logo" class="h-8 w-auto object-contain"
                        src="https://lh3.googleusercontent.com/aida/ADBb0ui30ko4UMNN_Q9JhQJwDhJXAx5McozfADfdneYDQsmS10-PvmhIWSqwItjGf9vIE1byJn8QHRGj2Me6rll7T6lQTbgB6fXp2IQMeQsXzSBoiNd-n3KfZlpUQAuhmP_yVMFX1pRkMVOi1n_3g5OJpFVuYLCPpomOhXfkZSHSDhZ2TOCbzt8ssYRMod16B36CPXTRcdNhzhMzhYQmHwxCCc5UwBNTHnwxeT5pNEUJlcGTQlSk9FbYu-3hSyQpn0QO1vVOs3R5zL90hA" />
                    <span class="font-display text-xl font-extrabold tracking-tight text-on-surface">Inkode</span>
                </div>
                <p class="text-sm text-outline leading-relaxed max-w-xs">A sanctuary for long-form intellectual content
                    and the people who create it. Bridging complexity and clarity.</p>
            </div>
            <div class="flex flex-wrap gap-x-8 gap-y-4">
                <a class="text-sm font-semibold text-outline hover:text-on-surface transition-all"
                    href="#">About</a>
                <a class="text-sm font-semibold text-outline hover:text-on-surface transition-all"
                    href="#">Privacy</a>
                <a class="text-sm font-semibold text-outline hover:text-on-surface transition-all"
                    href="#">Terms</a>
                <a class="text-sm font-semibold text-outline hover:text-on-surface transition-all"
                    href="#">API</a>
                <a class="text-sm font-semibold text-outline hover:text-on-surface transition-all"
                    href="#">Help</a>
            </div>
            <div class="flex flex-col md:items-end gap-4">
                <p class="text-xs text-outline font-medium">© 2024 Inkode Platform. All rights reserved.</p>
                <div class="flex gap-4">
                    <button
                        class="p-2 rounded-lg bg-surface-container border border-outline-variant/30 text-outline hover:text-primary-container transition-colors"><span
                            class="material-symbols-outlined text-[20px]" data-icon="share">share</span></button>
                    <button
                        class="p-2 rounded-lg bg-surface-container border border-outline-variant/30 text-outline hover:text-primary-container transition-colors"><span
                            class="material-symbols-outlined text-[20px]"
                            data-icon="rss_feed">rss_feed</span></button>
                </div>
            </div>
        </div>
    </footer>
    <script>
        const themeToggleBtn = document.getElementById('theme-toggle');
        const themeToggleIcon = document.getElementById('theme-toggle-icon');
        const htmlElement = document.documentElement;

        themeToggleBtn.addEventListener('click', () => {
            if (htmlElement.classList.contains('dark')) {
                htmlElement.classList.remove('dark');
                htmlElement.classList.add('light');
                themeToggleIcon.textContent = 'dark_mode';
                localStorage.setItem('theme', 'light');
            } else {
                htmlElement.classList.remove('light');
                htmlElement.classList.add('dark');
                themeToggleIcon.textContent = 'light_mode';
                localStorage.setItem('theme', 'dark');
            }
        });

        // Check for saved theme preference or system preference
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'light') {
            htmlElement.classList.remove('dark');
            htmlElement.classList.add('light');
            themeToggleIcon.textContent = 'dark_mode';
        }
    </script>
</body>

</html>
