<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Show</title>
    </head>

    <style>

        body{
        background-color: #00DBDE;
        background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);
            }

    </style>

    <body>

        <link rel="stylesheet" href="estilos.css">

        <h1>Detalles de la cita</h1>

        <h2>{{ $cita->nombre }}</h2>

        <a href="/citas">Regresar</a>

    </body>
</html>
