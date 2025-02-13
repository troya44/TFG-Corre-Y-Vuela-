<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal de Inicio</title>
</head>
<body>
<h1 style="text-align: center;">Bienvenidos a Corre Y Vuela</h1>

<div style="text-align: center; margin: 20px 0;">
    <img src="{{ asset('LogoCorreYVuela.png') }}" alt="Logo Corre Y Vuela" style="max-width: 300px; height: auto;">
</div>
<p>Somos una empresa encargada de organizar y gestionar eventos seportivos al aire libre con espectáculos audiovisuales por todo el recorrido, para sumergir tanto los corredores como al publico, haciendo únicos nuestros eventos</p>
<p>Podrás seguir la carrera desde las diferentes pantallas y aplicaciones que harán que no te pierdas a tu corredor favorito y puedas correr contra el dentro de nuestros puestos de animación, haciendo esto más animado, entretenido y sobretodo alcanzable para todo tipo de personas, dependiendo de su forma física, edad ...</p>
<br>
<a href="{{ route('usuarios.registrarse') }}">Registrarse</a>
<br>
<a href="{{ route('usuarios.inicio') }}">Iniciar Sesión</a>
</body>
</html>
