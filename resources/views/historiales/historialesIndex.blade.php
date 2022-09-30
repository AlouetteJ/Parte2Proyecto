<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Historiales Clinicos</title>

        <!-- Estilo css y scrip de js
        <link rel=" " href=" " >
        <script src=" "></script>
        -->
    </head>
    <body>
        <h2>Historial Pacientes</h2>
        <ul>
            @foreach($historials as $historial)
                <li>{{ $historial }}</li>
            @endforeach
        </ul>
    </body>
</html>