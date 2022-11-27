<div>
    <form method="POST" action="http://proyectoparte2.test/logout" x-data="">
        @crsf
        <input type="hidden" name="_token" value="mY9zZRUWpJgMHhiwPmUbMa4HrO96fx0uuVlbJu7e">
        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="http://proyectoparte2.test/logout" @click.prevent="$root.submit();">Salir</a>
    </form>
</div>