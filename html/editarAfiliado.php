<!DOCTYPE html>
<html lang="es">
    
    <?php include('include/head.php'); ?>

    <body>

        <?php include('include/nav.php'); ?>
<!--inicio contenedor aside en Desktop-->
        <?php include('include/asideDesktop.php'); ?>
<!--fin contenedor aside en desktop-->
<!--inicio contenedor aside en movil y tablet-->         
        <?php include('include/asideMovil.php'); ?>
<!--fin contenedor aside en movil ytablet-->
<!--inicio formulario nuevo usuario-->
        <div class="contenedorPrincipal">
          <div class="row">
            <div class="col l12 m12 s12">
              <div class="contenedorPrincipalGeneral">
                  <div class="row">
                  <div class="col l12 s12 m12">
                    <h3>Afiliado</h3>
                    <h4>Editar Usuario</h4>
                  </div>
                    <form class="col l12 m12 s12">
                        <div class="row">
                        <div class="col col l12 m12 s12">
                        <p>
                          Tipo de Usuario : 
                        </p>
                          <p>
                            <input class="with-gap" name="group1" type="radio" id="test2"  />
                            <label for="test2">Natural</label>
                          </p>
                          <p>
                            <input class="with-gap" name="group1" type="radio" id="test3"  />
                            <label for="test3">Jurídico</label>
                          </p>
                        </div></div>
                        <div class="row">
                        <div class="col l12 m12 s12">
                          <p>País :</p>
                          <select>
                              <option value="" disabled selected>Seleccionar</option>
                              <option value="1">Perú</option>
                              <option value="2">Argentina</option>
                              <option value="3">Chile</option>
                            </select>
                        </div>
                        </div>
                        <div class="row"> 
                        <div class="input-field col l6 m12 s12">
                            <input id="documento" type="text" class="validate">
                            <label for="documento">Documento</label>
                          </div>
                          <div class="col col l6 m12 s12">
                          <p>
                            <input class="with-gap" name="groupDocum" type="radio" id="dni"  />
                            <label for="dni">DNI</label>
                          </p>
                          <p>
                            <input class="with-gap" name="groupDocum" type="radio" id="ce"  />
                            <label for="ce">CE</label>
                          </p>
                        </div></div>
                        <div class="row">
                          <div class="input-field col l6 m12 s12">
                            <input id="RUC" type="text" class="validate">
                            <label for="RUC">R.U.C</label>
                          </div></div>
                          <div class="row">
                            <div class="input-field col l6 m12 s12">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Nombre</label>
                          </div>
                        
                          <div class="input-field col l6 m12 s12">
                            <input  id="disabled" type="text" class="validate">
                            <label for="disabled">Apellidos</label>
                          </div>
                          </div>
                          
                        <div class="row">
                          <div class="input-field col l12 m12 s12">
                            <input id="password" type="text" class="validate">
                            <label for="password">Dirección</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l4 m4 s12">
                            <select>
                              <option value="" disabled selected>Departamento</option>
                              <option value="1">Departamento</option>
                              <option value="2">Departamento</option>
                              <option value="3">Departamento</option>
                            </select>
                          </div>
                          <div class="col l4 m4 s12">
                            <select>
                              <option value="" disabled selected>Provincia</option>
                              <option value="1">Provincia</option>
                              <option value="2">Provincia</option>
                              <option value="3">Provincia</option>
                            </select>
                          </div>
                          <div class="col l4 m4 s12">
                            <select>
                              <option value="" disabled selected>Distrito</option>
                              <option value="1">Distrito</option>
                              <option value="2">Distrito</option>
                              <option value="3">Distrito</option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l12 m12 s12">
                            <p>
                          Estado Civil: 
                        </p>
                          <p>
                            <input class="with-gap" name="estCivil" type="radio" id="soltero"  />
                            <label for="soltero">Soltero</label>
                          </p>
                          <p>
                            <input class="with-gap" name="estCivil" type="radio" id="casado"  />
                            <label for="casado">Casado</label>
                          </p>
                          <p>
                            <input class="with-gap" name="estCivil" type="radio" id="viudo"  />
                            <label for="viudo">Viudo</label>
                          </p>
                          <p>
                            <input class="with-gap" name="estCivil" type="radio" id="divorciado"  />
                            <label for="divorciado">Divorciado</label>
                          </p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l12 m12 s12">
                            <p>Empresa:</p>
                          <select>
                              <option value="1">Ninguna</option>
                              <option value="2">Ninguna</option>
                              <option value="3">Ninguna</option>
                              <option value="4">Ninguna</option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col l12 m12 s12">
                            <input id="ocupacion" type="text" class="validate">
                            <label for="ocupacion">Ocupación</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l12 m12 s12">
                            <p>No existen registros</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col l12 m12 s12">
                            <input class="validate" type="email" id="correo">
                            <label for="correo">Correo Electrónico</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col l12 m12 s12">
                            <input type="email" id="correoSecundario" class="validate">
                            <label for="correoSecundario">Correo Secundario</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l12 m12 s12">
                          <p>Declaración jurada</p>
                            <div class="file-field input-field">
                                <input class="file-path validate" type="text"/>
                                <div class="btn btnAdjuntar waves-effect">
                                  <span>Adjuntar</span>
                                  <input type="file" />
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l12 m12 s12">
                            <p>Fin de afiliación</p>
                          <select>
                              <option value="1">No especificado</option>
                              <option value="2">No especificado</option>
                              <option value="3">No especificado</option>
                              <option value="4">No especificado</option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l12 m12 s12">
                            <p>Participación en subastas</p>
                          <select>
                              <option value="1">No especificado</option>
                              <option value="2">No especificado</option>
                              <option value="3">No especificado</option>
                              <option value="4">No especificado</option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l12 m12 s12">
                          <p>Categorías de interés</p>
                            <p>
                              <input type="checkbox" id="grupVehiculos" />
                              <label for="grupVehiculos">Grupo de vehículos</label>
                            </p>
                            <p>
                              <input type="checkbox" id="matResiduos" />
                              <label for="matResiduos">Materiales y residuos</label>
                            </p>
                            <p>
                              <input type="checkbox" id="vehiculos" />
                              <label for="vehiculos">Vehículos</label>
                            </p>
                            <p>
                              <input type="checkbox" id="reactivos" />
                              <label for="reactivos">Reactivos</label>
                            </p>
                            <p>
                              <input type="checkbox" id="maquinaria" />
                              <label for="maquinaria">Maquinaria</label>
                            </p>
                            <p>
                              <input type="checkbox" id="repuesto" />
                              <label for="repuesto">Repuesto</label>
                            </p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l12 m12 s12">
                            <p>Registro</p>
                            <p>2015-08-21 10:09</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l12 s12 m12 ">
                            <button type="submit" class="btn btnGuardar waves-effect">Guardar</button>
                          </div>
                        </div>


                        </div>
                      </form>
                  </div>
              </div>
            </div>
          </div>
        </div>
        
<!--fin formulario nuevo usuario-->
        <?php include('include/script.php'); ?>
        <script type="text/javascript">
            $(document).ready(function (){
              $('.collapsible').collapsible({
                    accordion : false 
                  });
              $('select').material_select();
            
            });



        </script>


    </body>
</html>