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
                    <!-- <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Inicio</a></li>-->
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/inicio">Inicio</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#salir">Salir</a></li>
                </ul>
            </div>
        </div>
    </nav><br><br><br><br><br>
    @if(session('message'))
        <div class="alerta" >{{session('message')}}</div>
    @endif
    <form id="form_reusable" method="POST" action="/historial">
        @csrf
        <div class="grupo_form">
            <label for="motivos"> Motivo de consulta:</label><br>
            <textarea type="textarea" class="control_form" name="motivos" placeholder="Motivos de consulta" value="{{old('motivos')}}"></textarea>
            @error('motivos')
                <i>{{$message}}</i>
            @enderror
        </div>
        <fieldset>
            <legend>Media Afiliacion</legend>
            <div>
                <label for="peso"> Peso:</label>
                <input type="text" class="control_form" name="peso" value="{{old('peso')}}"><br>
                <label for="estatura"> Estatura:</label>
                <input type="text" class="control_form" name="estatura" value="{{old('estatura')}}"><br>
                <label for="complexion"> Complexion:</label>
                <input type="text" class="control_form" name="complexion" value="{{old('complexion')}}"><br>
                <label for="tez"> Tez:</label>
                <input type="text" class="control_form" name="tez" value="{{old('tez')}}"><br>
                <label for="alerta"> Estado de alerta:</label>
                <input type="text" class="control_form" name="alerta" value="{{old('alerta')}}"><br>
                <label for="marcha"> Marcha:</label>
                <input type="text" class="control_form" name="marcha" value="{{old('marcha')}}"><br><br>
            </div>
            <div>
                <label for="vestimenta"> Vestimenta:</label><br>
                <textarea type="textarea" class="control_form" name="vestimenta" placeholder="Vestimenta" value="{{old('vestimenta')}}"></textarea><br>
                <label for="accesorios"> Accesorios:</label><br>
                <textarea type="textarea" class="control_form" name="accesorios" placeholder="Accesorios" value="{{old('accesorios')}}"></textarea><br>
                <label for="cicatrices"> Cicatrices:</label><br>
                <textarea type="textarea" class="control_form" name="cicatrices" placeholder="Cicatrices" value="{{old('cicatrices')}}"></textarea><br>
                <label for="lesiones"> Lesiones:</label><br>
                <textarea type="textarea" class="control_form" name="lesiones" placeholder="Lesiones" value="{{old('lesiones')}}"></textarea><br>
                <label for="cabeza"> Cabeza:</label><br>
                <textarea type="textarea" class="control_form" name="cabeza" placeholder="Cabeza" value="{{old('cabeza')}}"></textarea><br>
                <label for="orejas"> Orejas:</label><br>
                <textarea type="textarea" class="control_form" name="orejas" placeholder="Orejas" value="{{old('orejas')}}"></textarea><br>
                <label for="ojos"> Ojos:</label><br>
                <textarea type="textarea" class="control_form" name="ojos" placeholder="Ojos" value="{{old('ojos')}}"></textarea><br>
                <label for="nariz"> Nariz:</label><br>
                <textarea type="textarea" class="control_form" name="nariz" placeholder="Nariz" value="{{old('nariz')}}"></textarea><br>
                <label for="boca"> Boca:</label><br>
                <textarea type="textarea" class="control_form" name="boca" placeholder="Boca" value="{{old('boca')}}"></textarea><br>
                <label for="cabello"> Cabello:</label><br>
                <textarea type="textarea" class="control_form" name="cabello" placeholder="Cabello" value="{{old('cabello')}}"></textarea><br>
                <label for="cejas"> Cejas:</label><br>
                <textarea type="textarea" class="control_form" name="cejas" placeholder="Cejas" value="{{old('cejas')}}"></textarea><br>
                <label for="mandibula"> Mandibula:</label><br>
                <textarea type="textarea" class="control_form" name="mandibula" placeholder="Mandibula" value="{{old('mandibula')}}"></textarea><br>
                <label for="cuello"> Cuello:</label><br>
                <textarea type="textarea" class="control_form" name="cuello" placeholder="Cuello" value="{{old('cuello')}}"></textarea><br>
                <label for="dientes"> Dientes:</label><br>
                <textarea type="textarea" class="control_form" name="dientes" placeholder="Dientes" value="{{old('dientes')}}"></textarea><br>
            </div>
        </fieldset>
        <fieldset>
            <legend>Familia</legend>
            <div>
                <label for="padre"> Padre:</label><input type="checkbox" name="padre" class="control_form" value="Si tiene">
                <label for="padre"> Finado:</label><input type="checkbox" name="padrevive" class="control_form" value="No"><br>
            </div>
            <div>
                <label for="madre"> Madre:</label><input type="checkbox" name="madre" class="control_form" value="Si tiene">
                <label for="madre"> Finado:</label><input type="checkbox" name="madrevive" class="control_form" value="No"><br>
            </div>
            <div>
                <label for="hermano"> Hermano:</label><input type="checkbox" name="hermano" class="control_form" value="Si tiene">
                <label for="hermano"> Cuantos:</label><input type="number" name="hermanos" min="1" max="20"><br>
            </div>
            <div>
                <label for="hermana"> Hermana:</label><input type="checkbox" name="hermana" class="control_form" value="Si tiene">
                <label for="hermana"> Cuantos:</label><input type="number" name="hermanas" min="1" max="20"><br>
            </div>
            <div>
                <label for="hijo"> Hijo:</label><input type="checkbox" name="hijo" class="control_form" value="Si tiene">
                <label for="hijo"> Cuantos:</label><input type="number" name="hijos" min="1" max="20"><br>
            </div>
            <div>
                <label for="hija"> Hija:</label><input type="checkbox" name="hija" class="control_form" value="Si tiene">
                <label for="hija"> Cuantos:</label><input type="number" name="hijas" min="1" max="20"><br>
            </div>
            <div>
                <label for="numerohijo"> Numero de hijo:</label>
                <input type="number" name="numerohijo" min="1" max="20"><br>
            </div>
            <div> 
                <label for="vive"> Con quienes vive:</label><br>
                <textarea type="text" class="control_form" name="vive" value="{{old('vive')}}"></textarea><br>
            </div>
        </fieldset>
        <fieldset>
            <legend>Antecedentes enfermedades</legend>
            <label for="enf_actuales"> Enfermedades actuales:</label><br>
            <label for="enf_actuales"> Diabetes:</label><input type="checkbox" name="enf_actuales" class="control_form" value="Diabetes"><br>
            <label for="enf_actuales"> Hipertension:</label><input type="checkbox" name="enf_actuales" class="control_form" value="Hipertension"><br>
            <label for="enf_actuales"> Cancer:</label><input type="checkbox" name="enf_actuales" class="control_form" value="Cancer"><br>
            <label for="enf_actuales"> Otros:</label><br>
            <textarea type="text" class="control-form" name="otros" value="{{old('otros')}}"></textarea><br><br>
            <label for="enf_infancia"> Enfermedades infancia:</label><br>
            <textarea type="text" class="control_form" id="infancia" name="infancia" value="{{old('infancia')}}"></textarea><br><br>
            <label for="enf_fam"> Enfermedades familiares:</label><br>
            <label for="enf_fam"> Diabetes:</label><input type="checkbox"  name="enf_actuales" class="control_form" value="Diabetes"><br>
            <label for="enf_fam"> Hipertension:</label><input type="checkbox" name="enf_actuales" class="control_form" value="Hipertension"><br>
            <label for="enf_fam"> Cancer:</label><input type="checkbox" name="enf_actuales" class="control_form" value="Cancer"><br>
            <label for="enf_fam"> Otros:</label><br>
            <textarea type="text" class="control-form" name="otros1" value="{{old('otros1')}}"></textarea><br>
        </fieldset>
        <fieldset>
            <legend>Antecedentes personales</legend>
            <div class="grupo_form">
                <label for="habitos"> Habitos:</label><br>
                <textarea type="text" class="control_form" name="habitos" value="{{old('habitos')}}"></textarea><br>
                @error('habitos')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="alcohol"> Ingesta de alcohol:</label><br>
                <textarea type="text" class="control_form" name="alcohol" value="{{old('alcohol')}}"></textarea><br>
                @error('alcohol')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="drogas"> Ingesta de drogas:</label><br>
                <textarea type="text" class="control_form" name="drogas" value="{{old('drogas')}}"></textarea><br>
                @error('drogas')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="alimentacion"> Tipo de Alimentacion:</label><br>
                <textarea type="text" class="control_form" name="alimentacion" value="{{old('alimentacion')}}"></textarea><br>
                @error('alimentacion')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="sueño"> Habitos de sueño:</label><br>
                <textarea type="text" class="control_form" name="sueño" value="{{old('sueño')}}"></textarea><br>
                @error('sueño')
                    <i>{{$message}}</i>
                @enderror
            </div>
        </fieldset>
        <fieldset>
            <legend>Pruebas</legend>
            <div class="grupo_form">
                <label for="pruebas"> Pruebas:</label><br>
                <textarea class="control_form" id="pruebas" name="pruebas" value="{{old('pruebas')}}"></textarea><br>
                @error('pruebas')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="pruebas_aplicadas"> Pruebas aplicadas:</label><br>
                <textarea class="control_form" name="pruebas_aplicadas" value="{{old('pruebas_aplicadas')}}"></textarea><br>
                <input type="file" class="control_form" name="pruebas_aplicadas" accept="image/png, image/jpeg, image/jpg, application/pdf"><br>
                @error('pruebas_aplicadas')
                    <i>{{$message}}</i>
                @enderror
            </div>
        </fieldset>
        <div class="grupo_form">
            <label for="diagnostico"> Diagnostico:</label><br>
            <textarea class="control_form" type="textarea" name="diagnostico" placeholder="Diagnostico" maxlength="6000" rows="7">{{old('diagnostico')}}</textarea><br>
            @error('diagnostico')
                <i>{{$message}}</i>
            @enderror
        </div>
        <div class="grupo_form">
            <label for="anotaciones"> Anotaciones:</label><br>
            <textarea class="control_form" type="textarea" name="anotaciones" placeholder="Anotaciones" maxlength="6000" rows="7">{{old('anotaciones')}}</textarea><br>
            @error('anotaciones')
                <i>{{$message}}</i>
            @enderror
        </div>
        <div class="grupo_form">
            <label for="pronostico"> Pronostico:</label><br>
            <textarea class="control_form" type="textarea" name="pronostico" placeholder="Pronostico" maxlength="6000" rows="7">{{old('pronostico')}}</textarea><br>
            @error('pronostico')
                <i>{{$message}}</i>
            @enderror
        </div>
        <button type="submit" class="boton_enviar" id="boton_historial">Guardar &rarr;</button>
        <input type="hidden" value="{{request()->paciente_id}}" name="paciente_id">
    </form>
</x-plantilla>