<?php
	$step = '';
	if(isset($_REQUEST['step'])){
		$step = $_REQUEST['step'];
	}
?>
<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-valida-numero.js"></script>
<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		<span class="TituloPagar">Pagar deuda</span></h3>
</div>

<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">Pagar deuda</h3>
	<hr>
</div>

<!-- Nacional -->

 <div class="pagar-deuda-tarjeta"><!--pagar-deuda-tarjeta--> 
 	
 	<p class="mBottom iconed-32 block-info marginTop">
		<i class="icon-32 blue m03-aviso"></i>
		Si no tienes Cuenta Corriente en BBVA, te ofrecemos diversas formas para que puedas pagar tu tarjeta de crédito:
	</p>

	<h2>¿Cómo puedo pagar la deuda de mi tarjeta?</h2>

	<div class="cont-modulo"><!--cont-modulo-->

		<div class="modulo modulo-medium"><!--modulo-->
			<span class="numero">1</span>
			<div class="body-modulo"><!--body-modulo-->
				<div class="inner-body">
					<h4><span class="icons-tarjeta icons-oficina"></span> Oficina</h4>
					<p>En cualquiera de nuestras sucursales.</p>
				</div>
			</div><!--Fin body-modulo-->
		</div><!--Fin modulo-->



		<div class="modulo modulo-medium"><!--modulo-->
			<span class="numero">2 </span>
			<div class="body-modulo"><!--body-modulo-->
				<div class="inner-body">
					<h4><span class="icons-tarjeta icons-pac"></span> PAC otros bancos</h4>
					<p>A través de un Pago Automático (PAC) desde otro banco.</p>
				</div>
			</div><!--Fin body-modulo-->
		</div><!--Fin modulo-->
		
	</div><!--cont-modulo-->


	<div class="cont-modulo"><!--cont-modulo-->

		<div class="modulo modulo-large"><!--modulo-->
			<span class="numero">3</span>
			<div class="body-modulo"><!--body-modulo-->
				<div class="inner-body">

					<div class="left"><!--left-->
						<h4><span class="icons-tarjeta icons-transferencia"></span> Transferencia</h4>
						<p>A través de una <strong>transferencia Electrónica de Fondos</strong> desde una cuenta corriente o vista de otro banco, hasta <strong>48h.</strong> antes de la fecha de vencimiento de tu Estado de cuenta. Sólo para tarjetas <strong>Visa Enjoy y Visa Forum.</strong></p>
					</div><!--Fin left-->

					<div class="right right-transferencia"><!--right-->
						<div class="inner-modulo"><!--inner-modulo-->
							<h5 class="title-base">Para pago de Visa Enjoy:</h5>
							<ul>
								<li><span class="colorBlue2">Cuenta corriente Banco BBVA:</span> Nº 77777</li>
								<li><span class="colorBlue2">R.U.T BBVA:</span> 97.032.000-8</li>
								<li><span class="colorBlue2">A nombre de:</span> BBVA</li>
								<li><span class="colorBlue2">Email:</span> tcenjoy@bbva.cl</li>
							</ul>
						</div><!--Fin inner-modulo-->

						<div class="inner-modulo"><!--inner-modulo-->
							<h5 class="title-base">Para pago de Visa Forum:</h5>
							<ul>
								<li><span class="colorBlue2">Cuenta corriente Banco BBVA:</span> Nº 77777</li>
								<li><span class="colorBlue2">R.U.T BBVA:</span> 97.032.000-8</li>
								<li><span class="colorBlue2">A nombre de:</span> BBVA</li>
							</ul>
						</div><!--Fin inner-modulo-->

					</div><!--Fin right-->
						
				</div>
			</div><!--Fin body-modulo-->
		</div><!--Fin modulo-->
	

</div><!--Fin pagar-deuda-tarjeta-->

