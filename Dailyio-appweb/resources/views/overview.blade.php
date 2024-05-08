@extends('layouts.app')
@section('title', 'Agenda')

@section('content')

<div class="dark:text-white p-4 w-full">
    <x-navbar>
        <x-nav.page name="Proyectos" ruta="proyects.index" />
        <x-nav.page name="Daily.io" ruta="proyect.index" />
    </x-navbar>
    <x-headerProyect title="Proyecto: Daily.io" />
</div>
@endsection