@extends('layouts.app')
@section('title', 'Agenda')

@section('content')
<div class="dark:text-white p-4">
    <div class="">
        <h2 class="text-4xl font-black uppercase">Tus Tareas</h2> adawdawd
    </div>
    <button class="mt-5 middle none center mr-3 rounded-lg bg-gradient-to-tr from-pink-600 to-pink-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
        Button
    </button>


    <div class="flex-1 p-4">

        <!-- Contenedor de las 4 secciones (disminuido para dispositivos pequeños) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 p-2">
            <!-- Sección 1 - Gráfica de Usuarios (disminuida para dispositivos -->


            <!-- Sección 1 - Gráfica de Usuarios -->
            <div class="bg-white p-4 rounded-md">

                <div class="flex justify-center items-center bg-gray-100">
                    <li class="flex items-center">
                        <a href="#" class="text-gray-600 hover:text-blue-500 transition-colors duration-300">Personal</a>
                        <span class="mx-2">/</span>
                    </li>
                    <li class="flex items-center">
                        <a href="#" class="text-gray-600 hover:text-blue-500 transition-colors duration-300">Proyectos</a>
                    </li>
                </div>
                <div class="w-full mt-4 py-4 flex items-center">
                    <span class="block h-3 w-3 bg-violet-500 rounded-full"></span>
                    <span class="border-slate-400 border-t w-5/6 block"></span>
                    <h4 class="p-1 px-4 bg-violet-500 text-xs rounded-md text-white">Hoy</h4>
                </div>

                <li class="p-2 rounded-lg list-none">
                    <div class="flex align-middle flex-row justify-between">
                        <div class="p-2">
                            <input type="checkbox" class="h-6 w-6 " value="true" />
                        </div>
                        <div class="p-2">
                            <p class="text-lg text-black">Tarea 1</p>
                        </div>
                        <button class="flex text-red-500 border-2 border-red-500 p-2 rounded-lg">
                            <svg class="h-6 w-6 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="15" y1="9" x2="9" y2="15" />
                                <line x1="9" y1="9" x2="15" y2="15" />
                            </svg>
                            <span>Eliminar</span>
                        </button>
                    </div>
                    <hr class="mt-2" />
                </li>
                <li class="p-2 rounded-lg list-none">
                    <div class="flex align-middle flex-row justify-between">
                        <div class="p-2">
                            <input type="checkbox" class="h-6 w-6 " value="true" />
                        </div>
                        <div class="p-2">
                            <p class="text-lg text-black">Tarea 2</p>
                        </div>
                        <button class="flex text-red-500 border-2 border-red-500 p-2 rounded-lg">
                            <svg class="h-6 w-6 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="15" y1="9" x2="9" y2="15" />
                                <line x1="9" y1="9" x2="15" y2="15" />
                            </svg>
                            <span>Eliminar</span>
                        </button>
                    </div>
                    <hr class="mt-2" />
                </li>
                <li class="p-2 rounded-lg list-none">
                    <div class="flex align-middle flex-row justify-between">
                        <div class="p-2">
                            <input type="checkbox" class="h-6 w-6 " value="true" />
                        </div>
                        <div class="p-2">
                            <p class="text-lg text-black">Tarea 3</p>
                        </div>
                        <button class="flex text-red-500 border-2 border-red-500 p-2 rounded-lg">
                            <svg class="h-6 w-6 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="15" y1="9" x2="9" y2="15" />
                                <line x1="9" y1="9" x2="15" y2="15" />
                            </svg>
                            <span>Eliminar</span>
                        </button>
                    </div>
                    <hr class="mt-2" />
                </li>
            </div>

            <!-- Sección 2 - Gráfica de Comercios -->
            <div class="bg-white p-4 rounded-md">
                <h2 class="text-gray-500 text-lg font-semibold pb-1">Mañana</h2>
                <div class="my-1"></div> <!-- Espacio de separación -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
                <h1>Tareas 1</h1>
                <h1>Tareas 2</h1>
                <h1>Tareas 3</h1>
                <h1>Tareas 4</h1>
                <h1>Tareas 5</h1>
                <h1>Tareas 6</h1>
            </div>


        </div>
    </div>
</div>
</div>
@endsection