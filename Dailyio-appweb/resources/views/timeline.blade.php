@extends('layouts.app')
@section('title', 'Daily.io')

@section('content')
<div class="dark:text-white p-4 w-full">
    <x-navbar>
        <x-nav.page name="Proyectos" ruta="proyects.index" />
        <x-nav.page name="Daily.io" ruta="proyect.index" />
        <x-nav.page name="Timeline" ruta="proyect.timeline" />
    </x-navbar>
    <x-headerProyect title="Timeline" />
    {{-- CONTENT TAB --}}
    <div class="bg-white dark:bg-slate-700 dark:text-white my-4 p-4 rounded-xl overflow-auto"> {{-- DIV CENTRAL --}}

        <div class="min-w-[768px] flex">
            <div class="w-1/5">
                <div class="p-4 text-center">
                    <h3 class="font-bold">Sprints</h3>
                </div>
                {{-- Columna lateral derecha --}}
                <div class="border-r dark:border-r-slate-600 py-4 px-1 border-b-slate-600">
                    <div class="p-4">
                        <h3 class="font-semibold mb-2 text-slate-600 dark:text-slate-100">Front-End</h3>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-slate-500">
                            <div class="bg-amber-500 h-2.5 rounded-full" style="width: 25%"></div>
                        </div>
                        <p class="text-sm text-slate-400 dark:text-slate-400 mt-2">Progreso de actividades</p>
                    </div>
                </div>
                {{-- Columna lateral derecha --}}
                <div class="border-r dark:border-r-slate-600 py-4 px-1 border-b-slate-600">
                    <div class="p-4">
                        <h3 class="font-semibold mb-2 text-slate-600 dark:text-slate-100">Back-End</h3>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-slate-500">
                            <div class="bg-violet-500 h-2.5 rounded-full" style="width: 75%"></div>
                        </div>
                        <p class="text-sm text-slate-400 dark:text-slate-400 mt-2">Progreso de actividades</p>
                    </div>
                </div>
            </div>
            <div class="w-4/5 overflow-auto scroll-smooth">
                <div class="w-full flex flex-nowrap">
                    <div class="border-r dark:border-r-slate-600 p-1 px-3 w-1/4 min-w-[25%]">
                        <h4 class="text-base text-right font-semibold text-slate-500 dark:text-slate-400 my-1">May 5 - May 11
                        </h4>
                        <div class="grid grid-cols-7">
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">1</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">2</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">3</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">4</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">5</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">6</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">7</span>
                        </div>
                    </div>
                    <div class="border-r dark:border-r-slate-600 p-1 px-3 w-1/4 min-w-[25%]">
                        <h4 class="text-base text-right font-semibold text-slate-500 dark:text-slate-400 my-1">May 12 - May 18
                        </h4>
                        <div class="grid grid-cols-7">
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">8</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">9</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">10</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">11</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">12</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">13</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">14</span>
                        </div>
                    </div>
                    <div class="border-r dark:border-r-slate-600 p-1 px-3 w-1/4 min-w-[25%]">
                        <h4 class="text-base text-right font-semibold text-slate-500 dark:text-slate-400 my-1">May 19 - May 25
                        </h4>
                        <div class="grid grid-cols-7">
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">15</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">16</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">17</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">18</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">19</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">20</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">21</span>
                        </div>
                    </div>
                    <div class="border-r dark:border-r-slate-600 p-1 px-3 w-1/4 min-w-[25%]">
                        <h4 class="text-base text-right font-semibold text-slate-500 dark:text-slate-400 my-1">May 26 - Jun 1
                        </h4>
                        <div class="grid grid-cols-7">
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">15</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">16</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">17</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">18</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">19</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">20</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">21</span>
                        </div>
                    </div>
                    <div class="border-r dark:border-r-slate-600 p-1 px-3 w-1/4 min-w-[25%]">
                        <h4 class="text-base text-right font-semibold text-slate-500 dark:text-slate-400 my-1">Jun 2 - Jun 8
                        </h4>
                        <div class="grid grid-cols-7">
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">15</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">16</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">17</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">18</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">19</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">20</span>
                            <span class="text-sm text-slate-400 dark:text-slate-500 text-center block">21</span>
                        </div>
                    </div>
                </div>
                 {{-- AREA CALENDARIO --}}
                 <div class="w-full text-white">
                    <div class="w-[10%] overflow-hidden  bg-amber-500 p-1.5 rounded-lg m-4 ml-[5%]" data-tooltip-target="tooltip-right" data-tooltip-placement="right">
                        <h3 class="text-xs font-semibold truncate overflow-hidden border-l-4 border-l-amber-200 rounded-s-md p-1">Actualización de Diseños</h3>
                        <div id="tooltip-right" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-slate-400 rounded-lg shadow-sm opacity-0 tooltip dark:bg-slate-500">
                            Actualización de Diseños
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    
                    <div class="w-[25%] overflow-hidden bg-orange-500 p-1.5 rounded-lg m-4 ml-[10%]">
                        <h3 class="text-xs font-semibold truncate overflow-hidden border-l-4 border-l-orange-200 rounded-s-md p-1">Actualización de Diseños</h3>
                    </div>
                </div>
                
            </div>
        </div>     
    </div>
</div>
    
@endsection
