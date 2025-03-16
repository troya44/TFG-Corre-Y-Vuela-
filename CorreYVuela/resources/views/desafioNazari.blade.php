<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corre Y Vuela - Carreras - Desafío Nazarí</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1, h2, h3 {
            color: #2c3e50;
        }
        h1 {
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .main-content {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        ul {
            padding-left: 20px;
        }
        li {
            margin-bottom: 10px;
        }
        strong {
            color: #2980b9;
        }
        form {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<h1>Desafío Nazarí</h1>
<img src="{{ asset('desafioNazari.png') }}" alt="Desafío Nazarí">

<div class="main-content">
    <h3>El Desafío Nazarí es una emocionante carrera de bicicleta de montaña que tendrá lugar el 29 de marzo de 2025 a las 09:00 en la histórica ciudad de Granada. Esta prueba forma parte del prestigioso Desafío Andalucía BTT, una competición por etapas que se disputará del 10 al 17 de mayo de 2025.</h3>

    <h2>Características de la carrera</h2>
    <ul>
        <li><strong>Fecha:</strong> 29 de marzo de 2025</li>
        <li><strong>Hora de inicio:</strong> 09:00</li>
        <li><strong>Ubicación:</strong> Granada, cuna del arte nazarí y hogar de la majestuosa Alhambra</li>
        <li><strong>Tipo de bicicletas:</strong> Se permiten bicicletas de montaña, gravel y eléctricas</li>
    </ul>

    <h2>Categorías</h2>
    <p>El Desafío Nazarí acoge a ciclistas de todos los niveles, con categorías que incluyen:</p>
    <ul>
        <li>Cicloturista</li>
        <li>Sub-23</li>
        <li>Élite</li>
        <li>Máster 30, 40, 50 y 60 (masculino y femenino)</li>
    </ul>

    <h2>Recorrido</h2>
    <p>Los participantes se enfrentarán a un recorrido técnico que pondrá a prueba sus habilidades mientras disfrutan de los impresionantes paisajes de Granada. La ruta atravesará lugares emblemáticos, permitiendo a los ciclistas experimentar de cerca el rico legado nazarí de la región. Aunque los detalles específicos del recorrido no están disponibles, se espera que incluya una mezcla de terrenos desafiantes, incluyendo senderos técnicos y subidas exigentes que son característicos de la zona.</p>

    <h2>Por qué participar</h2>
    <ul>
        <li><strong>Desafío único:</strong> Ponte a prueba en un recorrido técnico diseñado para ciclistas de todos los niveles.</li>
        <li><strong>Escenario histórico:</strong> Pedalea por los mismos senderos que una vez recorrieron los sultanes nazaríes, con vistas impresionantes de la Alhambra y el Albaicín.</li>
        <li><strong>Experiencia cultural:</strong> Combina tu pasión por el ciclismo con la oportunidad de explorar el fascinante patrimonio de Granada, una ciudad conocida por su rica historia y arquitectura única.</li>
        <li><strong>Preparación para el Desafío Andalucía:</strong> Utiliza esta carrera como entrenamiento para la competición por etapas de mayo, que recorrerá varias provincias andaluzas.</li>
    </ul>

    <h2>Preparación y logística</h2>
    <p><strong>Alojamiento:</strong> Granada ofrece una amplia gama de opciones de alojamiento. Se recomienda reservar con antelación, especialmente si planeas quedarte para explorar la ciudad después de la carrera.</p>
    <p><strong>Equipamiento:</strong> Asegúrate de que tu bicicleta esté en perfectas condiciones. Considera llevar repuestos básicos y herramientas.</p>
    <p><strong>Entrenamiento:</strong> Adapta tu entrenamiento al terreno montañoso de Granada. Incluye sesiones de subidas y práctica en senderos técnicos.</p>
    <p><strong>Climatología:</strong> A finales de marzo, el tiempo en Granada puede ser variable. Prepárate para posibles temperaturas frescas al inicio de la mañana y lleva ropa adecuada.</p>

    <h2>Actividades complementarias</h2>
    <p>Aprovecha tu visita para explorar Granada:</p>
    <ul>
        <li>Visita la Alhambra y el Generalife, joyas de la arquitectura nazarí.</li>
        <li>Pasea por el barrio del Albaicín, Patrimonio de la Humanidad.</li>
        <li>Disfruta de la gastronomía local en las famosas teterías y tabernas de tapas.</li>
    </ul>

    <p>El Desafío Nazarí no es solo una carrera, sino una oportunidad única para combinar deporte, historia y cultura en uno de los entornos más espectaculares de España. ¡No pierdas la oportunidad de ser parte de esta aventura ciclista en el corazón de Andalucía!</p>
</div>

<form>
    <h2>Inscripciones</h2>
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" required>
    <label for="apellidos">Apellidos</label>
    <input type="text" id="apellidos" required>
    <label for="dni">DNI</label>
    <input type="text" id="dni" required>
    <label for="fecha_nacimiento">Fecha de nacimiento</label>
    <input type="date" id="fecha_nacimiento" required>
    <input type="submit" value="Inscribirse">
</form>
</body>
</html>
