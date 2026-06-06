<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400&amp;family=Geist:wght@400;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-bright": "#31394d",
                        "background": "#0b1326",
                        "on-secondary-fixed": "#001e2f",
                        "inverse-on-surface": "#283044",
                        "on-primary-fixed-variant": "#2f2ebe",
                        "tertiary": "#ddb7ff",
                        "secondary": "#89ceff",
                        "secondary-fixed-dim": "#89ceff",
                        "primary-fixed": "#e1e0ff",
                        "on-surface-variant": "#c7c4d7",
                        "secondary-fixed": "#c9e6ff",
                        "on-error": "#690005",
                        "on-secondary": "#00344d",
                        "inverse-surface": "#dae2fd",
                        "surface-container-highest": "#2d3449",
                        "on-primary-container": "#0d0096",
                        "surface-variant": "#2d3449",
                        "on-surface": "#dae2fd",
                        "on-error-container": "#ffdad6",
                        "error-container": "#93000a",
                        "on-tertiary-fixed-variant": "#6900b3",
                        "surface": "#0b1326",
                        "primary-fixed-dim": "#c0c1ff",
                        "surface-container-low": "#131b2e",
                        "secondary-container": "#00a2e6",
                        "surface-container-high": "#222a3d",
                        "error": "#ffb4ab",
                        "primary-container": "#8083ff",
                        "on-tertiary-container": "#400071",
                        "on-secondary-container": "#00344e",
                        "on-tertiary": "#490080",
                        "outline": "#908fa0",
                        "tertiary-fixed-dim": "#ddb7ff",
                        "on-secondary-fixed-variant": "#004c6e",
                        "surface-dim": "#0b1326",
                        "surface-tint": "#c0c1ff",
                        "primary": "#c0c1ff",
                        "surface-container-lowest": "#060e20",
                        "tertiary-fixed": "#f0dbff",
                        "surface-container": "#171f33",
                        "on-primary-fixed": "#07006c",
                        "inverse-primary": "#494bd6",
                        "tertiary-container": "#b76dff",
                        "on-tertiary-fixed": "#2c0051",
                        "on-primary": "#1000a9",
                        "on-background": "#dae2fd",
                        "outline-variant": "#464554"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "lg": "2.5rem",
                        "gutter": "24px",
                        "xl": "4rem",
                        "sm": "1rem",
                        "md": "1.5rem",
                        "max_width": "1280px",
                        "unit": "4px",
                        "xs": "0.5rem",
                        "margin": "auto"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Geist"],
                        "code-sm": ["JetBrains Mono"],
                        "body-lg": ["Inter"],
                        "label-caps": ["Inter"],
                        "display": ["Geist"],
                        "body-md": ["Inter"],
                        "headline-md": ["Geist"],
                        "headline-lg": ["Geist"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["32px", {
                            "lineHeight": "1.2",
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
                        "label-caps": ["12px", {
                            "lineHeight": "1",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
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
                        "headline-md": ["24px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["40px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            background-color: #0b1326;
            font-family: 'Inter', sans-serif;
        }

        .geist-font {
            font-family: 'Geist', sans-serif;
        }
    </style>
</head>

<body class="bg-background text-on-surface selection:bg-primary-container selection:text-on-primary-container">
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Left Column: Branding / Marketing -->
        <aside
            class="hidden md:flex md:w-5/12 bg-surface-container-lowest p-12 flex-col justify-between border-r border-outline-variant relative overflow-hidden">
            <div
                class="absolute inset-0 bg-gradient-to-br from-primary-container/10 to-transparent pointer-events-none">
            </div>
            <div class="relative z-10">
                <div class="flex items-center gap-3 mb-12">
                    <div class="w-10 h-10 flex items-center justify-center"><img alt="Inkode Logo"
                            class="w-full h-full object-contain"
                            src="{{ asset('assets/images/logo.png') }}" />
                    </div>
                    <span class="geist-font text-headline-md font-bold tracking-tight text-on-surface">Inkode</span>
                </div>
                <h2 class="geist-font text-display leading-tight mb-6">Write with<br /><span
                        class="text-primary">clarity.</span></h2>
                <p class="text-body-lg text-on-surface-variant max-w-sm">Join the next generation of thinkers in a space
                    designed for deep focus and digital minimalism.</p>
            </div>
            <div class="relative z-10">
                <div class="flex -space-x-3 mb-4">
                    <div
                        class="w-10 h-10 rounded-full border-2 border-surface-container-lowest bg-surface-container-high flex items-center justify-center text-[10px] font-bold">
                        JB</div>
                    <div class="w-10 h-10 flex items-center justify-center"><img alt="Inkode Logo"
                            class="w-full h-full object-contain"
                            src="{{ asset('assets/images/logo.png') }}" />
                    </div>
                    <div
                        class="w-10 h-10 rounded-full border-2 border-surface-container-lowest bg-tertiary-container flex items-center justify-center text-[10px] font-bold text-on-tertiary-container">
                        AL</div>
                </div>
                <p class="text-label-caps text-secondary">TRUSTED BY 10k+ WRITERS</p>
            </div>
        </aside>
        <!-- Right Column: Form -->
        <main class="flex-1 flex flex-col items-center justify-center p-gutter">
            <div class="w-full max-w-[440px]">
                <header class="mb-10 text-left md:text-left">
                    <div class="md:hidden flex items-center gap-2 mb-8">
                        <div class="w-8 h-8 flex items-center justify-center"><img alt="Inkode Logo"
                                class="w-full h-full object-contain"
                                src="https://lh3.googleusercontent.com/aida/ADBb0ujWtfD12N5H7wQqGuFFgrhGlWITqWUwltyZWxC1fWReADDLlnpqfh8VXkY_85Wu2zVmUP1WkTgODmI6AHG3gXdIqV-N50AttW_ylekc0dk9Xnxxhox3oP5lnQMXP9758L-Xf_uKxdFbE52v1XrL0GDMbhFSLdW2hZCGi6vKoNW1tR40raNQaMyRgz2_HP1_s_Rq4ZD9qL-iA2I6_7sObx8ZgikU81RGJaBmDOfzX61TI5wQfM0HaI1EEYYYlWRnN-QNh0l6DRZcSg" />
                        </div>
                        <span class="geist-font text-xl font-bold text-on-surface">Inkode</span>
                    </div>
                    <h1 class="geist-font text-headline-lg-mobile md:text-headline-lg text-on-surface mb-3">Create
                        Account</h1>
                    <p class="text-body-md text-on-surface-variant">Experience a quieter, more thoughtful web.</p>
                </header>
                <!-- Social Sign Up -->
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <button
                        class="flex items-center justify-center gap-3 py-3 bg-surface-container-high border border-outline-variant rounded-lg font-semibold text-body-md text-on-surface hover:bg-surface-bright transition-all focus:ring-2 focus:ring-primary-container focus:outline-none">
                        <svg class="w-5 h-5" viewbox="0 0 24 24">
                            <path
                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                fill="currentColor"></path>
                            <path
                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                fill="currentColor"></path>
                            <path
                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.26.81-.58z"
                                fill="currentColor"></path>
                            <path
                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                fill="currentColor"></path>
                        </svg>
                        Google
                    </button>
                    <button
                        class="flex items-center justify-center gap-3 py-3 bg-surface-container-high border border-outline-variant rounded-lg font-semibold text-body-md text-on-surface hover:bg-surface-bright transition-all focus:ring-2 focus:ring-primary-container focus:outline-none">
                        <svg class="w-5 h-5" viewbox="0 0 24 24">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.045 4.126H5.078z"
                                fill="currentColor"></path>
                        </svg>
                        Twitter
                    </button>
                </div>
                <div class="relative flex items-center justify-center mb-8">
                    <hr class="w-full border-outline-variant" />
                    <span class="absolute px-4 bg-background font-label-caps text-secondary">OR CONTINUE WITH
                        EMAIL</span>
                </div>
                <!-- Registration Form -->
                @if($errors)
                @foreach ($errors->all() as $error)
                    {{$message}}
                @endforeach
                @endIf
                <form action="{{route('register.store')}}" class="space-y-5" method="POST">
                    @csrf
                    <div>
                        <label for='name' class="block font-label-caps text-on-surface mb-2" >Full Name</label>
                        <input
                            class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-surface-container-low text-on-surface placeholder:text-outline focus:border-primary-container focus:ring-1 focus:ring-primary-container transition-all outline-none font-body-md"
                            id="full_name" name="name" placeholder="E.g. Julian Barnes" required=""
                            type="text" />
                    </div>
                      <div>
                        <label for='username' class="block font-label-caps text-on-surface mb-2" >User Name</label>
                        <input
                            class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-surface-container-low text-on-surface placeholder:text-outline focus:border-primary-container focus:ring-1 focus:ring-primary-container transition-all outline-none font-body-md"
                            id="username" name="{{config('fortify.username')}}" placeholder="E.g. Julian Barnes" required=""
                            type="text" />
                    </div>
                    <div>
                        <label class="block font-label-caps text-on-surface mb-2" for="{{config('fortify.email')}}">Email Address</label>
                        <input
                            class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-surface-container-low text-on-surface placeholder:text-outline focus:border-primary-container focus:ring-1 focus:ring-primary-container transition-all outline-none font-body-md"
                            id="{{config('fortify.email')}}" name="{{config('fortify.email')}}" placeholder="julian@inkode.com" required=""
                            type="email" />
                    </div>
                    <div>
                        <label class="block font-label-caps text-on-surface mb-2" for="password">Password</label>
                        <div class="relative">
                            <input
                                class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-surface-container-low text-on-surface placeholder:text-outline focus:border-primary-container focus:ring-1 focus:ring-primary-container transition-all outline-none font-body-md"
                                id="password" name="password" placeholder="Min. 12 characters" required=""
                                type="password" />
                            <button
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-primary transition-colors"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                        </div>
                    </div>
                    <div>
                        <label class="block font-label-caps text-on-surface mb-2" for="password_confirmation">Confirm Password</label>
                        <div class="relative">
                            <input
                                class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-surface-container-low text-on-surface placeholder:text-outline focus:border-primary-container focus:ring-1 focus:ring-primary-container transition-all outline-none font-body-md"
                                id="password_confirmation" name="password_confirmation" placeholder="Min. 12 characters" required=""
                                type="password" />
                            <button
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-primary transition-colors"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-2">
                        <button
                            class="w-full bg-primary-container text-on-primary-container py-4 rounded-lg font-bold text-body-md hover:bg-primary-container/90 active:scale-[0.98] transition-all shadow-xl shadow-primary-container/10"
                            type="submit">
                            Create Account
                        </button>
                    </div>
                </form>
                <footer class="mt-8 text-center md:text-left">
                    <p class="text-body-md text-on-surface-variant">
                        Already have an account?
                        <a class="font-bold text-primary hover:underline ml-1" href="{{route('login')}}">Log in</a>
                    </p>
                    <p class="mt-8 text-[11px] text-secondary leading-relaxed uppercase tracking-wider">
                        By signing up, you agree to our
                        <a class="underline hover:text-on-surface" href="#">Terms</a> &amp;
                        <a class="underline hover:text-on-surface" href="#">Privacy Policy</a>.
                    </p>
                </footer>
            </div>
        </main>
    </div>
    <!-- Background Decoration -->
    <div
        class="fixed top-0 right-0 w-[500px] h-[500px] bg-primary-container/5 rounded-full blur-[120px] pointer-events-none -mr-48 -mt-48">
    </div>
    <div
        class="fixed bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-outline-variant to-transparent opacity-20 pointer-events-none">
    </div>
</body>

</html>
