  <link rel="stylesheet" href="css/one-click.css" />

<div class="container one-click ">

<div class="container-bck clearfix">
	<header class="m-ofertas m-ofertas__encabezada">
		<h1 class="encabezada__titulo">Comprobante de Operación</h1> 
	</header>  

	<!-- Detalle -->
	<div class="exito-container-bck clearfix">
		<h2>Felicitaciones <span id="comprobanteNombre"></span></h2>
		<h3>ya tienes tu Tarjeta Adicional</h3>
		<span class="check-exito"></span>
		<!--<span class="n-transaccion">N?? de transacci&oacute;n <strong id="comprobanteNroTransaccion"></strong></span>-->
		<ul class="detalle-list clearfix">
		 	<li>
				<span class="s-left">Fecha y hora:</span>			
				<span id=" ">07/04/2016  13:13</span>
			</li>
			<li>
				<span class="s-left">Nuevo Cupo Nacional:</span>			
				<span id=" ">$6.000.000</span>
			</li>
			<li>
				<span class="s-left">Nuevo Cupo Internacional:</span>			
				<span id=" ">$6.000.000</span>
			</li>
			<li>
				<span class="s-left">Número tarjeta:</span>			
				<span id=" ">XXXX-3430</span>
			</li>
		</ul>
		<ul class="detalle-list" id="PolizaSeguro">
		</ul> 
		<p>
			El comprobante y detalle de tu Tarjeta adicional <br> fue enviado a tu e-mail <span class="color-blue" id="comprobanteEmail">usuariocanales@gmail.com</span>
		</p> 
	</div>  	 

	<!-- Botones -->
	<div class="exito-container-bck-footer">

		<div class="footer-cont-btn">
			
			<button onclick="validarSalidaVentana();" id="btnGeneraPDFComprobante" class="btn primary left" type="button" style="margin-top:15px;padding:10px;">
				<i class="icon-32 blue l01-pdf"></i> Guardar comprobante
			</button>
			 
			<a id="linkVer" class="btn btn-big2 btn-big-blue">
				Ver nuevo cupo de mi Tarjeta de Crédito
			</a>
		</div>

		<div class="botonesComprobante hidden">
			<button class="btn primary left hidden-para-pruebas" type="button" onclick="javascript:levantaModalEnvioCorreo(true,'comprobante Credito Aprobado',ocConsumo.correoRegistrado,'enviarComprobanteCreditoAprobado');">
				<i class="icon-32 blue m07-correspondenciavirtual"></i> Enviar comprobante por email
			</button>
		</div>
	</div>

	<!-- <div class="exito-container-bck">
		<h2>Felicitaciones Juan Manuel</h2>
		<h3>Tu seguro ha sido contratado exitosamente</h3>
		<span class="n-transaccion">Nº de transacción 9872866735525</span>

		<span class="check-exito"></span>  
		<ul class="detalle-list">
			<li><span class="s-left">Fecha y hora:</span><span>20/08/2014 18:32</span></li>
			<li><span class="s-left">Seguro:</span><span>Seguro contra Fraude</span></li>
			<li><span class="s-left">Plan:</span><span>Premium</span></li> 
			<li><span class="s-left">N° de póliza:</span><span>5667789</span></li> 
			<li><span class="s-left">Inicio vigencia:</span><span>0-03-2014</span></li> 
			<li><span class="s-left">Materia asegurada:</span><span>05040142150600111607</span></li> 
			<li><span class="s-left">Forma de pago:</span><span>CUENTA 0504-0142-0100123110</span></li> 
			<li><span class="s-left">Prima:</span><span>$ 4.000 ANUAL</span></li> 
			<li><span class="s-left">Compañia Aseguradora:</span><span>BBVA SEGUROS DE VIDA</span></li> 
			<li><span class="s-left">Contratante:</span><span>BANCO BBVA 97.032.000-8</span></li> 
		</ul>  
	</div>
	<div class="exito-container-bck-footer"> 
		<div class="botonesComprobante">	
			<button class="btn primary right" type="button"><i class="icon-32 blue l01-pdf"></i> Guardar comprobante</button>
			<a href="#;" class="btn btn-big2 btn-big-blue btn-responsivo">Volver al Inicio</a>
		</div>
	</div>

-->



</div>
</div>

<!--
	FUNCIONES PÁGINA A UN CLICK
-->
 