<div class="container">
	
	<div class="menu-miga">
		<p><a href="?src=S02-cuentas.php">Inicio</a> <span>Tarjetas</span></p>
	</div>

	<div class="section-tabs">
		<!-- Utility icons
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
		</div>
		 -->
		<!-- title -->
		<h2 class="title-sh">Tarjetas</h2>
		
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li class="active"><a href="#mis-productos">Mis productos</a></li>
			<li><a href="#catalogo-productos">Catálogo de productos</a></li>
		</ul>
		
		<hr class="separador">
		
		<div class="tab-content">
            <div class="tab-pane active" id="mis-productos">
                <div  class="content-column" style="border-radius: 5px; border: 1px solid #DDE3EA; border-radius: 4px;  background: #F3F5F7;">
                    <div id="box-cnt" class="content-column" style="padding-left:20px; padding-bottom:20px;">
                        <div id="closeme" style="float: right;margin-top: 10px;margin-right: 10px;">
                            <a class="close-operation-prod" href="?AID=CUENTAS" onclick="validarSalidaVentana();"><span class="close-icon"></span></a>
                        </div>
                        <h2>Solicitar cierre de producto</h2>
                        <div class="" tenencia="CTA">
                            <div id="bloqueDatosCabeceraTarjeta" style="padding-bottom: 0px !important; border-bottom:0px !important;">
                                <div class="left" style="padding-bottom: 0px; border-bottom:0px;">
                                    <span id="cabeceraAlias"></span>
                                    <p id="pCuentaSimple">Cuenta simple <strong id="sCuentaSimple">8765455523</strong></p>
                                    <p><strong id="numero_cuenta">0504-0055-0100008424</strong></p>
                                </div>
                            </div>
                            <strong>
                                <h3>Favor indicar motivos del cierre</h3>
                            </strong>
                            <!--<form method="post">-->
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
                                <h3>Comentarios</h3>
                            </strong>
                            <div id="divcomentario">	 
                                <textarea onkeypress="return validaAreaText(event);" class="form-control" id="text-comentario" name="text-comentario" rows="8" style="width:97%;" maxlength="140"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--</form>-->
                    <div class="footer-container-bck" id="divPeticionClave">
                        <!-- div ok --->
                        <div class="pin-sms-input pin-sms-input-inline" style="padding-bottom: 0px;  padding-top: 0px;">
                            <!--<section>-->
                            <div class="center" id="okEnviar" style="display:none;">
                                <hr>
                                <div class="image">
                                    <img alt="Ok" title="Ok" src="css/img/ok-green-32px.png">
                                </div>
                                <div class="ok-content">
                                    <div class="message" style="text-align: center;">
                                        <h3>Solicitud enviada correctamente</h3>
                                    </div>
                                </div>
                                <hr>
                                <article>
                                    <div class="block-warning" style="margin-bottom:20px;">
                                        <i class="icon-24 gray m03-aviso"></i> Nos contactaremos con usted entre 9.00 y 18.00 al número de teléfono que tiene registrado para  informarle condiciones para cierre de productos 
                                        y hacer efectiva su solicitud.  Un ejecutivo lo contactará a más tardar en 2 días hábiles.
                                    </div>
                                </article>
                            </div>
                            <div class="center" id="errorOneClick" style="display:none;">
                                <div class="ok-content">
                                    <section class="block-error iconed-24" style="color: #c4136c !important;background-color: #f7e9e9 !important;border: 1px solid #f4ccdf !important;margin-bottom: 20px;">
                                        <center>
                                            <i class="icon-24 red m01-alerta"></i>
                                            <div class="title">
                                                <p style="color: #c4136c; text-align: left;" class="blink" id="descripcionErrorOneClick"></p>
                                            </div>
                                            <center>
                                            </center>
                                        </center>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <!-- fin div ok-->	
                        <div class="footer-cont-btn" id="divPeticionClave0" style=" padding-bottom:20px;">
                            <a href="JavaScript:void(0);" id="btnQuieroCredito1" onclick="javascript: generaClaveSeguridad(); validarSalidaVentana();" class="btn btn-modificar">
                            Enviar
                            </a>						
                            <div id="SMS_CLAVE"></div>
                        </div>
                    </div>
                    <!--fin peticion clave-->				
                    <div class="hidden">
                        <aside id="BANNER_SH_TARJETAS" class="capgemini-popup hidden-xs banner" tenencia="TAR"></aside>
                    </div>
                    <div class="footer-container-bck" id="divPeticionClave" style="display: block;">
                        <!-- div ok --->
                        <div class="pin-sms-input pin-sms-input-inline" style="padding-bottom: 0px;  padding-top: 0px;">
                            <!--<section>-->
                            <div class="center" id="okEnviar" style="display:none;">
                                <hr>
                                <div class="image">
                                    <img alt="Ok" title="Ok" src="css/img/ok-green-32px.png">
                                </div>
                                <div class="ok-content">
                                    <div class="message" style="text-align: center;">
                                        <h3>Solicitud enviada correctamente</h3>
                                    </div>
                                </div>
                                <hr>
                                <article>
                                    <div class="block-warning" style="margin-bottom:20px;">
                                        <i class="icon-24 gray m03-aviso"></i> Nos contactaremos con usted entre 9.00 y 18.00 al número de teléfono que tiene registrado para  informarle condiciones para cierre de productos 
                                        y hacer efectiva su solicitud.  Un ejecutivo lo contactará a más tardar en 2 días hábiles.
                                    </div>
                                </article>
                            </div>
                            <div class="center" id="errorOneClick" style="display:none;">
                                <div class="ok-content">
                                    <section class="block-error iconed-24" style="color: #c4136c !important;background-color: #f7e9e9 !important;border: 1px solid #f4ccdf !important;margin-bottom: 20px;">
                                        <center>
                                            <i class="icon-24 red m01-alerta"></i>
                                            <div class="title">
                                                <p style="color: #c4136c; text-align: left;" class="blink" id="descripcionErrorOneClick"></p>
                                            </div>
                                            <center>
                                            </center>
                                        </center>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <!-- fin div ok-->	
                        <div class="footer-cont-btn" id="divPeticionClave0" style="padding-bottom: 20px; display: none;">
                            <a href="JavaScript:void(0);" id="btnQuieroCredito" class="btn btn-modificar disabled" style="display: none;">
                            Enviar
                            </a>						
                            <div id="SMS_CLAVE" style="display: none;">
                                <center><br><img src="img/loader.gif"><br><br></center>
                            </div>
                        </div>
                        <div class="container-bck-control" style="display:none;" id="divPeticionClave2">
                            <div class="pin-sms-input large pin-sms-input-inline">
                                <section style="padding-bottom: 20px;">
                                    <div class="sms control-label">
                                        <!--<label class="marmots-label-left">-->
                                        <label class="sms control-label" style="font-weight: normal !important;padding-left: 55px;padding-top: 10px;">
                                        Introduzca la clave recibida por SMS									
                                        </label>
                                    </div>
                                    <div class="form-group bck-control-right">
                                        <div class="formline">
                                            <!--		<label class="sms control-label" for="claveSms">Clave SMS <span id="masInfoSMS" class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title=""></span></label>-->
                                            <input name="claveSms" id="claveSms" maxlength="7" minlength="7" class="form-control required number disabled" type="password" onkeyup="validaClaveSms();">
                                            <button style="position:absolute;margin-left: 10px;" id="btnConfirmar" type="button" class="btn btn-modificar "  ><span>Confirmar</span></button>
                                            <!--<img class="ConfirmadoCheck chek-left" src="img/tick-active-small.png" style="display:none"/>-->
                                        </div>
                                    </div>
                                </section>
                            </div>
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