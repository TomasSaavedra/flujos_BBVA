
<div id="container-seg" class="container js-contratar-seguro" style="display:none;">

	<section class="contratacion-seguro">
		<header>
			<h1>Contratación de seguro de Fraude BBVA</h1>
			<a class="close-operation-tab" href="javascript:;"><span class="close-icon"></span></a>
		</header>

		<div class="paso1-contratacion"><!--paso1-contratacion-->

			<article class="datos-seguro"><!--datos-seguro-->
				<div class="datos-personales">
					<label>Nombre:</label> 
					<p>Leon Calvillo Banuelo</p>
				</div>

				<div class="datos-personales">
					<label>RUT:</label> 
					<p>10.345.345-2</p>
				</div>

				<div class="datos-personales">
					<label>Email de aviso:</label> 
					<p>lorem@ipsum.cl</p>
				</div>

				<div class="select-cuenta">
					<h3>Cuenta de cargo PAC</h3>
					<div id="select-dos">
						 <select id="banco" name="banco"  class="selectpicker form-control required banco_selector">
						    <option value="" selected="selected" disabled="disabled">Seleccionar</option>
						    <option value="02" data-subtext="10.000.001" >0540-4567-3432675541 </option>
						    <option value="03" data-subtext="10.000.002" >0540-4567-3432675542</option>
	                        <option value="03" data-subtext="10.000.003">0540-4567-3432675543</option>
						 </select>
					</div>

					<button class="btn btn-center btn-contratar">Contratar</button>

				</div>
			</article><!--Fin datos-seguro-->

			<div class="arrow-destination"></div> 

			<article class="costo-seguro text-center"><!--costo-seguro-->
				<h2>Tu prima mensual será:</h2>
				<p class="valor">UF 0,18</p>
				<h3>Coberturas:</h3>
				<ul class="unstyle color-blue">
					<li>Lorem ipsum dolor sit ame <span class="ckeck-azul"></span></li>
					<li>Lorem ipsum dolor sit ame <span class="ckeck-azul"></span></li>
				</ul>

				<hr>
				<div class="block-info2">
					<i class="icon-32 blue m03-aviso"></i>
					<p><strong> En el caso de dudas o consultas</strong> <br> Llama a línea BBVA 600 600 1100</p>
				</div>
			</article><!--Fin costo-seguro-->


			<div class="caja-aceptar"><!--caja-aceptar-->
				<label for="acepto-condiciones-check" class="ui-marmots-label-check marmots-label-left">
					He leido y acepto las condiciones precontractuales y de contratación de este producto
					
				<input id="acepto-condiciones-check" name="acepto-condiciones-check" type="checkbox" value="01"></label>

				<ul class="descarga-pdf">
					<li><i class="icon-blue-16 ico-pdf"></i><span>(245kb)</span> - <a href="#;" class="link">Términos y condiciones PAC</a></li>
					<li><i class="icon-blue-16 ico-pdf"></i><span>(245kb)</span> - <a href="#;" class="link"> Detalle Coberturas y exclusiones del seguro</a></li>
				</ul>
			</div><!--caja-aceptar-->

			<div class="pin-sms-input large pin-sms-input-inline inline-large DivClaveSegura" style="display:none;"><!--CLAVE SEGURA-->
				<section>
					<div class="form-group">
						<label class="sms control-label" for="clave-segura">Introduzca la clave recibida por SMS</label>
						<div class="formline formline-right">
							<input name="clave-segura" maxlength="7" minlength="7" class="form-control required number" type="password">
							<button class="btn btn-confirmar" type="button"><span>Confirmar</span></button>
						</div>
					</div>
				</section>
			</div><!--FIN CLAVE SEGURA-->

		</div><!--Fin paso1-contratacion-->

		<div class="paso2-contratacion" style="display:none;"><!--paso2-contratacion-->

			<div class="comprobante-contratacion"><!--comprobante-contratacion-->
				<img alt="Ok" title="Ok" src="img/tick.png">
				<div class="textos">
					<h3>Has completado la contratación de tu seguro</h3>
					<p>Puedes enviarte o descargarte el contrato en las opciones que se muestran a continuación.</p>
				</div>
			</div><!--Fin comprobante-contratacion-->

			<div class="datos"><!--datos-->

				<a class="btnGrisInner js-btn-enviar" href="" title="">
					<span class="icon-32 blue m07-correspondenciavirtual" title="Enviar"></span>
					Enviar a: Lorem@ipsum.cl
					<span class="check-verde-16" style="display:none;"></span>
				</a>

				<a class="modificar-mail modal-trigger icon-flecha" href="includes/components/movements/seguros/catalogo-productos/dialogs/modificar-email.html" title="">
					Modificar Email 
					<span class="flecha-link"></span>
				</a>

				<a class="btnGris" href="" title="#;">
					<span class="icon-32 blue l01-pdf" title="Descargar pdf"></span>
					Descargar en PDF
				</a>


			</div><!--Fin datos-->

			<section class="contratar"><!--contratar-->
				<div class="textos">
					<h4>Lorem ipsum dolor sit amet, consectetur adpiscing elit</h4>
					<p>Lorem ipsum dolor sit amet</p>
				</div>

				<a href="#" class="btn">Contratar</a>
			</section><!--contratar-->				

		</div><!--Fin paso2-contratacion-->


		<div class="btn-cerrar" style="display:none;">
			<div class="doble-linea"> <hr> </div>
			<button class="btn large btn-center btn-contratar-seguro">Cerrar</button>
		</div>			


	</section>

</div>

<script type="text/javascript">
   $('#banco').selectpicker();
      setTimeout(function(){
       $('.banco_selector a').on('click',function(){
       var li =$(this).parent();
       var selector = $('select#banco');
       var options = $('select#banco option');
       var pos = li.attr('rel');
       var option = options.get(parseInt(pos));
       var appendData= option.attributes['data-subtext'];
       appendData= $(appendData).val();

       var boton = $('.banco_selector').find('button[data-id="banco"]');
       if ($('#banco_selector_smallAttach').length>0){
           $('#banco_selector_smallAttach').html(appendData);

       }else{
           var childrens = boton.children();
           boton.html("");
           boton.append(childrens.get(0));
           boton.append("<small id='banco_selector_smallAttach' class=\"muted text-muted\">"+appendData+"</small>");
           boton.append(childrens.get(1));
       }


       });

   }, 10);

</script>

<script>
	$(document).ready(function() {
		$('.btn-confirmar').click(function() {
			$('.paso1-contratacion').hide();
			$('.paso2-contratacion').show();
			$('.btn-cerrar').show();
		});

		$('.btn-contratar').click(function() {
			$('.DivClaveSegura').show();
		});

		$('.js-btn-enviar').click(function(e) {
			e.preventDefault();
			$('.check-verde-16').show();
		});

		$('#container-seg .contratar, #container-seg .btn-contratar-seguro').click(function() {
			$('#container-seg').hide();
			$('#filtro-seguros').show();
		});

	});
</script>
