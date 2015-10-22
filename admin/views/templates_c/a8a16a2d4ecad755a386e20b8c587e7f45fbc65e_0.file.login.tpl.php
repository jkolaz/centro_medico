<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-22 11:48:45
         compiled from "C:\xampp\htdocs\centro_medico\admin\views\templates\login.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5629136d5dcbb3_32480123',
  'file_dependency' => 
  array (
    'a8a16a2d4ecad755a386e20b8c587e7f45fbc65e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\centro_medico\\admin\\views\\templates\\login.tpl',
      1 => 1445531962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_5629136d5dcbb3_32480123')) {
function content_5629136d5dcbb3_32480123 ($_smarty_tpl) {
?>
<body>
    <div class="row vLogin">
        <div class="col offset-l4 l4 offset-m2 m8 s12">
            <div class="row modalLogin">
                <form class="col s12 l12 m12" id="formularioLogin" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/admin/administrator" name="formularioLogin">
                    <div class="col l12 m12 s12 imgLogin">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/logo-vmc.svg">
                    </div>
                    <div class="input-field col s12 l12 m12 divCorreo">
                        <input id="emailLogin" name="emailLogin" type="email" class="validate cemailLogin" autocomplete="off">
                        <label for="emailLogin">Correo Electrónico</label>
                    </div>
                    <div class="input-field col s12 m12 l12 divContra">
                        <input id="contraLogin" name="contraLogin" type="password" class="validate ccontraLogin">
                        <label for="contraLogn">Contraseña</label>
                    </div>
                    <div class="col l12 m12 s12 divBoton">
                        <button type="submit" class="waves-effect" id="btnIngresarLogin" name="btnIngresarLogin">Ingresar</button>
                    </div>
                </form>
                <div class="col l12 m12 s12 divOlvideContra">
                    <a href="#modalOlvideContra" class="modal-trigger waves-effect">¿Olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>
    </div>
    <div id="modalOlvideContra" class="modal">
        <div class="modal-content">
            <div class="col l12 m12 s12">
                <h4>¿Olvidaste tu contraseña?</h4>
                <p>Ingresa tu correo para recibir un enlace y crear tu nueva contraseña</p>
                <form method="post" id="formularioOlvideC" name="formularioOlvideC" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/admin/administrator/olvideClave">
                    <div class="input-field col l12 m12 s12">
                        <input type="email" class="validate" id="correoOlvContra" name="correoOlvContra" autocomplete="off">
                        <label for="correoOlvContra">Correo</label>                            
                    </div>
                    <div class="col l12 m12 s12 btnRecOlvContra">
                        <button type="submit" class="waves-effect" id="btnOlvContra" name="btnOlvContra">Recuperar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <?php echo $_smarty_tpl->tpl_vars['include_script1']->value;?>


    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function (){
            $('.modal-trigger').leanModal();
            <?php echo $_smarty_tpl->tpl_vars['js_error']->value;?>


            $('#formularioLogin').validate({

                rules:{
                    emailLogin:{
                        required:true,
                        minlength: 2, 
                        maxlength: 50,
                        email: true
                    },
                    contraLogin:{
                        required:true,
                        minlength: 2, 
                        maxlength: 50
                    }
                },
                messages:{
                    emailLogin: {
                        required:'El campo es requerido',
                        email:'Ingrese un correo valido'
                    },
                    contraLogin:{
                        required:'El campo es requerido',
                        minlength:'Minimo 2 caracteres'
                    }
                }
            });

            $('#formularioOlvideC').validate({
                rules:{
                    correoOlvContra:{
                        required:true,
                        minlength: 2, 
                        maxlength: 50,
                        email: true
                    }
                },
                messages:{
                    correoOlvContra: {
                        required:'El campo es requerido',
                        email:'Ingrese un correo valido'
                    }
                }
            });

              

        });

        $('#btnIngresarLogin').on("click",function(evt){
            evt.preventDefault();

            $('#formularioLogin').submit();
            /*
            var correo = 'admin@admin.com';
            var contra = 'admin';
            if((correo == $('#emailLogin').val()) && (contra == $('#contraLogin').val())){
              $.mensajeUsuBienvenido();
            }else{
              $.mensajeUsuIncorrecto();
            }
            */
        });
        
        $('#btnOlvContra').on("click", function(evt){
            evt.preventDefault();
            $("#formularioOlvideC").submit();
        })
            

        $.mensajeUsuBienvenido = function(){
            swal("VMC Subastas", "Bienvenido", "success");
        }

        $.mensajeUsuIncorrecto = function(){
            swal("Algo anda mal!", "El usuario y/o contraseña son incorrectos", "error");
        }
    <?php echo '</script'; ?>
>
</body>
<?php }
}
