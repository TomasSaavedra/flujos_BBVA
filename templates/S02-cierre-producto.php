            <div class="container">
                <div class="menu-miga">
                    <p><a href="?src=S02-cuentas.php">Inicio</a> <span>Cuentas</span></p>
                </div>
                <div class="section-tabs">
                 
                    <h2 class="title-sh">Cuentas</h2>
                    <!-- Section tabs  -->
                    <ul class="nav nav-tabs align-center">
                        <li class="active"><a href="#mis-productos">Mis productos</a></li>
                        <li><a href="#catalogo-productos">Catálogo de productos</a></li>
                    </ul>
                    <hr class="separador">
                    <div class="tab-content">
                        <div class="tab-pane active" id="mis-productos">
                            <div  class="content-column view-form-close" 
                            style="border-radius: 5px; border: 1px solid #DDE3EA; border-radius: 4px;  background: #F3F5F7;">
                                <div id="box-cnt" class="content-column" style="padding-left:20px; padding-bottom:20px;">
                                    <div id="closeme" style="float: right;margin-top: 10px;margin-right: 10px;">
                                    <a class="close-operation-prod" href="?AID=CUENTAS" onclick="validarSalidaVentana();">
                                        <span class="close-icon"></span></a>
                                    </div>

                                    <!-- Paso 1 -->
                                    <div class="one-click-out">
                                        <div id="divTituloCierre">
                                            <h2>Solicitar cierre de producto</h2>
                                            <div class="" tenencia="CTA">
                                            <div id="bloqueDatosCabeceraTarjeta" class="account">
                                                <div class="left" >
                                                    <span id="cabeceraAlias"></span>
                                                    <p id="pCuentaSimple">Cuenta simple <strong id="sCuentaSimple">8765455523</strong></p>
                                                    <p><strong id="numero_cuenta">0504-0055-0100008424</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                         
                                    <div style="display:none;" id="divPeticionClave2" tenencia="CTA">
                                       
                                        <strong>
                                            <h3>Favor indicar motivos del cierre</h3>
                                        </strong>
                                      
                                        <div class="radio-consulta consulta-historico" style="padding-left:2px;" id="divradios">
                                            <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion1" id="lopcion1">No se cumplieron condiciones o beneficios ofrecidos
                                                <input type="radio" value="1" name="boton-motivos" id="opcion1"></label>
                                            </p>
                                            <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion2" id="lopcion2">No pude acceder a crédito solicitado en BBVA
                                                <input type="radio" value="2" name="boton-motivos" id="opcion2"></label>
                                            </p>
                                            <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion3" id="lopcion3">He recibido mala atención de mi ejecutivo
                                                <input type="radio" value="3" name="boton-motivos" id="opcion3"></label>
                                            </p>
                                            <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion4" id="lopcion4">No estoy conforme con la atención en la sucursal
                                                <input type="radio" value="4" name="boton-motivos" id="opcion4"></label>
                                            </p>
                                            <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion5" id="lopcion5">Tengo otra cuenta/tarjeta con BBVA
                                                <input type="radio" value="5" name="boton-motivos" id="opcion5"></label>
                                            </p>
                                            <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion6" id="lopcion6">Nunca he utilizado este producto
                                                <input type="radio" value="6" name="boton-motivos" id="opcion6"></label>
                                            </p>
                                            <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion7" id="lopcion7">No utilizo este producto porque uso los productos de otros bancos
                                                <input type="radio" value="7" name="boton-motivos" id="opcion7"></label>
                                            </p>
                                            <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion8" id="lopcion8">He dejado de utilizar este producto
                                                <input type="radio" value="8" name="boton-motivos" id="opcion8"></label>
                                            </p>
                                            <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion9" id="lopcion9">Prefiero los productos, beneficios o atención de otro banco
                                                <input type="radio" value="9" name="boton-motivos" id="opcion9"></label>
                                            </p>
                                            <p><label class="ui-marmots-label-radio marmots-label-left off" for="opcion10" id="lopcion10">La tarifa es muy alta
                                                <input type="radio" value="10" name="boton-motivos" id="opcion10"></label>
                                            </p>
                                        </div>

                                        <strong>
                                            <h3>¿A qué teléfono te gustaría ser contactado?</h3>
                                        </strong>
                                        <div id="divtelefono">     
                                            <input class="form-control" id="text-comentario" name="number-phone" style="width:45%;"></input>
                                        </div>

                                        <strong>
                                            <h3>Comentarios</h3>
                                        </strong>
                                        <div id="divcomentario">     
                                            <textarea onkeypress="return validaAreaText(event);" class="form-control" id="text-comentario" name="text-comentario" rows="8" style="width:97%;" maxlength="140"></textarea>
                                        </div>
                                    </div>
                                    
                                    </div>

                                    <div class="block-warning iconed-24" id="divAntesContinuar">
                                            <span class="icon-24  m03-aviso"></span>
                                            Estimado Cliente, por favor tenga en cuenta lo siguiente antes de continuar:
                                            <p><ul>
                                                <li>Su Cuenta tiene un PAC de Crédito de Consumo asociado.</li>
                                                <li>Su Línea de Crédito tiene deuda vigente.</li>
                                                <li>El abono de su remuneración se deposita en esta Cuenta</li>
                                            </ul></p>
                                            
                                            <div class="footer-cont-btn" id="divPeticionClave0" 
                                                style="padding-bottom:20px;">
                                                <a id="btnCierreP" class="btn btn-modificar">
                                                Continuar
                                                </a>
                                                <a href="JavaScript:void(0);" 
                                                id="btnCierreSolicitud" style="display: none;"  
                                                class="btn btn-modificar">
                                                Enviar solicitud
                                                </a>
                                            </div>
                                    </div>
                                       
                                        
                                    </div>
                                    <!-- paso 1 fin -->
                                    <div id="divPeticionClave" class="send-request">
                                        <div class="content">
                                            <div class="center" id="okEnviar" style="display:none;">
                                                    <div class="image" >
                                                        <img alt="Ok" title="Ok" src="css/img/ok-green-32px.png">
                                                    </div>
                                                    <div class="ok-content" >
                                                        <div class="message">
                                                            <h3>Solicitud enviada correctamente</h3>
                                                        </div>
                                                    </div>
                                                <hr>
                                                <article class="container">
                                                    <p >Estimado Cliente, nos contactaremos con usted entre 9:00 y 18:00 a más tardar en 2 días hábiles para informarle condiciones para el cierre de productos y hacer efectiva su solicitud</p>
                                               </article>
                                                <button type="button" class="btn btn-modificar">
                                                    <a href="?src=S02-cuentas.php">Aceptar</a>
                                                </button>


                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            

                                 <div class="container-bck-control" id="divPeticionSMS" style="display: none;">
                                            <div class="pin-sms-input large pin-sms-input-inline">
                                                <section>
                                                    <div class="sms control-label">        
                                                        <label class="sms control-label" 
                                                        style="padding: 11px 0 10px 25px;">
                                                            Introduzca la clave recibida por SMS                                    
                                                        </label>
                                                    </div>
                                                    <div class="form-group bck-control-right">
                                                        <div class="formline">                         
                                                            <input name="claveSms" id="claveSms" maxlength="7" minlength="7" class="form-control required number disabled" type="password">
                                                            <button 
                                                                id="btnConfirmarSMS" 
                                                                type="button" 
                                                                class="btn btn-modificar" >
                                                                <span>Confirmar</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                               
                                    <!-- fin div ok-->	

                                </div>

                                <!--fin peticion clave-->				
                                <div class="hidden">
                                    <aside id="BANNER_SH_TARJETAS" class="capgemini-popup hidden-xs banner" tenencia="TAR"></aside>
                                </div>



                                </div>
                            </div>
                            <div class="banner-column">
                                <?php include 'includes/components/banners/utility-links-opciones.html'; ?>
                                <?php include 'includes/components/banners/caja-base-bbva-link.html'; ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="catalogo-productos">
                            <iframe name="menuBAR" src="https://www.bbva.cl/personas/cuentas/?mb=si" width="100%" height="790" align="center" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!--iframe xmlns:fo="http://www.w3.org/1999/XSL/Format" onload="$(this).iFrameResize();" id="IframeresetId" src="https://www.bbva.cl/banca-personal/cuentas/?mb=si" style="width: 100%; height: 592px; min-height: 750px; overflow: hidden;" sandbox="allow-same-origin allow-scripts allow-popups allow-forms" scrolling="no"></iframe-->