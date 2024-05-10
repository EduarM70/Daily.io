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
    <button class="mt-5 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            + Agregar Tarea
        </span>
    </button>
    <div class="flex-1 p-4">
        <div class="w-full mt-4 dark:text-slate-200 grid md:grid-cols-2 2xl:grid-cols-2 gap-4 ">
            <div class="bg-white dark:bg-slate-700 rounded-lg p-7 shadow-2xl">
                <div class="flex justify-between items-center mb-4 ">
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
            <div class="bg-white dark:bg-slate-700 rounded-lg p-7 shadow-2xl">
                <div class="flex justify-between items-center mb-4 ">
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

        </div>
        <div class="mt-10 flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Recuerda!</span> "Es fundamental que mantengas una constante atención en tus responsabilidades diarias y que, al completarlas, las marques como finalizadas. Este simple acto te permitirá llevar un registro claro de tu progreso y te ayudará a gestionar tu tiempo de manera más efectiva."
            </div>
        </div>
        <button type="button" class="flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Siguiente semana <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
            </svg></button>
    </div>
</div>
</div>
@endsection