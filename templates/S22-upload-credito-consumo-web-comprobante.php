<link rel="stylesheet" href="css/one-click.css" />

<div class="container one-click">
	<div class="container-bck clearfix">
		<header class="m-ofertas m-ofertas__encabezada">
			<h1 class="encabezada__titulo">Comprobante de Operación</h1> 
		</header>  

		<!-- Detalle -->
		<div class="exito-container-bck clearfix">
			<h2>Felicitaciones Juventina <span id="comprobanteNombre"></span></h2>
			<h3>Tu crédito actual ya fue pegado</h3>
		
			<span class="n-transaccion">Nº de transacción 050400219602116923</span>
			<ul class="detalle-list clearfix">
			 	<li>
					<span class="s-left">Monto solicitado:</span>			
					<span id=" ">$ 7.00.000</span>
				</li>
				<li>
					<span class="s-left">Plazo:</span>			
					<span id=" ">60 meses</span>
				</li>
				<li>
					<span class="s-left">Valor cuota mensual:</span>			
					<span id=" ">$399.646</span>
				</li>
				<li>
					<span class="s-left">Tasa mensual:</span>			
					<span id=" ">1,13%</span>
				</li>
				<li>
					<span class="s-left">Fecha primera cuota:</span>			
					<span id=" ">13/07/3026</span>
				</li>
				<li>
					<span class="s-left">Seguro de desgravamen:</span>			
					<span id=" ">Si</span>
				</li>
				<li>
					<span class="s-left">Polizas de Seguros:</span>			
					<span id=" "><i class="icon-16 blue l01-pdf"></i>Descargar</span>
				</li>
				<li>
					<span class="s-left">Seguro de Desgravamen:</span>			
					<span id=" "><i class="icon-16 blue l01-pdf"></i>Descargar</span>
				</li>
				<li>
					<span class="s-left">Fecha y hora:</span>			
					<span id=" ">05/05/2016 10:10</span>
				</li>
			</ul>
			<ul class="detalle-list" id="PolizaSeguro">
			</ul> 
			<p>
				El comprobante y detalle tu Crédito contratado <br> fue enviado a tu e-mail <span class="color-blue" id="comprobanteEmail">usuariocanales@gmail.com</span>
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
	</div>
</div> 