@extends('layouts.app')
@section('title', 'Agenda')

@section('content')
    <div class="dark:text-white p-1">
       
        <x-navbar>
            <x-nav.page name="Proyectos" ruta="proyects.index" />
        </x-navbar>

        <div class="">
            <h2 class="text-xl lg:text-2xl xl:text-4xl font-black uppercase text-violet-600 dark:text-white">Tus Proyectos</h2>
            <p class="text-sm text-slate-500 dark:text-slate-400">Encuentra todos los proyectos a los cuales te han incluido o eres el propietario</p>
        </div>
        {{-- CUERPO DE LA VISTA PROYECTO --}}

        <div class="bg-white dark:bg-slate-700 p-4 px-6 mt-10 rounded-lg">
            <div class="flex justify-between mb-5 items-center">
                <h2 class="text-xl font-bold mb-4">Lista de Proyecto</h2>
                <button
                class="text-white inline-flex items-center bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800" data-modal-target="proyect-modal" data-modal-toggle="proyect-modal">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Crear Proyecto
            </button>
            </div>
            
            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-slate-500 uppercase bg-slate-200 dark:bg-slate-500 dark:text-slate-300">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre del Proyecto
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Propietario
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Estado
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Progreso
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-slate-600 dark:border-slate-500">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-slate-900 whitespace-nowrap dark:text-white">
                                Daily.io Proyect
                            </th>
                            <td class="px-6 py-4">
                                Martin Carbajal
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                    <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                                    Unavailable
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-slate-400">
                                    <div class="bg-amber-600 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-slate-600 dark:border-slate-500">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>
                            <td class="px-6 py-4">
                                Laptop PC
                            </td>
                            <td class="px-6 py-4">
                                $1999
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="dark:bg-slate-600 dark:border-slate-500">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                Black
                            </td>
                            <td class="px-6 py-4">
                                Accessories
                            </td>
                            <td class="px-6 py-4">
                                $99
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <x-modal titleModal="Crea una Proyecto" color="violet" idModal="proyect-modal">
        <!-- Modal body -->
        <form class="p-4 md:p-5" method="POST" action="{{ route('proyect.store') }}">
            @csrf
            <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2">
                    <label for="nameProyect"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre Proyecto</label>
                    <input type="text" name="nameProyect" id="nameProyect"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-violet-600 focus:border-violet-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-violet-500 dark:focus:border-violet-500"
                        placeholder="Agregar nombre" value="{{ old('title') }}" required>

                    @error('nameProyect')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                            </span>{{ $message }}</p>
                    @enderror

                </div>
                
                <!-- date picker -->
                <div class="col-span-2">
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Inicio de Proyecto</label>
                    @error('date')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                            </span>{{ $message }}</p>
                    @enderror
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="date"
                            id="date" value="{{ old('date') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-violet-500 focus:border-violet-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-violet-500 dark:focus:border-violet-500"
                            placeholder="Select date">

                    </div>
                </div>

                
                <!-- Description -->
                <div class="col-span-2">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                    <textarea id="description" rows="4" name="description"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-violet-500 focus:border-violet-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-violet-500 dark:focus:border-violet-500"
                        placeholder="Escribe una descripción para la reunión">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                            </span>{{ $message }}</p>
                    @enderror
                </div>

                <!-- Objetivos -->
                <div class="col-span-2">
                    <label for="goals"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Objetivos</label>
                    <textarea id="description" rows="4" name="description"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-violet-500 focus:border-violet-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-violet-500 dark:focus:border-violet-500"
                        placeholder="¿Cuáles son las metas que quieres alcanzar?">{{ old('goals') }}</textarea>
                    @error('goals')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                            </span>{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- SIBMIT BTN  -->
            <button type="submit"
                class="text-white inline-flex items-center bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Crear Proyecto
            </button>
        </form>
    </x-modal>
@endsection
