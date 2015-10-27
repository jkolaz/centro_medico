<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-27 18:04:12
         compiled from "C:\xampp\htdocs\centro_medico\admin\views\templates\paciente.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_563002eceda2c1_54409966',
  'file_dependency' => 
  array (
    '29135ff6999498ecca0a1e948342376429271b13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\centro_medico\\admin\\views\\templates\\paciente.tpl',
      1 => 1445987049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_563002eceda2c1_54409966')) {
function content_563002eceda2c1_54409966 ($_smarty_tpl) {
?>
<div class="contenedorPrincipal">
    <div class="row">
        <div class="col l12 m12 s12">
            <div class="contenedorPrincipalGeneral">
                <div class="row">
                    <!--inicio busqueda afiliados-->                 
                    <div class="col l12 s12 m12">
                        <h3>Afiliados</h3>
                        <h4>Miembros</h4>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/paciente/paciente/nuevo" class="waves-effect btnAgrNuevoUsuario">Nuevo Paciente</a>
                        <div class="row">
                            <div class="col l12 m12 s12 contBuscarAfiliado">
                                <p class="labelBuscaAfiliado">Búsqueda</p>
                                <div class="col l4 m5 s12">
                                    <select>
                                        <option value="1">Código de Miembro</option>
                                        <option value="2">Nombre</option>
                                        <option value="3">Documento</option>
                                        <option value="4">Documento</option>
                                    </select>
                                </div>
                                <div class="col l5 m4 s12">
                                    <input type="text" placeholder="Busqueda" class="validate">
                                </div>
                                <div class="col l3 m3 s12">
                                    <a href="#" class="btn btnBuscarAfiliados waves-effect">Buscar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--fin busqueda afiliados-->  
                    <!--inicio contenedor afiliados (1)-->   
            <?php if (count($_smarty_tpl->tpl_vars['objPaciente']->value) > 0) {?>
                <?php
$__section_cont_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_cont']) ? $_smarty_tpl->tpl_vars['__section_cont'] : false;
$__section_cont_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['objPaciente']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cont_0_total = $__section_cont_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = new Smarty_Variable(array());
if ($__section_cont_0_total != 0) {
for ($__section_cont_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] = 0; $__section_cont_0_iteration <= $__section_cont_0_total; $__section_cont_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']++){
?>
                    <div class="col l12 m12 s12 contenedorAfiliados">
                        <div class="row">
                            <div class="col l12 s12 m12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col l6 m6 s12">
                                                <div class="fotoAfiliados">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <ul class="afDatosPersonales">
                                                    <li class="afTitulo">
                                                        <p>Datos Personales</p>
                                                    </li>
                                                    <li class="afDatos">
                                                        <p>
                                                            <?php echo $_smarty_tpl->tpl_vars['objPaciente']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] : null)]->pac_nombre;?>

                                                            <?php echo $_smarty_tpl->tpl_vars['objPaciente']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] : null)]->pac_apellido_paterno;?>

                                                            <?php echo $_smarty_tpl->tpl_vars['objPaciente']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] : null)]->pac_apellido_materno;?>

                                                        </p>
                                                    </li>
                                                    <li class="afDatos">
                                                        <p>DNI <?php echo $_smarty_tpl->tpl_vars['objPaciente']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] : null)]->pac_dni;?>
</p>
                                                    </li>
                                                    <li class="afDatos">
                                                        <p>267390 / edu356</p>
                                                    </li>
                                                    <li class="afDatos">
                                                        <p><?php echo $_smarty_tpl->tpl_vars['objPaciente']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cont']->value['index'] : null)]->pac_correo;?>
</p>
                                                    </li>
                                                    <li class="afTitulo">
                                                        <p>Cliente</p>
                                                    </li>
                                                    <li class="afDatos">
                                                        <p>Abengoa Peru</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col l6 m6 s12">
                                                <ul class="afDatosSubasta">
                                                    <li>
                                                        <span class="afTitulo">Estado de Cuenta</span>
                                                    </li>
                                                    <li class="featureItem">
                                                        <span class="titulo">Total: </span>
                                                        <span class="dato">Real 10000.00</span>
                                                    </li>
                                                    <li class="featureItem">
                                                        <span class="titulo">Disponible: </span>
                                                        <span class="dato">8000.00</span>
                                                    </li>
                                                    <li class="featureItem">
                                                        <span class="titulo">Retenido: </span>
                                                        <span class="dato">2000.00</span>
                                                    </li>
                                                    <li>
                                                        <span class="afTitulo">Resumen de Subastas</span>
                                                    </li>
                                                    <li class="featureItem">
                                                        <span class="titulo">Operacion: </span>
                                                        <span class="dato">8</span>
                                                    </li>
                                                    <li class="featureItem">
                                                        <span class="titulo">Total: </span>
                                                        <span class="dato">6</span>
                                                    </li>
                                                    <li class="featureItem">
                                                        <span class="titulo">Ganados: </span>
                                                        <span class="dato">2</span>
                                                    </li>
                                                    <li class="featureItem">
                                                        <span class="titulo">Comprados: </span>
                                                        <span class="dato">0</span>
                                                    </li>
                                                    <li>
                                                        <span class="afTitulo">Sanciones:</span>
                                                        <span class="dato">0</span>
                                                    </li>
                                                    <li>
                                                        <span class="afTitulo">Bloqueos: </span>
                                                        <span class="dato">0</span>
                                                    </li>
                                                    <li>
                                                        <span class="afTitulo">Estado: </span>
                                                        <span class="dato">Activo</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <ul>
                                            <li class="afOnline hide-on-small-only">
                                                <span class="iconoOnline"></span> 
                                                <span class="letraOnline">On-Line</span>
                                            </li>
                                            <li class="afAcciones">
                                                <a href="#modalVerDatosAfiliados" class="tooltipped modal-trigger" data-position="bottom" data-delay="30" data-tooltip="Ver Datos"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="tooltipped" data-position="bottom" data-delay="30" data-tooltip="Bloquear"><i class="fa fa-ban"></i></a>
                                                <a href="#" class="tooltipped" data-position="bottom" data-delay="30" data-tooltip="Dar de Baja"><i class="fa fa-hand-o-down"></i></a>
                                            </li>
                                            <li class="afAddTrans">
                                                <a href="#modalAgregarSaldo" class="tooltipped modal-trigger" data-position="bottom" data-delay="30" data-tooltip="Agregar Saldo"><i class="fa fa-plus-square"></i></a>
                                                <a href="#" class="tooltipped" data-position="bottom" data-delay="30" data-tooltip="Congelar Cuenta"><i class="fa fa-lock"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
}
}
if ($__section_cont_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_cont'] = $__section_cont_0_saved;
}
?>
            <?php }?>        
                    <!--fin contenedor afiliados-->
                    <!--inicio modal ver datos afiliados-->
                    <?php echo $_smarty_tpl->tpl_vars['modal_ver_datos_afiliados']->value;?>

                    <!--fin modal ver datos afiliados-->

                    <!--inicio modal agregar saldo-->
                    <?php echo $_smarty_tpl->tpl_vars['modal_agregar_saldo']->value;?>

                    <!--fin modal agregar saldo-->
                </div>
            </div>
        </div>
    </div>
</div>
        

<?php echo $_smarty_tpl->tpl_vars['include_script1']->value;?>


<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function (){
        $('.collapsible').collapsible({
              accordion : false 
            });
        $('select').material_select();
        $('.modal-trigger').leanModal();
    });
<?php echo '</script'; ?>
><?php }
}
