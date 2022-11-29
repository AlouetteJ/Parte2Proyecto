<div class="nav-item mx-0 mx-lg-1">
    <form method="POST" action="http://proyectoparte2.test/logout">
        @csrf
        <input type="submit" value="SALIR" class="py-3 px-0 px-lg-3 rounded" style="background-color:#2c3e50; color:#FFFFFF; border-style:none;font-size:1em; font-weight: bold; family-font:"Montserrat"" onMouseOver="this.style.cssText='background-color:#2c3e50;border-style:none;font-size:1em; font-weight:bold; color: #1abc9c'" 

onMouseOut="this.style.cssText='background-color:#2c3e50;border-style:none;font-size:1em; font-weight:bold; color: #FFFFFF'" href="http://proyectoparte2.test/logout" @click.prevent="$root.submit();">
    </form>
</div>