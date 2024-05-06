@extends('layouts.app')
@section('title', 'Agenda')

@section('content')
<div class="dark:text-white p-4">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Inicio
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Tareas</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="mt-10">
        <h2 class="text-4xl font-black uppercase">Tus Tareas</h2>
    </div>

    <div class="inline-flex items-center   space-x-20 mt-5 p-4 w-2/4 text-lg ">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Agregar Tareas +
        </button>
        <div class="inline-flex space-x-1.5 font-bold	">
            <h1><a href="">Personal</a></h1>
            <p class="">/</p>
            <h1><a href="">Proyectos</a></h1>
        </div>
    </div>



    <div class="flex-1 p-4">

        <!-- Contenedor de las 4 secciones (disminuido para dispositivos pequeños) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 p-2">
            <!-- Sección 1 - Gráfica de Usuarios -->
            <div class="bg-white p-4 rounded-md">
                <h2 class="text-gray-500 text-lg font-semibold pb-1">Hoy</h2>
                <div class="my-1"></div> <!-- Espacio de separación -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
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
                </li>

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
                </li>

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
                </li>

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
                </li>
            </div>

            <!-- Sección 2 - Gráfica de Comercios -->
            <div class="bg-white p-4 rounded-md">
                <h2 class="text-gray-500 text-lg font-semibold pb-1">Mañana</h2>
                <div class="my-1"></div> <!-- Espacio de separación -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
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
                </li>

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
                </li>

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
                </li>

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
                </li>
            </div>
        </div>
    </div>
</div>
</div>
@endsection