<x-layouts.front title=":User managment">

    <div class="flex flex-1 pt-16 overflow-hidden">

        <!-- Main Canvas -->
        <div class="max-w-[1280px] mx-auto space-y-lg">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-md">
                <div>
                    <p class="text-indigo-600 dark:text-primary font-label-caps text-label-caps mb-1">SYSTEM
                        ADMINISTRATION</p>
                    <h2 class="font-display text-headline-lg text-slate-900 dark:text-on-surface">User Management
                    </h2>
                    <p class="text-slate-500 dark:text-outline font-body-md mt-2">Manage infrastructure access,
                        roles, and security status for all organization members.</p>
                </div>
                <div class="flex gap-sm">
                    <button
                        class="px-md py-sm bg-white dark:bg-transparent border border-slate-200 dark:border-outline/20 rounded-xl text-slate-700 dark:text-on-surface font-label-caps text-label-caps hover:bg-slate-50 dark:hover:bg-surface-variant/20 transition-colors flex items-center gap-xs shadow-sm dark:shadow-none">
                        <span class="material-symbols-outlined">file_download</span> Export CSV
                    </button>

                </div>
            </div>
            <!-- Bulk Actions Toolbar -->
            <div class="hidden animate-in fade-in slide-in-from-top-4 duration-300 items-center justify-between p-sm glass-panel rounded-xl border-indigo-200 dark:border-primary/20 border shadow-lg"
                id="bulk-actions">
                <div class="flex items-center gap-md ml-sm">
                    <span class="text-indigo-600 dark:text-primary font-bold" id="selection-count">0 selected</span>
                    <div class="h-4 w-[1px] bg-slate-200 dark:bg-outline/20"></div>
                    <div class="flex gap-sm">
                        <button
                            class="text-slate-700 dark:text-on-surface hover:text-indigo-600 dark:hover:text-primary transition-colors flex items-center gap-xs font-label-caps text-label-caps">
                            <span class="material-symbols-outlined text-[18px]">verified_user</span> Change Role
                        </button>
                        <button
                            class="text-slate-700 dark:text-on-surface hover:text-red-600 dark:hover:text-error transition-colors flex items-center gap-xs font-label-caps text-label-caps">
                            <span class="material-symbols-outlined text-[18px]">no_accounts</span> Deactivate
                        </button>
                    </div>
                </div>
                <button
                    class="text-slate-400 dark:text-outline hover:text-slate-900 dark:hover:text-on-surface transition-colors"
                    onclick="clearSelection()">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <!-- Table Container -->
            <div class="glass-panel rounded-2xl overflow-hidden shadow-xl dark:shadow-2xl">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr
                                class="bg-slate-50/50 dark:bg-surface-container-high/50 border-b border-black/5 dark:border-white/5">
                                <th class="p-md w-12">
                                    
                                </th>
                                <th
                                    class="p-md font-label-caps text-label-caps text-slate-500 dark:text-outline uppercase tracking-wider">
                                    User Identity</th>
                                <th
                                    class="p-md font-label-caps text-label-caps text-slate-500 dark:text-outline uppercase tracking-wider">
                                    Assigned Roles</th>
                                <th
                                    class="p-md font-label-caps text-label-caps text-slate-500 dark:text-outline uppercase tracking-wider">
                                    Security Status</th>
                                <th
                                    class="p-md font-label-caps text-label-caps text-slate-500 dark:text-outline uppercase tracking-wider text-right">
                                    Context</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-black/5 dark:divide-white/5 ">
                            @foreach ($users as $item)
                                <tr
                                    class="hover:bg-slate-100/50 dark:hover:bg-surface-variant/10 transition-colors group">
                                    <td class="p-md">
                                       {{$loop->index+1}}
                                    </td>
                                    <td class="p-md">
                                        <div class="flex items-center gap-md">
                                            <div
                                                class="w-10 h-10 rounded-full border border-indigo-100 dark:border-primary/20 bg-indigo-50 dark:bg-primary/5 flex items-center justify-center overflow-hidden">
                                                <img class="w-full h-full object-cover" src="{{ $item->avatar }}" />
                                            </div>
                                            <div>
                                                <p class="font-bold text-slate-900 dark:text-on-surface">
                                                    {{ $item->name }}
                                                </p>
                                                <p
                                                    class="text-label-caps text-slate-500 dark:text-outline font-code-sm">
                                                    {{ '@'.$item->username }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-md">
                                        <div class="flex flex-wrap gap-xs">
                                            @foreach ($item->roles as $role)
                                                <span
                                                    class="px-2 py-0.5 rounded-full bg-blue-100 dark:bg-secondary-container/20 text-blue-700 dark:text-secondary-fixed text-[10px] font-bold border border-blue-200 dark:border-secondary-container/30 uppercase">
                                                    {{ $role->name }}</span>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td class="p-md">
                                        <div class="flex items-center gap-xs">
                                            <div
                                                class="w-2 h-2 rounded-full {{ $item->active ? 'bg-green-500' : 'bg-red-500' }} shadow-[0_0_8px_rgba(34,197,94,0.4)] dark:shadow-[0_0_8px_rgba(74,222,128,0.5)]">
                                            </div>
                                            <span
                                                class="font-label-caps text-label-caps text-slate-700 dark:text-on-surface">{{ $item->active ? 'active' : 'inActive' }}</span>
                                        </div>
                                    </td>
                                    <td class="p-md text-right">
                                        <div class="flex justify-end gap-1">
                                            <a href="{{route('dashboard.assignRolePage',['user'=>$item])}}"
                                                class="p-2 rounded-lg hover:bg-slate-200 dark:hover:bg-surface-container-highest"
                                                title="Manage Roles">
                                                <span class="material-symbols-outlined text-indigo-600">
                                                    admin_panel_settings
                                                </span>
                                            </a>
                                            <form class="hidden" id='destroy' method="POST" action="{{route('dashboard.users.destroy',$item)}}">
                                                @csrf
                                                @method('delete')
                                            </form>
                                            <button onclick="document.getElementById('destroy').submit()"
                                                class="p-2 rounded-lg hover:bg-slate-200 dark:hover:bg-surface-container-highest"
                                                title="Delete User">
                                                <span class="material-symbols-outlined text-red-600">
                                                    delete
                                                </span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <!-- User Row 1 -->
                            <tr class="hover:bg-slate-100/50 dark:hover:bg-surface-variant/10 transition-colors group">
                                <td class="p-md">
                                    <input
                                        class="user-checkbox w-4 h-4 rounded bg-white dark:bg-surface-container-highest border-slate-300 dark:border-outline/30 text-indigo-600 dark:text-primary focus:ring-indigo-500/40 dark:focus:ring-primary/40 focus:ring-offset-0"
                                        onchange="updateBulkUI()" type="checkbox" />
                                </td>
                                <td class="p-md">
                                    <div class="flex items-center gap-md">
                                        <div
                                            class="w-10 h-10 rounded-full border border-indigo-100 dark:border-primary/20 bg-indigo-50 dark:bg-primary/5 flex items-center justify-center overflow-hidden">
                                            <img class="w-full h-full object-cover"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGzXJzksEaZLknJGCS-v_5PP7SQpe-GkD1ccmHFBKw8HGD8TfMKFHuGYceDsPglqAjqmiRynujK2YeL_OKflbKwHaiyrczIbsDsxV7cupYTCZfIVTgKTKMIjRY4qFvceJ5kE14FzrY_6wIxI7NcB1IL24pJbrE3rMgJkF2KV5WRLvqSSA61lqKKKnYPGKVLIaq1-1jygANmd233f1mXkF7bbuWwFjOl1455KroRJSw21B7vcegqM9akCr5X4j1ciAoOmjVTdP-BE0" />
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900 dark:text-on-surface">Alex Rivera
                                            </p>
                                            <p class="text-label-caps text-slate-500 dark:text-outline font-code-sm">
                                                arivera@inkode.io</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-md">
                                    <div class="flex flex-wrap gap-xs">
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-blue-100 dark:bg-secondary-container/20 text-blue-700 dark:text-secondary-fixed text-[10px] font-bold border border-blue-200 dark:border-secondary-container/30 uppercase">Senior
                                            Dev</span>
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-purple-100 dark:bg-tertiary-container/20 text-purple-700 dark:text-tertiary-fixed text-[10px] font-bold border border-purple-200 dark:border-tertiary-container/30 uppercase">Reviewer</span>
                                    </div>
                                </td>
                                <td class="p-md">
                                    <div class="flex items-center gap-xs">
                                        <div
                                            class="w-2 h-2 rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.4)] dark:shadow-[0_0_8px_rgba(74,222,128,0.5)]">
                                        </div>
                                        <span
                                            class="font-label-caps text-label-caps text-slate-700 dark:text-on-surface">Active</span>
                                    </div>
                                </td>
                                <td class="p-md text-right">
                                    <button
                                        class="p-xs hover:bg-slate-200 dark:hover:bg-surface-container-highest rounded-lg transition-colors text-slate-400 dark:text-outline group-hover:text-indigo-600 dark:group-hover:text-primary">
                                        <span class="material-symbols-outlined">more_vert</span>
                                    </button>
                                </td>
                            </tr>
                            <!-- User Row 2 -->
                            <tr class="hover:bg-slate-100/50 dark:hover:bg-surface-variant/10 transition-colors group">
                                <td class="p-md">
                                    <input
                                        class="user-checkbox w-4 h-4 rounded bg-white dark:bg-surface-container-highest border-slate-300 dark:border-outline/30 text-indigo-600 dark:text-primary focus:ring-indigo-500/40 dark:focus:ring-primary/40 focus:ring-offset-0"
                                        onchange="updateBulkUI()" type="checkbox" />
                                </td>
                                <td class="p-md">
                                    <div class="flex items-center gap-md">
                                        <div
                                            class="w-10 h-10 rounded-full border border-indigo-100 dark:border-primary/20 bg-indigo-50 dark:bg-primary/5 flex items-center justify-center overflow-hidden">
                                            <img class="w-full h-full object-cover"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEknz7ncT4HLypxS8lUjJ2J0oTbSGZe0hP1qPXAiheVPRm8MVWPN81ap3R8yOfZjxVtZsWTFz7p0bNmnjJgxPhEEvkS9yWid7IRaJH3GwgMDD-Nh1c1G0bOVBM8ygfPqMMOj1J-ybCGvM9IFdPEBmHO5afWftO-5kGJr6Gny5cbehcL2pAS32DS3OXl0TYoeyy3Gd4htrveYcuGZGpciS6YVA-w97hwpfrVddTHASdYJl94tdhALw2toHR64ioyFHMF9ytgK8JoZs" />
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900 dark:text-on-surface">Marcus Thorne
                                            </p>
                                            <p class="text-label-caps text-slate-500 dark:text-outline font-code-sm">
                                                m.thorne@inkode.io</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-md">
                                    <div class="flex flex-wrap gap-xs">
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-indigo-100 dark:bg-primary-container/20 text-indigo-700 dark:text-primary-fixed text-[10px] font-bold border border-indigo-200 dark:border-primary-container/30 uppercase">Platform
                                            Architect</span>
                                    </div>
                                </td>
                                <td class="p-md">
                                    <div class="flex items-center gap-xs">
                                        <div
                                            class="w-2 h-2 rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.4)] dark:shadow-[0_0_8px_rgba(74,222,128,0.5)]">
                                        </div>
                                        <span
                                            class="font-label-caps text-label-caps text-slate-700 dark:text-on-surface">Active</span>
                                    </div>
                                </td>
                                <td class="p-md text-right">
                                    <button
                                        class="p-xs hover:bg-slate-200 dark:hover:bg-surface-container-highest rounded-lg transition-colors text-slate-400 dark:text-outline group-hover:text-indigo-600 dark:group-hover:text-primary">
                                        <span class="material-symbols-outlined">more_vert</span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->



                <div class="p-5"> {{ $users->withQueryString()->links() }}</div>



            </div>
            <!-- Summary Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-md">
                <div class="glass-panel p-md rounded-2xl">
                    <div class="flex items-center justify-between mb-sm">
                        <span class="material-symbols-outlined text-indigo-600 dark:text-primary">groups</span>
                        <span
                            class="text-green-600 dark:text-green-500 text-[10px] font-bold bg-green-500/10 px-2 py-0.5 rounded-full">+12%</span>
                    </div>
                    <p class="text-slate-500 dark:text-outline font-label-caps text-label-caps">Total User Base</p>
                    <h4 class="text-headline-md font-bold text-slate-900 dark:text-on-surface">1,240</h4>
                </div>
                <div class="glass-panel p-md rounded-2xl">
                    <div class="flex items-center justify-between mb-sm">
                        <span class="material-symbols-outlined text-blue-600 dark:text-secondary">shield_person</span>
                        <span
                            class="text-slate-500 dark:text-outline text-[10px] font-bold bg-slate-500/10 dark:bg-outline/10 px-2 py-0.5 rounded-full">Global</span>
                    </div>
                    <p class="text-slate-500 dark:text-outline font-label-caps text-label-caps">Admin Privileged
                    </p>
                    <h4 class="text-headline-md font-bold text-slate-900 dark:text-on-surface">14</h4>
                </div>
                <div class="glass-panel p-md rounded-2xl border-red-200 dark:border-error/20">
                    <div class="flex items-center justify-between mb-sm">
                        <span class="material-symbols-outlined text-red-600 dark:text-error">lock_reset</span>
                        <span
                            class="text-red-600 dark:text-error text-[10px] font-bold bg-red-100 dark:bg-error/10 px-2 py-0.5 rounded-full">Action
                            Required</span>
                    </div>
                    <p class="text-slate-500 dark:text-outline font-label-caps text-label-caps">Pending Invites</p>
                    <h4 class="text-headline-md font-bold text-slate-900 dark:text-on-surface">3</h4>
                </div>
            </div>
        </div>

    </div>

</x-layouts.front>
