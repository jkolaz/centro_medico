<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_561e66ee1c9043_42170641',
  'file_dependency' => 
  array (
    '9d0156780389cf807170434c0b9f706005f6cf4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\centro_medico\\admin\\views\\templates\\mainClear.tpl',
      1 => 1443215482,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true);
if ($_valid && !is_callable('content_561e66ee1c9043_42170641')) {
function content_561e66ee1c9043_42170641 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Centro Odontologíco | Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta http-equiv="Access-Control-Allow-Origin" content="*">
        <meta name="format-detection" content="telephone=no">
        <meta name="author" content="Dev'Studio">
       

        <link rel="stylesheet" type="text/css" href="css/materialize.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"  media="screen,projection"/>
        <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
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
                      <button type="submit" class="waves-effect" id="btnIngresarLogin" name="btnIngresarLogin">Ingresar holaaaaaaaaaa</button>
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

         <script type="text/javascript">
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



        </script>

       

    </body>
</html><?php }
}
