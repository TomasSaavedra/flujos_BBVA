	<?php
		$step = '';
		if(isset($_REQUEST['step'])){
			$step = $_REQUEST['step'];
		}
	?>


<div class="container">
		
	<div class="menu-miga">
		<p><a href="?src=S02-cuentas.php">Inicio</a><a href="?src=S02-seguros.php">Seguros</a> <span>Seguro Hogar</span></p>
	</div>

	<div class="section-tabs">
		<!-- Utility icons -->
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
		</div>
		<!-- title -->
		<h2 class="title-sh">Cotiza tu Seguro Automotriz</h2>
		<hr class="separador">

		<div class="seguro-automotriz">
				<div class="banner">
					<img src="img/seguro-automotriz.png">
				</div>

				<div class="col-md-12">
						<form id="formulario" method="post" class="carInsurance">
							<div class="column" style="width: 100%">
								<div class="quiero-info" style="text-align: center;">
									<h2>Formulatio de solicitud</h2>
									<span class="tipo-cuenta">Envía tu solicitud y te contactaremos para gestionar tu seguro.</span>
								</div>
								 <div class="row">
								 	<div class="col-md-8 col-md-offset-3 col-sm-8 col-md-offset-3">
										<div class="options">
											<div class="title">¿Eres el dueño del vehículo?</div>
											<div class="col-md-4 selectId">
												<label class="ui-marmots-label-radio marmots-label-left on" data-name="owner" data-value="yes">  Si </label>
                                                <label class="ui-marmots-label-radio marmots-label-left" data-name="owner" data-value="no">  No </label>
											</div>
										</div>
									</div>
								</div>
										<div id="notOwner" style="display: none;">
											<h1>Datos del asegurado</h1>
											<hr class="separador">
												<div class="col-lg-12 col-md-12">
						                			<div class="form-group big-blue col-sm-12 col-md-4 col-lg-4">
                                                    	<div class="">
                                                            <p> RUT </p>
                                                            <input type="number" name="" class="form-control"> 
                                                        </div>
                                                    </div>

                                                    <div class="form-group big-blue col-sm-12 col-md-4 col-lg-4">
                                                        <div class=" ">
                                                            <p>Comuna </p>
                                                            <select class="selectpicker" data-container="body">
                                                                <option>Selecciona una comuna</option>
                                                                <option>Opción 1</option>
                                                                <option>Opción 2</option>
                                                                <option>Opción 3</option>               
                                                            </select>
                                                        </div>
                                                    </div>

                                                

                                                    <div class="col-sm-12 col-md-4 col-lg-4">
														<div class="form-group">
															<label for="dateFieldTo" style="margin-top: 10px">Fecha de nacimiento</label>
															<input type="text" class="datepicker form-control dateFieldTo" id="dateFieldTo" name="dateFieldTo" data-format="dd/mm/yy" placeholder="dd/mm/yyyy" id="fecha-nacimiento"/>
														</div>
													</div>



                                                    <div class="col-sm-12 col-md-12 col-lg-12 pull-right">
                                                    Sexo
														<label data="" class="ui-marmots-label-radio marmots-label-left on" data-name="sex" data-value="yes">  Masculino </label>
                                                		<label data="" class="ui-marmots-label-radio marmots-label-left" data-name="sex" data-value="no"> Femenino </label>
													</div>
												</div>
											</div>


										<div id="#owner" >
											<h1>Datos del vehículo</h1>
											<hr class="separador">
												<div class="col-lg-12 col-md-12" >
						                			<div class="form-group big-blue col-sm-12 col-md-4 col-lg-4">
                                                    	<div class="">
                                                            <p> Marca </p>
                                                            <select class="selectpicker" data-container="body">
                                                                <option>Seleccionar</option>
                                                                <option>Opción 1</option>
                                                                <option>Opción 2</option>
                                                                <option>Opción 3</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group big-blue col-sm-12 col-md-4 col-lg-4">
                                                        <div class=" ">
                                                            <p>Modelo </p>
                                                            <select class="selectpicker" data-container="body">
                                                                <option>Seleccionar</option>
                                                                <option>Opción 1</option>
                                                                <option>Opción 2</option>
                                                                <option>Opción 3</option>               
                                                            </select>
                                                        </div>
                                                    </div>

                                                     <div class="form-group big-blue col-sm-12 col-md-4 col-lg-4">
                                                        <div class=" ">
                                                            <p>Año </p>
                                                            <select class="selectpicker" data-container="body">
                                                                <option>Seleccionar</option>
                                                                <option>Opción 1</option>
                                                                <option>Opción 2</option>
                                                                <option>Opción 3</option>               
                                                            </select>
                                                        </div>
                                                    </div>
												</div>
											</div>

								<div class="text-center">   	
	                            	<button class="btn next" type="button" id="boton-comprobante-automotriz" link="?src=S12-seguro-automotriz-comprobante.php"><span>Enviar Solicitud</span></button>
                                </div>
							</div>
						</form>
				</div>

				<hr class="separador">	
			<div class="_maqueta-switch">

					<ul id="li-tabs-maqueta">
						<li><a  class="ui-state-default ui-corner-top btn-panel1 select">¿Que Cubre?<span class="arrow-trans" style="display: block;"></span></a></li>
						<li><a  class="ui-state-default ui-corner-top btn-panel2">¿Que no Cubre? <span class="arrow-trans" style="display: none;"></span></a></li>
						<li><a  class="ui-state-default ui-corner-top btn-panel3"> Beneficios Especiales <span class="arrow-trans" style="display: none;"></span></a></li>
						<li><a  class="ui-state-default ui-corner-top btn-panel4"> Preguntas Frecuente <span class="arrow-trans" style="display: none;"></span></a></li>		
					</ul>

					<!--Pestaña 1-->
						<div id="panel1" class="mis-movimientos" >
							<article class="capgemini-tables holder">								
								<div class="tableQueCubre">
									<div class="tables-body table-scroll">
										<fieldset>
											<div class="col-lg-12 col-md-12">
												<div class="row">
													<div class="col-md-6 col-sm-12">
														<div class="auto"></div>
													</div>
													<div class="col-md-6 col-sm-12 autolista">
														<ul>
															<li>
																Sed dignissim vitae nulla sit amet laoreet. Fusce accumsan, odio ut feugiat ornare, sem lectus
															</li>
															<li>
																Sed dignissim vitae nulla sit amet laoreet. Fusce accumsan, odio ut feugiat ornare, sem lectus congue est
															</li>
															<li>
																Sed dignissim vitae nulla sit amet laoreet. Fusce accumsan, odio ut feugiat ornare, sem lectus congue est
															</li>
														</ul>
													</div>
												</div>
											</div>
										</fieldset>
									</div>
								</div>
							</article>		
						</div>

					<!--Pestaña 2-->
						<div id="panel2" class="mis-movimientos" style="display: none;">
							<article class="capgemini-tables holder">								
								<div class="tableQueCubre">
									<div class="tables-body table-scroll">
										<fieldset>
											<div class="col-lg-12 col-md-12">
												<div class="row">
													<div class="col-md-6 col-sm-12">
														<div class="auto"></div>
													</div>
													<div class="col-md-6 col-sm-12 autolista">
														<ul>
															efsdfsd
														</ul>
													</div>
												</div>
											</div>
										</fieldset>
									</div>
								</div>
							</article>		
						</div>

						<!--Pestaña 3-->
						<div id="panel3" class="mis-movimientos"  style="display: none;">
							<article class="capgemini-tables holder">								
								<div class="tableQueCubre">
									<div class="tables-body table-scroll">
										<fieldset>
											<div class="col-lg-12 col-md-12">
												<div class="row">
													<div class="col-md-6 col-sm-12">
														<div class="auto"></div>
													</div>
													<div class="col-md-6 col-sm-12 autolista">
														<ul>
															sfsfsddfsdf
														</ul>
													</div>
												</div>
											</div>
										</fieldset>
									</div>
								</div>
							</article>		
						</div>
						<!--Pestaña 4-->
						<div id="panel4" class="mis-movimientos"  style="display: none;">
							<article class="capgemini-tables holder">								
								<div class="tableQueCubre">
									<div class="tables-body table-scroll">
										<fieldset>
											<div class="col-lg-12 col-md-12">
												<dl>
													<dt>Titulo 1</dt>
													<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur maxime cupiditate nesciunt molestias itaque vel reiciendis officiis explicabo cum impedit dolorem quod minus beatae architecto necessitatibus sed exercitationem aliquam omnis!</dd>

													<dt>Titulo 2</dt>
													<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates mollitia quos! Dolor cum vitae aperiam deserunt hic quas quidem qui excepturi minima repudiandae pariatur id sit dignissimos laborum provident velit!</dd>

													<dt>Titulo 3</dt>
													<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio voluptatum expedita sunt voluptatibus ratione assumenda quo animi numquam blanditiis asperiores illo laudantium et quae itaque reiciendis nam ducimus officiis officia?</dd>

													<dt>Titulo 4</dt>
													<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto obcaecati numquam nemo quasi omnis accusamus illo distinctio doloribus architecto culpa maiores blanditiis laborum accusantium assumenda vero necessitatibus optio? Ipsa perferendis.</dd>

													<dt>Titulo 5</dt>
													<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto obcaecati numquam nemo quasi omnis accusamus illo distinctio doloribus architecto culpa maiores blanditiis laborum accusantium assumenda vero necessitatibus optio? Ipsa perferendis.</dd>
												</dl>	
											</div>
										</fieldset>
									</div>
								</div>
							</article>		
						</div>
			</div>

			<div class="terminos">
				<h1>Terminos y condiciones</h1>
				<hr class="separador">
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non dictum mauris. Duis a eros pulvinar, semper libero in, placerat augue. Vestibulum vitae ex eget lacus lobortis tincidunt. Quisque ut elit elementum, laoreet est sed, rhoncus dui. Mauris blandit ante sed libero eleifend tincidunt. Integer orci ex, volutpat ut arcu ut, venenatis venenatis ligula. Ut purus sapien, feugiat vitae hendrerit eget, ultricies bibendum enim. Phasellus vehicula, velit ut venenatis tincidunt, ex nunc placerat nisi, id dapibus elit arcu et odio. 
					</p>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

