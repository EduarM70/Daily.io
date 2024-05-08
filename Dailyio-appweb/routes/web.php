<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BacklogController;

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

Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/backlogs', [BacklogController::class, 'index'])->name('backlogs.index');
Route::get('/backlogs/create', [BacklogController::class, 'create'])->name('backlogs.create');
Route::post('/backlogs', [BacklogController::class, 'store'])->name('backlogs.store');
Route::delete('/backlogs/{backlog}', [BacklogController::class, 'destroy'])->name('backlogs.destroy');

Route::get('/agenda', function(){
    return view('agenda');
});

Route::get('/tareas', function () {
    return view('tareas');
});

Route::get('/sprints', function () {
    return view('sprints');
});


Route::get('/proyect', function () {
    return view('main');
});

Route::get('/taskSprint', function () {
    return view('taskSprint');
});
