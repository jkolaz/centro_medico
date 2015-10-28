<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-28 10:48:02
         compiled from "C:\xampp\htdocs\centro_medico\admin\views\templates\inc\modal_agregar_saldo.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5630ee32069fd7_69482399',
  'file_dependency' => 
  array (
    'b5217f934710e36f5e3db22e32d85978f1724ba5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\centro_medico\\admin\\views\\templates\\inc\\modal_agregar_saldo.tpl',
      1 => 1446047228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_5630ee32069fd7_69482399')) {
function content_5630ee32069fd7_69482399 ($_smarty_tpl) {
?>
<div id="modalAgregarSaldo" class="modal">
    <div class="modal-content">
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
                                            <p>Eduardo Ivan Huapaya Romero</p>
                                        </li>
                                        <li class="afDatos">
                                            <p>DNI 47591656</p>
                                        </li>
                                        <li class="afDatos">
                                            <p>267390 / edu356</p>
                                        </li>
                                        <li class="afDatos">
                                            <p>ehuapayaromero@gmail.com</p>
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
                                    <form>
                                        <ul class="afDatosSubasta">
                                            <li>
                                                <span class="afTitulo">Estado de Cuenta</span>
                                            </li>
                                            <li class="featureItem">
                                                <span class="titulo">Total: </span>
                                                <input id="last_name" type="text" class="validate agreSaldoInput">
                                            </li>
                                            <li class="featureItem">
                                                <span class="titulo">Disponible: </span>
                                                <input id="last_name" type="text" class="validate agreSaldoInput">
                                            </li>
                                            <li class="featureItem">
                                                <span class="titulo">Retenido: </span>
                                                <input id="last_name" type="text" class="validate agreSaldoInput">
                                            </li>
                                            <li>
                                                <span class="afTitulo">Resumen de Subastas</span>
                                            </li>
                                            <li class="featureItem">
                                                <span class="titulo">Operacion: </span>
                                                <input id="last_name" type="text" class="validate agreSaldoInput">
                                            </li>
                                            <li class="featureItem">
                                                <span class="titulo">Total: </span>
                                                <input id="last_name" type="text" class="validate agreSaldoInput">
                                            </li>
                                            <li class="featureItem">
                                                <span class="titulo">Ganados: </span>
                                                <input id="last_name" type="text" class="validate agreSaldoInput">
                                            </li>
                                            <li class="featureItem">
                                                <span class="titulo">Comprados: </span>
                                                <input id="last_name" type="text" class="validate agreSaldoInput">
                                            </li>
                                            <li>
                                                <span class="afTitulo">Sanciones:</span>
                                                <input id="last_name" type="text" class="validate agreSaldoInput">
                                            </li>
                                            <li>
                                                <span class="afTitulo">Bloqueos: </span>
                                                <input id="last_name" type="text" class="validate agreSaldoInput">
                                            </li>
                                            <li>
                                                <span class="afTitulo">Estado: </span>
                                                <p>
                                                    <input name="grupoEstadoaS" class="with-gap" type="radio" id="test1" />
                                                    <label for="test1">Activo</label>
                                                </p>
                                                <p>
                                                    <input name="grupoEstadoaS" class="with-gap" type="radio" id="test2" />
                                                    <label for="test2">Inactivo</label>
                                                </p>
                                            </li>
                                        </ul>
                                        <button type="submit" class="btnGuardarSaldo waves-effect">Guardar Cambios</button>
                                        <a href="#" class="btnCancelarSaldo waves-effect modal-close">Cancelar</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
