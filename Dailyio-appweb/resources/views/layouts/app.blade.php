<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
    </style>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>

<body class="dark font-DM dark:bg-slate-500">
    <!-- PAGINA PRINCIPAL DE LA APP -->

    <!-- COMPONENTE HEADER -->
    <x-navbar />
    <!-- COMPONENTE DEL SIDEBAR -->
    <x-sliderbar />
    <!-- Contenido prinicpal -->
    <div class="p-4 sm:ml-64 dark:bg-slate-700 ">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-400 mt-14">
            <h1>Hola</h1>
        </div>
    </div>
</body>

</html>