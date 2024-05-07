<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Privada</title>
</head>
<body>
    <div>
        <header>
            <a href="">Pagina Privada @auth de {{Auth::user()->name}} @endauth</a>
        </header>
        <div>
            <a href="{{route('logout')}}"><button type="button">Salir</button></a>
        </div>
    </div>
    <article>
        <h2>Tu seccion privada</h2>
    </article>
    
</body>
</html>