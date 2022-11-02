<x-plantilla>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/inicio">Psicoterapeuta</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/inicio">Inicio</a></li>
                    <!-- <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/contacto">Contactame</a></li> -->
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login">Salir</a></li>
                </ul>
            </div>
        </div>
    </nav><br>
    <div class="p-5 mt-5 fix-left">
        <h2>Informacion del paciente<h2>
        <h5>Nombre(s): {{$paciente->nombre}}<h5>
        <h5>Apellido(s): {{$paciente->apellidos}}<h5>
        <h5>Edad: {{$paciente->edad}}<h5>
        <h5>Fecha de nacimiento: {{$paciente->nacimiento}}<h5>
        <h5>Correo: {{$paciente->correo}}<h5>
        <h5>Telefono: {{$paciente->telefono}}<h5>
        <h5>Genero: {{$paciente->genero}}<h5>
        <h5>Pronombre(s): {{$paciente->pronombre}}<h5>
        <h5>Orientación: {{$paciente->orientacion}}<h5>
        <h5>Ocupación: {{$paciente->ocupacion}}<h5>
        <h5>Estado civil: {{$paciente->edocivil}}<h5>
        <h5>Nacionalidad: {{$paciente->nacionalidad}}<h5>
        <h5>Residencia actualmente: {{$paciente->resactual}}<h5>
        <h5>Residencia anterior: {{$paciente->resanterior}}<h5>
        <h5>Nivel de estudios: {{$paciente->estudios}}<h5>
        <h5>Motivo de consulta: {{$paciente->motivo}}<h5> 
        <h5><a href="/paciente/{{$paciente->id}}/edit">Editar</a><h5><br>

        <h2>Historial del paciente<h2>
        <h5><a href="/historial/create?paciente_id={{$paciente->id}}" id="agrega">Agregar</a><h5><br>
        <h5>Motivos de consulta: {{$historial->motivos}}<h5>
        <h4>Media Afiliacion</h4>
        <h5>Peso: {{$historial->peso}}<h5>
        <h5>Estatura: {{$historial->estatura}}<h5>
        <h5>Complexion de nacimiento: {{$historial->complexion}}<h5>
        <h5>Tez: {{$historial->tez}}<h5>
        <h5>Estado de alerta: {{$historial->alerta}}<h5>
        <h5>Marcha: {{$historial->marcha}}<h5>
        <h5>Vestimenta: {{$historial->vestimenta}}<h5>
        <h5>Accesorios {{$historial->accesorios}}<h5>
        <h5>Lesiones: {{$historial->lesiones}}<h5>
        <h5>Cabeza: {{$historial->cabeza}}<h5>
        <h5>Orejas: {{$historial->orejas}}<h5>
        <h5>Ojos: {{$historial->ojos}}<h5>
        <h5>Nariz: {{$historial->nariz}}<h5>
        <h5>Boca: {{$historial->boca}}<h5>
        <h5>Cabello: {{$historial->cabello}}<h5>
        <h5>Cejas: {{$historial->cejas}}<h5>
        <h5>Mandibula: {{$historial->mandibula}}<h5>
        <h5>Cuello: {{$historial->cuello}}<h5>
        <h5>Dientes: {{$historial->dientes}}<h5>
        <h4>Familia<h4>
        <h5>Padre: {{$historial->padre}}<h5><h5>Finado: {{$historial->padrevive}}<h5>
        <h5>Madre: {{$historial->madre}}<h5><h5>Finada: {{$historial->madrevive}}<h5>
        <h5>Hermano: {{$historial->hermano}}<h5><h5>Cuantos: {{$historial->hermanos}}<h5>
        <h5>Hermana: {{$historial->hermana}}<h5><h5>Cuantos: {{$historial->hermanas}}<h5>
        <h5>Hijo: {{$historial->hijo}}<h5><h5>Cuantos: {{$historial->hijos}}<h5>
        <h5>Hija: {{$historial->hija}}<h5><h5>Cuantos: {{$historial->hijas}}<h5>
        <h5>Numero de hijo: {{$historial->numerohijo}}<h5>
        <h5>Con quienes vive: {{$historial->vive}}<h5>
        <h4>Antecedentes enfermedades<h4>
        <h5>Enfermedades actuales: {{$historial->enf_actuales}}<h5>
        <h5>Enfermedades infancia: {{$historial->infancia}}<h5>
        <h5>Enfermedades familiares: {{$historial->enf_fam}}<h5>
        <h4>Antecedentes personales<h4>
        <h5>Habitos: {{$historial->habitos}}<h5>
        <h5>Ingesta de alcohol: {{$historial->alcohol}}<h5>
        <h5>Ingesta de drogas: {{$historial->drogas}}<h5>
        <h5>Tipo de alimentación: {{$historial->alimentacion}}<h5>
        <h5>Habitos de sueño: {{$historial->sueño}}<h5>
        <h5>Pruebas: <h5>
        <h5>Pruebas aplicadas: <h5>
        <h5>Diagnostico: {{$historial->diagnostico}}<h5>
        <h5>Anotaciones: {{$historial->anotaciones}}<h5>
        <h5>Pronostico: {{$historial->pronostico}}<h5>
        <h5><a href="/historial/{{$historial->id}}/edit">Editar</a><h5><br>
    </div>
</x-plantilla>