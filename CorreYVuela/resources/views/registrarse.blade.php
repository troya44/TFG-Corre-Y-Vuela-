<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
</head>
<body>
<h1>Registrarse</h1>
<p>Complete los campos para registrarse</p>

<!-- Mostrar mensajes de error -->
@if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('usuarios.registrar') }}" method="POST">
    @csrf
    <div>
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required>
    </div>
    <div>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Registrarse</button>
</form>

<a href="{{ route('usuarios.inicio') }}">Volver al inicio</a>
</body>
</html>
