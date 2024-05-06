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
    <button type="button" class="mt-5 inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 font-medium rounded-lg text-base px-5 py-2.5 text-center ">
        Agregar Tareas
    </button>
    <div class="flex-1 p-4">
        <div class="w-full mt-4 dark:text-slate-200 grid md:grid-cols-2 2xl:grid-cols-2 gap-4">
            <div class="bg-white dark:bg-slate-700 rounded-lg p-7">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-cyan-400 text-xl">Hoy</h3>
                    <button class="p-2 pb-1 text-sm bg-cyan-400 rounded-md text-white flex items-center gap-2"><span class="hidden xl:block mb-1">Fecha de entrega</span></button>
                </div>
                <div class="text-center p-4 bg-cyan-50 dark:bg-slate-600 border border-cyan-300 dark:border-slate-500 rounded-lg">

                    <li class="p-2 rounded-lg list-none">
                        <div class="flex align-middle flex-row justify-between">
                            <div class="p-2">
                                <input type="checkbox" class="h-6 w-6 " value="true" />
                            </div>
                            <div class="p-2">
                                <p class="text-lg dark:text-white">Articulo IEEE</p>
                            </div>
                            <div class="p-2">
                                <p class="text-lg dark:text-white">06/05/2024</p>
                            </div>
                        </div>
                    </li>
                    <li class="p-2 rounded-lg list-none">
                        <div class="flex align-middle flex-row justify-between">
                            <div class="p-2">
                                <input type="checkbox" class="h-6 w-6 " value="true" />
                            </div>
                            <div class="p-2">
                                <p class="text-lg dark:text-white">Catedra BDD</p>
                            </div>
                            <div class="p-2">
                                <p class="text-lg dark:text-white">06/05/2024</p>
                            </div>
                        </div>
                    </li>
                    <li class="p-2 rounded-lg list-none">
                        <div class="flex align-middle flex-row justify-between">
                            <div class="p-2">
                                <input type="checkbox" class="h-6 w-6 " value="true" />
                            </div>
                            <div class="p-2">
                                <p class="text-lg dark:text-white">Proyecto POO</p>
                            </div>
                            <div class="p-2">
                                <p class="text-lg dark:text-white">06/05/2024</p>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-700 rounded-lg p-7">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-cyan-400 text-xl">Mañana</h3>
                </div>
                <div class="text-center p-4 bg-cyan-50 dark:bg-slate-600 border border-cyan-300 dark:border-slate-500 rounded-lg">

                    <li class="p-2 rounded-lg list-none">
                        <div class="flex align-middle flex-row justify-between">
                            <div class="p-2">
                                <input type="checkbox" class="h-6 w-6 " value="true" />
                            </div>
                            <div class="p-2">
                                <p class="text-lg dark:text-white">Proyecto POO</p>
                            </div>
                            <div class="p-2">
                                <p class="text-lg dark:text-white"></p>
                            </div>
                        </div>
                    </li>
                    <li class="p-2 rounded-lg list-none">
                        <div class="flex align-middle flex-row justify-between">
                            <div class="p-2">
                                <input type="checkbox" class="h-6 w-6 " value="true" />
                            </div>
                            <div class="p-2">
                                <p class="text-lg dark:text-white">Desafio Practico</p>
                            </div>
                            <div class="p-2">
                                <p class="text-lg dark:text-white"></p>
                            </div>
                        </div>
                    </li>
                    <li class="p-2 rounded-lg list-none">
                        <div class="flex align-middle flex-row justify-between">
                            <div class="p-2">
                                <input type="checkbox" class="h-6 w-6 " value="true" />
                            </div>
                            <div class="p-2">
                                <p class="text-lg dark:text-white">Crear Proyecto</p>
                            </div>
                            <div class="p-2">
                                <p class="text-lg dark:text-white"></p>
                            </div>
                        </div>
                    </li>
                </div>
            </div>

            <a class="dark:text-indigo-500 inline-flex items-center">Siguiente Semana
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
</div>
@endsection