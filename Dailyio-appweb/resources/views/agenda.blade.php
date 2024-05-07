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
                    <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Agenda</a>
                </div>
            </li>
        </ol>
    </nav>
    <div class="mt-10">
        <h2 class="text-4xl font-black uppercase">Tu Agenda</h2>
    </div>
    <div class="w-full mt-4 dark:text-slate-200 grid lg:grid-cols-2 2xl:grid-cols-3 gap-6">
        <div class="bg-white dark:bg-slate-700 rounded-lg p-7">
            <h3 class="font-bold text-violet-400 mb-3">Actividades</h3>
            <div class="text-center p-4 bg-violet-50 dark:bg-slate-600 border border-violet-300 dark:border-slate-500 rounded-lg">
                <h4 class="text-sm text-slate-500 dark:text-slate-300">En hora Buena</h4>
                {{-- <i class="fi fi-rr-face-awesome text-4xl my-2 block"></i> --}}
                <h3 class="font-bold text-lg dark:text-violet-300 my-3 text-violet-500">¡No tienes Pendientes!</h3>
                <button class="bg-violet-400 text-white px-4 py-2 text-sm rounded-xl transition duration-500 hover:bg-violet-500">Agregar Actividad</button>
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
                <button class="p-2 pb-1 text-sm bg-cyan-400 rounded-md text-white flex items-center gap-2"><i class="fi fi-sr-circle-video"></i><span class="hidden xl:block mb-1">Agendar Reunión</span></button>
            </div>
            <div class="text-center p-4 bg-cyan-50 dark:bg-slate-600 border border-cyan-300 dark:border-slate-500 rounded-lg">
                <h4 class="text-sm text-slate-500 dark:text-slate-300">En hora Buena</h4>
                {{-- <i class="fi fi-rr-face-awesome text-4xl my-2 block"></i> --}}
                <h3 class="font-bold text-lg dark:text-cyan-300 my-3 text-cyan-500">¡No tienes Reuniones!</h3>
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="bg-cyan-400 text-white px-4 py-2 text-sm rounded-xl transition duration-500 hover:bg-cyan-500">Agregar Reunión</button>
            </div>
        </div>
        <div class="bg-white dark:bg-slate-700 rounded-lg p-7">
            <h3 class="font-bold text-emerald-300 mb-3">Notificaciones</h3>
            <div class="text-center p-4 bg-emerald-50 dark:bg-slate-600 border border-emerald-300 dark:border-slate-500 rounded-lg">
                <h4 class="text-sm text-slate-500 dark:text-slate-300">En hora Buena</h4>
                {{-- <i class="fi fi-rr-face-awesome text-4xl my-2 block"></i> --}}
                <h3 class="font-bold text-lg dark:text-emerald-300 my-3 text-emerald-500">¡No tienes Notificaciones!</h3>
                <button class="bg-emerald-400 text-white px-4 py-2 text-sm rounded-xl transition duration-500 hover:bg-emerald-500">Espera por Notificaciones</button>
            </div>
        </div>
    </div>
</div>

<x-modal titleModal="Crea una Reunión" color="cyan" >
    <!-- Modal body -->
    <form class="p-4 md:p-5" method="POST">
        <div class="grid gap-4 mb-4 grid-cols-2">
            <div class="col-span-2">
                <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título</label>
                <input type="text" name="titulo" id="titulo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Agregar título" required="">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="proyect" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Proyecto</label>
                <select id="proyect" name="proyect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="1" selected>Daily.io</option>
                    <option value="2">Medikids</option>
                    <option value="3">Servidores CentOS</option>
                    <option value="4">ImportCarLeo</option>
                    <option value="5">AeroPost</option>
                </select>
            </div>            
            <div class="col-span-2 sm:col-span-1">
                <label for="plataform" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Plataforma</label>
                <select id="plataform" name="plataform" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="Meet" selected>Google Meet</option>
                    <option value="Teams">Teams</option>
                    <option value="Zoom">Zoom</option>
                </select>
            </div>
            <!-- date picker -->
            <div class="">
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                       <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecciona la fecha">
                  </div>
            </div>
            <div class="col-span-2">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>                    
            </div>
        </div>
        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
            Agendar Reunión
        </button>
    </form>
</x-modal>

@endsection

