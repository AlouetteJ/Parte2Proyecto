<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Pacientes</title>

        <!-- Estilo css y scrip de js
        <link rel=" " href=" " >
        <script src=" "></script>
        -->
    </head>
    <body>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Nacimiento</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Genero</th>
                <th>Pronombres</th>
                <th>Orientacion</th>
                <th>Ocupacion</th>
                <th>Estado civil</th>
                <th>Nacionalidad</th>
                <th>Residencia Actual</th>
                <th>Residencia Anterior</th>
                <th>Estudios</th>
                <th>Motivos</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @foreach ($pacientes as $paciente)
                <tr>
                    <td>{{$paciente->id}}</td>
                    <td>
                        <a href="/paciente/{{$paciente->id}}">
                        {{$paciente->nombre}}
                        </a>
                    </td>
                    <td>{{$paciente->apellidos}}</td>
                    <td>{{$paciente->edad}}</td>
                    <td>{{$paciente->nacimiento}}</td>
                    <td>{{$paciente->correo}}</td>
                    <td>{{$paciente->telefono}}</td>
                    <td>{{$paciente->genero}}</td>
                    <td>{{$paciente->pronombre}}</td>
                    <td>{{$paciente->orientacion}}</td>
                    <td>{{$paciente->ocupacion}}</td>
                    <td>{{$paciente->edocivil}}</td>
                    <td>{{$paciente->nacionalidad}}</td>
                    <td>{{$paciente->resactual}}</td>
                    <td>{{$paciente->resanterior}}</td>
                    <td>{{$paciente->estudios}}</td>
                    <td>{{$paciente->motivo}}</td> 
                    <td><a href="/paciente/{{$paciente->id}}/edit">Editar</a></td>
                    <td><form action="/paciente/{{$paciente->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form></td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
