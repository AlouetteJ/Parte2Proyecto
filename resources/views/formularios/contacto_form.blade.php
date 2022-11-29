<x-plantilla>
    <body>
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login">Iniciar sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav><br>

        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <div class="mt-5 p-5">
            <h2>Contactame</h2> ¿Tienes alguna pregunta?
            <p> Envia tu mensaje en el formulario debajo y me contactare contigo lo mas pronto posible. </p>
            <form method="post" id="form_reusable" action="mailto:alondra.ajag@gmail.com">
                @csrf
                <div class="grupo_form">
                    <label for="nombre"> Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}"><br>
                </div>
                <div class="grupo_form">
                    <label for="correo"> Correo:</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="example@test.com" value="{{old('correo')}}"><br>
                </div>
                <div class="grupo_form">
                    <label for="mensaje"> Mensaje:</label><br>
                    <textarea class="form-control" type="textarea" name="mensaje" id="mensaje" placeholder="Tu mensaje aqui" maxlength="6000" rows="7">{{old('mensaje')}}</textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs">Enviar &rarr;</button>
                <button type="reset" class="btn btn-lg btn-success" id="btnContactUs" name="reset" >Limpiar</button>
            </form>
        </div>
    </body>
</x-plantilla>