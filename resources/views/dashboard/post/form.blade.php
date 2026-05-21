@push('script')
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-surface": "#191c1e",
                        "primary": "#4648d4",
                        "inverse-on-surface": "#eff1f3",
                        "primary-container": "#6063ee",
                        "on-error-container": "#93000a",
                        "surface-container": "#eceef0",
                        "on-primary-fixed": "#07006c",
                        "surface-dim": "#d8dadc",
                        "on-tertiary": "#ffffff",
                        "on-surface-variant": "#464554",
                        "secondary-fixed": "#dae2fd",
                        "on-primary-container": "#fffbff",
                        "tertiary-fixed-dim": "#ffb783",
                        "inverse-primary": "#c0c1ff",
                        "surface-tint": "#494bd6",
                        "primary-fixed-dim": "#c0c1ff",
                        "on-error": "#ffffff",
                        "inverse-surface": "#2d3133",
                        "on-secondary-fixed": "#131b2e",
                        "surface-bright": "#f7f9fb",
                        "on-background": "#191c1e",
                        "on-primary": "#ffffff",
                        "error-container": "#ffdad6",
                        "tertiary-fixed": "#ffdcc5",
                        "surface-container-low": "#f2f4f6",
                        "secondary-container": "#dae2fd",
                        "secondary": "#565e74",
                        "on-secondary": "#ffffff",
                        "on-secondary-container": "#5c647a",
                        "primary-fixed": "#e1e0ff",
                        "outline": "#767586",
                        "on-tertiary-fixed-variant": "#703700",
                        "on-primary-fixed-variant": "#2f2ebe",
                        "on-secondary-fixed-variant": "#3f465c",
                        "tertiary": "#904900",
                        "secondary-fixed-dim": "#bec6e0",
                        "error": "#ba1a1a",
                        "tertiary-container": "#b55d00",
                        "on-tertiary-fixed": "#301400",
                        "background": "#f7f9fb",
                        "on-tertiary-container": "#fffbff",
                        "surface-container-high": "#e6e8ea",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#c7c4d7",
                        "surface-container-highest": "#e0e3e5",
                        "surface": "#f7f9fb",
                        "surface-variant": "#e0e3e5"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
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
                        "headline-md": ["Geist"],
                        "display": ["Geist"],
                        "body-lg": ["Inter"],
                        "code-sm": ["JetBrains Mono"],
                        "label-caps": ["Inter"],
                        "headline-lg": ["Geist"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
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
                        "code-sm": ["14px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
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
                        "body-md": ["16px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
@endpush
@push('style')
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .editor-container ::selection {
            background-color: #6063ee;
            color: #ffffff;
        }

        .category-select {
            background-color: #f2f4f6;
            color: #191c1e;
            border-color: rgba(199, 196, 215, 0.3);
        }

        html.light .category-select,
        html:not(.dark) .category-select {
            background-color: #f2f4f6;
            color: #191c1e;
            border-color: rgba(199, 196, 215, 0.3);
        }

        html.dark .category-select {
            background-color: #131b2e;
            color: #dae2fd;
            border-color: #464554;
        }

        html.light .category-select option,
        html:not(.dark) .category-select option {
            background-color: #f2f4f6;
            color: #191c1e;
        }

        html.dark .category-select option {
            background-color: #131b2e;
            color: #dae2fd;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        [contenteditable=true]:empty:before {
            content: attr(data-placeholder);
            color: #767586;
            pointer-events: none;
            display: block;
        }

        /* High clarity Light Mode Overrides */
        html:not(.dark) body {
            background-color: #f7f9fb;
            color: #191c1e;
        }

        html:not(.dark) .bg-surface-container-lowest\/80 {
            background-color: #ffffff !important;
        }

        html:not(.dark) .bg-surface-container-lowest\/50 {
            background-color: #ffffff !important;
        }

        html:not(.dark) .bg-surface-dim\/80 {
            background-color: #f7f9fb !important;
        }

        /* Inkode Core Dark Mode - Deeper Palette */
        html.dark body {
            background-color: #0b1326;
            color: #dae2fd;
        }

        /* Light-mode overrides for editor/content area */
        html:not(.dark) .bg-surface-dim {
            background-color: #f7f9fb !important;
        }

        html:not(.dark) .text-on-surface,
        html:not(.dark) .editor-container,
        html:not(.dark) .editor-container * {
            color: #191c1e !important;
        }

        html:not(.dark) .bg-surface-container-low {
            background-color: #f2f4f6 !important;
        }

        html:not(.dark) .bg-surface-container {
            background-color: #eceef0 !important;
        }


        html.dark .bg-surface-container-lowest\/80 {
            background-color: rgba(6, 14, 32, 0.8) !important;
        }

        html.dark .bg-surface-container-lowest\/50 {
            background-color: rgba(19, 27, 46, 0.5) !important;
        }

        html.dark .bg-surface-container-lowest {
            background-color: #060e20 !important;
        }

        html.dark .bg-surface-dim\/80 {
            background-color: rgba(11, 19, 38, 0.8) !important;
        }

        html.dark .bg-surface-dim {
            background-color: #0b1326 !important;
        }

        html.dark .bg-surface-container-low {
            background-color: #131b2e !important;
        }

        html.dark .bg-surface-container {
            background-color: #171f33 !important;
        }

        html.dark .bg-surface-container-high {
            background-color: #222a3d !important;
        }

        html.dark .bg-surface-container-highest {
            background-color: #2d3449 !important;
        }

        html.dark .border-outline-variant {
            border-color: #2d3449 !important;
        }

        html.dark .border-outline {
            border-color: #464554 !important;
        }

        html.dark .text-on-surface {
            color: #dae2fd !important;
        }

        html.dark .text-on-surface-variant {
            color: #c7c4d7 !important;
        }

        html.dark .text-outline {
            color: #908fa0 !important;
        }

        html.dark .bg-primary-container {
            background-color: #8083ff !important;
            color: #0d0096 !important;
        }

        html.dark .hover\:bg-primary:hover {
            background-color: #c0c1ff !important;
        }

        html.dark .selection\:bg-primary-container::selection {
            background-color: #8083ff !important;
            color: #0d0096 !important;
        }

        body {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>
@endpush

<!-- Sidebar: Content Controls (Left Side) -->
<form action="{{ $action }}" method="Post">
    @csrf
    @method($method ?? 'POST')
    <div class="min-h-screen flex flex-col md:flex-row max-w-max_width mx-auto">
        <!-- Editor Canvas -->
        <aside
            class="w-full md:w-72 lg:w-80 shrink-0 border-r border-outline-variant bg-surface-container-lowest/50 p-6 space-y-8 h-[calc(100vh-64px)] sticky top-16 overflow-y-auto no-scrollbar">
            <!-- Cover Image -->
            <section>
                <h3 class="font-label-caps text-label-caps text-on-surface font-bold mb-4 uppercase">Cover Image
                </h3>
                <div
                    class="aspect-video w-full rounded-xl bg-surface-container-low border-2 border-dashed border-outline-variant flex flex-col items-center justify-center gap-2 cursor-pointer hover:border-primary hover:bg-surface-container transition-all group">
                    <span
                        class="material-symbols-outlined text-on-surface group-hover:text-primary transition-colors">add_a_photo</span>
                    <span class="font-label-caps text-label-caps text-on-surface font-semibold">Upload Image</span>
                </div>
            </section>
            <!-- Tags Management -->
            <section>
                <h3 class="font-label-caps text-label-caps text-on-surface font-bold mb-4 uppercase">Tags</h3>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span
                        class="bg-primary/10 text-primary px-3 py-1 rounded-full font-label-caps text-label-caps flex items-center gap-1 border border-primary/20">
                        Minimalism <span
                            class="material-symbols-outlined text-[14px] cursor-pointer hover:text-on-surface">close</span>
                    </span>
                    <span
                        class="bg-secondary/10 text-secondary px-3 py-1 rounded-full font-label-caps text-label-caps flex items-center gap-1 border border-secondary/20">
                        Writing <span
                            class="material-symbols-outlined text-[14px] cursor-pointer hover:text-on-surface">close</span>
                    </span>
                </div>
                <div class="relative">
                    <input
                        class="w-full bg-surface-container-low border border-outline font-body-md text-on-surface rounded-lg px-4 py-2 focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-on-surface-variant"
                        placeholder="Add a tag..." type="text" />
                </div>
            </section>
            <!-- SEO Preview -->
            <section>
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-label-caps text-label-caps text-on-surface font-bold uppercase">SEO Preview</h3>
                    <button class="text-primary font-label-caps text-label-caps font-bold hover:underline">Edit</button>
                </div>
                <div class="p-4 bg-surface-container-low border border-outline-variant rounded-xl shadow-sm">
                    <div class="text-primary font-headline-md text-[16px] leading-tight mb-1 truncate font-bold">The
                        Art of Digital Quiet | Inkode</div>
                    <div class="text-on-surface font-code-sm text-[12px] mb-2 truncate font-medium">
                        inkode.com/art-of-quiet</div>
                    <p class="text-on-surface font-body-md text-[13px] line-clamp-2 leading-relaxed">Discover how a
                        distraction-free writing environment can transform your creative process and help you find
                        your voice...</p>
                </div>
            </section>
            <!-- Visibility / Public Post Switch -->
            <section class="pt-6 border-t border-outline-variant">
                <label class="flex items-center justify-between cursor-pointer group">
                    <span class="font-label-caps text-label-caps text-on-surface font-bold transition-colors">Public
                        Post</span>
                    <div class="relative inline-flex items-center">
                        <input checked="" class="sr-only peer" type="checkbox" />
                        <div
                            class="w-10 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[4px] after:left-[4px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary">
                        </div>
                    </div>
                </label>
            </section>
        </aside>
        <div class="flex-1 overflow-y-auto no-scrollbar bg-surface-dim">
            <!-- Integrated Formatting Toolbar (Fixed Top of Canvas) -->

            <div
                class="sticky top-0 z-40 bg-surface-dim/80 backdrop-blur-md border-b border-outline-variant/30 flex justify-center py-2">
                <div
                    class="bg-surface-container-lowest px-2 py-1.5 rounded-xl shadow-lg flex items-center gap-1 border border-outline-variant">
                    <button
                        class="p-2 hover:bg-surface-container rounded-lg transition-colors text-on-surface hover:text-primary"
                        title="Bold">
                        <span class="material-symbols-outlined">format_bold</span>
                    </button>
                    <button
                        class="p-2 hover:bg-surface-container rounded-lg transition-colors text-on-surface hover:text-primary"
                        title="Italic">
                        <span class="material-symbols-outlined">format_italic</span>
                    </button>
                    <div class="w-px h-6 bg-outline-variant mx-1"></div>
                    <button
                        class="p-2 hover:bg-surface-container rounded-lg transition-colors text-on-surface hover:text-primary"
                        title="Heading 1">
                        <span class="material-symbols-outlined text-[20px]">format_h1</span>
                    </button>
                    <button
                        class="p-2 hover:bg-surface-container rounded-lg transition-colors text-on-surface hover:text-primary"
                        title="Heading 2">
                        <span class="material-symbols-outlined text-[20px]">format_h2</span>
                    </button>
                    <div class="w-px h-6 bg-outline-variant mx-1"></div>
                    <button
                        class="p-2 hover:bg-surface-container rounded-lg transition-colors text-on-surface hover:text-primary"
                        title="Quote">
                        <span class="material-symbols-outlined">format_quote</span>
                    </button>
                    <button
                        class="p-2 hover:bg-surface-container rounded-lg transition-colors text-on-surface hover:text-primary"
                        title="Link">
                        <span class="material-symbols-outlined">link</span>
                    </button>
                    <div class="w-px h-6 bg-outline-variant mx-1"></div>
                    <button
                        class="p-2 hover:bg-surface-container rounded-lg transition-colors text-on-surface hover:text-primary"
                        title="Image">
                        <span class="material-symbols-outlined">image</span>
                    </button>
                </div>
            </div>
            <!-- Writing Space -->
            <div class="max-w-3xl mx-auto px-6 py-12 lg:py-20">
                <div class="editor-container">
                    <!-- Title Field -->
                    <textarea name="title"
                        class="w-full bg-transparent border-none focus:ring-0 font-headline-lg text-headline-lg resize-none placeholder:text-outline text-on-surface mb-12 overflow-hidden"
                        oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'
                        placeholder="The title of your piece..." rows="1">{{ $post->title ?? '' }}</textarea>
                    <!-- Main Content Editor -->
                    <textarea name="content"
                        class="w-full min-h-[600px] bg-transparent border-none focus:outline-none font-body-lg text-body-lg text-on-surface leading-relaxed placeholder:text-outline"
                        contenteditable="true" data-placeholder="Start writing your story...">
                       {{ $post->content ?? '' }}
                        {{-- <p class="mb-8">In this space, distraction falls away. The borders of the interface
                            recede, leaving only the words. We prioritize clarity above all else, ensuring that
                            every sentence has room to breathe and every idea has the weight it deserves.</p>
                        --}}  
                    </textarea> 
                </div>
                 <!-- Post Category -->
                    <div class="space-y-xs">
                        <label
                            class="font-label-caps text-label-caps text-on-surface dark:text-on-surface-variant font-bold tracking-widest uppercase"
                            for="parent-category">Post's Category</label>
                        <div class="relative">
                          <select name="category_id"
                                class="w-full appearance-none bg-surface-container-low dark:bg-surface-container-low border border-outline-variant/30 dark:border-outline-variant/30 rounded-lg px-md py-3 text-on-surface dark:text-on-surface focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all category-select"
                                id="category_id" >
                                 @if ($categories)
                                    @foreach ($categories as $category)

                                        <option value="{{$category->id}}" @selected($post->category_id == $category->id)>{{$category->name}}</option>
                                
                                    @endforeach
                                @endif
             
                              
                            </select>
                              </div>
                    </div>
                <button type="submit" style="float: right;"
                    class=" bg-primary text-on-primary px-6 py-3 rounded-lg font-ui-label text-ui-label hover:bg-primary-hover transition-colors">
                    Publish
                </button>
            </div>
        </div>

    </div>
    @push('script')
        <script>
            // Simple auto-resize for title
            const tx = document.getElementsByTagName("textarea");
            for (let i = 0; i < tx.length; i++) {
                tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
                tx[i].addEventListener("input", OnInput, false);
            }

            function OnInput() {
                this.style.height = 0;
                this.style.height = (this.scrollHeight) + "px";
            }
        </script>
    @endpush
