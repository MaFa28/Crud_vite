<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Citas</title>
    </head>
    <style>
        body{
        background-color: #00DBDE;
        background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);
        }

            input[type="text"], select{
            width: 60%;
            padding: 12px 20px;
            margin: 8px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
             }

             input[type="email"], select{
            width: 60%;
            padding: 12px 20px;
            margin: 8px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
             }

             textarea {
                width: 60%;
                height: 150px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                resize: none;
                }

                input[type=button], input[type=submit], input[type=reset] {
                    background-color: #FC00FF;
                    border: none;
                    color: white;
                    padding: 16px 32px;
                    text-decoration: none;
                    margin: 4px 2px;
                    cursor: pointer;
                    }

    </style>

    <body>



        <form action="/citas" method="POST">


                @csrf

                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="Nombre" value="{{ old('nombre') }}">
                @error('nombre')
                    <i>{{ $message }}</i>
                @enderror
                <br>

                <label for="correo"">Correo: </label>
                <input type="email" name="correo" id="mail" value="{{ old('correo') }}">
                @error('correo')
                    <i>{{ $message }}</i>
                @enderror
                <br>

                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" id="Telefono" value="{{ old('telefono') }}">
                @error('telefono')
                        <i>{{ $message }}</i>
                @enderror
                <br>

                <label for="tipomascota">Tipo de mascota</label>
                <input type="text" name="tipomascota" id="Tipomascota" value="{{ old('tipomascota') }}">
                @error('tipomascota')
                    <i>{{ $message }}</i>
                @enderror
                <br>

                <label for="raza">Raza</label>
                <input type="text" name="raza" id="Raza" value="{{ old('raza') }}">
                @error('raza')
                        <i>{{ $message }}</i>
                @enderror
                <br>

                <label for="comentario"">Comentario: </label><br>
                <textarea name="comentario"  rows="6" cols="0" value="{{ old('comentario') }}"></textarea>
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


    </body>
</html>
