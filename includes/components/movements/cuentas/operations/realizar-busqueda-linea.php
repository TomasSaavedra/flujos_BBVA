<div id="consulta-credito">
	

	<header>
		<div class="operation-header hidden-xs">
			<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
			<div class="row">
				<div class="col-md-8"><h3 class="tab-title">
					<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button> Realizar Busqueda Personalizada</h3></div>
				<div class="col-md-4">
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
			<h3 class="tab-title"> Realizar Busqueda Personalizada</h3>
			<hr>
		</div>
	</header>

	<div class="tabmain-consultas">
		<form id="search-form" action="?src=S03-linea-credito.php" method="post">
			<div class="filters">
				<ul class="accordeon">
				
					<!-- date filter -->
					<li class="date-filter active">
						<a href="#"><span>Fecha</span></a>
						<div class="drop-content opened" style="display: block;">
							<div class="row">
								<div class="col-md-6">
									<input name="sample-radio-dates" id="filter-today" value="Hoy" type="radio" />
									<label for="filter-today">Hoy</label>
								</div>
								<div class="col-md-6 hidden-xs">
									<input name="sample-radio-dates" id="filter-yesterday" value="Ayer" type="radio" />
									<label for="filter-yesterday">Ayer</label>
								</div>
								<div class="col-md-6">
									<input name="sample-radio-dates" id="filter-week" value="Última semana" type="radio" />
									<label for="filter-week">Última semana</label>
								</div>
								<div class="col-md-6 hidden-xs">
									<input name="sample-radio-dates" id="filter-two-week" value="Últimas dos semanas" type="radio" />
									<label for="filter-two-week">Últimas dos semanas</label>
								</div>
								<div class="col-md-6">
									<input name="sample-radio-dates" id="filter-month" value="Último mes" type="radio" />
									<label for="filter-month">Último mes</label>
								</div>
								<div class="col-md-6 hidden-xs">
									<input name="sample-radio-dates" id="filter-two-month" value="Últimos dos meses" type="radio" />
									<label for="filter-two-month">Últimos dos meses</label>
								</div>
							</div>
							<div class="date-period">
								<input name="sample-radio-dates" id="filter-period" value="Período" type="radio" class="filter-period" />
								<label for="filter-period">Fecha concreta:</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="dateFieldFrom">Desde:</label>
											<input type="text" class="datepicker form-control dateFieldFrom" id="dateFieldFrom" name="dateFieldFrom" data-format="dd/mm/yy" placeholder="dd/mm/yyyy" disabled />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="dateFieldTo">Hasta:</label>
											<input type="text" class="datepicker form-control dateFieldTo" id="dateFieldTo" name="dateFieldTo" data-format="dd/mm/yy" placeholder="dd/mm/yyyy" disabled />
										</div>
									</div>
								</div>
							</div>
							<button class="btn confirm-button hidden-xs" disabled>Confirmar</button>
						</div>
					</li>
				</ul>
				
				<div class="filter-buttons">
					<button class="btn .clear-filters" type="button">
						<span class="icon-16 white n05-eliminar"></span>Borrar filtros
					</button>
					<button class="btn filter-results">
						<span class="icon-16 white l11-verdocumento"></span>Ver resultados
					</button>
				</div>
			</div>
		</form>
	</div>
	<hr class="tab-bottom visible-xs"/>

</div>