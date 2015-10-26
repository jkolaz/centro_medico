<div class="contenedorPrincipal">
          <div class="row">
            <div class="col l12 m12 s12">
              <div class="contenedorPrincipalGeneral">
                  <div class="row">
 <!--inicio busqueda afiliados-->                 
                  <div class="col l12 s12 m12">
                    <h3>Afiliados</h3>
                    <h4>Miembros</h4>
                    <a href="crearUsuarioNuevo.php" class="waves-effect btnAgrNuevoUsuario">Nuevo Usuario</a>
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
<!--fin contenedor afiliados-->
<!--inicio modal ver datos afiliados-->
                    {$modal_ver_datos_afiliados}
<!--fin modal ver datos afiliados-->

<!--inicio modal agregar saldo-->
                    {$modal_agregar_saldo}
<!--fin modal agregar saldo--> 

<!--inicio contenedor afiliados (2)-->   
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


    <!--inicio contenedor afiliados (3)-->                   
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
                  </div>
              </div>
            </div>
          </div>
        </div>
        

        {$include_script1}

        <script type="text/javascript">
            $(document).ready(function (){
              $('.collapsible').collapsible({
                    accordion : false 
                  });
              $('select').material_select();
            $('.modal-trigger').leanModal();
            });



        </script>