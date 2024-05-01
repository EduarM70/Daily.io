@extends('layouts.app')
@section('title', 'Agenda')

@section('content')
<div class="dark:text-white p-4">
    <div class="">
        <h2 class="text-4xl font-black uppercase">Tu Agenda</h2>
    </div>
    <div class="w-full mt-4 dark:text-slate-200 grid md:grid-cols-2 2xl:grid-cols-3 gap-4">
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
            <h3 class="font-bold text-cyan-400 mb-3">Reuniones</h3>
            <div class="text-center p-4 bg-cyan-50 dark:bg-slate-600 border border-cyan-300 dark:border-slate-500 rounded-lg">
                <h4 class="text-sm text-slate-500 dark:text-slate-300">En hora Buena</h4>
                {{-- <i class="fi fi-rr-face-awesome text-4xl my-2 block"></i> --}}
                <h3 class="font-bold text-lg dark:text-cyan-300 my-3 text-cyan-500">¡No tienes Reuniones!</h3>
                <button class="bg-cyan-400 text-white px-4 py-2 text-sm rounded-xl transition duration-500 hover:bg-cyan-500">Agregar Reunión</button>
            </div>
        </div>
        <div class="bg-white dark:bg-slate-700 rounded-lg p-7">
            <h3 class="font-bold text-emerald-300 mb-3">Notificaciones</h3>
            <div class="text-center p-4 bg-emerald-50 dark:bg-slate-600 border border-emerald-300 dark:border-slate-500 rounded-lg">
                <h4 class="text-sm text-slate-500 dark:text-slate-300">En hora Buena</h4>
                {{-- <i class="fi fi-rr-face-awesome text-4xl my-2 block"></i> --}}
                <h3 class="font-bold text-lg dark:text-emerald-300 my-3 text-emerald-500">¡No tienes Notificaciones!</h3>
                <button class="bg-emerald-400 text-white px-4 py-2 text-sm rounded-xl transition duration-500 hover:bg-emerald-500">Agregar Reunión</button>
            </div>
        </div>
    </div>
</div>    
@endsection

