<x-layouts.front title='Notications'>
    @push('script')
        <x-slot name='headScript'>
            <script id="tailwind-config">
                tailwind.config = {
                    darkMode: "class",
                    theme: {
                        extend: {
                            "colors": {
                                "surface-bright": "#31394d",
                                "error": "#ffb4ab",
                                "primary-fixed-dim": "#c0c1ff",
                                "on-primary": "#1000a9",
                                "on-error": "#690005",
                                "on-secondary": "#00344d",
                                "surface-container": "#171f33",
                                "primary-container": "#8083ff",
                                "primary": "#c0c1ff",
                                "on-tertiary-fixed": "#2c0051",
                                "on-tertiary": "#490080",
                                "on-error-container": "#ffdad6",
                                "secondary-fixed": "#c9e6ff",
                                "on-primary-fixed": "#07006c",
                                "inverse-surface": "#dae2fd",
                                "surface-container-high": "#222a3d",
                                "surface-container-lowest": "#060e20",
                                "on-secondary-fixed": "#001e2f",
                                "tertiary-fixed": "#f0dbff",
                                "tertiary-fixed-dim": "#ddb7ff",
                                "on-primary-fixed-variant": "#2f2ebe",
                                "inverse-primary": "#494bd6",
                                "inverse-on-surface": "#283044",
                                "secondary-fixed-dim": "#89ceff",
                                "on-surface": "#dae2fd",
                                "on-secondary-container": "#00344e",
                                "surface-dim": "#0b1326",
                                "on-tertiary-fixed-variant": "#6900b3",
                                "background": "#0b1326",
                                "tertiary-container": "#b76dff",
                                "surface-container-highest": "#2d3449",
                                "primary-fixed": "#e1e0ff",
                                "secondary": "#89ceff",
                                "surface-variant": "#2d3449",
                                "outline-variant": "#464554",
                                "tertiary": "#ddb7ff",
                                "on-tertiary-container": "#400071",
                                "secondary-container": "#00a2e6",
                                "on-primary-container": "#0d0096",
                                "on-background": "#dae2fd",
                                "surface-container-low": "#131b2e",
                                "on-secondary-fixed-variant": "#004c6e",
                                "surface-tint": "#c0c1ff",
                                "outline": "#908fa0",
                                "on-surface-variant": "#c7c4d7",
                                "error-container": "#93000a",
                                "surface": "#0b1326"
                            },
                            "borderRadius": {
                                "DEFAULT": "0.25rem",
                                "lg": "0.5rem",
                                "xl": "0.75rem",
                                "full": "9999px"
                            },
                            "spacing": {
                                "xs": "0.5rem",
                                "sm": "1rem",
                                "md": "1.5rem",
                                "xl": "4rem",
                                "margin": "auto",
                                "lg": "2.5rem",
                                "gutter": "24px",
                                "max_width": "1280px",
                                "unit": "4px"
                            },
                            "fontFamily": {
                                "headline-lg-mobile": ["Geist"],
                                "label-caps": ["Inter"],
                                "headline-md": ["Geist"],
                                "headline-lg": ["Geist"],
                                "body-lg": ["Inter"],
                                "display": ["Geist"],
                                "code-sm": ["JetBrains Mono"],
                                "body-md": ["Inter"]
                            },
                            "fontSize": {
                                "headline-lg-mobile": ["32px", {
                                    "lineHeight": "1.2",
                                    "fontWeight": "700"
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
                                "body-lg": ["18px", {
                                    "lineHeight": "1.6",
                                    "fontWeight": "400"
                                }],
                                "display": ["64px", {
                                    "lineHeight": "1.1",
                                    "letterSpacing": "-0.04em",
                                    "fontWeight": "800"
                                }],
                                "code-sm": ["14px", {
                                    "lineHeight": "1.5",
                                    "fontWeight": "400"
                                }],
                                "body-md": ["16px", {
                                    "lineHeight": "1.6",
                                    "fontWeight": "400"
                                }]
                            }
                        },
                    },
                }
            </script>
        </x-slot>
        @push('style')

            <style>
                .glass {
                    backdrop-filter: blur(12px);
                    -webkit-backdrop-filter: blur(12px);
                }

                .material-symbols-outlined {
                    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
                }

                .active-tab {
                    border-bottom: 2px solid var(--primary);
                }

                /* Custom scrollbar for technical look */
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

                ::-webkit-scrollbar-thumb:hover {
                    background: #908fa0;
                }

                /* Transition for theme switching */
                body {
                    transition: background-color 0.3s ease, color 0.3s ease;
                }

                /* Light Mode Overrides */
                html:not(.dark) body {
                    background-color: #ffffff;
                    color: #1a1a1a;
                }

                html:not(.dark) .bg-surface-container-low,
                html:not(.dark) .bg-surface-container-lowest,
                html:not(.dark) aside,
                html:not(.dark) header {
                    background-color: #ffffff !important;
                    border-color: #e5e7eb !important;
                }

                html:not(.dark) .text-on-surface,
                html:not(.dark) h1,
                html:not(.dark) h2,
                html:not(.dark) h3,
                html:not(.dark) h4 {
                    color: #111827 !important;
                }

                html:not(.dark) .text-on-surface-variant,
                html:not(.dark) p,
                html:not(.dark) .text-outline {
                    color: #4b5563 !important;
                }

                html:not(.dark) .bg-surface-container-low,
                html:not(.dark) .bg-surface-container {
                    background-color: #f9fafb !important;
                    border-color: #f3f4f6 !important;
                }

                html:not(.dark) .border-outline-variant\/10,
                html:not(.dark) .border-outline-variant\/30,
                html:not(.dark) .border-outline-variant\/5 {
                    border-color: #e5e7eb !important;
                }

                html:not(.dark) .hover\:bg-surface-variant\/50:hover {
                    background-color: #f3f4f6 !important;
                }

                html:not(.dark) input {
                    background-color: #f3f4f6 !important;
                    color: #111827 !important;
                }

                html:not(.dark) .bg-surface-container-highest {
                    background-color: #f3f4f6 !important;
                }

                html:not(.dark) .bg-error-container\/10 {
                    background-color: #fef2f2 !important;
                }

                html:not(.dark) .bg-primary-container {
                    background-color: #c0c1ff !important;
                }

                html:not(.dark) .text-on-primary-container {
                    color: #07006c !important;
                }
            </style>
        @endpush



        <!-- Main Content Area -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-md mb-xl m-5">
            <div>
                <h2 class="font-headline-lg text-headline-lg md:text-headline-lg text-on-surface mb-xs">
                    Notifications</h2>
                <p class="text-on-surface-variant">Stay updated with your mentions, publications, and security
                    alerts.</p>
            </div>
            <button
                class="group flex items-center gap-sm px-lg py-md border border-outline-variant/30 rounded-xl hover:bg-surface-container-high transition-all">
                <span class="material-symbols-outlined text-primary group-hover:rotate-12 transition-transform"
                    data-icon="done_all">done_all</span>
                <span class="font-label-caps text-label-caps uppercase text-on-surface">Mark all as read</span>
            </button>
        </div>
        <!-- Tabs Navigation -->
        <div class="flex items-center gap-lg border-b border-outline-variant/10 mb-lg overflow-x-auto no-scrollbar">
            <button
                class="pb-md px-xs font-label-caps text-label-caps uppercase border-b-2 border-primary text-primary transition-all whitespace-nowrap">All
                (12)</button>
            <button
                class="pb-md px-xs font-label-caps text-label-caps uppercase border-b-2 border-transparent text-on-surface-variant hover:text-on-surface transition-all whitespace-nowrap">Mentions</button>
            <button
                class="pb-md px-xs font-label-caps text-label-caps uppercase border-b-2 border-transparent text-on-surface-variant hover:text-on-surface transition-all whitespace-nowrap">System
                Updates</button>
        </div>
        <!-- Notifications List -->
        <div class="flex flex-col gap-sm">
            <!-- Notification Item: Mention -->
            <div
                class="group relative bg-surface-container-low hover:bg-surface-container border border-outline-variant/10 rounded-2xl p-md flex items-start gap-md transition-all">
                <div
                    class="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-12 bg-primary rounded-r-full shadow-[0_0_12px_rgba(192,193,255,0.4)]">
                </div>
                <div class="w-12 h-12 rounded-xl overflow-hidden shrink-0 border border-outline-variant/20">
                    <img alt="Elena R." class="w-full h-full object-cover"
                        data-alt="Close-up portrait of Elena, a young professional developer with a friendly expression, soft studio lighting emphasizing a clean, modern aesthetic with subtle indigo background tones."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSYrS-SzBjKPPqFAyUcEETcp1xP84o--iKDKXFptK1CTmO-b_QVajnKK0MykZK5OMvKTapAB0JTLKKlrxnpz_zI4gmGpA6N7skUlqLhKZsdpcAIQ2U3G68TkSFHvpcqu1pUss13DvubsEIGbVqxVmQCRg5rfFbRWSiztKJrLWMBWSY0ZXDYRqj4olhDLMK0LqHXA3U3RoaJ18XaobKtjqqEAvzWjY71NiO7QbBeHtpkmqlER2q9uR1gDKF5fjJ_f3XoG_GliHAB68" />
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-xs mb-1">
                        <span class="font-bold text-on-surface">Elena R.</span>
                        <span class="text-on-surface-variant text-sm">mentioned you in a comment</span>
                    </div>
                    <p class="text-on-surface-variant line-clamp-1 italic text-sm mb-2">"@alex_dev We should
                        probably investigate the latency spikes in the Frankfurt cluster before shipping..."</p>
                    <span class="text-xs text-outline font-label-caps uppercase">2 mins ago</span>
                </div>
                <div class="flex items-center gap-sm">
                    <div class="w-2 h-2 rounded-full bg-primary shadow-[0_0_8px_rgba(192,193,255,0.6)]"></div>
                    <button class="p-xs hover:bg-surface-variant/50 rounded-lg transition-all">
                        <span class="material-symbols-outlined text-on-surface-variant"
                            data-icon="more_vert">more_vert</span>
                    </button>
                </div>
            </div>
            <!-- Notification Item: Like -->
            @foreach ($notifications as $item)
                
            
            <div
                class="group bg-surface-container-low hover:bg-surface-container border border-outline-variant/5 rounded-2xl p-md flex items-start gap-md transition-all opacity-80 hover:opacity-100">
                <div class="w-12 h-12 rounded-xl overflow-hidden shrink-0 border border-outline-variant/20">
                    <img alt="Elena R." class="w-full h-full object-cover"
                        data-alt="Close-up portrait of Elena, a young professional developer with a friendly expression, soft studio lighting emphasizing a clean, modern aesthetic with subtle indigo background tones."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSYrS-SzBjKPPqFAyUcEETcp1xP84o--iKDKXFptK1CTmO-b_QVajnKK0MykZK5OMvKTapAB0JTLKKlrxnpz_zI4gmGpA6N7skUlqLhKZsdpcAIQ2U3G68TkSFHvpcqu1pUss13DvubsEIGbVqxVmQCRg5rfFbRWSiztKJrLWMBWSY0ZXDYRqj4olhDLMK0LqHXA3U3RoaJ18XaobKtjqqEAvzWjY71NiO7QbBeHtpkmqlER2q9uR1gDKF5fjJ_f3XoG_GliHAB68" />
                </div>
                <a href={{$item->data['link']}}>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-xs mb-1">
                          <span class="text-on-surface-variant text-sm">{{$item->data['body']}}</span>
                    </div>
                  
                    <span class="text-xs text-outline font-label-caps uppercase">{{$item->created_at->diffForHumans()}}</span>
                </div>
                </a>
                <button class="p-xs hover:bg-surface-variant/50 rounded-lg transition-all self-center">
                    <span class="material-symbols-outlined text-on-surface-variant" data-icon="more_vert">more_vert</span>
                </button>
            </div>
              @endforeach
            <!-- Notification Item: Publication Live -->
            <div
                class="group bg-surface-container-low hover:bg-surface-container border border-outline-variant/5 rounded-2xl p-md flex items-start gap-md transition-all">
                <div
                    class="w-12 h-12 rounded-xl bg-tertiary-container/20 flex items-center justify-center shrink-0 border border-tertiary/10">
                    <span class="material-symbols-outlined text-tertiary" data-icon="rocket_launch">rocket_launch</span>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-xs mb-1">
                        <span class="font-bold text-on-surface">Inkode Editorial</span>
                        <span class="text-on-surface-variant text-sm">Post published</span>
                    </div>
                    <p class="text-on-surface-variant text-sm mb-1">Your post <span class="text-primary font-bold">"The
                            Neural Frontier"</span> is now live and
                        featured in the Weekly Digest.</p>
                    <span class="text-xs text-outline font-label-caps uppercase">3 hours ago</span>
                </div>
                <div class="flex items-center gap-sm self-center">
                    <div class="w-2 h-2 rounded-full bg-primary shadow-[0_0_8px_rgba(192,193,255,0.6)]"></div>
                    <button class="p-xs hover:bg-surface-variant/50 rounded-lg transition-all">
                        <span class="material-symbols-outlined text-on-surface-variant"
                            data-icon="more_vert">more_vert</span>
                    </button>
                </div>
            </div>
            <!-- Notification Item: Security Alert -->
            <div
                class="group bg-error-container/10 hover:bg-error-container/20 border border-error/20 rounded-2xl p-md flex items-start gap-md transition-all">
                <div
                    class="w-12 h-12 rounded-xl bg-error/10 flex items-center justify-center shrink-0 border border-error/30">
                    <span class="material-symbols-outlined text-error" data-icon="security">security</span>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-xs mb-1">
                        <span class="font-bold text-error">Security Update</span>
                    </div>
                    <p class="text-on-surface text-sm mb-1">New login from <span class="font-bold">Berlin,
                            Germany</span> (Device: Chrome on macOS). Was this you?</p>
                    <div class="flex gap-md mt-sm">
                        <button class="text-xs font-label-caps uppercase text-error hover:underline">Secure
                            account</button>
                        <button class="text-xs font-label-caps uppercase text-on-surface-variant hover:underline">Yes,
                            it was me</button>
                    </div>
                    <span class="block mt-md text-xs text-outline font-label-caps uppercase">Yesterday,
                        14:22</span>
                </div>
                <button class="p-xs hover:bg-surface-variant/50 rounded-lg transition-all self-start">
                    <span class="material-symbols-outlined text-on-surface-variant" data-icon="more_vert">more_vert</span>
                </button>
            </div>
            <!-- Notification Item: System Update -->
            <div
                class="group bg-surface-container-low hover:bg-surface-container border border-outline-variant/5 rounded-2xl p-md flex items-start gap-md transition-all opacity-60">
                <div class="w-12 h-12 rounded-xl bg-surface-variant flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-outline" data-icon="terminal">terminal</span>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-xs mb-1">
                        <span class="font-bold text-on-surface">System Build</span>
                        <span class="text-on-surface-variant text-sm">Deployment successful</span>
                    </div>
                    <p
                        class="font-code-sm text-code-sm text-on-surface-variant bg-surface-container-lowest p-xs rounded border border-outline-variant/10">
                        v2.4.1-stable deployed to edge_nodes[0..12]</p>
                    <span class="text-xs text-outline font-label-caps uppercase mt-2 block">Nov 22, 2023</span>
                </div>
                <button class="p-xs hover:bg-surface-variant/50 rounded-lg transition-all self-center">
                    <span class="material-symbols-outlined text-on-surface-variant" data-icon="more_vert">more_vert</span>
                </button>
            </div>
        </div>
        <!-- Bento Featured Section (Atmospheric) -->
        <section class="mt-xl grid grid-cols-1 md:grid-cols-3 gap-md">
            <div
                class="md:col-span-2 relative h-48 rounded-3xl overflow-hidden group border border-outline-variant/20 shadow-xl">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-surface-container-lowest to-transparent p-lg flex flex-col justify-center">
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-xs">Neural Insights v2</h3>
                    <p class="text-on-surface-variant max-w-sm">Our AI-native engine now scans mentions for
                        sentiment and technical relevance.</p>
                    <button
                        class="mt-md px-md py-sm w-fit bg-on-surface text-surface rounded-lg font-bold text-sm hover:scale-105 transition-all">Explore
                        Documentation</button>
                </div>
            </div>
            <div
                class="bg-primary-container p-lg rounded-3xl flex flex-col justify-between border border-primary/20 shadow-lg shadow-primary/10">
                <span class="material-symbols-outlined text-on-primary-container text-4xl"
                    data-icon="auto_awesome">auto_awesome</span>
                <div>
                    <h4 class="font-bold text-on-primary-container mb-xs">Priority Mode</h4>
                    <p class="text-on-primary-container/80 text-sm">Focus on high-impact technical discussions
                        only.</p>
                </div>
            </div>
        </section>

        <!-- Mobile Navigation Bar -->
        <nav
            class="md:hidden fixed bottom-0 left-0 right-0 bg-surface/90 backdrop-blur-xl border-t border-outline-variant/10 flex justify-around items-center h-16 z-50 px-md">
            <button class="flex flex-col items-center gap-1 text-primary">
                <span class="material-symbols-outlined" data-icon="home">home</span>
                <span class="text-[10px] font-label-caps uppercase">Home</span>
            </button>
            <button class="flex flex-col items-center gap-1 text-on-surface-variant">
                <span class="material-symbols-outlined" data-icon="explore">explore</span>
                <span class="text-[10px] font-label-caps uppercase">Explore</span>
            </button>
            <button class="flex flex-col items-center gap-1 text-on-surface-variant">
                <span class="material-symbols-outlined" data-icon="notifications"
                    style="font-variation-settings: 'FILL' 1;">notifications</span>
                <span class="text-[10px] font-label-caps uppercase">Inbox</span>
            </button>
            <button class="flex flex-col items-center gap-1 text-on-surface-variant">
                <span class="material-symbols-outlined" data-icon="person">person</span>
                <span class="text-[10px] font-label-caps uppercase">Profile</span>
            </button>
        </nav>
       


    </x-layouts.front>
