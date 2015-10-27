<!--inicio formulario nuevo usuario-->
<div class="contenedorPrincipal">
    <div class="row">
        <div class="col l12 m12 s12">
            <div class="contenedorPrincipalGeneral">
                <div class="row">
                    <div class="col l12 s12 m12">
                        <h3>Registar Paciente</h3>
                        <h4><a href="#">&lt;&lt; Regresar</a></h4>
                    </div>
                    <form class="col l12 m12 s12" action="{$base_url}index.php/paciente/paciente/insertar" method="post">
                        <div class="row">
                            <div class="col col l12 m12 s12">
                                <p>Sexo : </p>
                                <p>
                                    <input class="with-gap" name="sexo" type="radio" id="sexo_m" value="M" />
                                    <label for="sexo_m">Hombre</label>
                                </p>
                                <p>
                                    <input class="with-gap" name="sexo" type="radio" id="sexo_f"  value="F"/>
                                    <label for="sexo_f">Mujer</label>
                                </p>
                            </div>
                        </div>
                        <!--
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
                        -->
                        <div class="row"> 
                            <div class="input-field col l6 m12 s12">
                                <input id="documento" type="text" name="documento" class="validate" value="">
                                <label for="documento">Documento</label>
                            </div>
                            <div class="col col l6 m12 s12">
                                <p>
                                    <input class="with-gap" name="groupDocum" type="radio" id="tipo_doc_1" value="1"  />
                                    <label for="tipo_doc_1">DNI</label>
                                </p>
                                <p>
                                    <input class="with-gap" name="groupDocum" type="radio" id="tipo_doc_2" value="2" />
                                    <label for="tipo_doc_2">CE</label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col l6 m12 s12">
                                <input id="nombre" name="nombre" type="text" class="validate" value="" >
                                <label for="nombre">Nombres</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col l6 m12 s12">
                                <input  id="paterno" name="paterno" type="text" class="validate" value="" >
                                <label for="paterno">Apellido Paterno</label>
                            </div>
                            <div class="input-field col l6 m12 s12">
                                <input  id="materno" name="materno" type="text" class="validate" value="" >
                                <label for="materno">Apellido Materno</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col l6 m12 s12">
                                <input id="nac" name="nac" type="text" class="validate" value="" >
                                <label for="nac">Fecha de nacimiento</label>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="input-field col l12 m12 s12">
                                <input id="direccion" name="direccion" type="text" class="validate">
                                <label for="direccion">Dirección</label>
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
                        <!--
                        <div class="row">
                            <div class="col l12 m12 s12">
                                <p>Estado Civil:</p>
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
                        -->
                        <!--
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
                        -->
                        <!--
                        <div class="row">
                          <div class="col l12 m12 s12">
                            <p>No existen registros</p>
                          </div>
                        </div>
                        -->
                        <div class="row">
                            <div class="input-field col l12 m12 s12">
                                <input class="validate" type="email" name="correo" id="correo">
                                <label for="correo">Correo Electrónico</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col l12 m12 s12">
                                <p>Foto</p>
                                <div class="file-field input-field">
                                    <input class="file-path validate" type="text"/>
                                    <div class="btn btnAdjuntar waves-effect">
                                        <span>Adjuntar</span>
                                        <input type="file" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
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
                        -->
                        <div class="row">
                            <div class="col l12 s12 m12 ">
                                <button type="submit" class="btn btnGuardar waves-effect">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>        
        
<!--fin formulario nuevo usuario-->

{$include_script1}
<script type="text/javascript">
    $(document).ready(function (){
        $('.collapsible').collapsible({
            accordion : false 
        });
        $('select').material_select();

    });
</script>