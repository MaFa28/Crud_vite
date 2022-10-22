<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

        @vite(['resources/css/bootstrap.min.css', 'resources/js/popper.min.js','resources/js/bootstrap.min.js'])

    </head>

    <body>
        <!-- <div class="container"--->
            <nav class="navbar navbar-expand-sm navbar-dark bg-black">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toogle navigation">
                        <span class="navbar-toggler-icon">

                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="/citas">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="/citas/create">Nueva cita</a></li>

                        </ul>
                    </div>
                </div>
            </nav>
            <br><br><br>


            <div class="position-relative">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <h1 class="display-1">Veterinaria</h1><br><br><br>
                </div>
            </div>



        <img src="/imagenes/mascotas1.jpg" class="img-fluid" alt="mascotas" />

        <h2>Listado de Citas</h2><br>


        <div class="table-responsive-xxl">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
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
                        <td>{{ $cita->user->name }}</td>
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
        </div>


        <br>

        <div>
            <a class="btn btn-primary" href="/citas/create" role="button">Crear nueva cita</a>
        </div>



    </body>
</html>
