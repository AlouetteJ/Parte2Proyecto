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
        
        <div class="p-5 mt-5">
        <h3> Bienvenid@  {{ auth()->user()->name }}</h3>
        </div>
        @if(!isset(auth()->user()->paciente->id))
            <div style="margin-left:3rem">
                <h3><a href="/paciente/create">Crea tu perfil</a></h3>
            </div>
        @else
        @php
            $paciente = auth()->user()->paciente
        @endphp
            <div style="margin-left:3rem">
                <h3><a href="/paciente/{{$paciente->id}}">Entra a tu perfil</a></h3>
            </div>
        @endif
</x-plantilla>