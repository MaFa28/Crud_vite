<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

        @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.min.js'])

    </head>

    <body>


        <h1>Veterinaria</h1><br>

        <h2>Listado de Citas</h2><br>


        <table >
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Tipo de Mascota</th>
                <th>Raza</th>
                <th>Comentario</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @foreach ($citas as $cita)
                <tr>
                    <td>
                        <a href="/citas/{{ $cita->id }}">
                        {{ $cita->id }}
                        </a>
                    </td>

                    <td>{{ $cita->nombre }}</td>
                    <td>{{ $cita->correo }}</td>
                    <td>{{ $cita->telefono }}</td>
                    <td>{{ $cita->tipomascota }}</td>
                    <td>{{ $cita->raza }}</td>
                    <td>{{ $cita->comentario }}</td>

                    <td>
                        <a href="/citas/{{ $cita->id }}/edit">Editar</a>
                    </td>

                    <td>

                        <form action="/citas/{{ $cita->id }}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>

                    </td>
                </tr>
            @endforeach
        </table>

        <br>

        <div>
            <a href="/citas/create">Crear nueva cita</a>
        </div>

        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>


    </body>
</html>
