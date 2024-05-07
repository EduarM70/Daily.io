<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    
    <form method="POST" action="{{route('validar-registro')}}">
        @csrf
        <div>
            <label for="emailInput">Email</label>
            <input type="email" id="emailInput" name="email" require autocomplete="disable">
            <label for="passwordInput">Password</label>
            <input type="password" id="passwordInput" name="password" require>
            <label for="userInput">Nombre</label>
            <input type="text" id="userInput" name="name" require autocomplete="disable">
            <button type="submit">Registrarse</button>
        </div>
    </form>
    
</body>
</html>