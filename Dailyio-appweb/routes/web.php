<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function(){
    return view('layouts.app');
});

Route::get('/agenda', function(){
    return view('agenda');
});

Route::get('/tareas', function(){
    return view('tareas');
});

Route::get('/proyect', function(){
    return view('main');
});

