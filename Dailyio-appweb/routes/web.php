<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
Route::get('/agenda', function () {
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
