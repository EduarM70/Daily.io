<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
    <form method="POST" action="{{route('inicia-sesion')}}">
        @csrf
        <div>
            <label for="emailInput">Email</label>
            <input type="email" id="emailInput" name="email" require autocomplete="disable">
            <label for="passwordInput">Password</label>
            <input type="password" id="passwordInput" name="password" require>
            <label for="userInput">Nombre</label>
            <input type="checkbox" id="rememberCheck" name="remember">
            <label for="rememberCheck">Mantener Sesion Iniciada</label>
        </div>
            <div>
                <p>¿No tienenes una cuenta?<a href="{{route('registro')}}">Registrate</a></p>
            </div>
            <button type="submit">Acceder</button>

    </form>
    
</body>
</html>