<nav>
    <div class="contenedorMenu">
        <figure>
            <a href="{$base_url}index.php/principal">
                <img src="{$base_url}img/logo-vmc.svg">
            </a>
        </figure>
    </div>
    <div class="contenedorBienvenido">
        <h3 class="bienvenido">¡Bienvenido!</h3>
        <h3 class="nombreBienvenido">{$usuario_nombre}</h3>
        <p class="cargoBienvenido">Administrador APP</p>
        <p class="fechaBienvenido">Hoy es <span>{$dia_text} {$dia_num} de {$mes_text}, {$anio_num}</span></p>
    </div>
    <div class="contenedorLogin">
        <a href="#" class="btnLogin hide-on-med-and-down"><i class="fa fa-key"></i> Cambiar Contraseña</a>
        <a href="{$base_url}index.php/{$cerrar_sesion}" class="btnLogin"><i class="fa fa-sign-out"></i> Cerrar Sesión</a>
    </div>
</nav>