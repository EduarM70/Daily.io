<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MeetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('layouts.app');
});

Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::view('/privada', "secret")->middleware('auth')->name('privada');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/tareas', function () {
    return view('tareas');
})->name('tareas');

Route::get('/sprints', function () {
    return view('sprints');
});


Route::get('/proyect', function () {
    return view('main');
})->name('proyect.index');

Route::view('/proyect', 'main')->name('proyect');


Route::get('/taskSprint', function () {
    return view('taskSprint');
});

// Rutas para Reuniones (Meets)

Route::view('/agenda','agenda')->name('agenda.index');
Route::post('/agenda', [MeetController::class, 'store'])->name('meet.store');
