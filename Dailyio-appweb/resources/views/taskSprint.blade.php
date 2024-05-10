@extends('layouts.app')
@section('title', 'Agenda')

@section('content')

<div class="dark:text-white p-4 w-full">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse ">
            <li class="inline-flex items-center ">
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
                    <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Proyectos</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Daily.io</a>
                </div>
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
        <h2 class="text-4xl font-black uppercase">Tareas</h2>
    </div>
    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700 mt-5">
        <ul class="flex flex-wrap -mb-px">
            <li class="me-2">
                <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Avance</a>
            </li>
            <li class="me-2">
                <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Sprints</a>
            </li>
            <li class="me-2">
                <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Blacklog</a>
            </li>
            <li class="me-2">
                <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Tabla Principal</a>
            </li>
            <li class="me-2">
                <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Tareas</a>
            </li>
        </ul>
    </div>
</div>

<div class="flex-1 p-4">
    <div class="w-full mt-4 dark:text-slate-200 grid md:grid-cols-2 2xl:grid-cols-2 gap-4 ">
        <div class="bg-white dark:bg-slate-700 rounded-lg p-7 shadow-2xl">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Descripción del proyecto</h5>
            </a>
            <p class=" font-normal text-gray-700 dark:text-gray-400">Crear una página web con HTML, CSS y JavaScript es esencial en el desarrollo web. HTML estructura la página, CSS le da estilo y diseño, mientras que JavaScript añade interactividad. Juntos, forman la base para crear experiencias web atractivas y funcionales.</p>
        </div>

        <div class="bg-white dark:bg-slate-700 rounded-lg p-7 shadow-2xl ">
            <button class=" items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Reuniones
            </button>
            <button class="mt-7 items-center text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Añadir Reunión
            </button>
        </div>
    </div>
</div>

<div class="flex-1 p-4">
    <div class="w-full dark:text-slate-200 grid md:grid-cols-2 2xl:grid-cols-2 gap-4 ">
        <div class="bg-white dark:bg-slate-700 rounded-lg p-7 shadow-2xl">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Progresos</h5>
            </a>
            <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                <li>
                    Primer Sprint
                </li>
                <li>
                    Avance en Proyecto
                </li>
                <li>
                    Proyecto Cátedra
                </li>
            </ul>
        </div>
        <div class="bg-white dark:bg-slate-700 rounded-lg p-7 shadow-2xl">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Notificaciónes</h5>
            </a>
            <div class="flex items-center mt-5 ">
                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Hola hoy habra una reaunión</label>
            </div>
            <div class="flex items-center mt-3 ">
                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Tienes una tarea pendiente</label>
            </div>
            <div class="flex items-center mt-3 ">
                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Mañana no hay clase</label>
            </div>
        </div>
    </div>
</div>
@endsection