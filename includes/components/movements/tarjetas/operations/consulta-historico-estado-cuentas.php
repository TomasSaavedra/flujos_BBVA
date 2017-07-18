<div id="operacion-consulta">

	<header>
		<div class="operation-header hidden-xs">
			<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
			<div class="row">
				<div class="col-md-9"><h3 class="tab-title"><button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button> Consultar Histórico Estado de Cuentas</h3></div>
				<div class="col-md-3">
					<div class="row iconos-head">
						<div class="col-md-12 col-md-offset-4">
							<button class="btn primary"><span class="icon-16 blue l01-pdf"></span></button>
							<button class="btn primary"><span class="icon-16 blue l02-excel"></span></button>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="operation-header visible-xs">
			<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
			<h3 class="tab-title">Consultar Histórico Estado de Cuentas</h3>
		</div>
	</header>

	<div class="operation-body">
		<div class="tabmain-consultas consultas-padding descarga historico-est">
		    <form action="?src=S03-tarjetas.php" method="post">
				<h3>Histórico de Estado de cuentas</h3>
				<div class="radio-consulta consulta-historico">
					<label class="on historico-tarjetas-bbva-nacional" for="historico-tarjetas-bbva-nacional">Nacional
						<input type="radio" value="nacional" name="historico-tarjetas-bbva" id="historico-tarjetas-bbva-nacional" data-filter-type="disabler" checked />
					</label>
					<label class="off historico-tarjetas-bbva-internacional" for="historico-tarjetas-bbva-internacional">Internacional
						<input type="radio" value="internacional" name="historico-tarjetas-bbva" id="historico-tarjetas-bbva-internacional" data-filter-type="disabler" />
					</label>
				</div>
				<small class="seleccion-txt">Selecciona el período que quieres consultar</small>
				<div class="row filteroptions cons-estado-cuentas">
					
					<div class="col-md-3">
						<select class="selectpicker" data-container="body">
							<option>Enero</option>
							<option>Febrero</option>
							<option>Marzo</option>
							<option>Abril</option>
							<option>Mayo</option>
							<option>Junio</option>
							<option>Julio</option>
							<option>Agosto</option>
							<option>Septiembre</option>
							<option>Octubre</option>
							<option>Noviembre</option>
							<option>Diciembre</option>					
						</select>
					</div>

					<div class="col-md-3">
						<select class="selectpicker" data-container="body">
							<option>2014</option>
							<option>2015</option>
							<option>2016</option>
						</select> 
					</div>

					<div class="col-md-6 col-btns">
						<div class="btns-consulta-tarjeta">
							<button class="btn modal-trigger BotonVerCartola small-ver-cartola" type="button" data-href="includes/components/movements/tarjetas/dialogs/estado-cuenta-simplificado-nacional-modal.php">
								Ver Estado de Cuenta Simple
							</button>
							<!--<button class="btn primary">
								<span class="icon-n-24 icono-pdf"></span>Descargar completo
							</button>-->
						</div>
					</div>
				</div>
				<div class="row filteroptions cons-estado-cuentas">
					<div class="col-md-12 col-btns" style="padding:0;">
						<div class="col-md-3 btns-consulta-tarjeta">
							<a style="text-decoration: underline;" data-href="includes/components/movements/tarjetas/dialogs/estado-cuenta.html" class="cursor btn-home-seguros btn-seguros-siguiente modal-trigger"><span style="background-size: 30px;" class="icon-n-25-eecc"></span>Ver resumen</a>
						</div>
						<div class="col-md-4 btns-consulta-tarjeta">
							<a style="text-decoration: underline;" class="cursor btn-home-seguros btn-seguros-siguiente modal-trigger"><span style="padding-left: 20px;" class="icon-16 blue l02-excel"></span>Descargar en Excel</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</div>

