<!-- consulta movimientos y transferencias -->

	<header>
		<div class="operation-header hidden-xs">
			<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
			<h3 class="tab-title">
				<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
				Realizar aporte solidario</h3>
		</div>
		<div class="operation-header visible-xs">
			<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
			<h3 class="tab-title">Realizar aporte solidario</h3>
			<hr>
		</div>
	</header>

<div class="tabmain-consultas descarga hidden-xs cartola-consultas">
	<form action="?src=S03-cuentas.php" method="post">
		<h3>Cartola Histórica</h3>
		<small>Selecciona el año y el mes de la cartola que quieres consultar</small>
		<div class="row filteroptions">
			<div class="col-md-6">
				<select class="selectpicker" data-container="body" data-width="120px">
					<option>2014</option>
					<option>2015</option>
					<option>2016</option>
				</select>
				<select class="selectpicker" data-container="body" data-width="120px">
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
			<div class="col-md-6">
				<button class="btn">
					<span class="icon-16 white l13-informe"></span>Ver Cartola
				</button>
				<button class="btn primary">
					<span class="icon-16 blue l02-excel"></span>Descargar Excell
				</button>
			</div>
		</div>
	</form>
</div>