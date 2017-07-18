<div class="container">
    <div class="menu-miga">
        <p><a href="?src=S02-cuentas.php">Inicio</a> <span>Ahorro e inversión</span></p>
    </div>
    <div class="section-tabs">
        <!-- Utility icons -->
        <div class="utility-icons">
            <!--a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a-->
            <!--a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
                <a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a-->
        </div>
        <!-- title -->
        <h2 class="title-sh">Ahorro e inversión</h2>
         
        <hr class="separador">
        <div class="section-ahorro-inversion">
             
                <div class="banner-column" id="ahorro-lateral"> 
                    <nav class="nav-sidebar">
                        <a href="?src=S18-ahorro-e-inversion.php">Mis Productos</a>
                        <a href="#">Metas de Ahorro</a>
                        <a href="?src=S18-productos-de-inversion.php" class="active">Contratar productos</a>
                    </nav>

                    <aside class="links dated mini-triangled favoritas editable perfil-inversor perfil-inversor-lateral">
                        <header>
                            <h1>Perfil inversor</h1>
                        </header>

                        <section> 
                            <ul>
                                <li>Conservador</li>
                                <li class="active">Moderado</li>
                                <li class="last">Arriesgado</li>
                            </ul>
                            <div class="barra">
                                <span class="barra-azul moderado"></span>
                            </div> 
                        </section>

                        <footer>
                            <a href="?src=S11-mi-perfil-inversor.php" class="btn small">Cambiar mi Perfil</a> 
                        </footer>
                    </aside>
                </div>

                <div class="content-column page-enrolamiento" id="productos-inversion"  >  
                     
                     <div class="row">
                        <div class="col-sm-12"><h2>Proceso de enrolamiento</h2></div>
                        <div class="col-sm-12">
                            <div class="main-wizard <?php echo $step == '1' ? 'init-step1' : ''; ?>">
                                <form novalidate id="" class="form-horizontal tooltip-validation transfer-filter">
                                    <article class="wizard">

                                        <!-- paso 1-->
                                        <div class="paso1" data-title="Datos personales">
                                            <div class="step-content-container">

                                                <div class="group-datos"><!--group-datos-->
                                                    <div class="col-sm-12"><h2>Datos Personales</h2>  </div>
                                                    <div class="col-sm-12 txt-datos"> 
                                                        <small>* Datos requeridos para continuar con el proceso de enrolamiento</small>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>Nombre y Apellido*</label>
                                                        <div class="right text-name"><!--right-->
                                                            <span class="no-editable">Seila Almonte Espejel </span>
                                                        </div><!--Fin right-->
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <label>Sexo</label>
                                                        <div class="select">
                                                            <select class="selectpicker"> 
                                                                <option value="1" selected>Opcion 1</option>
                                                                <option value="2" >Opcion 2</option>
                                                                <option value="3" >Opcion 3</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <label>Estado Civil*</label>
                                                        <div class="select">
                                                            <select class="selectpicker"> 
                                                                <option value="1" selected>Opcion 1</option>
                                                                <option value="2" >Opcion 2</option>
                                                                <option value="3" >Opcion 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- /group-datos-->

                                                <div class="group-datos">
                                                    <div class="col-sm-4">
                                                        <label>Pais*</label>
                                                        <div class="select">
                                                            <select class="selectpicker"> 
                                                                <option value="1" selected>Opcion 1</option>
                                                                <option value="2" >Opcion 2</option>
                                                                <option value="3" >Opcion 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>Fecha de nacimiento*</label>
                                                        <input type="text" class="form-control required date datepast" dategreater="01/01/1900" id="fecha-nacimiento" name="fecha-nacimiento" placeholder="dd/mm/aaaa" data-mask="99/99/9999">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>Régimen Conyugal</label>
                                                        <div class="select">
                                                            <select class="selectpicker">
                                                                <option value="1" selected>Opcion 1</option>
                                                                <option value="2" >Opcion 2</option>
                                                                <option value="3" >Opcion 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- /group-datos-->

                                                <div class="group-datos"><!--group-datos-->
                                                    <div class="col-sm-12"><h2>Dirección</h2> </div>
                                                    <div class="col-sm-4">
                                                        <label>Tipo</label>
                                                        <div class="select">
                                                            <select class="selectpicker">
                                                                <option value="1" selected>Opcion 1</option>
                                                                <option value="2" >Opcion 2</option>
                                                                <option value="3" >Opcion 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>País*</label>
                                                        <div class="select">
                                                            <select class="selectpicker">
                                                                <option value="1" selected>Opcion 1</option>
                                                                <option value="2" >Opcion 2</option>
                                                                <option value="3" >Opcion 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>Región*</label>
                                                        <div class="select">
                                                            <select class="selectpicker">
                                                                <option value="1" selected>Opcion 1</option>
                                                                <option value="2" >Opcion 2</option>
                                                                <option value="3" >Opcion 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- /group-datos-->

                                                <div class="group-datos"><!--group-datos-->
                                                    <div class="col-sm-4">
                                                        <label>Ciudad</label>
                                                        <div class="select">
                                                            <select class="selectpicker">
                                                                <option value="1" selected>Opcion 1</option>
                                                                <option value="2" >Opcion 2</option>
                                                                <option value="3" >Opcion 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>Comuna*</label>
                                                        <div class="select">
                                                            <select class="selectpicker">
                                                                <option value="1" selected>Opcion 1</option>
                                                                <option value="2" >Opcion 2</option>
                                                                <option value="3" >Opcion 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>Código Postal*</label>
                                                        <input type="text" value=" " class="form-control required">
                                                    </div>
                                                </div><!-- /group-datos-->

                                                <div class="group-datos"><!--group-datos-->
                                                    <div class="col-sm-4">
                                                        <label>Calle*</label>
                                                        <input type="text" value=" " class="form-control required">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>Número*</label>
                                                        <input type="text" value=" " class="form-control required">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>Complemento</label>
                                                        <input type="text" value=" " class="form-control">
                                                    </div>
                                                </div><!-- /group-datos-->

                                                <div class="group-datos"><!--group-datos-->
                                                    <div class="col-sm-4">
                                                        <label>Teléfono Móvil*</label>
                                                        <div class="right campo-telefono"><!--right-->
                                                            <div class="select">
                                                                <select class="selectpicker">
                                                                    <option value="" selected>009</option>
                                                                    <option>009</option>
                                                                    <option>008</option>
                                                                    <option>007</option>
                                                                </select>
                                                            </div>
                                                            <input type="text" class="form-control editable formulario-editar" value="">
                                                        </div><!--Fin right-->
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>Teléfono Fijo*</label>
                                                        <div class="right campo-telefono"><!--right-->
                                                            <div class="select">
                                                                <select class="selectpicker">
                                                                    <option value="" selected>009</option>
                                                                    <option>009</option>
                                                                    <option>008</option>
                                                                    <option>007</option>
                                                                </select>
                                                            </div>
                                                            <input type="text" class="form-control editable formulario-editar" value="">
                                                        </div><!--Fin right-->
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>E-mail*</label>
                                                        <input type="text" value=" " class="form-control required">
                                                    </div>
                                                </div><!-- /group-datos-->

                                                <div class="group-datos"><!--group-datos-->
                                                    <div class="col-sm-12">
                                                        <label><input type="checkbox" value="texto" class="form-control"> Correspondencia electrónica</label>                                                        
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <hr>
                                                        <small>* Datos requeridos para continuar con el proceso de enrolamiento</small>
                                                    </div>
                                                </div> 

                                            </div>
                                        </div>

                                        <!-- paso 2-->
                                        <div data-title="Datos económicos" class="paso2">
                                            <div class="cont-wizard">
                                                <div class="step-content-container paso2">

                                                    <div class="group-datos"><!--group-datos-->
                                                        <div class="col-sm-12"><h2>Datos Economicos</h2></div>
                                                        <div class="col-sm-4">
                                                            <label>Situación laboral</label>
                                                            <div class="select editable formulario-editar">
                                                                <select class="selectpicker">
                                                                    <option value="" selected>Seleccionar</option>
                                                                    <option>Opcion 1</option>
                                                                    <option>Opcion 2</option>
                                                                    <option>Opcion 3</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <label>Profesión</label>
                                                            <div class="select editable formulario-editar">
                                                                <select class="selectpicker">
                                                                    <option value="" selected>Seleccionar</option>
                                                                    <option>Opcion 1</option>
                                                                    <option>Opcion 2</option>
                                                                    <option>Opcion 3</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <label>Cargo</label>
                                                            <input type="text" value="" class="form-control">
                                                        </div>
                                                    </div><!-- /group-datos-->

                                                    <div class="group-datos"><!--group-datos--> 
                                                        <div class="col-sm-4">
                                                            <label>Nombre Empleador</label>
                                                            <input type="text" value="" class="form-control">
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <label>Nombre Fantasía Empleador</label>
                                                            <input type="text" value="" class="form-control">
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <label>Rut Empresa</label>
                                                            <input type="text" value="" class="form-control">
                                                        </div>
                                                    </div><!-- /group-datos-->

                                                    <div class="group-datos"><!--group-datos-->
                                                        <div class="col-sm-12"><h2>Ingresos</h2></div>
                                                        <div class="col-sm-4">
                                                            <label>Año</label>
                                                            <div class="select editable formulario-editar">
                                                                <select class="selectpicker">
                                                                    <option value="" selected>Seleccionar</option>
                                                                    <option>Opcion 1</option>
                                                                    <option>Opcion 2</option>
                                                                    <option>Opcion 3</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <label>Monto</label>
                                                            <input type="text" value="" class="form-control">
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <label>Moneda</label>
                                                            <div class="select editable formulario-editar">
                                                                <select class="selectpicker">
                                                                    <option value="" selected>Seleccionar</option>
                                                                    <option>Opcion 1</option>
                                                                    <option>Opcion 2</option>
                                                                    <option>Opcion 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><!-- /group-datos-->

                                                </div>
                                            </div>
                                        </div>

                                        <!-- paso 3-->
                                        <div data-title="Contrato" class="enrolamiento">

                                            <div class="cont-wizard">
                                                <div class="step-content-container enrolamiento-condiciones paso3">
                                                    <div class="cont-scroll-contrato"><!--paso3-->
                                                        <h2>Contrato de condiciones generales para operar en bolsa</h2>
                                                        <h4>CONDICIONES GENERALES DE OPERACIÓN CON BBVA CORREDORES DE BOLSA LTDA.</h4>
                                                        <div class="scrollable-prev"   style="overflow:scroll; height:256px; display:block"><!--scrollable-->
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                
                                                        </div><!--scrollable-->

                                                        <div class="form-group formline">
                                                            <div class="item first check">
                                                                <label for="enviar1" >He leido y acepto las  <a href="#">Condiciones legales y comerciales</a>
                                                                    <input id="enviar1" name="enviar1" type="checkbox"/>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h2>Selección de cuenta asociada</h2>
                                                                <p>Selecciona la Cuenta Corriente o Cuenta Vista de BBVA, en la cual se abonarán o cargarán los montos producto de las transacciones con BBVA Corredora de Bolsa.</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="select select-cuenta">
                                                                    <select class="selectpicker">
                                                                        <option value="" selected>2345-3340-09845488720 - Cuenta Catalina</option>
                                                                        <option>Opcion 1</option>
                                                                        <option>Opcion 2</option>
                                                                        <option>Opcion 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                    
                                                        <section><!--pin-->
                                                            <div class="pin-sms-input large pin-sms-input-inline inline-large DivClaveSegura">
                                                                <section>
                                                                    <div class="form-group">
                                                                        <label class="pin control-label" for="clave-segura">Introduzca su <strong>Clave Segura A9</strong></label>
                                                                        <div class="formline formline-right">
                                                                            <input name="clave-segura" id="clave-segura" maxlength="7" minlength="7" class="form-control required number" type="password">
                                                                            <!-- <button class="btn next" type="button" disabled id="clave-segura-boton"><span>Confirmar</span></button> -->
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </section><!--Fin pin-->

                                                    </div><!--Fin paso3-->
                                                </div>
                                            </div>
                                        </div> 

                                        <!-- paso 4-->
                                        <div data-title="Fin" class="enrolamientoFin">
                                            <div class="cont-wizard">
                                                <div class="step-content-container paso4 text-center">
                                                    <h2 class="text-left"> <span class="check-exito"></span> Has finalizado el proceso de incorporación como cliente BBVA corredora de Bolsa</h2>

                                                    <p>A partir de este momento puedes comprar y vender acciones en la bolsa de Comercio de Santiago y consultar el estado de tus transacciones.</p>
                                                    <p>Para transferir a tu cuenta de inversiones, presione transferir</p>
                                                    <div class="text-center">
                                                        <a href="#" class="btn btn-primary">Transferir</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </article>
                                </form>
                            </div>
                        </div>
                     </div>
                </div> 
            
              
        </div>
    </div>
</div>
</div>
</div>