<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function(){
    return view('layouts.app');
});


Route::get('/tareas', function(){
    return view('tareas');
});

Route::get('/sprints', function(){
    return view('sprints');
});

    
Route::get('/proyect', function(){
    return view('main');
});

Route::view('/proyect', 'main')->name('proyect');

Route::view('/agenda', 'agenda')->name('agenda');


// Rutas para Reuniones (Meets)

