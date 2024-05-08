<!-- Second Sprint... -->
<div class="dark:bg-slate-700 bg-white p-5 rounded-xl">
    <div class="flex justify-between items-center">
        <h3 class="font-bold text-lg lg:text-xl text-emerald-500 dark:text-emerald-400">Sprint {{ $numSprint ?? "" }}: <span class="text-slate-400">{{ $name ?? ''}}</span> </h3>
        <button class="dark:bg-emerald-400 bg-emerald-500 flex text-white p-2 px-6 rounded-lg font-semibold text-sm">
            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                    clip-rule="evenodd"></path>
            </svg>
            <span>Añadir nueva Tarea</span>
        </button>
    </div>
    <!-- table with the list of tasks -->
    <div class="mt-5">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-slate-200 dark:border-slate-700 md:rounded-lg">
                    
                    <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-700">
                        <thead class="bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-slate-500 dark:text-slate-400">
                                    <div class="flex items-center gap-x-3">
                                        <input type="checkbox"
                                            class="text-blue-500 border-slate-300 rounded dark:bg-slate-900 dark:ring-offset-slate-900 dark:border-slate-700">
                                        <button class="flex items-center gap-x-2">
                                            <span>Tareas</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-slate-500 dark:text-slate-400">
                                    Prioridad
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-slate-500 dark:text-slate-400">
                                    Estado
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-slate-500 dark:text-slate-400">
                                    Responsable
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-slate-500 dark:text-slate-400">
                                    Cargo
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-slate-500 dark:text-slate-400">
                                    Duracion
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-200 dark:divide-slate-700 dark:bg-slate-900">
                            {{-- TASK ITEM --}}
                            {{ $slot }}
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