$('label[data-name="owner"]').on('click', function(){
	var selectLabel = $(this);
	var value = selectLabel.data('value');
		if (value === 'yes') {
			$('#notOwner').fadeOut('slow');

		}else{
			$('#notOwner').fadeIn('slow');
		}
		$('label[data-name="owner"]').removeClass('on');
			selectLabel.addClass('on');
});


$('label[data-name="sex"]').on('click', function(){
	var selectLabel = $(this);
		$('label[data-name="sex"]').removeClass('on');
		selectLabel.addClass('on');
});

$('#fecha-nacimiento').on('focus', function(e){
    	$('#boton-comprobante-automotriz').removeAttr("disabled");
});

$('#boton-comprobante-automotriz').click(function(event) {
    	event.preventDefault();
        window.open($("#boton-comprobante-automotriz").attr('link'),'_self')
});

$("._maqueta-switch .btn-panel1").click(function() {
	$(".btn-panel1, .btn-panel2, .btn-panel3, .btn-panel4").removeClass("select");
	$(".btn-panel1 span, .btn-panel2 span, .btn-panel3 span, .btn-panel4 span").hide();
	$(".btn-panel1 span").show();
	$(this).addClass("select");
	//
	$("#panel1").show();
	$("#panel2").hide();
	$("#panel3").hide();
	$("#panel4").hide();
});

