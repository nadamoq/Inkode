<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sign In - Inkode</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@400&amp;display=swap"
        rel="stylesheet" />
    <!-- Geist Font simulation via Inter/System Sans for structural compatibility, usually requires custom @font-face -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-container": "#0d0096",
                        "primary-fixed": "#e1e0ff",
                        "outline": "#908fa0",
                        "error": "#ffb4ab",
                        "surface-container-high": "#222a3d",
                        "secondary": "#89ceff",
                        "on-primary": "#1000a9",
                        "on-tertiary": "#490080",
                        "surface-container": "#171f33",
                        "surface": "#0b1326",
                        "on-secondary-fixed-variant": "#004c6e",
                        "surface-tint": "#c0c1ff",
                        "surface-variant": "#2d3449",
                        "surface-bright": "#31394d",
                        "primary-container": "#8083ff",
                        "secondary-container": "#00a2e6",
                        "tertiary-fixed-dim": "#ddb7ff",
                        "on-tertiary-fixed-variant": "#6900b3",
                        "on-secondary-container": "#00344e",
                        "on-error": "#690005",
                        "tertiary-container": "#b76dff",
                        "surface-dim": "#0b1326",
                        "inverse-primary": "#494bd6",
                        "background": "#0b1326",
                        "surface-container-lowest": "#060e20",
                        "surface-container-highest": "#2d3449",
                        "secondary-fixed-dim": "#89ceff",
                        "on-primary-fixed": "#07006c",
                        "inverse-on-surface": "#283044",
                        "on-tertiary-fixed": "#2c0051",
                        "inverse-surface": "#dae2fd",
                        "error-container": "#93000a",
                        "tertiary": "#ddb7ff",
                        "surface-container-low": "#131b2e",
                        "on-error-container": "#ffdad6",
                        "on-tertiary-container": "#400071",
                        "on-secondary-fixed": "#001e2f",
                        "on-background": "#dae2fd",
                        "tertiary-fixed": "#f0dbff",
                        "on-surface": "#dae2fd",
                        "secondary-fixed": "#c9e6ff",
                        "primary-fixed-dim": "#c0c1ff",
                        "primary": "#c0c1ff",
                        "on-primary-fixed-variant": "#2f2ebe",
                        "on-secondary": "#00344d",
                        "on-surface-variant": "#c7c4d7",
                        "outline-variant": "#464554"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "unit": "4px",
                        "md": "1.5rem",
                        "max_width": "1280px",
                        "xl": "4rem",
                        "gutter": "24px",
                        "margin": "auto",
                        "lg": "2.5rem",
                        "sm": "1rem",
                        "xs": "0.5rem"
                    },
                    "fontFamily": {
                        "headline-lg": ["Inter", "sans-serif"],
                        "body-md": ["Inter", "sans-serif"],
                        "headline-md": ["Inter", "sans-serif"],
                        "code-sm": ["JetBrains Mono", "monospace"],
                        "display": ["Inter", "sans-serif"],
                        "body-lg": ["Inter", "sans-serif"],
                        "label-caps": ["Inter", "sans-serif"]
                    },
                    "fontSize": {
                        "headline-lg": ["40px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
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
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "label-caps": ["12px", {
                            "lineHeight": "1",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        body {
            background-color: #0b1326;
            color: #dae2fd;
        }

        .glass-container {
            background: rgba(23, 31, 51, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(144, 143, 160, 0.2);
        }
    </style>
</head>

<body class="font-body-md selection:bg-primary-container selection:text-on-primary-container">
    <!-- Background Decoration -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
        <div
            class="absolute -top-[20%] -left-[10%] w-[60%] h-[60%] bg-primary-container opacity-10 blur-[120px] rounded-full">
        </div>
        <div
            class="absolute -bottom-[10%] -right-[5%] w-[40%] h-[40%] bg-secondary-container opacity-10 blur-[100px] rounded-full">
        </div>
    </div>
    <!-- Header Branding -->
    <header class="fixed top-0 left-0 right-0 z-50">
        <div class="max-w-[1280px] mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded flex items-center justify-center overflow-hidden"><img alt="Inkode Logo"
                        class="w-full h-full object-contain"
                        src="https://lh3.googleusercontent.com/aida/ADBb0ujWtfD12N5H7wQqGuFFgrhGlWITqWUwltyZWxC1fWReADDLlnpqfh8VXkY_85Wu2zVmUP1WkTgODmI6AHG3gXdIqV-N50AttW_ylekc0dk9Xnxxhox3oP5lnQMXP9758L-Xf_uKxdFbE52v1XrL0GDMbhFSLdW2hZCGi6vKoNW1tR40raNQaMyRgz2_HP1_s_Rq4ZD9qL-iA2I6_7sObx8ZgikU81RGJaBmDOfzX61TI5wQfM0HaI1EEYYYlWRnN-QNh0l6DRZcSg" />
                </div>
                <span class="font-headline-md text-xl font-bold tracking-tight text-on-surface">Inkode</span>
            </div>
            <a class="text-on-surface-variant hover:text-primary transition-colors text-sm font-medium"
                href="#">Documentation</a>
        </div>
    </header>
    <main class="min-h-screen flex items-center justify-center px-6 pt-20 pb-12">
        <div class="w-full max-w-[480px]">
            <!-- Glassmorphic Card -->
            <div class="glass-container p-8 md:p-12 rounded-xl shadow-2xl">
                <div class="mb-10">
                    <h1 class="text-3xl font-bold text-on-surface mb-2">Access Inkode</h1>
                    <p class="text-on-surface-variant">Secure authentication for your development suite.</p>
                </div>
                @if($errors->any())
                <div class="bg-error-container text-on-error-container p-4 rounded-lg mb-6">
                    <ul class="list-disc pl-5">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    <!-- Email Field -->
                    @csrf
                    <div class="space-y-2">
                        <label name="{{config('fortify.username')}}"
                            class="text-sm font-medium text-on-surface-variant block uppercase tracking-wider text-[11px]"
                            for="email">Account Email</label>
                        <input
                            class="w-full h-12 px-4 bg-surface-container-lowest/50 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary-container/30 focus:border-primary-container outline-none transition-all text-on-surface placeholder:text-outline"
                            id="email" name="{{config('fortify.username')}}" placeholder="dev@inkode.io" required="" type="email" />
                    </div>
                    <!-- Password Field -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label name="password"
                                class="text-sm font-medium text-on-surface-variant block uppercase tracking-wider text-[11px]"
                                for="password">Password</label>
                            <a class="text-[12px] font-medium text-primary hover:text-primary-container transition-all"
                                href="#">Recover Password</a>
                        </div>
                        <input name="password"
                            class="w-full h-12 px-4 bg-surface-container-lowest/50 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary-container/30 focus:border-primary-container outline-none transition-all text-on-surface placeholder:text-outline"
                            id="password" name="password" placeholder="••••••••" required="" type="password" />
                    </div>
                    <!-- Remember Me -->
                    <div class="flex items-center gap-3">
                        <input 
                            class="w-4 h-4 rounded-sm border-outline-variant bg-surface-container-high text-primary-container focus:ring-primary-container transition-all"
                            id="remember" name="remember" type="checkbox" />
                        <label class="text-sm text-on-surface-variant select-none cursor-pointer"
                            for="remember">Maintain session for 30 days</label>
                    </div>
                    <!-- Primary Action -->
                    <button
                        class="w-full h-12 bg-primary-container text-on-primary-container font-semibold rounded-lg hover:brightness-110 active:scale-[0.98] transition-all flex justify-center items-center gap-2 shadow-lg shadow-primary-container/20"
                        type="submit">
                        Continue to Workspace
                    </button>
                </form>
                <!-- Divider -->
                <div class="relative my-10">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-outline-variant/30"></div>
                    </div>
                    <div class="relative flex justify-center">
                        <span
                            class="bg-[#171f33] px-4 text-[10px] font-bold text-outline-variant uppercase tracking-[0.2em]">External
                            Identity</span>
                    </div>
                </div>
                <!-- Social Logins -->
                <div class="grid grid-cols-2 gap-4">
                    <button
                        class="h-12 border border-outline-variant/30 flex items-center justify-center gap-3 text-sm font-medium text-on-surface hover:bg-surface-container-high/50 transition-all rounded-lg">
                        <svg class="w-5 h-5" viewbox="0 0 24 24">
                            <path
                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                fill="#4285F4"></path>
                            <path
                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-1.02.68-2.33 1.09-3.71 1.09-2.84 0-5.25-1.92-6.11-4.49H2.18v2.87C3.99 20.53 7.7 23 12 23z"
                                fill="#34A853"></path>
                            <path
                                d="M5.89 14.17c-.22-.68-.35-1.4-.35-2.17s.13-1.49.35-2.17V7.13H2.18C1.43 8.59 1 10.24 1 12s.43 3.41 1.18 4.87l3.71-2.7z"
                                fill="#FBBC05"></path>
                            <path
                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.13l3.71 2.87c.86-2.57 3.27-4.49 6.11-4.49z"
                                fill="#EA4335"></path>
                        </svg>
                        Google
                    </button>
                    <button
                        class="h-12 border border-outline-variant/30 flex items-center justify-center gap-3 text-sm font-medium text-on-surface hover:bg-surface-container-high/50 transition-all rounded-lg">
                        <span class="material-symbols-outlined text-[20px]" data-icon="terminal">terminal</span>
                        GitHub
                    </button>
                </div>
                <!-- Footer Link -->
                <div class="mt-10 text-center">
                    <p class="text-sm text-on-surface-variant">
                        New to the Inkode ecosystem?
                        <a class="text-primary font-semibold hover:underline transition-all ml-1" href="{{ route('register') }}">Create
                            Account</a>
                    </p>
                </div>
            </div>
            <!-- Bottom Branding Note -->
            <div class="mt-12 text-center opacity-30">
                <p class="text-[12px] uppercase tracking-widest font-bold">Powered by Inkode Core v4.0</p>
            </div>
        </div>
    </main>
    <!-- Footer Component -->
    <footer class="mt-auto border-t border-outline-variant/10 py-10 px-6">
        <div class="max-w-[1280px] mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-2 opacity-60">
                <div class="w-6 h-6 rounded flex items-center justify-center scale-75"><img alt="Inkode Logo"
                        class="w-full h-full object-contain"
                        src="https://lh3.googleusercontent.com/aida/ADBb0ujWtfD12N5H7wQqGuFFgrhGlWITqWUwltyZWxC1fWReADDLlnpqfh8VXkY_85Wu2zVmUP1WkTgODmI6AHG3gXdIqV-N50AttW_ylekc0dk9Xnxxhox3oP5lnQMXP9758L-Xf_uKxdFbE52v1XrL0GDMbhFSLdW2hZCGi6vKoNW1tR40raNQaMyRgz2_HP1_s_Rq4ZD9qL-iA2I6_7sObx8ZgikU81RGJaBmDOfzX61TI5wQfM0HaI1EEYYYlWRnN-QNh0l6DRZcSg" />
                </div>
                <span class="font-bold text-sm text-on-surface">Inkode</span>
            </div>
            <div class="flex flex-wrap justify-center gap-x-8 gap-y-2">
                <a class="text-xs text-on-surface-variant hover:text-primary transition-all" href="#">Status</a>
                <a class="text-xs text-on-surface-variant hover:text-primary transition-all" href="#">Privacy
                    Policy</a>
                <a class="text-xs text-on-surface-variant hover:text-primary transition-all" href="#">Security</a>
                <a class="text-xs text-on-surface-variant hover:text-primary transition-all" href="#">Support</a>
            </div>
            <p class="text-[11px] text-on-surface-variant/60 font-mono tracking-tighter">© 2024 INKODE_CORP. ALL RIGHTS
                RESERVED.</p>
        </div>
    </footer>
</body>

</html>
