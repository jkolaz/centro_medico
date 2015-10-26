<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-26 16:59:07
         compiled from "C:\xampp\htdocs\centro_medico\admin\views\templates\inc\nav.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_562ea22bd32c33_88148096',
  'file_dependency' => 
  array (
    '5045ba047cd1122f53032c7970ffd743ddb58ebb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\centro_medico\\admin\\views\\templates\\inc\\nav.tpl',
      1 => 1445896745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_562ea22bd32c33_88148096')) {
function content_562ea22bd32c33_88148096 ($_smarty_tpl) {
?>
<nav>
    <div class="contenedorMenu">
        <figure>
            <a href="#">
                <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/logo-vmc.svg">
            </a>
        </figure>
    </div>
    <div class="contenedorBienvenido">
        <h3 class="bienvenido">¡Bienvenido!</h3>
        <h3 class="nombreBienvenido">Julio Salsavilca</h3>
        <p class="cargoBienvenido">Administrador APP</p>
        <p class="fechaBienvenido">Hoy es <span>jueves 20, 2015</span></p>
    </div>
    <div class="contenedorLogin">
        <a href="#" class="btnLogin hide-on-med-and-down"><i class="fa fa-key"></i> Cambiar Contraseña</a>
        <a href="#" class="btnLogin"><i class="fa fa-sign-out"></i> Cerrar Sesión</a>
    </div>
</nav><?php }
}