$("._maqueta-switch .btn-panel2").click(function() {
	$(".btn-panel1, .btn-panel2, .btn-panel3, .btn-panel4").removeClass("select");
	$(".btn-panel1 span, .btn-panel2 span, .btn-panel3 span, .btn-panel4 span").hide();
	$(".btn-panel2 span").show();
	$(this).addClass("select");
	//
	$("#panel1").hide();
	$("#panel2").show();
	$("#panel3").hide();
	$("#panel4").hide();
});

$("._maqueta-switch .btn-panel3").click(function() {
	$(".btn-panel1, .btn-panel2, .btn-panel3, .btn-panel4").removeClass("select");
	$(".btn-panel1 span, .btn-panel2 span, .btn-panel3 span, .btn-panel4 span").hide();
	$(".btn-panel3 span").show();
	$(this).addClass("select");
	//
	$("#panel1").hide();
	$("#panel2").hide();
	$("#panel3").show();
	$("#panel4").hide();
});
$("._maqueta-switch .btn-panel4").click(function() {
	$(".btn-panel1, .btn-panel2, .btn-panel3, .btn-panel4").removeClass("select");
	$(".btn-panel1 span, .btn-panel2 span, .btn-panel3 span, .btn-panel4 span").hide();
	$(".btn-panel4 span").show();
	$(this).addClass("select");
	//
	$("#panel1").hide();
	$("#panel2").hide();
	$("#panel3").hide();
	$("#panel4").show();
});
$('dl dd').hide();
       $('dl dt').click(function(){
          if ($(this).hasClass('activo')) {
               $(this).removeClass('activo');
               $(this).next().slideUp();
          } else {
               $('dl dt').removeClass('activo');
               $(this).addClass('activo');
               $('dl dd').slideUp();
               $(this).next().slideDown();
          }
       });

</script>