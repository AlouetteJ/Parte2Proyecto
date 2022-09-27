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
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <!-- <th>Nacimiento</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Pronombres</th>
                <th>Orientacion</th>
                <th>Ocupacion</th>
                <th>Apellidos</th>
                <th>Estado civil</th>
                <th>Nacionalidad</th>
                <th>Residencia Actual</th>
                <th>Residencia Anterior</th>
                <th>Estudios</th>
                <th>Motivos</th> -->
            </tr>
            @forearch ($pacientes as $paciente)
                <tr>
                    <td>{{$paciente->id}}</td>
                    <a href="/paciente/{{$paciente->id}}">
                    <td>{{$paciente->nombre}}</td>
                    <td>{{$paciente->apellidos}}</td>
                    </a>
                    <td>{{$paciente->edad}}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
