<?php /* Smarty version 3.1.28-dev/63, created on 2015-09-25 16:52:36
         compiled from "C:\xampp\htdocs\centro_medico\admin\views\templates\login.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5605c224a42d79_72647381',
  'file_dependency' => 
  array (
    'a8a16a2d4ecad755a386e20b8c587e7f45fbc65e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\centro_medico\\admin\\views\\templates\\login.tpl',
      1 => 1443217940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_5605c224a42d79_72647381')) {
function content_5605c224a42d79_72647381 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '98245605c224a07d71_88721225';
?>
<!DOCTYPE html>
<html lang="es">
    <?php echo $_smarty_tpl->tpl_vars['contentheader']->value;?>

    <body>

        
          <div class="row vLogin">
            <div class="col offset-l4 l4 offset-m2 m8 s12">
              <div class="row modalLogin">
                <form class="col s12 l12 m12" id="formularioLogin" method="post" name="formularioLogin">
                    <div class="col l12 m12 s12 imgLogin">
                      <img src="img/logo-vmc.svg">
                    </div>
                    <div class="input-field col s12 l12 m12 divCorreo">
                      <input id="emailLogin" name="emailLogin" type="email" class="validate cemailLogin">
                      <label for="emailLogin">Correo Electrónico</label>
                    </div>

                    <div class="input-field col s12 m12 l12 divContra">
                      <input id="contraLogin" name="contraLogin" type="password" class="validate ccontraLogin">
                      <label for="contraLogn">Contraseña</label>
                    </div>
                    <div class="col l12 m12 s12 divBoton">
                      <button type="submit" class="waves-effect" id="btnIngresarLogin" name="btnIngresarLogin">Ingresar <?php echo $_smarty_tpl->tpl_vars['hola']->value;?>
</button>
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
                          <form method="post" id="formularioOlvideC" name="formularioOlvideC">
                          <div class="input-field col l12 m12 s12">
                            <input type="email" class="validate" id="correoOlvContra" name="correoOlvContra">
                            <label for="correoOlvContra">Correo</label>                            
                          </div>
                          <div class="col l12 m12 s12 btnRecOlvContra">
                            <button type="submit" class="waves-effect" id="btnOlvContra" name="btnOlvContra">Recuperar</button>
                          </div>
                          </form>
                          
                        </div>
                      </div>
                    </div>


       include/scriptk.php

         <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function (){
              $('.modal-trigger').leanModal();


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
              var correo = 'admin@admin';
              var contra = 'admin';
              if((correo == $('#emailLogin').val()) && (contra == $('#contraLogin').val())){
                $.mensajeUsuBienvenido();
              }else{
                $.mensajeUsuIncorrecto();
              }
            });
            

            $.mensajeUsuBienvenido = function(){
              swal("VMC Subastas", "Bienvenido", "success");
            }

            $.mensajeUsuIncorrecto = function(){
              swal("Algo anda mal!", "El usuario y/o contraseña son incorrectos", "error");
            }



        <?php echo '</script'; ?>
>

       

    </body>
</html><?php }
}
