<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historia de Miguel Ángel - Corre Y Vuela</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .container {
            max-width: 1000px;
            width: 90%;
            background-color: #ffffff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 15px;
            overflow: hidden;
            margin: 40px 0;
        }

        header {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 30px 20px;
        }

        h1 {
            margin: 0;
            font-size: 2.2em;
            font-weight: 700;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            padding: 30px;
        }

        article {
            flex: 2;
            min-width: 300px;
            padding-right: 30px;
        }

        aside {
            flex: 1;
            min-width: 200px;
            background-color: #f0f3f6;
            padding: 20px;
            border-radius: 10px;
        }

        .article-image {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        blockquote {
            font-style: italic;
            border-left: 4px solid #3498db;
            padding-left: 20px;
            margin: 20px 0;
            color: #555;
        }

        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }

        ul, ol {
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        a.back-link {
            display: inline-block;
            margin: 20px 0;
            padding: 12px 24px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a.back-link:hover {
            background-color: #2980b9;
        }

        @media (max-width: 768px) {
            .content {
                flex-direction: column;
            }

            article {
                padding-right: 0;
            }

            aside {
                margin-top: 30px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <h1>Superación en la San Silvestre Olvereña: La Historia de Miguel Ángel</h1>
    </header>

    <div class="content">
        <article>
            <img src="Miguel.png" alt="Miguel Ángel" class="article-image">

            <p>La San Silvestre Olvereña del 31 de diciembre de 2024 quedará grabada en la memoria de todos los
                participantes y organizadores de Corre Y Vuela por la inspiradora historia de Miguel Ángel
                Rodríguez, un corredor con movilidad reducida que desafió todas las expectativas.</p>

            <blockquote>"Quería demostrar que los límites están en la mente, no en el cuerpo"</blockquote>

            <p>Esta experiencia transformó profundamente la perspectiva de Corre Y Vuela, así como la de los
                deportistas y sus familias. Inspirados por la valentía de Miguel Ángel, muchos atletas
                comprendieron que, sin importar cuán difíciles sean las circunstancias, siempre es posible
                superar los obstáculos y perseguir sus pasiones.</p>

            <p>Su historia no solo inspiró a otros corredores con discapacidades, sino que también tocó el
                corazón de aquellos que enfrentaban desafíos personales de cualquier tipo. Las familias
                presentes en la carrera vieron en Miguel un ejemplo vivo de resiliencia.</p>

            <p>El impacto de Miguel Ángel se extendió más allá de la línea de meta, convirtiéndose en un símbolo
                de superación para toda la comunidad.</p>
        </article>

        <aside>
            <h2>Desafíos superados</h2>
            <ul>
                <li>Volver a correr tras perder su pierna derecha</li>
                <li>Entrenamiento intensivo con prótesis especial</li>
                <li>Adaptación a terreno irregular</li>
            </ul>

            <h2>Impacto en Corre Y Vuela</h2>
            <ol>
                <li>Inspiración para eventos inclusivos</li>
                <li>Colaboración con asociaciones de discapacidad</li>
                <li>Nuevo estándar de inclusión deportiva</li>
            </ol>

            <h2>Categorías</h2>
            <ul>
                <li><a href="#">Historias de Superación</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Sostenibilidad</a></li>
            </ul>
        </aside>
    </div>
</div>

<a href="{{ route('usuarios.index') }}" class="back-link">Volver al inicio</a>
</body>
</html>
