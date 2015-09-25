<!DOCTYPE html>
<html lang="es">
    <?php include('include/head.php'); ?>
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


       <?php include('include/script.php'); ?>

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
</html>