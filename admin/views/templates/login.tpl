<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>{$pg_title}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta http-equiv="Access-Control-Allow-Origin" content="*">
        <meta name="format-detection" content="telephone=no">
        <meta name="author" content="Dev'Studio">
       

        <link rel="stylesheet" type="text/css" href="{$DIR_PRINCIPAL}css/materialize.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="{$DIR_PRINCIPAL}css/font-awesome.min.css"  media="screen,projection"/>
        <link rel="stylesheet" type="text/css" href="{$DIR_PRINCIPAL}css/sweetalert.css">
        <link rel="stylesheet" type="text/css" href="{$DIR_PRINCIPAL}css/estilos.css">
</head>
<body>
    <div class="row vLogin">
        <div class="col offset-l4 l4 offset-m2 m8 s12">
            <div class="row modalLogin">
                <form class="col s12 l12 m12" id="formularioLogin" method="post" action="{$base_url}index.php/admin/administrator" name="formularioLogin">
                    <div class="col l12 m12 s12 imgLogin">
                        <img src="{$base_url}img/logo-vmc.svg">
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
                <form method="post" id="formularioOlvideC" name="formularioOlvideC" action="{$base_url}index.php/admin/administrator/olvideClave">
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


    {$include_script1}

    <script type="text/javascript">
        $(document).ready(function (){
            $('.modal-trigger').leanModal();
            {$js_error}

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
            
        });
        
        $('#btnOlvContra').on("click", function(evt){
            evt.preventDefault();
            $("#formularioOlvideC").submit();
        })
            

        $.mensajeUsuBienvenido = function(){
            swal("VMC Subastas", "Bienvenido", "success");
        }
        
        $.mensajeUsuSendMail = function(){
            swal("VMC Subastas", "En breve se le enviara un correo.", "success");
        }

        $.mensajeUsuIncorrecto = function(){
            swal("Algo anda mal!", "El usuario y/o contraseña son incorrectos", "error");
        }
    </script>
</body>
</html>
