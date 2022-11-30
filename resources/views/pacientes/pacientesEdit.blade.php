<x-plantilla>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top mb-5" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/">Psicoterapeuta</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/">Inicio</a></li>
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

    <form id="form_reusable" method="post" action="/paciente/{{$paciente->id}}">
        @csrf
        @method('patch')
        <div class="grupo_form">
            <label for="nombre"> Nombre(s):</label>
            <input type="text" class="control_form" id="nombre" name="nombre" value="{{old('nombre') ?? $paciente->nombre}}"><br>
        </div>
        <div class="grupo_form">
            <label for="apellidos"> Apellido(s):</label>
            <input type="text" class="control_form" id="apellidos" name="apellidos" value="{{old('apellidos') ?? $paciente->apellidos }}"><br>
        </div>

        <div class="grupo_form">
            <label for="nacimiento"> Fecha de nacimiento:</label>
            <input type="date" class="control_form" id="nacimiento" name="nacimiento" min="1923-01-01" max="2004-01-01" value="{{old('nacimiento') ?? $paciente->nacimiento}}"><br>
        </div>
        <div class="grupo_form">
            <label for="correo"> Correo:</label>
            <input type="email" class="control_form" id="correo" name="correo" value="{{old('correo') ?? $paciente->correo}}"><br>
        </div>
        <div class="grupo_form">
            <label for="telefono"> Telefono:</label>
            <input type="text" class="control_form" id="telefono" name="telefono" value="{{old('telefono')?? $paciente->telefono}}"><br>
        </div>
        <div class="grupo_form">
            <label for="genero"> Genero:</label>
            <label for="hombre"> Hombre</label>
            <input type="radio" class="control_form" id="hombre" name="genero" value="Hombre" {{old('genero') ?? $paciente->genero == 'Hombre'?'checked':''}}>
            <label for="mujer"> Mujer</label>
            <input type="radio" class="control_form" id="mujer" name="genero" value="Mujer" {{old('genero') ?? $paciente->genero == 'Mujer'?'checked':''}}>
            <label for="otro"> Otro</label>
        </div>
        <div class="grupo_form">
            <label for="pronombre"> Pronombre:</label>
            <input type="text" class="control_form" id="pronombre" name="pronombre" value="{{old('pronombre') ?? $paciente->pronombre}}"><br>
        </div>
        <div class="grupo_form">
            <label for="orientacion"> Orientacion:</label>
            <input type="text" class="control_form" id="orientacion" name="orientacion" value="{{old('orientacion') ?? $paciente->orientacion}}"><br>
        </div>
        <div class="grupo_form">
            <label for="ocupacion"> Ocupacion:</label>
            <input type="text" class="control_form" id="ocupacion" name="ocupacion" value="{{old('ocupacion') ?? $paciente->ocupacion}}"><br>
        </div>
        <div class="grupo_form">
            <label for="edocivil"> Estado Civil:</label>
            <select class="control_form" id="edocivil" name="edocivil" value="{{old('edocivil')}}">
                <option value="Soltero" {{old('edocivil') ?? $paciente->edocivil == 'Soltero'?'selected':''}}>Soltero(a)</option>
                <option value="Casado" {{old('edocivil') ?? $paciente->edocivil == 'Casado'?'selected':''}}>Casado(a)</option>
                <option value="Viudo" {{old('edocivil') ?? $paciente->edocivil == 'Viudo'?'selected':''}}>Viudo(a)</option>
                <option value="Union Libre" {{old('edocivil') ?? $paciente->edocivil == 'Union Libre'?'selected':''}}>Unión libre</option>
                <option value="Divorciado" {{old('edocivil') ?? $paciente->edocivil == 'Divorciado'?'selected':''}}>Divorciado(a)</option>
            </select><br>
        </div>
        <div class="grupo_form">
            <label for="nacionalidad"> Nacionalidad:</label>
            <input type="text" class="control_form" id="nacionalidad" name="nacionalidad" value="{{old('nacionalidad') ?? $paciente->nacionalidad }}"><br>
        </div>
        <div class="grupo_form">
            <label for="resactual"> Residencia Actual:</label>
            <input type="text" class="control_form" id="resactual" name="resactual" value="{{old('resactual') ?? $paciente->resactual }}"><br>
        </div>
        <div class="grupo_form">
            <label for="resanterior"> Residencia Anterior:</label>
            <input type="text" class="control_form" id="resanterior" name="resanterior" value="{{old('resanterior') ?? $paciente->resanterior }}"><br>
        </div>
        <div class="grupo_form">
            <label for="estudios"> Estudios:</label>
            <select class="control_form" id="estudios" name="estudios" value="{{old('estudios')}}">
                <option value="Primaria incompleta" {{old('estudios') ?? $paciente->estudios == 'Primaria incompleta'?'selected':''}}>Primaria incompleta</option>
                <option value="Primaria terminada" {{old('estudios') ?? $paciente->estudios == 'Primaria terminada'?'selected':''}}>Primaria terminada</option>
                <option value="Secundaria incompleta" {{old('estudios') ?? $paciente->estudios == 'Secundaria incompleta'?'selected':''}}>Secundaria incompleta</option>
                <option value="Secundaria terminada" {{old('estudios') ?? $paciente->estudios == 'Secundaria terminada'?'selected':''}}>Secundaria terminada</option>
                <option value="Prepa incompleta" {{old('estudios') ?? $paciente->estudios == 'Prepa incompleta'?'selected':''}}>Prepa incompleta</option>
                <option value="Prepa terminada" {{old('estudios') ?? $paciente->estudios == 'Prepa terminada'?'selected':''}}>Prepa terminada</option>
                <option value="Licenciatura incompleta" {{old('estudios') ?? $paciente->estudios == 'Licenciatura incompleta'?'selected':''}}>Licenciatura incompleta</option>
                <option value="Licenciatura terminada" {{old('estudios') ?? $paciente->estudios == 'Licenciatura terminada'?'selected':''}}>Licenciatura terminada</option>
                <option value="Maestria" {{old('estudios') ?? $paciente->estudios == 'Maestria'?'selected':''}}>Maestria</option>
                <option value="Doctorado" {{old('estudios') ?? $paciente->estudios == 'Doctorado'?'selected':''}}>Doctorado</option>
            </select><br>
        </div>
        <div class="grupo_form">
            <label for="ine"> Fotografias ine por dos lados:</label><br>
            <input type="file" class="control_form" id="ine" name="ine" accept="image/png, image/jpeg, image/jpg"><br>
        </div>
        <div class="grupo_form">
            <label for="motivo"> Motivo de consulta:</label><br>
            <textarea class="control_form" type="textarea" name="motivo" id="motivo" placeholder="¿Cual es el motivo para asistir a terapia?" maxlength="6000" rows="7">{{old('motivo') ?? $paciente->motivo }}</textarea><br>
        </div>

        <button type="submit" class="boton_enviar" id="boton_historial">Enviar &rarr;</button>
    </form>
</x-plantilla>