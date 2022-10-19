<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Citas</title>
        @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.min.js'])
    </head>



    <body>

        <link rel="stylesheet" href="estilos.css">

        <form action="/citas/{{ $cita->id }}" method="POST">

            @csrf
            @method('patch')

            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="Nombre" value="{{ old('nombre') ?? $cita->nombre }}">
            @error('nombre')
                <i>{{ $message }}</i>
            @enderror
            <br>

            <label for="correo"">Correo: </label>
            <input type="email" name="correo" id="mail" value="{{ $cita->correo }}">
            @error('correo')
                <i>{{ $message }}</i>
            @enderror
            <br>

            <label for="telefono">Telefono</label>
            <input type="text" name="telefono" id="Telefono" value="{{ $cita->telefono  }}">
            @error('Telefono')
                <i>{{ $message }}</i>
            @enderror
            <br>

            <label for="tipomascota">Tipo de mascota</label>
            <input type="text" name="tipomascota" id="Tipomascota" value="{{ $cita->tipomascota }}">
            @error('tipomascota')
                <i>{{ $message }}</i>
            @enderror
            <br>

            <label for="raza">Raza</label>
            <input type="text" name="raza" id="Raza" value="{{ $cita->raza }}">
            @error('raza')
                <i>{{ $message }}</i>
            @enderror
            <br>

            <label for="comentario"">Comentario:</label><br>
            <textarea name="comentario"  rows="6" cols="0">{{ $cita->comentario  }}</textarea>
            @error('comentario')
                <i>{{ $message }}</i>
            @enderror
            <br>
            <input type="submit" value="Enviar">

        </form>


        <br>

        <div>
            <a href="/citas">Regresar</a>
        </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>


            </div>

        @endif

    </body>
</html>
