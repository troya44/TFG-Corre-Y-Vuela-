<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesión</title>
</head>
<body>
<h1>Iniciar Sesión</h1>
<p>Complete los campos para iniciar sesión</p>

<!-- Mostrar errores -->
@if ($errors->has('login_error'))
    <p style="color: red;">{{ $errors->first('login_error') }}</p>
@endif

<form action="{{ route('iniciarSesion') }}" method="POST">
    @csrf
    <div>
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required>
    </div>
    <div>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Iniciar Sesión</button>
</form>
<a href="{{ route('usuarios.portada') }}">Volver al Inicio</a>
</body>
</html>
