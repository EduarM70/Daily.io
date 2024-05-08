@extends('layouts.app')
@section('title', 'Agenda')

@section('content')
    <div class="dark:text-white p-1">
        <x-navrouter page="Agenda" descripcion="No te olvides de revisar cómo está tu día" />

        <div class="w-full mt-10 dark:text-slate-200 grid lg:grid-cols-2 2xl:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-slate-700 rounded-lg p-7">
                <h3 class="font-bold text-violet-400 mb-3">Actividades</h3>
                <div
                    class="text-center p-4 bg-violet-50 dark:bg-slate-600 border border-violet-300 dark:border-slate-500 rounded-lg">
                    <h4 class="text-sm text-slate-500 dark:text-slate-300">En hora Buena</h4>
                    {{-- <i class="fi fi-rr-face-awesome text-4xl my-2 block"></i> --}}
                    <h3 class="font-bold text-lg dark:text-violet-300 my-3 text-violet-500">¡No tienes Pendientes!</h3>
                    <button
                        class="bg-violet-400 text-white px-4 py-2 text-sm rounded-xl transition duration-500 hover:bg-violet-500">Agregar
                        Actividad</button>
                </div>
                <div class="w-full">
                    <div class="w-full mt-4 py-4 flex items-center">
                        <span class="block h-3 w-3 bg-violet-500 rounded-full"></span>
                        <span class="border-slate-400 border-t w-5/6 block"></span>
                        <h4 class="p-1 px-4 bg-violet-500 text-xs rounded-md text-white">Hoy</h4>
                    </div>
                    <div class="bg-slate-50 dark:bg-slate-800 rounded-lg flex">
                        <div class="p-1 rounded-l-lg bg-violet-600"></div>
                        <div class="pl-3 pt-3">
                            <p class="text-sm font-semibold text-violet-400">1:00 p.m.</p>
                        </div>
                        <div class="p-3">
                            <h3 class="text-sm font-semibold">Viajar en Vacaciones a la Playa</h3>
                            <p class="text-xs text-slate-400">Martin Carbajal</p>
                            <p class="text-xs text-slate-400">Lugar: La Libertad</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="bg-white dark:bg-slate-700 rounded-lg p-7">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-cyan-400">Reuniones</h3>
                    <button class="p-2 pb-1 text-sm bg-cyan-400 rounded-md text-white flex items-center gap-2">
                        <i class="fi fi-sr-circle-video"></i>
                        <span class="hidden xl:block mb-1">Agendar Reunión</span>
                    </button>
                </div>
                <div
                    class="text-center p-4 bg-cyan-50 dark:bg-slate-600 border border-cyan-300 dark:border-slate-500 rounded-lg">
                    <h4 class="text-sm text-slate-500 dark:text-slate-300">En hora Buena</h4>
                    <h3 class="font-bold text-lg dark:text-cyan-300 my-3 text-cyan-500">¡No tienes Reuniones!</h3>
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="bg-cyan-400 text-white px-4 py-2 text-sm rounded-xl transition duration-500 hover:bg-cyan-500">
                        Agregar Reunión
                    </button>
                </div>

            </div>
            <div class="bg-white dark:bg-slate-700 rounded-lg p-7">
                <h3 class="font-bold text-emerald-300 mb-3">Notificaciones</h3>
                <div
                    class="text-center p-4 bg-emerald-50 dark:bg-slate-600 border border-emerald-300 dark:border-slate-500 rounded-lg">
                    <h4 class="text-sm text-slate-500 dark:text-slate-300">En hora Buena</h4>
                    {{-- <i class="fi fi-rr-face-awesome text-4xl my-2 block"></i> --}}
                    <h3 class="font-bold text-lg dark:text-emerald-300 my-3 text-emerald-500">¡No tienes Notificaciones!
                    </h3>
                    <button
                        class="bg-emerald-400 text-white px-4 py-2 text-sm rounded-xl transition duration-500 hover:bg-emerald-500">Espera
                        por Notificaciones</button>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL PARA REUNIONES --}}
    <x-modal titleModal="Crea una Reunión" color="cyan" idModal="crud-modal">
        <!-- Modal body -->
        <form class="p-4 md:p-5" method="POST" action="{{ route('meet.store') }}" novalidate>
            @csrf
            <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2">
                    <label for="title"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título</label>
                    <input type="text" name="title" id="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500"
                        placeholder="Agregar título" value="{{ old('title') }}" required>

                    @error('title')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                            </span>{{ $message }}</p>
                    @enderror

                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="proyect_id"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Proyecto</label>
                    <select id="proyect_id" name="proyect_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500">
                        <option value="1" selected>Daily.io</option>
                        <option value="2">Medikids</option>
                        <option value="3">Servidores CentOS</option>
                        <option value="4">ImportCarLeo</option>
                        <option value="5">AeroPost</option>
                    </select>
                    @error('proyect_id')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                            </span>{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="plataform"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Plataforma</label>
                    <select id="plataform" name="plataform"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500">
                        <option value="Meet" selected>Google Meet</option>
                        <option value="Teams">Teams</option>
                        <option value="Zoom">Zoom</option>
                    </select>
                    @error('plataform')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                            </span>{{ $message }}</p>
                    @enderror
                </div>
                <!-- date picker -->
                <div class="col-span-2 lg:col-span-1">
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Eije una
                        fecha</label>
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
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500"
                            placeholder="Select date">

                    </div>
                </div>
                <!-- Time picker -->
                <div class="col-pan-2 lg:col-span-1">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona
                        la hora:</label>
                    @error('time')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                            </span>{{ $message }}</p>
                    @enderror
                    <div class="relative">
                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="time" id="time" name="time" value="{{ old('time') }}"
                            class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            min="09:00" max="18:00" value="00:00" required />

                    </div>
                </div>

                <div class="col-span-2">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                    <textarea id="description" rows="4" name="description"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-cyan-500 focus:border-cyan-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500"
                        placeholder="Escribe una descripción para la reunión">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                            </span>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit"
                class="text-white inline-flex items-center bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Agendar Reunión
            </button>
        </form>
    </x-modal>





@endsection
