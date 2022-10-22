<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Show</title>
        @vite(['resources/css/bootstrap.min.css', 'resources/js/popper.min.js','resources/js/bootstrap.min.js'])

    </head>



    <body>



        <h1>Detalles de la cita</h1>

        <h2>{{ $cita->nombre }}</h2>

        <a href="/citas">Regresar</a>

    </body>
</html>
