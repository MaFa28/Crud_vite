<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Citas</title>
        @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.min.js'])

    </head>


    <body>

        <nav class="navbar navbar-expand-sm navbar-dark bg-black">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toogle navigation">
                    <span class="navbar-toggler-icon">

                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/citas">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="/citas/create">Nueva cita</a></li>
                        <li class="nav-item"><a class="nav-link" href="/citas">Regresar</li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="position-relative">
            <div class="position-absolute top-50 start-50">
                <form action="/citas" method="POST">


                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre: </label>
                        <input type="text" name="nombre" class="form-control" id="Nombre" value="{{ old('nombre') }}">
                    </div>
                    @error('nombre')
                        <i>{{ $message }}</i>
                    @enderror
                    <br>

                    <div class="mb-3">
                    <label for="correo" class="form-label">Correo: </label>
                    <input type="email" name="correo" class="form-control" id="mail" value="{{ old('correo') }}">
                    </div>
                    @error('correo')
                        <i>{{ $message }}</i>
                    @enderror
                    <br>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" name="telefono" class="form-control" id="Telefono" value="{{ old('telefono') }}">
                    </div>
                    @error('telefono')
                            <i>{{ $message }}</i>
                    @enderror
                    <br>

                    <div class="mb-3">
                        <label for="tipomascota" class="form-label">Tipo de mascota</label>
                        <input type="text" name="tipomascota" class="form-control" id="Tipomascota" value="{{ old('tipomascota') }}">
                    </div>

                    @error('tipomascota')
                        <i>{{ $message }}</i>
                    @enderror
                    <br>

                    <div>
                        <label for="raza" class="form-label">Raza</label>
                        <input type="text" name="raza"  class="form-control" id="Raza" value="{{ old('raza') }}">
                    </div>
                    @error('raza')
                            <i>{{ $message }}</i>
                    @enderror
                    <br>

                    <div>
                        <label for="comentario" class="form-label">Comentario: </label><br>
                        <textarea name="comentario" class="form-control" rows="6" cols="0" value="{{ old('comentario') }}"></textarea>
                    </div>
                    @error('comentario')
                            <i>{{ $message }}</i>
                    @enderror
                    <br>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary position-relative">Enviar</button>
                    </div>


            </form>
            </div>
        </div>


    </body>
</html>
