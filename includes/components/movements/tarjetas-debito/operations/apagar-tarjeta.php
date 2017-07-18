
<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		Off / On Tarjetas
		<p style="margin-left: 98px; color: #71777f;">Podrás apagar y encender tus tarjeta en cualquier comento.</p>
		</h3>
</div>
<script type="text/javascript" src="js/soho.js"></script>

<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">Off / On Tarjetas</h3>
	<hr>
</div>

<div class="bloqueo-tarjetas">
	<div class="main-bloqueo-tarjetas">
		<form class="form-horizontal tooltip-validation transfer-filter" action="">
			<article class="capgemini-tables holder">
				<div class="tables-body table-scroll">
					<table class="responsive">
						<thead>
							 <tr>
							 	<th></th>
	                            <th>Tarjeta de crédito</th>
	                            <th class="plazo">Estado</th>
	                        </tr>
	                    </thead>
							<tbody>
							<tr class="switch-table">
								<td data-content="">
									<img src="img/thum_cardDebito.png" class="logo-tablet" alt="BBVA TARJETA" title="BBVA TARJETA"/>
								</td>
								<td id="details" data-content="Tarjeta">
									<div class="active"></div>
									<h3 class="debitoTitulo">XXXX-7701 JOHN DOE DOE</h3>
								</td>
								<td data-content="Estado">
									<div class="checkbox">
									    <label class="switch">
										 <input type="checkbox">
										  	<div class="slider left" id="switch">
										  	</div>
										</label>
									</div>
									<span id="estado">Desactivado</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</article>
			<div class="block-warning iconed-24" id="divMensaje">
                <span class="icon-24  m03-aviso"></span>
                <p style="margin: 0px 0 0px !important;">Al apagar tus tarjetas no podrás realizar: compras, avances, giros y consultas en Cajeros Automáticos o Banco fácil. Enviaremos a tu email un comprobante cada vez que apagues o enciendas tu tarjeta.</p>
        	</div>
		</form>
	</div>
</div>
<hr class="operation-bottom visible-xs"/>

<script type="text/javascript">
	$(function(){
		$('#divMensaje').hide();
		$("#switch").on("click", function(){  
		  var switchActived = $(this).hasClass('left');
		  if(switchActived){
			$('#estado').text("Activado");
			$('#details').addClass('encender');
			$('#details').removeClass('apagar');
			$(this).removeClass('left');
			$(this).addClass('right');
			
			$('#divMensaje').fadeOut();
		  }else{
			$('#estado').text("Desactivado");
			$('#details').addClass('apagar');
			$('#details').removeClass('encender');
			$(this).addClass('left');
			$(this).removeClass('right');
			$('#divMensaje').fadeIn(); 
			setTimeout(function(){ 
				$('#divMensaje').fadeOut();
			},5000);
		  }
		});
		$("#switch").trigger('click');
	});
</script>