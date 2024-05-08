@extends('layouts.app')
@section('title', 'Sprints')

@section('content')
    <div class="dark:text-white p-4 w-full">
        <x-navbar>
            <x-nav.page name="Proyectos" ruta="proyects.index" />
            <x-nav.page name="Daily.io" ruta="proyect.index" />
            <x-nav.page name="Sprints" ruta="sprints.index" />
        </x-navbar>

        <x-headerProyect title="Sprints" namebtn="Nuevo Sprint" idModal="sprint-create" />

        <!-- List Sprints -->
        <div class="py-4 mb-4s">
            <div class="grid gap-4">
                <!-- One Sprint... -->
                <x-sprint numSprint="1" name="FrontEnd">
                    <x-taskItem />
                    <x-taskItem name="Crear Vista Sprint" priority="Alta" status="Pendiente" duration="1 semana" />
                </x-sprint>
                <!-- Second Sprint... -->
                <x-sprint numSprint="2" name="BackEnd">
                    <x-taskItem />
                    <x-taskItem name="Crear Vista Sprint" priority="Alta" status="Pendiente" duration="1 semana" />
                </x-sprint>
            </div>
        </div>
    </div>

    <x-modal titleModal="Crea un Sprint" color="violet" idModal="sprint-create">
        <!-- Modal body -->
        <form class="p-4 md:p-5" method="POST" action="{{ route('sprint.store') }}" novalidate>
            @csrf
            <div class="grid gap-4 mb-4 grid-cols-2">
                <!-- NOMBRE SPRINT -->
                <div class="col-span-2">
                    <label for="nameSprint"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del Sprint</label>
                    <input type="text" name="nameSprint" id="nameSprint"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-violet-600 focus:border-violet-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-violet-500 dark:focus:border-violet-500"
                        placeholder="Agregar nombre" value="{{ old('title') }}" required>

                    @error('nameSprint')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                            </span>{{ $message }}</p>
                    @enderror

                </div>
                <!-- PRIORIDAD -->
                <div class="col-span-2">
                    <label for="plataform"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prioridad</label>
                    <select id="plataform" name="plataform"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500">
                        <option value="Alta" selected>Alta</option>
                        <option value="Media">Media</option>
                        <option value="Baja">Baja</option>
                    </select>
                    @error('plataform')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                            </span>{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- SIBMIT BTN  -->
            <button type="submit"
                class="text-white mt-4 inline-flex items-center bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Crear Sprint
            </button>
        </form>
    </x-modal>

@endsection
