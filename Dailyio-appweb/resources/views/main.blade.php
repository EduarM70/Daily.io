@extends('layouts.app')
@section('title', 'Daily.io')

@section('content')
    <x-headerProyect />
    {{-- CONTENT TAB --}}
    <div class="bg-white dark:bg-slate-700 dark:text-white my-4 p-4 rounded-xl">
        <div class="flex border-b dark:border-b-slate-600">
            <div class="w-1/5 p-2 text-center">
                <h3>Sprints</h3>
            </div>
            <div class="w-4/5 flex">
                <div class="border-r dark:border-r-slate-600 p-1 px-1.5 w-1/4">
                    <h4 class="text-base font-semibold text-slate-500 dark:text-slate-400 my-1">May 5 - May 11</h4>
                    <div class="">
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">1</span>
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">2</span>
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">3</span>
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">4</span>
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">5</span>
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">6</span>
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">7</span>
                    </div>
                </div>
                <div class="border-r dark:border-r-slate-600 p-1 px-1.5 w-1/4">
                    <h4 class="text-base font-semibold text-slate-500 dark:text-slate-400 my-1">May 12 - May 18</h4>
                    <div class="">
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">8</span>
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">9</span>
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">10</span>
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">11</span>
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">12</span>
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">13</span>
                        <span class="text-sm text-slate-400 dark:text-slate-500 px-2 py-1">14</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            {{-- UNA FILA UN SPRINT --}}
            <div class="flex">
                {{-- Columna lateral derecha --}}

                <div class="w-1/5 border-r border-b dark:border-r-slate-600 py-4 px-1 border-b-slate-600">
                    <div class="p-4">
                        <h3 class="font-semibold mb-2 text-slate-600 dark:text-slate-100">Front-End</h3>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-slate-500">
                            <div class="bg-amber-500 h-2.5 rounded-full" style="width: 25%"></div>
                        </div>
                        <p class="text-sm text-slate-400 dark:text-slate-400 mt-2">Progreso de actividades</p>
                    </div>
                </div>
                 
                {{-- AREA CALENDARIO --}}

                <div class="w-4/5 flex">
                    <div class="grid grid-cols-7 w-1/4">
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                    </div>
                    <div class="grid grid-cols-7 w-1/4">
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                        <span
                            class="text-sm text-slate-400 dark:text-slate-600 px-3.5 py-1 border-r border-r-slate-200 dark:border-r-slate-600"></span>
                    </div>

                </div>
            </div>
            
        </div>

    </div>
@endsection
