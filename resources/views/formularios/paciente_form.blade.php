<x-plantilla>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top mb-5" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/inicio">Psicoterapeuta</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/inicio">Inicio</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><x-boton_salida></x-boton_salida></li>
                </ul>
            </div>
        </div>
    </nav><br><br><br><br><br>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
        
    <div class="container">
        <form id="form_reusable" method="POST" action="/paciente" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-25">
                    <label for="nombre"> Nombre(s):</label>
                </div>
                <div class="col-75">
                    <input type="text" class="control_form" id="nombre" name="nombre" value="{{old('nombre')}}"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="apellidos"> Apellido(s):</label>                 
                </div>
                <div class="col-75">
                    <input type="text" class="control_form" id="apellidos" name="apellidos" value="{{old('apellidos')}}"><br>
                </div>
            </div> 

            <div class="row">
                <div class="col-25">
                    <label for="nacimiento"> Fecha de nacimiento:</label>
                </div>
                <div class="col-75">
                    <input type="date" class="control_form" id="nacimiento" name="nacimiento" min="1923-01-01" max="2004-01-01" value="{{old('nacimiento')}}"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="correo"> Correo:</label>
                </div>
                <div class="col-75">
                    <input type="email" class="control_form" id="correo" name="correo" value="{{old('correo')}}"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="telefono"> Telefono:</label>
                </div>
                <div class="col-75">
                    <input type="text" class="control_form" id="telefono" name="telefono" value="{{old('telefono')}}"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="genero"> Genero:</label>
                </div>
                <div class="col-75">
                    <label for="hombre"> Hombre</label>
                    <input type="radio" class="control_form" id="hombre" name="genero" value="Hombre">
                    <label for="mujer"> Mujer</label>
                    <input type="radio" class="control_form" id="mujer" name="genero" value="Mujer">
                    <label for="otro"> Otro</label>
                    <input type="radio" class="control_form" id="otro" name="genero" value="Otro" checked><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="pronombre"> Pronombre:</label>
                </div>
                <div class="col-75">
                    <input type="text" class="control_form" id="pronombre" name="pronombre" value="{{old('pronombre')}}"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="orientacion"> Orientacion:</label>
                </div>
                <div class="col-75">
                    <input type="text" class="control_form" id="orientacion" name="orientacion" value="{{old('orientacion')}}"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="ocupacion"> Ocupacion:</label>
                </div>
                <div class="col-75">
                    <input type="text" class="control_form" id="ocupacion" name="ocupacion" value="{{old('ocupacion')}}"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="edocivil"> Estado Civil:</label>
                </div>
                <div class="col-75">
                    <select class="control_form" id="edocivil" name="edocivil" value="{{old('edocivil')}}">
                        <option value="Soltero">Soltero(a)</option>
                        <option value="Casado" selected>Casado(a)</option>
                        <option value="Viudo">Viudo(a)</option>
                        <option value="Union Libre">Unión libre</option>
                        <option value="Divorciado">Divorciado(a)</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="nacionalidad"> Nacionalidad:</label>
                </div>
                <div class="col-75">
                    <input type="text" class="control_form" id="nacionalidad" name="nacionalidad" value="{{old('nacionalidad')}}"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="resactual"> Residencia Actual:</label>
                </div>
                <div class="col-75">
                    <input type="text" class="control_form" id="resactual" name="resactual" value="{{old('resactual')}}"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="resanterior"> Residencia Anterior:</label>
                </div>
                <div class="col-75">
                    <input type="text" class="control_form" id="resanterior" name="resanterior" value="{{old('resanterior')}}"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="estudios"> Estudios:</label>
                </div>
                <div class="col-75">
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
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="ine"> Fotografias ine por dos lados:</label>
                </div>
                <div class="col-75">
                    <input type="file" class="control_form" id="" name="archivo" accept="image/png, image/jpeg, image/jpg"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="motivo"> Motivo de consulta:</label>
                </div>
                <div class="col-75">
                    <textarea class="control_form" type="textarea" name="motivo" id="motivo" placeholder="¿Cual es el motivo para asistir a terapia?" maxlength="6000" rows="7">{{old('motivo')}}</textarea><br>
                </div>

            <div class="row">
                <button type="submit" class="boton_enviar" id="boton_historial">Enviar &rarr;</button>
            </div>
        </form>
    </div>
</x-plantilla>