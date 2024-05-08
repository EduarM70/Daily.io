@extends('layouts.auth');
@section('title', 'Inicio de Sesión');

@section('content')
    <div
        class="w-full bg-gradient-to-r from-rose-500 to-violet-700 dark:bg-gradient-to-r dark:from-sky-700 dark:to-indigo-700 h-screen flex justify-center items-center dark:text-white">
        <div class="w-full md:w-2/3 xl:w-1/4 bg-white dark:bg-slate-800 p-6 rounded-xl">
            <div class="">
                <a href="https://flowbite.com" class="flex justify-center items-center gap-2 mb-5">
                    <i class="fi fi-sr-bulb text-emerald-500 text-lg sm:text-xl dark:text-white"></i>
                    <span
                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Daily.io</span>
                </a>
                <h2 class="text-left text-2xl lg:text-3xl font-black">Registrarse</h2>
                <p class="text-slate-400 text-left">¡Bienvenido! Comienza un nuevo camino para tus proyectos</p>
            </div>

            <form class="mx-auto w-full mt-5" method="POST" action="{{ route('validar-registro') }}">
                @csrf
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomrbe de Usuario</label>
                    <input type="username" id="name" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@example.com" required />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu
                        correo</label>
                    <input type="email" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@example.com" required />
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu
                        contraseña</label>
                    <input type="password" id="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>

                <div class="border-t border-t-slate-500 pt-1">
                    <p class="dark:text-slate-400 text-slate-500 my-4">¿Ya tienes una cuenta?<a
                            href="{{ route('login') }}" class="dark:text-violet-400 text-violet-600 font-bold">
                            Iniciar sesión</a></p>
                    <button type="submit"
                        class="text-white block bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrarse</button>
                </div>

            </form>
        </div>

    </div>
@endsection
