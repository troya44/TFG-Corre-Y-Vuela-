<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal de Inicio</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            color: #333;
            margin-top: 40px;
            font-size: 2.5em;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .logo-container {
            margin: 20px 0;
        }

        .logo-container img {
            max-width: 300px;
            height: auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        p {
            color: #555;
            max-width: 800px;
            text-align: center;
            line-height: 1.6;
            margin: 20px auto;
            padding: 0 20px;
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 12px 24px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #45a049;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2em;
            }

            .logo-container img {
                max-width: 200px;
            }
        }

    </style>
</head>
<body>
<h1 style="text-align: center;">Bienvenidos a Corre Y Vuela</h1>

<div style="text-align: center; margin: 20px 0;">
    <img src="{{ asset('LogoCorreYVuela.png') }}" alt="Logo Corre Y Vuela" style="max-width: 300px; height: auto;">
</div>
<p>Somos una empresa encargada de organizar y gestionar eventos seportivos al aire libre con espectáculos audiovisuales por todo el recorrido, para sumergir tanto los corredores como al público, haciendo únicos nuestros eventos</p>
<p>Podrás seguir la carrera desde las diferentes pantallas y aplicaciones que harán que no te pierdas a tu corredor favorito y puedas correr contra él dentro de nuestros puestos de animación, haciendo esto más animado, entretenido y sobretodo alcanzable para todo tipo de personas, dependiendo de su forma física, edad ...</p>
<br>
<a href="{{ route('usuarios.registrarse') }}">Registrarse</a>
<a href="{{ route('usuarios.inicio') }}">Iniciar Sesión</a>
</body>
</html>
