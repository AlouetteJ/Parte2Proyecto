<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario</title>

        <!-- Estilo css y scrip de js
        <link rel=" " href=" " >
        <script src=" "></script>
        -->
    </head>
    <body>
        @if(session('message'))
            <div class="alerta" >{{session('message')}}</div>
        @endif
        <form id="form_reusable" method="post" action="/paciente">
            @csrf
            <div class="grupo_form">
                <label for="nombre"> Nombre(s):</label>
                <input type="text" class="control_form" id="nombre" name="nombre" value="{{old('nombre')}}"><br>
                @error('nombre')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="apellidos"> Apellido(s):</label>
                <input type="text" class="control_form" id="apellidos" name="apellidos" value="{{old('apellidos')}}"><br>
                @error('apellidos')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="edad"> Edad:</label>
                <input type="number" min='18' max='100' class="control_form" id="edad" name="edad" value="{{old('edad')}}"><br>
                @error('edad')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="nacimiento"> Fecha de nacimiento:</label>
                <input type="date" class="control_form" id="nacimiento" name="nacimiento" min="1923-01-01" max="2004-01-01" value="{{old('nacimiento')}}"><br>
                @error('nacimiento')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="correo"> Correo:</label>
                <input type="email" class="control_form" id="correo" name="correo" value="{{old('correo')}}"><br>
                @error('correo')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="telefono"> Telefono:</label>
                <input type="tel" class="control_form" id="telefono" name="telefono" value="{{old('telefono')}}" pattern="[0-9]{10}"><br>
                @error('telefono')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="genero"> Genero:</label>
                <label for="hombre"> Hombre</label>
                <input type="radio" class="control_form" id="hombre" name="genero" value="Hombre">
                <label for="mujer"> Mujer</label>
                <input type="radio" class="control_form" id="mujer" name="genero" value="Mujer">
                <label for="otro"> Otro</label>
                <input type="radio" class="control_form" id="otro" name="genero" value="Otro" checked><br>
                @error('genero')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="pronombre"> Pronombre:</label>
                <input type="text" class="control_form" id="pronombre" name="pronombre" value="{{old('pronombre')}}"><br>
                @error('pronombre')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="orientacion"> Orientacion:</label>
                <input type="text" class="control_form" id="orientacion" name="orientacion" value="{{old('orientacion')}}"><br>
                @error('orientacion')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="ocupacion"> Ocupacion:</label>
                <input type="text" class="control_form" id="ocupacion" name="ocupacion" value="{{old('ocupacion')}}"><br>
                @error('ocupacion')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="edocivil"> Estado Civil:</label>
                <select class="control_form" id="edocivil" name="edocivil" value="{{old('edocivil')}}">
                    <option value="Soltero">Soltero(a)</option>
                    <option value="Casado" selected>Casado(a)</option>
                    <option value="Viudo">Viudo(a)</option>
                    <option value="Union Libre">Unión libre</option>
                    <option value="Divorciado">Divorciado(a)</option>
                </select><br>
                @error('edocivil')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="nacionalidad"> Nacionalidad:</label>
                <input type="text" class="control_form" id="nacionalidad" name="nacionalidad" value="{{old('nacionalidad')}}"><br>
                @error('nacionalidad')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="resactual"> Residencia Actual:</label>
                <input type="text" class="control_form" id="resactual" name="resactual" value="{{old('resactual')}}"><br>
                @error('resactual')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="resanterior"> Residencia Anterior:</label>
                <input type="text" class="control_form" id="resanterior" name="resanterior" value="{{old('resanterior')}}"><br>
                @error('resanterior')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="estudios"> Estudios:</label>
                <select class="control_form" id="estudios" name="estudios" value="{{old('estudios')}}">
                    <option value="Primaria incompleta">Primaria incompleta</option>
                    <option value="Primaria terminada">Primaria terminada</option>
                    <option value="Secundaria incompleta">Secundaria incompleta</option>
                    <option value="Secundaria terminada">Secundaria terminada</option>
                    <option value="Prepa incompleta">Prepa incompleta</option>
                    <option value="Prepa terminada">Prepa terminada</option>
                    <option value="Licenciatura incompleta">Licenciatura incompleta</option>
                    <option value="Licenciatura terminada">Licenciatura terminada</option>
                    <option value="Maestria">Maestria</option>
                    <option value="Doctorado">Doctorado</option>
                </select><br>
                @error('estudios')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="ine"> Fotografias ine por dos lados:</label><br>
                <input type="file" class="control_form" id="ine" name="ine" accept="image/png, image/jpeg, image/jpg"><br>
                @error('ine')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="motivo"> Motivo de consulta:</label><br>
                <textarea class="control_form" type="textarea" name="motivo" id="motivo" placeholder="¿Cual es el motivo para asistir a terapia?" maxlength="6000" rows="7">{{old('motivo')}}</textarea><br>
                @error('motivo')
                    <i>{{$message}}</i>
                @enderror
            </div>

            <button type="submit" class="boton_enviar" id="boton_historial">Enviar &rarr;</button>
        </form>
    </body>
</html>