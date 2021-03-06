<script type="text/javascript" src="js/soho-creditos.js"></script>

<div id="consulta-credito">
	
	<header>
		<div class="operation-header hidden-xs">
			<a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
			<div class="row">
				<div class="col-md-8"><h3 class="tab-title">
					<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button> Consultar estado de cuotas</h3></div>
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
			<h3 class="tab-title">Consulta estado de cuotas</h3>
		</div>
	</header>

	<div class="tabmain-consultas">
		<form id="search-form" action="?src=S03-tarjetas.php" method="post">
			<div class="filters">
				<ul class="accordeon">
				
					<!-- date filter -->
					<li class="date-filter active">
						<a href="#"><span>Fecha</span></a>
						<div class="drop-content active" style="display: block;">
							<div class="row">
								<div class="col-md-12">
									<p class="mBottom iconed-32 block-info marginTop">
										<i class="icon-32 blue m03-aviso"></i>
										Puedes realizar <strong>consultas a futuro</strong> de los pagos con las condiciones actuales de financiación.
									</p>
								</div>
								<div class="col-md-12 filtro-anos">
									<div class="left">
										<input name="sample-radio-dates" id="filter-today" value="2017" type="radio" />
										<label for="filter-today">Año</label>
									</div>
									<div class="right">
										<select class="CreditoConsultaAno" data-container="body" data-width="120px" disabled>
											<option selected>2017</option>
											<option>2016</option>
											<option>2015</option>
											<option>2014</option>
											<option>2013</option>
											<option>2012</option>
											<option>2011</option>
											<option>2010</option>
											<option>2009</option>
											<option>2008</option>
											<option>2007</option>
											<option>2006</option>					
										</select>
									</div>
								</div>
							</div>
							<div class="date-period">
								<input name="sample-radio-dates" id="filter-period" value="Período" type="radio" class="filter-period" />
								<label for="filter-period">Fecha concreta:</label>
								<div class="row">
									<div class="col-md-6 left">
										<div class="form-group">
											<label for="dateFieldFrom">Desde:</label>
											<input type="text" class="datepicker form-control dateFieldFrom" id="dateFieldFrom" name="dateFieldFrom" data-format="dd/mm/yy" placeholder="dd/mm/yyyy" />
										</div>
									</div>
									<div class="col-md-6 left">
										<div class="form-group">
											<label for="dateFieldTo">Hasta:</label>
											<input type="text" class="datepicker form-control dateFieldTo" id="dateFieldTo" name="dateFieldTo" data-format="dd/mm/yy" placeholder="dd/mm/yyyy"/>
										</div>
									</div>
								</div>
							</div>
							<button class="btn confirm-button hidden-xs confirmar-fecha-consulta" disabled>Confirmar</button>
						</div>
					</li>
					
				</ul>
				
				<div class="filter-buttons">
					<button class="btn .clear-filters" type="button">
						<span class="icon-16 white n05-eliminar"></span>Borrar Todo
					</button>
					<button class="btn ver-resultados-consulta">
						<span class="icon-16 white l11-verdocumento"></span>Ver resultado
					</button>
				</div>
			</div>
		</form>
	</div>

	<hr class="tab-bottom visible-xs"/>

</div>

