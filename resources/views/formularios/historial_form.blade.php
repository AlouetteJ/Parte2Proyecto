<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Historial Clinico</title>

        <!-- Estilo css y scrip de js
        <link rel=" " href=" " >
        <script src=" "></script>
        -->
    </head>
    <body>
        <form id="form_reusable" method="post" action=" ">
            @csrf
            <div class="grupo_form">
                <label for="motivos"> Motivo de consulta:</label><br>
                <textarea type="textarea" class="form-control" id="motivos" name="motivos" placeholder="Motivos de consulta" value="{{old('motivos')}}"></textarea>
                @error('motivos')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <fieldset>
                <legend>Media Afiliacion</legend>
                <div>
                    <label for="peso"> Peso:</label>
                    <input type="text" class="form-control" id="peso" name="peso" value="{{old('peso')}}"><br>
                    <label for="estatura"> Estatura:</label>
                    <input type="text" class="form-control" id="estatura" name="estatura" value="{{old('estatura')}}"><br>
                    <label for="complexion"> Complexion:</label>
                    <input type="text" class="form-control" id="complexion" name="complexion" value="{{old('complexion')}}"><br>
                    <label for="tez"> Tez:</label>
                    <input type="text" class="form-control" id="tez" name="tez" value="{{old('tez')}}"><br>
                    <label for="alerta"> Estado de alerta:</label>
                    <input type="text" class="form-control" id="alerta" name="alerta" value="{{old('alerta')}}"><br>
                    <label for="marcha"> Marcha:</label>
                    <input type="text" class="form-control" id="marcha" name="marcha" value="{{old('marcha')}}"><br><br>
                </div>
                <div>
                    <label for="vestimenta"> Vestimenta:</label><br>
                    <textarea type="textarea" class="form-control" id="vestimenta" name="vestimenta" placeholder="Vestimenta" value="{{old('vestimenta')}}"></textarea><br>
                    <label for="accesorios"> Accesorios:</label><br>
                    <textarea type="textarea" class="form-control" id="accesorios" name="accesorios" placeholder="Accesorios" value="{{old('accesorios')}}"></textarea><br>
                    <label for="cicatrices"> Cicatrices:</label><br>
                    <textarea type="textarea" class="form-control" id="cicatrices" name="cicatrices" placeholder="Cicatrices" value="{{old('cicatrices')}}"></textarea><br>
                    <label for="lesiones"> Lesiones:</label><br>
                    <textarea type="textarea" class="form-control" id="lesiones" name="lesiones" placeholder="Lesiones" value="{{old('lesiones')}}"></textarea><br>
                    <label for="cabeza"> Cabeza:</label><br>
                    <textarea type="textarea" class="form-control" id="cabeza" name="cabeza" placeholder="Cabeza" value="{{old('cabeza')}}"></textarea><br>
                    <label for="orejas"> Orejas:</label><br>
                    <textarea type="textarea" class="form-control" id="orejas" name="orejas" placeholder="Orejas" value="{{old('orejas')}}"></textarea><br>
                    <label for="ojos"> Ojos:</label><br>
                    <textarea type="textarea" class="form-control" id="ojos" name="ojos" placeholder="Ojos" value="{{old('ojos')}}"></textarea><br>
                    <label for="nariz"> Nariz:</label><br>
                    <textarea type="textarea" class="form-control" id="nariz" name="nariz" placeholder="Nariz" value="{{old('nariz')}}"></textarea><br>
                    <label for="boca"> Boca:</label><br>
                    <textarea type="textarea" class="form-control" id="boca" name="boca" placeholder="Boca" value="{{old('boca')}}"></textarea><br>
                    <label for="cabello"> Cabello:</label><br>
                    <textarea type="textarea" class="form-control" id="cabello" name="cabello" placeholder="Cabello" value="{{old('cabello')}}"></textarea><br>
                    <label for="cejas"> Cejas:</label><br>
                    <textarea type="textarea" class="form-control" id="cejas" name="cejas" placeholder="Cejas" value="{{old('cejas')}}"></textarea><br>
                    <label for="mandibula"> Mandibula:</label><br>
                    <textarea type="textarea" class="form-control" id="mandibula" name="mandibula" placeholder="Mandibula" value="{{old('mandibula')}}"></textarea><br>
                    <label for="cuello"> Cuello:</label><br>
                    <textarea type="textarea" class="form-control" id="cuello" name="cuello" placeholder="Cuello" value="{{old('cuello')}}"></textarea><br>
                    <label for="dientes"> Dientes:</label><br>
                    <textarea type="textarea" class="form-control" id="dientes" name="dientes" placeholder="Dientes" value="{{old('dientes')}}"></textarea><br>
                </div>
            </fieldset>
            <fieldset>
                <legend>Familia</legend>
                <div>
                    <label for="padre"> Padre:</label><input type="checkbox" id="padre" name="familia" class="form-control">
                    <label for="padre"> Finado:</label><input type="checkbox" id="padre" name="familia" class="form-control"><br>
                </div>
                <div>
                    <label for="madre"> Madre:</label><input type="checkbox" id="madre" name="familia" class="form-control">
                    <label for="madre"> Finado:</label><input type="checkbox" id="madre" name="familia" class="form-control"><br>
                </div>
                <div>
                    <label for="hermano"> Hermano:</label><input type="checkbox" id="hermano" name="familia" class="form-control">
                    <label for="hermano"> Cuantos:</label><input type="number" id="hermano" name="hermano" min="1" max="20"><br>
                </div>
                <div>
                    <label for="hermana"> Hermana:</label><input type="checkbox" id="hermana" name="familia" class="form-control">
                    <label for="hermana"> Cuantos:</label><input type="number" id="hermana" name="hermana" min="1" max="20"><br>
                </div>
                <div>
                    <label for="hijo"> Hijo:</label><input type="checkbox" id="hijo" name="familia" class="form-control">
                    <label for="hijo"> Cuantos:</label><input type="number" id="hijo" name="hijo" min="1" max="20"><br>
                </div>
                <div>
                    <label for="hija"> Hija:</label><input type="checkbox" id="hija" name="familia" class="form-control">
                    <label for="hija"> Cuantos:</label><input type="number" id="hija" name="hija" min="1" max="20"><br>
                </div>
                <div>
                    <label for="numerohijo"> Numero de hijo:</label>
                    <input type="number" id="numerohijo" name="numerohijo" min="1" max="20"><br>
                </div>
                <div> 
                    <label for="vive"> Con quienes vive:</label><br>
                    <textarea type="text" class="form-control" id="vive" name="vive" value="{{old('vive')}}"></textarea><br>
                </div>
            </fieldset>
            <fieldset>
                <legend>Antecedentes enfermedades</legend>
                <label for="enf_actuales"> Enfermedades actuales:</label><br>
                <label for="enf_actuales"> Diabetes:</label><input type="checkbox" id="diabetes" name="enf_actuales" class="form-control"><br>
                <label for="enf_actuales"> Hipertension:</label><input type="checkbox" id="hipertension" name="enf_actuales" class="form-control"><br>
                <label for="enf_actuales"> Cancer:</label><input type="checkbox" id="cancer" name="enf_actuales" class="form-control"><br>
                <label for="enf_actuales"> Otros:</label><br>
                <textarea type="text" class="form-control" id="otros" name="otros" value="{{old('otros')}}"></textarea><br><br>
                <label for="enf_actuales"> Enfermedades infancia:</label><br>
                <textarea type="text" class="form-control" id="infancia" name="infancia" value="{{old('infancia')}}"></textarea><br><br>
                <label for="enf_actuales"> Enfermedades familiares:</label><br>
                <label for="enf_actuales"> Diabetes:</label><input type="checkbox" id="diabetes1" name="enf_actuales" class="form-control"><br>
                <label for="enf_actuales"> Hipertension:</label><input type="checkbox" id="hipertension1" name="enf_actuales" class="form-control"><br>
                <label for="enf_actuales"> Cancer:</label><input type="checkbox" id="cancer1" name="enf_actuales" class="form-control"><br>
                <label for="enf_actuales"> Otros:</label><br>
                <textarea type="text" class="form-control" id="otros1" name="otros1" value="{{old('otros1')}}"></textarea><br>
            </fieldset>
            <fieldset>
                <legend>Antecedentes personales</legend>
                <div class="grupo_form">
                    <label for="habitos"> Habitos:</label><br>
                    <textarea type="text" class="form-control" id="habitos" name="habitos" value="{{old('habitos')}}"></textarea><br>
                    @error('habitos')
                        <i>{{$message}}</i>
                    @enderror
                </div>
                <div class="grupo_form">
                    <label for="alcohol"> Ingesta de alcohol:</label><br>
                    <textarea type="text" class="form-control" id="alcohol" name="alcohol" value="{{old('alcohol')}}"></textarea><br>
                    @error('alcohol')
                        <i>{{$message}}</i>
                    @enderror
                </div>
                <div class="grupo_form">
                    <label for="drogas"> Ingesta de drogas:</label><br>
                    <textarea type="text" class="form-control" id="drogas" name="drogas" value="{{old('drogas')}}"></textarea><br>
                    @error('drogas')
                        <i>{{$message}}</i>
                    @enderror
                </div>
                <div class="grupo_form">
                    <label for="alimentacion"> Tipo de Alimentacion:</label><br>
                    <textarea type="text" class="form-control" id="alimentacion" name="alimentacion" value="{{old('alimentacion')}}"></textarea><br>
                    @error('alimentacion')
                        <i>{{$message}}</i>
                    @enderror
                </div>
                <div class="grupo_form">
                    <label for="sueño"> Habitos de sueño:</label><br>
                    <textarea type="text" class="form-control" id="sueño" name="sueño" value="{{old('sueño')}}"></textarea><br>
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
                    <textarea class="control_form" id="pruebasA" name="pruebasA" value="{{old('pruebasA')}}"></textarea><br>
                    <input type="file" class="control_form" id="pruebasB" name="pruebasB" accept="image/png, image/jpeg, image/jpg, application/pdf"><br>
                    @error('pruebasA')
                        <i>{{$message}}</i>
                    @enderror
                </div>
            </fieldset>
            <div class="grupo_form">
                <label for="diagnostico"> Diagnostico:</label><br>
                <textarea class="control_form" type="textarea" name="diagnostico" id="diagnostico" placeholder="Diagnostico" maxlength="6000" rows="7">{{old('diagnostico')}}</textarea><br>
                @error('diagnostico')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="anotaciones"> Anotaciones:</label><br>
                <textarea class="control_form" type="textarea" name="anotaciones" id="anotaciones" placeholder="Anotaciones" maxlength="6000" rows="7">{{old('anotaciones')}}</textarea><br>
                @error('anotaciones')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <div class="grupo_form">
                <label for="pronostico"> Pronostico:</label><br>
                <textarea class="control_form" type="textarea" name="pronostico" id="pronostico" placeholder="Pronostico" maxlength="6000" rows="7">{{old('pronostico')}}</textarea><br>
                @error('pronostico')
                    <i>{{$message}}</i>
                @enderror
            </div>
            <button type="submit" class="boton_enviar" id="boton_historial">Guardar &rarr;</button>
        </form>
    </body>
</html>