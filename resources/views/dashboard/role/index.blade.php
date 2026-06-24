<x-layouts.front title="Role managment">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary-container": "var(--on-tertiary-container)",
                        "surface-tint": "var(--surface-tint)",
                        "outline": "var(--outline)",
                        "surface-container-high": "var(--surface-container-high)",
                        "on-tertiary-fixed": "var(--on-tertiary-fixed)",
                        "on-secondary-fixed-variant": "var(--on-secondary-fixed-variant)",
                        "on-tertiary-fixed-variant": "var(--on-tertiary-fixed-variant)",
                        "on-secondary-fixed": "var(--on-secondary-fixed)",
                        "surface-container-low": "var(--surface-container-low)",
                        "on-primary-fixed": "var(--on-primary-fixed)",
                        "surface-container-highest": "var(--surface-container-highest)",
                        "primary-fixed": "var(--primary-fixed)",
                        "error-container": "var(--error-container)",
                        "primary": "var(--primary)",
                        "surface-dim": "var(--surface-dim)",
                        "on-primary-fixed-variant": "var(--on-primary-fixed-variant)",
                        "secondary-container": "var(--secondary-container)",
                        "on-surface-variant": "var(--on-surface-variant)",
                        "on-secondary-container": "var(--on-secondary-container)",
                        "on-error-container": "var(--on-error-container)",
                        "surface-variant": "var(--surface-variant)",
                        "on-tertiary": "var(--on-tertiary)",
                        "background": "var(--background)",
                        "inverse-primary": "var(--inverse-primary)",
                        "primary-fixed-dim": "var(--primary-fixed-dim)",
                        "on-primary-container": "var(--on-primary-container)",
                        "secondary-fixed-dim": "var(--secondary-fixed-dim)",
                        "primary-container": "var(--primary-container)",
                        "outline-variant": "var(--outline-variant)",
                        "tertiary-fixed": "var(--tertiary-fixed)",
                        "surface-container-lowest": "var(--surface-container-lowest)",
                        "surface": "var(--surface)",
                        "on-surface": "var(--on-surface)",
                        "tertiary-container": "var(--tertiary-container)",
                        "on-primary": "var(--on-primary)",
                        "tertiary": "var(--tertiary)",
                        "surface-bright": "var(--surface-bright)",
                        "secondary": "var(--secondary)",
                        "secondary-fixed": "var(--secondary-fixed)",
                        "on-secondary": "var(--on-secondary)",
                        "surface-container": "var(--surface-container)",
                        "on-background": "var(--on-background)",
                        "inverse-on-surface": "var(--inverse-on-surface)",
                        "on-error": "var(--on-error)",
                        "error": "var(--error)",
                        "inverse-surface": "var(--inverse-surface)",
                        "tertiary-fixed-dim": "var(--tertiary-fixed-dim)"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xl": "4rem",
                        "lg": "2.5rem",
                        "sm": "1rem",
                        "margin": "auto",
                        "xs": "0.5rem",
                        "md": "1.5rem",
                        "max_width": "1280px",
                        "gutter": "24px",
                        "unit": "4px"
                    },
                    "fontFamily": {
                        "headline-md": ["Geist"],
                        "headline-lg": ["Geist"],
                        "code-sm": ["JetBrains Mono"],
                        "body-lg": ["Inter"],
                        "headline-lg-mobile": ["Geist"],
                        "display": ["Geist"],
                        "label-caps": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", {
                            "lineHeight": "1.3",
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
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "headline-lg-mobile": ["32px", {
                            "lineHeight": "1.2",
                            "fontWeight": "700"
                        }],
                        "display": ["64px", {
                            "lineHeight": "1.1",
                            "letterSpacing": "-0.04em",
                            "fontWeight": "800"
                        }],
                        "label-caps": ["12px", {
                            "lineHeight": "1",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
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
    <style>
        :root {
            /* Inkode Light Mode - High Contrast White & Deep Charcoal */
            --on-tertiary-container: #400071;
            --surface-tint: #494bd6;
            --outline: #908fa0;
            --surface-container-high: #e5e7eb;
            --on-tertiary-fixed: #2c0051;
            --on-secondary-fixed-variant: #004c6e;
            --on-tertiary-fixed-variant: #6900b3;
            --on-secondary-fixed: #001e2f;
            --surface-container-low: #ffffff;
            /* Explicit pure white sidebar/container background */
            --on-primary-fixed: #00006e;
            --surface-container-highest: #d1d5db;
            --primary-fixed: #e1e0ff;
            --error-container: #fee2e2;
            --primary: #4f46e5;
            --surface-dim: #f3f4f6;
            --on-primary-fixed-variant: #2f2ebe;
            --secondary-container: #dcfce7;
            --on-surface-variant: #374151;
            /* Darker for readability */
            --on-secondary-container: #00344e;
            --on-error-container: #991b1b;
            --surface-variant: #f3f4f6;
            --on-tertiary: #ffffff;
            --background: #ffffff;
            --inverse-primary: #c0c1ff;
            --primary-fixed-dim: #c0c1ff;
            --on-primary-container: #ffffff;
            --secondary-fixed-dim: #89ceff;
            --primary-container: #4f46e5;
            --outline-variant: #e5e7eb;
            --tertiary-fixed: #f0dbff;
            --surface-container-lowest: #ffffff;
            --surface: #ffffff;
            --on-surface: #111827;
            --tertiary-container: #f5f3ff;
            --on-primary: #ffffff;
            --tertiary: #7c3aed;
            --surface-bright: #ffffff;
            --secondary: #006492;
            --secondary-fixed: #c9e6ff;
            --on-secondary: #ffffff;
            --surface-container: #ffffff;
            --on-background: #111827;
            --inverse-on-surface: #f3f4f6;
            --on-error: #ffffff;
            --error: #dc2626;
            --inverse-surface: #111827;
            --tertiary-fixed-dim: #ddb7ff;
        }

        .dark {
            /* Inkode Dark Mode - Original Core Colors */
            --on-tertiary-container: #400071;
            --surface-tint: #c0c1ff;
            --outline: #908fa0;
            --surface-container-high: #222a3d;
            --on-tertiary-fixed: #2c0051;
            --on-secondary-fixed-variant: #004c6e;
            --on-tertiary-fixed-variant: #6900b3;
            --on-secondary-fixed: #001e2f;
            --surface-container-low: #131b2e;
            --on-primary-fixed: #07006c;
            --surface-container-highest: #2d3449;
            --primary-fixed: #e1e0ff;
            --error-container: #93000a;
            --primary: #c0c1ff;
            --surface-dim: #0b1326;
            --on-primary-fixed-variant: #2f2ebe;
            --secondary-container: #00a2e6;
            --on-surface-variant: #c7c4d7;
            --on-secondary-container: #00344e;
            --on-error-container: #ffdad6;
            --surface-variant: #2d3449;
            --on-tertiary: #490080;
            --background: #0b1326;
            --inverse-primary: #494bd6;
            --primary-fixed-dim: #c0c1ff;
            --on-primary-container: #0d0096;
            --secondary-fixed-dim: #89ceff;
            --primary-container: #8083ff;
            --outline-variant: #464554;
            --tertiary-fixed: #f0dbff;
            --surface-container-lowest: #060e20;
            --surface: #0b1326;
            --on-surface: #dae2fd;
            --tertiary-container: #b76dff;
            --on-primary: #1000a9;
            --tertiary: #ddb7ff;
            --surface-bright: #31394d;
            --secondary: #89ceff;
            --secondary-fixed: #c9e6ff;
            --on-secondary: #00344d;
            --surface-container: #171f33;
            --on-background: #dae2fd;
            --inverse-on-surface: #283044;
            --on-error: #690005;
            --error: #ffb4ab;
            --inverse-surface: #dae2fd;
            --tertiary-fixed-dim: #ddb7ff;
        }

        .glass-card {
            background: rgba(var(--surface-container-highest-rgb, 45, 52, 73), 0.4);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        html.light .glass-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            backdrop-filter: none;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--outline-variant);
            border-radius: 10px;
        }
    </style>
    </head>


    <!-- Main Canvas -->
         <div class="max-w-[max_width] mx-auto px-md py-lg">
            <!-- Page Header -->
            <section class="flex flex-col md:flex-row md:items-center justify-between gap-md mb-xl">
                <div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface mb-xs transition-colors duration-300">
                        Role Management</h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant transition-colors duration-300">
                        Configure access levels and define granular permissions for your team members.</p>
                </div>
                <a href="{{route('dashboard.roles.create')}}"
                    class="bg-primary text-on-primary font-label-caps text-label-caps px-lg py-sm rounded-xl flex items-center gap-sm hover:brightness-110 active:scale-95 transition-all shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined">add</span> Create New Role
            </a>
            </section>
            <!-- Stats Bar / Quick Filters -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-md mb-md">
                <div class="glass-card p-md rounded-xl transition-colors duration-300">
                    <p class="font-label-caps text-label-caps text-outline mb-xs">Total Roles</p>
                    <p class="font-display text-headline-md text-primary">{{$roles->count()}}</p>
                </div>
                <div class="glass-card p-md rounded-xl transition-colors duration-300">
                    <p class="font-label-caps text-label-caps text-outline mb-xs">Active Users</p>
                    <p class="font-display text-headline-md text-secondary">842</p>
                </div>
                <div class="glass-card p-md rounded-xl transition-colors duration-300">
                    <p class="font-label-caps text-label-caps text-outline mb-xs">Custom Abilities</p>
                    <p class="font-display text-headline-md text-tertiary">48</p>
                </div>
                <div class="glass-card p-md rounded-xl transition-colors duration-300">
                    <p class="font-label-caps text-label-caps text-outline mb-xs">Security Level</p>
                    <p class="font-display text-headline-md text-on-surface transition-colors duration-300">Optimized
                    </p>
                </div>
            </div>
             @if (session('success'))
                    <div class="mb-md p-md bg-success/10 border border-success/30 text-success rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif
            <!-- Role List Section -->
            <div class="glass-card rounded-xl overflow-hidden transition-colors duration-300">
                <!-- Toolbar -->
                <div
                    class="p-md border-b border-outline-variant flex flex-col sm:flex-row gap-md justify-between items-center bg-surface-container-low transition-colors duration-300">
                    <div class="relative w-full sm:w-96">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
                        <input
                            class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg pl-10 pr-4 py-2 text-body-md focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all outline-none text-on-surface"
                            placeholder="Filter roles by name or ability..." type="text" />
                    </div>
                    <div class="flex items-center gap-sm">
                        <button
                            class="px-sm py-2 text-label-caps font-label-caps border border-outline-variant rounded-lg hover:bg-surface-variant/30 transition-all text-on-surface-variant flex items-center gap-xs">
                            <span class="material-symbols-outlined text-[18px]">filter_list</span> Filter
                        </button>
                        <button
                            class="px-sm py-2 text-label-caps font-label-caps border border-outline-variant rounded-lg hover:bg-surface-variant/30 transition-all text-on-surface-variant flex items-center gap-xs">
                            <span class="material-symbols-outlined text-[18px]">sort</span> Sort
                        </button>
                    </div>
                </div>
               
                <!-- Table Header (Desktop) -->
                <div
                    class="hidden lg:grid grid-cols-12 gap-md px-md py-sm bg-surface-container-high/50 border-b border-outline-variant font-label-caps text-label-caps text-outline uppercase tracking-wider transition-colors duration-300">
                    <div class="col-span-3">Role Identity</div>
                    <div class="col-span-6">Abilities &amp; Permissions</div>
                    <div class="col-span-3 text-right px-md">Operations</div>
                </div>
                <!-- Role List Items -->
                <div class="divide-y divide-outline-variant transition-colors duration-300">
                    <!-- Item: Super Admin -->
                    @foreach ($roles as $role)
                        
                    <div
                        class="grid grid-cols-1 lg:grid-cols-12 gap-md p-md items-center hover:bg-surface-variant/20 transition-all group">
                        <div class="col-span-3 flex items-center gap-sm">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary border border-primary/30 transition-colors">
                                <span class="material-symbols-outlined">shield_person</span>
                            </div>
                            <div>
                                <h4
                                    class="font-headline-md text-body-md text-on-surface transition-colors duration-300">
                                    {{$role->name}}</h4>
                                    
                                <p class="text-xs text-outline font-label-caps uppercase tracking-tight"></p>
                            </div>
                        </div>
                        <div class="col-span-6 flex flex-wrap gap-2">
                            @foreach (collect($role->abilities) as $item )
                            

                            <span class="px-xs py-1 rounded bg-primary/10 border border-primary/20 text-primary font-code-sm text-[12px] transition-colors">{{$item}}</span>
                           
                            @endforeach
                             <span
                                class="px-xs py-1 rounded bg-secondary/10 border border-secondary/20 text-secondary font-code-sm text-[12px] transition-colors">delete_system</span>
                            <span
                                class="px-xs py-1 rounded bg-tertiary/10 border border-tertiary/20 text-tertiary font-code-sm text-[12px] transition-colors">edit_settings</span>
                            @php

                                $count=collect($role->abilities)->count();
                                $more=0;
                                if($count>5){
                                     $more=$count-5;
                                
                                }

                            @endphp
                            @if($more>=1)
                            <span
                                class="px-xs py-1 rounded bg-surface-variant/50 border border-outline-variant text-outline font-code-sm text-[12px] transition-colors">
                               
                              +{{$more}} more</span>
                            @endif
                              
                        </div>
                        <div class="col-span-3 flex justify-end gap-sm">
                            <a href="{{route('dashboard.roles.edit',$role)}}"
                                class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary/10 rounded-lg transition-all active:scale-90"
                                title="Edit Permissions">
                                <span class="material-symbols-outlined">edit_note</span>
                            </a>
                            
                            <form method="post"action='{{route('dashboard.roles.destroy',$role)}}' id="destroy-{{$role->id}}" class="hidden">
                                @csrf
                                @method('delete')
                            </form>
                            <button onclick="document.getElementById('destroy-{{$role->id}}').submit()"
                                class="p-2 text-on-surface-variant hover:text-error hover:bg-error/10 rounded-lg transition-all active:scale-90"
                                title="Delete">
                                <span class="material-symbols-outlined">delete_forever</span>
                            </button>
                        </div>
                    </div>
                    @endforeach

                    <!-- Item: Editor -->
                    <div
                        class="grid grid-cols-1 lg:grid-cols-12 gap-md p-md items-center hover:bg-surface-variant/20 transition-all group">
                        <div class="col-span-3 flex items-center gap-sm">
                            <div
                                class="w-10 h-10 rounded-full bg-secondary/20 flex items-center justify-center text-secondary border border-secondary/30 transition-colors">
                                <span class="material-symbols-outlined">edit_document</span>
                            </div>
                            <div>
                                <h4
                                    class="font-headline-md text-body-md text-on-surface transition-colors duration-300">
                                    Editor</h4>
                                <p class="text-xs text-outline font-label-caps uppercase tracking-tight">Content
                                    oversight</p>
                            </div>
                        </div>
                        <div class="col-span-6 flex flex-wrap gap-2">
                            <span
                                class="px-xs py-1 rounded bg-surface-variant/50 border border-outline-variant text-outline font-code-sm text-[12px] transition-colors">create_post</span>
                            <span
                                class="px-xs py-1 rounded bg-surface-variant/50 border border-outline-variant text-outline font-code-sm text-[12px] transition-colors">publish_any</span>
                            <span
                                class="px-xs py-1 rounded bg-surface-variant/50 border border-outline-variant text-outline font-code-sm text-[12px] transition-colors">manage_tags</span>
                            <span
                                class="px-xs py-1 rounded bg-secondary/10 border border-secondary/20 text-secondary font-code-sm text-[12px] transition-colors">approve_workflow</span>
                        </div>
                        <div class="col-span-3 flex justify-end gap-sm">
                            <button
                                class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary/10 rounded-lg transition-all"
                                title="Edit Permissions">
                                <span class="material-symbols-outlined">edit_note</span>
                            </button>
                            <button
                                class="p-2 text-on-surface-variant hover:text-secondary hover:bg-secondary/10 rounded-lg transition-all"
                                title="Duplicate">
                                <span class="material-symbols-outlined">content_copy</span>
                            </button>
                            <button
                                class="p-2 text-on-surface-variant hover:text-error hover:bg-error/10 rounded-lg transition-all"
                                title="Delete">
                                <span class="material-symbols-outlined">delete_forever</span>
                            </button>
                        </div>
                    </div>
                    <!-- Item: Moderator -->
                    <div
                        class="grid grid-cols-1 lg:grid-cols-12 gap-md p-md items-center hover:bg-surface-variant/20 transition-all group">
                        <div class="col-span-3 flex items-center gap-sm">
                            <div
                                class="w-10 h-10 rounded-full bg-tertiary/20 flex items-center justify-center text-tertiary border border-tertiary/30 transition-colors">
                                <span class="material-symbols-outlined">gavel</span>
                            </div>
                            <div>
                                <h4
                                    class="font-headline-md text-body-md text-on-surface transition-colors duration-300">
                                    Moderator</h4>
                                <p class="text-xs text-outline font-label-caps uppercase tracking-tight">Community
                                    management</p>
                            </div>
                        </div>
                        <div class="col-span-6 flex flex-wrap gap-2">
                            <span
                                class="px-xs py-1 rounded bg-surface-variant/50 border border-outline-variant text-outline font-code-sm text-[12px] transition-colors">delete_comment</span>
                            <span
                                class="px-xs py-1 rounded bg-error/10 border border-error/20 text-error font-code-sm text-[12px] transition-colors">ban_user</span>
                            <span
                                class="px-xs py-1 rounded bg-surface-variant/50 border border-outline-variant text-outline font-code-sm text-[12px] transition-colors">view_reports</span>
                        </div>
                        <div class="col-span-3 flex justify-end gap-sm">
                            <button
                                class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary/10 rounded-lg transition-all"
                                title="Edit Permissions">
                                <span class="material-symbols-outlined">edit_note</span>
                            </button>
                            <button
                                class="p-2 text-on-surface-variant hover:text-secondary hover:bg-secondary/10 rounded-lg transition-all"
                                title="Duplicate">
                                <span class="material-symbols-outlined">content_copy</span>
                            </button>
                            <button
                                class="p-2 text-on-surface-variant hover:text-error hover:bg-error/10 rounded-lg transition-all"
                                title="Delete">
                                <span class="material-symbols-outlined">delete_forever</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Table Footer -->
                <div class="p-4">

                         {{$roles->withQueryString()->links()}}
                    
                </div>
            </div>
            <!-- AI Insight Section -->
            <section class="mt-xl grid grid-cols-1 lg:grid-cols-3 gap-md">
                <div
                    class="lg:col-span-2 glass-card p-lg rounded-xl flex flex-col md:flex-row items-center gap-lg overflow-hidden relative group transition-colors duration-300">
                    <!-- Subtle background decoration -->
                    <div
                        class="absolute -right-16 -top-16 w-64 h-64 bg-primary/10 blur-[100px] rounded-full group-hover:scale-150 transition-transform duration-700">
                    </div>
                    <div class="w-full md:w-48 h-48 rounded-xl overflow-hidden shadow-xl shrink-0">
                        <img class="w-full h-full object-cover"
                            data-alt="Sophisticated abstract rendering of digital security nodes."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTS1Qy8MeeNYtH4HcPNdMpgZDBW0vJMbYXDNwi9oV12bFQn1DQz547gycLNK_1Wn6mCmVk5d9RwX33wwkH5UdjwYWHrL8qUsGJWOEMoNhG2Zl4OmIjIFmE2Z0oKZ3_bb95BZIqS4AZSfX2pswdL0TLEeau2c80msCF77gq2pIwGnJwWY1M9RJwLGcN2rZX7y_ZGVqAQUkm676cqO0HFw9mosZ6eP-HXgrIEZPRvrvu5rzljt0kuvR5IZS6hxtfsG1f16ftGBe6sIM" />
                    </div>
                    <div class="z-10">
                        <div
                            class="inline-flex items-center gap-xs px-xs py-1 bg-tertiary/10 text-tertiary rounded-full font-label-caps text-[10px] mb-sm border border-tertiary/20 transition-colors">
                            <span class="material-symbols-outlined text-[12px]"
                                style="font-variation-settings: 'FILL' 1;">bolt</span> AI PRIVILEGE AUDITOR
                        </div>
                        <h2
                            class="font-headline-md text-headline-md text-on-surface mb-sm transition-colors duration-300">
                            Unused Role Detected</h2>
                        <p class="text-on-surface-variant font-body-md mb-md transition-colors duration-300">The
                            'Temporary Editor' role hasn't been assigned to any user for over 90 days. We recommend
                            archiving it to maintain a lean security profile.</p>
                        <div class="flex gap-md">
                            <button
                                class="text-primary font-label-caps text-label-caps flex items-center gap-xs hover:underline">
                                Archive Now <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </button>
                            <button
                                class="text-outline font-label-caps text-label-caps hover:text-on-surface">Dismiss</button>
                        </div>
                    </div>
                </div>
                <div
                    class="glass-card p-lg rounded-xl flex flex-col justify-center text-center transition-colors duration-300">
                    <span class="material-symbols-outlined text-[48px] text-secondary mb-md">verified_user</span>
                    <h3 class="font-headline-md text-body-lg text-on-surface mb-xs transition-colors duration-300">Role
                        Integrity</h3>
                    <p class="text-on-surface-variant text-sm mb-md transition-colors duration-300">All 48 permissions
                        are correctly mapped. No orphan abilities found in the current configuration.</p>
                    <button
                        class="w-full py-sm border border-outline-variant rounded-lg font-label-caps text-label-caps hover:bg-surface-variant/30 transition-all text-on-surface">Run
                        Security Scan</button>
                </div>
            </section>
        </div>
    
 
</x-layouts.front>
