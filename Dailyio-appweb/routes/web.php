<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BacklogController;
use App\Http\Controllers\MeetController;
use App\Http\Controllers\ProyectController;
use App\Http\Controllers\SprintController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('layouts.app');
});

/* -------------------------  AUTH ------ */
/* -----  LOGIN ------ */
Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::view('/privada', "secret")->middleware('auth')->name('privada');

/* -----  REGISTER ------ */
Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/backlogs', [BacklogController::class, 'index'])->name('backlogs.index');
Route::get('/backlogs/create', [BacklogController::class, 'create'])->name('backlogs.create');
Route::post('/backlogs', [BacklogController::class, 'store'])->name('backlogs.store');
Route::delete('/backlogs/{backlog}', [BacklogController::class, 'destroy'])->name('backlogs.destroy');

Route::get('/agenda', function(){
    return view('agenda');
})->name('agenda.index');

Route::get('/tareas', function () {
    return view('tareas');
})->name('tareas');


Route::get('/taskSprint', function () {
    return view('taskSprint');
});

// Rutas para Proyectos del Usuario (Proyects)
Route::get('/proyectos', [ ProyectController::class, 'index'] )->name('proyects.index');
Route::post('/proyectos/store', [ProyectController::class, 'store'])->name('proyect.store');


// Space Proyect

// Backlog - Overview
Route::view('/proyect', 'overview')->name('proyect.index');

// Rutas para los Sprints del Proyecto

Route::get('/proyect/sprints', [SprintController::class, 'index'])->name('sprints.index');
Route::post('/proyect/sprint/create', [SprintController::class])->name('sprint.store');

// Rutas para e timeLine

Route::view('/proyect/timeline', 'timeline')->name('proyect.timeline');

// Rutas para Reuniones (Meets)

Route::view('/agenda','agenda')->name('agenda.index');
Route::post('/agenda', [MeetController::class, 'store'])->name('meet.store');
