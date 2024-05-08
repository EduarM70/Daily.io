<tr>
    <td
        class="px-4 py-4 text-sm font-medium text-slate-700 dark:text-slate-200 whitespace-nowrap">
        <div class="inline-flex items-center gap-x-3">
            <input type="checkbox"
                class="text-blue-500 border-slate-300 rounded dark:bg-slate-900 dark:ring-offset-slate-900 dark:border-slate-700">

            <span> {{ $name ?? 'Guia 1 POO' }}</span>
        </div>
    </td>
    <td class="px-4 py-4 text-sm text-slate-500 dark:text-slate-300 whitespace-nowrap">
        {{ $priority ?? 'Baja' }}
    </td>
    <td class="px-4 py-4 text-sm font-medium text-slate-700 whitespace-nowrap">
        <div
            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-slate-800">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h2 class="text-sm font-normal">{{ $Status ?? 'Terminada' }}</h2>
        </div>
    </td>
    <td class="px-4 py-4 text-sm text-slate-500 dark:text-slate-300 whitespace-nowrap">
        <div class="flex items-center gap-x-2">
            <img class="object-cover w-8 h-8 rounded-full"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                alt="">
            <div>
                <h2 class="text-sm font-medium text-slate-800 dark:text-white ">
                    {{ $owner ?? 'Rogers Deleon' }}
                </h2>
                <p class="text-xs font-normal text-slate-600 dark:text-slate-400">
                    {{ $team ?? 'Fronend' }}</p>
            </div>
        </div>
    </td>
    <td class="px-4 py-4 text-sm text-slate-500 dark:text-slate-300 whitespace-nowrap">
        Diseñador</td>
    <td class="px-4 py-4 text-sm whitespace-nowrap">
        <div class="flex items-center gap-x-6">
            <button
                class="text-slate-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-slate-300 hover:text-indigo-500 focus:outline-none">
                {{ $duration ?? '2 semanas' }}
            </button>
        </div>
    </td>
</tr>