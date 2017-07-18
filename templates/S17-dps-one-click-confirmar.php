 

<div class="container one-click ">

<div id="approvedDPS" >
   <span>Tu Declaración Personal de Salud fue aprobada.</span>
</div>

<div class="container-bck ">
	<header class="m-ofertas m-ofertas__encabezada">
		<h1 class="encabezada__titulo">Estás a sólo un paso de <strong>Confirmar tu Crédito de Consumo</strong></h1> 
	</header>  

	<div class=" exito-container-bck" id="ConfirmarDPS"  >
	    <ul class="detalle-list">
			<li><span class="s-left">Monto Líquido:</span> <span id="ComprobmontoLiquidoCredito">$ 9.000.000</span></li>
			<li><span class="s-left">Plazo:</span>				<span id="ComprobPlazo">60 meses</span></li>
			<li><span class="s-left">Valor cuota mensual:</span>		<span id="ComprobcuotaMensual">$ 217.747</span></li>
			<li><span class="s-left">Tasa mensual:</span>						<span id="ComprobtasaInteres">1,13 %</span></li>
			<li><span class="s-left">Fecha pago primera cuota:</span>		<span id="comprobanteValorCuotaMensual">02/06/2016</span></li>
			<li><span class="s-left">Seguro de Desgravamen:</span>				<span id="ComprobseguroDesgravamen">Sí</span></li>
		</ul>
	</div>

	<p class="block-error iconed-24 hidden" id="errorOneClick">
	    <i class="icon-24 red m01-alerta"></i> <span id="descripcionErrorOneClick"></span>
	</p>

	<div class="footer-container-bck" id="divPeticionClave">
	    <!--<div class="footer-cont-btn" id="dvBtnQuieroCredito">
	        </div>-->
	    <div class="container-bck-control condicionesySeguros"  >
	        <div class="pin-sms-input large pin-sms-input-inline">
	            <section>
	                <div class="col-md-6" style="text-align:left;">
	                    <label for="legales" onclick="habilitaCampoClaveSeguros('claveSms');" class="ui-marmots-label-check marmots-label-left">
	                    He le&iacute;do y acepto los <a class="link modal-trigger" href="html/oneClick/dialogs/condiciones_consumo.html">t&eacute;rminos y condiciones</a> de este producto.
	                    <input id="legales" name="legales" type="checkbox"/>
	                    </label>
	                    <label for="legalesSeguros" onClick="habilitaCampoClaveSeguros('claveSms');" class="ui-marmots-label-check marmots-label-left" id="tabSeguros">
	                    Declaro haber le&iacute;do y estar de acuerdo con las coberturas de <br>los seguros a contratar.
	                    <input id="legalesSeguros" name="legalesSeguros" type="checkbox"/>
	                    </label>
	                </div>
	                <div class="form-group col-md-6 contentClavE">
	                    <label class="sms control-label" for="claveSms">
	                    Ingresa Clave SMS <span id="masInfoSMS" class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title=""></span>
	                    </label>
	                    <div class="form-inline">
	                        <input name="claveSms" id="claveSms" maxlength="7" minlength="7" class="form-control required number disabled" type="password" style="width:160px;" disabled="true" onkeyup="validaClaveSms()"/>
	                        <button type="button" id="btnConfirmar" class="btn btn-big disabled" onclick="confirmarTerceraClave()" disabled="true">
	                        <span>Confirmar</span>
	                        </button>
	                        <img class="ConfirmadoCheck chek-left" src="img/tick-active-small.png" style="display:none"/>
	                    </div>
	                </div>
	            </section>
	        </div>
	    </div>
	</div>



</div>
</div>

<!--
	FUNCIONES PÁGINA A UN CLICK
-->
 