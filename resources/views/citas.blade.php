<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Citas</title>
        @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.min.js'])

    </head>


    <body>

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
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    <div class="col-12">
                        <a href="/citas">Regresar</a>
                    </div>

            </form>



    </body>
</html>
