<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corre Y Vuela - Inicio</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f7f6;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        p {
            text-align: justify;
        }
        .story-preview {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
            margin-top: 20px;
        }
        .story-preview img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .blog-entry-tag {
            background-color: #3498db;
            color: #fff;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8em;
            margin-bottom: 10px;
            display: inline-block;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<h1>Bienvenidos a Corre Y Vuela</h1>

<h2>¿Quiénes somos?</h2>
<p>
    Me presento como Guillermo Troya Albarrán, fundador de Corre Y Vuela. Soy un entusiasta de la informática y,
    especialmente, del deporte, con un interés particular en el ciclismo.
</p>
<p>
    La creación de esta empresa surgió de mi pasión por los deportes y la naturaleza. Identifiqué una oportunidad única
    para organizar eventos al aire libre que combinaran la actividad física con espectáculos audiovisuales innovadores.
    Nuestro objetivo es proporcionar una experiencia enriquecedora tanto para los participantes como para los
    espectadores.
</p>
<p>
    En Corre Y Vuela, nos esforzamos por ofrecer a los corredores no solo paisajes impresionantes, sino
    también momentos memorables, como conciertos a mitad de carrera, que sirven como motivación adicional para alcanzar
    la meta. Para el público, hemos diseñado una experiencia inmersiva que permite seguir la carrera desde diversos
    puntos estratégicos.
</p>
<p>
    Además, hemos implementado tecnología de vanguardia en nuestras instalaciones, permitiendo a
    los espectadores disfrutar de una experiencia virtual del recorrido en nuestras carpas y puestos distribuidos a lo
    largo del evento. Esta innovación busca acercar la emoción de la carrera a todos los asistentes, independientemente
    de su ubicación.
</p>
<p>
    Nuestro compromiso es crear eventos deportivos que sean tanto desafiantes como entretenidos,
    fusionando el deporte con la tecnología y el espectáculo para ofrecer una experiencia única en su tipo.
</p>

<h2>Historias vividas en eventos de Corre Y Vuela</h2>
<div class="story-preview">
    <img src="Miguel.png" alt="Historia de Superación">
    <h3>Historias de Superación: Corredor con Discapacidad</h3>
    <p>En la edición de la San Silvestre Olvereña del año pasado, conocimos a Miguel Ángel, un corredor
        con movilidad reducida que completó el recorrido con una prótesis especial.</p>
    <a href="{{ route('usuarios.superacion') }}">Leer más</a>
</div>

<div>
<h1>Carreras</h1>
    <p>A continuación podrás ver el listado de carreras a las qur podrás apuntarte y disfrutar de nuestros eventos</p>
    <p>Nuestros eventos se realizan a nivel nacional, aunque actualmente nos encontramos solamente a nivel Andaluz</p>
    <a href="{{ route('usuarios.carreras') }}">Consultar Carreras</a>
</div>

<a href="{{ route('usuarios.portada') }}">Cerrar Sesión</a>
</body>
</html>
