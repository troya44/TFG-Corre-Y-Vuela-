<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corre Y Vuela - Carreras</title>
</head>
<body>
<h1>Listado de carreras</h1>
<div>
    <img src="desafioNazari.png" alt="Desafío Nazarí">
    <h1>Desafío Nazarí</h1>
    <h3>Localidad: Granada</h3>
    <h3>29/03/2025</h3>
    <h3>09:00</h3>
    <a href="{{ route('usuarios.desafioNazari') }}">Más información e inscripciones</a>
</div>


<div>
    <img src="desafioPueblosBlancos.png" alt="Desafío Pueblos Blancos">
    <h1>Desafío Pueblos Blancos</h1>
    <h3>Localidad: Olvera</h3>
    <h3>03/05/2025</h3>
    <h3>09:00</h3>
    <a href="{{ route('usuarios.desafioPueblosBlancos') }}">Más información e inscripciones</a>
</div>

<div>
    <img src="cordobaBikeRace.png" alt="Cordoba Bike Race">
    <h1>Córdoba Bike Race</h1>
    <h3>Localidad: Córdoba</h3>
    <h3>14/06/2025</h3>
    <h3>09:00</h3>
    <a href="{{ route('usuarios.cordobaBikeRace') }}">Más información e inscripciones</a>
</div>

<a href="{{ route('usuarios.inicio') }}">Volver al inicio</a>
</body>
</html>
