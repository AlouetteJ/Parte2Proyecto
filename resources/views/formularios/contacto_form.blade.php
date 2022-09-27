<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Contacto</title>

        <!-- Estilo css y scrip de js
        <link rel=" " href=" " >
        <script src=" "></script>
        -->
    </head>
    <body>
        <h2>Contactame</h2> ¿Tienes alguna pregunta?
        <p> Envia tu mensaje en el formulario debajo y me contactare contigo lo mas pronto posible. </p>
        <form method="post" id="form_reusable" action=" ">
            @csrf
            <div class="grupo_form">
                <label for="nombre"> Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}"><br>
                @error('nombre')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="correo"> Correo:</label>
                <input type="email" class="form-control" id="correo" name="correo" value="{{old('correo')}}"><br>
                @error('correo')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="mensaje"> Mensaje:</label><br>
                <textarea class="form-control" type="textarea" name="mensaje" id="mensaje" placeholder="Tu mensaje aqui" maxlength="6000" rows="7">{{old('mensaje')}}</textarea>
                @error('mensaje')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs">Enviar &rarr;</button>
        </form>
    </body>
</html>