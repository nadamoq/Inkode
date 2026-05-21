<x-layouts.front>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .glass-panel {
            background: rgba(23, 31, 51, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .light .glass-panel {
            background: #ffffff;
            backdrop-filter: none;
            border: 1px solid rgba(0, 0, 0, 0.08);
            box-shadow: 0 24px 60px -24px rgba(0, 0, 0, 0.18);
        }

        .light .glass-panel thead tr {
            background: rgba(15, 23, 42, 0.04);
        }

        html.light .text-on-surface {
            color: #111827 !important;
        }

        html.light .text-on-surface-variant {
            color: #475569 !important;
        }

        html.light .bg-surface-variant {
            background-color: #f8fafc !important;
        }

        html.light .bg-surface-variant\/10 {
            background-color: rgba(248, 250, 252, 0.9) !important;
        }

        html.light .bg-surface-variant\/20 {
            background-color: rgba(248, 250, 252, 0.8) !important;
        }

        html.light .bg-surface-variant\/30 {
            background-color: rgba(248, 250, 252, 0.7) !important;
        }

        html.light .border-outline-variant\/30 {
            border-color: rgba(148, 163, 184, 0.4) !important;
        }
    </style>

    <div class="min-h-screen selection:bg-primary/30">
        
       
        <!-- Dashboard Content -->
        <div class="flex-1 space-y-xl">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-md">
                <div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface">Category Management</h1>
                    <p class="text-on-surface-variant max-w-2xl mt-1">Organize your content structure, monitor
                        performance metrics, and refine your editorial taxonomy for maximum audience engagement.</p>
                </div>
                <a href="{{ route('dashboard.categories.create') }}"
                    class="bg-primary hover:bg-primary/90 text-on-primary px-6 py-3 rounded-lg font-headline-md text-[16px] flex items-center gap-2 shadow-lg shadow-primary/20 transition-transform active:scale-95">
                    <span class="material-symbols-outlined">add</span>
                    Create Category
            </a>
            </div>
            <!-- Stats & Top Performing Bento -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-md">
                <!-- Featured: Technology -->
                <div class="md:col-span-2 glass-panel p-md rounded-xl relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-secondary"></div>
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span class="font-label-caps text-label-caps text-primary tracking-widest">TOP
                                PERFORMING</span>
                            <h2 class="font-headline-md text-headline-md mt-1">Technology</h2>
                        </div>
                        <div class="flex gap-2">
                            <button class="p-2 hover:bg-surface-variant rounded-lg transition-colors"><span
                                    class="material-symbols-outlined text-[20px]">edit</span></button>
                            <button class="p-2 hover:bg-surface-variant rounded-lg transition-colors"><span
                                    class="material-symbols-outlined text-[20px]">analytics</span></button>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-md mt-6">
                        <div>
                            <p class="font-label-caps text-label-caps text-on-surface-variant opacity-60">POSTS</p>
                            <p class="text-headline-md font-bold">142</p>
                        </div>
                        <div>
                            <p class="font-label-caps text-label-caps text-on-surface-variant opacity-60">VIEWS</p>
                            <p class="text-headline-md font-bold">89.4k</p>
                        </div>
                        <div>
                            <p class="font-label-caps text-label-caps text-on-surface-variant opacity-60">AVG. READ</p>
                            <p class="text-headline-md font-bold">4:12</p>
                        </div>
                        <div>
                            <p class="font-label-caps text-label-caps text-on-surface-variant opacity-60">GROWTH</p>
                            <p class="text-headline-md font-bold text-secondary">+12%</p>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-between items-end">
                        <p class="text-body-md text-on-surface-variant text-[12px]">Active since Jan 2023</p>
                        <div class="flex -space-x-2">
                            <div class="w-8 h-8 rounded-full border-2 border-surface bg-surface-variant"></div>
                            <div class="w-8 h-8 rounded-full border-2 border-surface bg-surface-container"></div>
                            <div
                                class="w-8 h-8 rounded-full border-2 border-surface bg-primary/20 flex items-center justify-center text-[10px] font-bold text-primary">
                                +8</div>
                        </div>
                    </div>
                </div>
                <!-- Secondary: Design -->
                <div class="glass-panel p-md rounded-xl flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-start mb-4">
                            <h2 class="font-headline-md text-headline-md">Design</h2>
                            <button class="material-symbols-outlined">more_vert</button>
                        </div>
                        <p class="text-on-surface-variant text-body-md">Visual culture, UI patterns, and typography
                            systems.</p>
                    </div>
                    <div class="space-y-4 mt-6">
                        <div class="flex justify-between items-end">
                            <div>
                                <p class="font-label-caps text-label-caps text-on-surface-variant opacity-60">VIEWS</p>
                                <p class="font-bold text-headline-md">42.1k</p>
                            </div>
                            <div class="text-right">
                                <p class="font-label-caps text-label-caps text-on-surface-variant opacity-60">POSTS</p>
                                <p class="font-bold">86</p>
                            </div>
                        </div>
                        <div class="w-full bg-surface-variant h-1 rounded-full overflow-hidden">
                            <div class="bg-secondary h-full w-3/4"></div>
                        </div>
                    </div>
                </div>
                <!-- Minimalism & Architecture Mini Cards -->
                <div
                    class="glass-panel p-md rounded-xl flex items-center gap-md hover:border-primary/40 transition-colors group">
                    <div
                        class="w-12 h-12 rounded-lg bg-primary-container/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-primary">layers</span>
                    </div>
                    <div>
                        <h3 class="font-bold">Minimalism</h3>
                        <p class="text-[12px] text-on-surface-variant">24 posts • 12k views</p>
                    </div>
                </div>
                <div
                    class="glass-panel p-md rounded-xl flex items-center gap-md hover:border-primary/40 transition-colors group">
                    <div
                        class="w-12 h-12 rounded-lg bg-tertiary-container/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-tertiary">foundation</span>
                    </div>
                    <div>
                        <h3 class="font-bold">Architecture</h3>
                        <p class="text-[12px] text-on-surface-variant">31 posts • 18.5k views</p>
                    </div>
                </div>
                <!-- Add Placeholder --> 
                <a href="{{ route('dashboard.categories.create') }}" >
                <div
                    class="border-2 border-dashed border-outline-variant/30 rounded-xl flex flex-col items-center justify-center py-6 text-on-surface-variant hover:bg-surface-variant/20 transition-all cursor-pointer">
                  
                    <span class="material-symbols-outlined text-[32px] mb-2">add_circle</span>
                    <p class="font-bold">Add Category Idea</p>
                    <p class="text-[11px] opacity-60">Draft a new category skeleton</p>
                  
                </div>
             </a>
            </section>
            <!-- All Categories Table Section -->
            <section class="space-y-sm">
                <div class="flex items-center justify-between">
                    <h2 class="font-headline-md text-headline-md">All Categories</h2>
                    <div class="flex gap-2">
                        <button class="p-2 rounded bg-surface-variant text-primary"><span
                                class="material-symbols-outlined">grid_view</span></button>
                        <button class="p-2 rounded hover:bg-surface-variant transition-colors"><span
                                class="material-symbols-outlined">list</span></button>
                    </div>
                </div>
                <div class="glass-panel rounded-xl overflow-hidden">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-surface-variant/30 text-left">
                                <th class="px-md py-4 font-label-caps text-label-caps text-on-surface-variant">CATEGORY
                                    NAME</th>
                                <th class="px-md py-4 font-label-caps text-label-caps text-on-surface-variant">STATUS
                                </th>
                                <th class="px-md py-4 font-label-caps text-label-caps text-on-surface-variant">POST
                                    COUNT</th>
                                <th class="px-md py-4 font-label-caps text-label-caps text-on-surface-variant">TOTAL
                                    VIEWS</th>
                                <th
                                    class="px-md py-4 font-label-caps text-label-caps text-on-surface-variant text-right">
                                    ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/10">
                            <!-- Row 1 -->
                            @foreach ($categories as $category)
                            <tr class="hover:bg-primary-container/5 transition-colors">
                                <td class="px-md py-4">
                                    <div class="font-bold text-on-surface">{{ $category->name }}</div>
                                    <div class="text-[11px] font-code-sm text-on-surface-variant opacity-60">
                                        /categories/{{ $category->slug }}</div>
                                </td>
                                <td class="px-md py-4">
                                    <span
                                        class="px-2 py-1 rounded-full bg-secondary-container/20 text-secondary text-[11px] font-bold">Active</span>
                                </td>
                                <td class="px-md py-4 text-on-surface">12</td>
                                <td class="px-md py-4 text-on-surface">5.2k</td>
                                <td class="px-md py-4 text-right">
                                    <div class="flex justify-end gap-2">
                                        <a href="{{route('dashboard.categories.edit',[$category->id])}}"
                                            class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors text-[20px]">edit</a>
                                            
                                              <button
                                                onclick="confirm('Are you sure you want to delete this category?')? document.getElementById('deletecategory{{ $category->id }}').submit() : null;"
                                                class="material-symbols-outlined text-on-surface-variant hover:text-error transition-colors text-[20px]"
                                                title="More">
                                                <span class="material-symbols-outlined" data-icon="delete">delete</span>
                                            </button>
                                            <form style="display: none;" id="deletecategory{{ $category->id }}"
                                                action="{{ route('dashboard.categories.destroy', $category->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div
                        class="px-md py-4 bg-surface-variant/10 flex justify-between items-center text-[13px] text-on-surface-variant">
                        <span>Showing 3 of 42 categories</span>
                        <div class="flex gap-4">
                            <button class="hover:text-primary disabled:opacity-30" disabled="">Previous</button>
                            <button class="hover:text-primary">Next</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </x-layouts.front>