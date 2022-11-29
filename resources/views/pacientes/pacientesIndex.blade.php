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
                        <li class="nav-item mx-0 mx-lg-1"><x-boton_salida></x-boton_salida></li>
                    </ul>
                </div>
            </div>
        </nav><br><br><br>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        
        <!-- Si no esta registrado como paciente que aparezca el boton de lo contrario aparece su perfil -->
        <div class="p-5 mt-5">
        <div style="overflow-x:auto">
            <table style="border:1px solid black; border-collapse: collapse; border-spacing: 15px;padding: 8px;margin-left:auto; margin-right:auto; width: 80%">
                <tr style="background-color:#1abc9c;height: 40px">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Nacimiento</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Genero</th>
                    <th>Pronombres</th>
                    <th>Orientacion</th>
                    <th>Motivos</th>
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
                        <td>{{$paciente->nacimiento}}</td>
                        <td>{{$paciente->correo}}</td>
                        <td>{{$paciente->telefono}}</td>
                        <td>{{$paciente->genero}}</td>
                        <td>{{$paciente->pronombre}}</td>
                        <td>{{$paciente->orientacion}}</td>
                        <td>{{$paciente->motivo}}</td> 
                        <td><form action="/paciente/{{$paciente->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form></td>
                    </tr>
                @endforeach
            </table>
        </div>
</x-plantilla>
