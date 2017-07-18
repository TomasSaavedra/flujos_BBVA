<script type="text/javascript" src="js/soho-valida-numero.js"></script>
<form class="Validacion" novalidate>

<div class="container">
	<div class="tab-pane contenedor-doble">

		<header>
			<a class="close-operation-tab" href="javascript:;"><span class="close-icon"></span></a>
			<h1 class="hidden-xs">Cotización del crédito</h1>
			<h5 class="visible-xs">Aumento cupo tarjeta de crédito</h5>
			<hr>
			<h2>Ingresa el monto y plazo del crédito a cotizar</h2>
		</header>

		<div class="content-contenedor-doble">

			<div class="contenedor-doble-left"> 
				<div>
					<label>Monto</label>
					<input type="text" class="form-control required number from dollar text-right" value="200.000">
					<small class="left">Min. $ 1.000.000</small>
					<small class="right">Max. $ 10.000.000</small>
				</div>

				<div>
					<label>Plazo (meses)</label>
					<input type="text" class="form-control required number from dollar dollar-nosig text-right" value="60">
					<small class="left">Min. 12 meses</small>
					<small class="right">Max. 60 meses</small>
				</div>

				<div id="select-dos">
					<label>Cuenta</label>

					 <select id="banco" name="banco"  class="selectpicker form-control required banco_selector"  >
					    <option value="" selected="selected" disabled="disabled">Seleccionar</option>
					    <option value="02" data-subtext="10.000.001" >0540-4567-3432675541 </option>
					    <option value="03" data-subtext="10.000.002" >0540-4567-3432675542</option>
                        <option value="03" data-subtext="10.000.003">0540-4567-3432675543</option>
					 </select>
				</div>

				<a href="#;" class="btn">Calcular</a>

			</div>

			<div class="arrow-destination"></div>

			<div class="contenedor-doble-right">
				<header>
					<h3>Tu cuota mensual será:</h3>
					<h4>$ 70.000/mes</h4>
					<ul>
						<li>Monto del crédito: $ 716.000</li>
						<li>Plazo en meses: 6</li>
						<li>Costo total: $ 10.021.200</li>
						<li>Carga anual equivalente: 15.03%</li>
					</ul>
					<p>Tiene otras alternativas de plazo y cuota para el monto solicitado</p>
				</header>
				<article class="capgemini-tables">
					<div class="tables-body">
					<table class="table">
						<tbody>
							<tr>
								<th class="first"></th>
								<th>Valor cuota ($)</th>
								<th>Plazo</th>
								<th class="hidden-xs">Costo total ($)</th>
								<th class="hidden-xs">Carga anual equivalente (%)</th>
								<th></th>
							</tr>
							<tr>
								<td><label for="cuota-mensual-01" class="ui-marmots-label-radio marmots-label-left">&nbsp;<input name="cuota-mensual" id="cuota-mensual-01" value="" type="radio"></label></td>
								<td class="link">19.940</td>
								<td><strong>48</strong></td>
								<td class="hidden-xs"><strong>957.120</strong></td>
								<td class="hidden-xs"><strong>15,43</strong></td>
								<td><a href="includes/components/movements/creditos/dialogs/detalle-cotizacion.html" class="modal-trigger"><i class="icon-blue-24 ico-doc"></i></a></td> 
							</tr>
							<tr>
								<td><label for="cuota-mensual-02" class="ui-marmots-label-radio marmots-label-left">&nbsp;<input name="cuota-mensual" id="cuota-mensual-02" value="" type="radio"></label></td>
								<td class="link">24.779</td>
								<td><strong>53</strong></td>
								<td class="hidden-xs"><strong>892.045</strong></td>
								<td class="hidden-xs"><strong>15,43</strong></td>
								<td><a href="includes/components/movements/creditos/dialogs/detalle-cotizacion.html" class="modal-trigger"><i class="icon-blue-24 ico-doc"></i></a></td>
							</tr>
							<tr>
								<td><label for="cuota-mensual-03" class="ui-marmots-label-radio marmots-label-left">&nbsp;<input name="cuota-mensual" id="cuota-mensual-03" value="" type="radio"></label></td>
								<td class="link">34.863</td>
								<td><strong>24</strong></td>
								<td class="hidden-xs"><strong>836.000</strong></td>
								<td class="hidden-xs"><strong>15,43</strong></td>
								<td><a href="includes/components/movements/creditos/dialogs/detalle-cotizacion.html" class="modal-trigger"><i class="icon-blue-24 ico-doc"></i></a></td>
							</tr>
						</tbody>
					</table>
					</div>
				</article>
			</div>
		</div>

		<div class="caja-aceptar">
			<label for="acepto-condiciones-check" class="ui-marmots-label-check marmots-label-left">
				He leido y acepto las condiciones precontractuales y de contratación de este producto
				<input id="acepto-condiciones-check" name="acepto-condiciones-check" type="checkbox">
			</label>

			<ul class="descarga-pdf">
				<li><i class="icon-blue-16 ico-pdf"></i><span>(245kb)</span> - <a href="#;" class="link">Términos y condiciones</a></li>
				<li><i class="icon-blue-16 ico-pdf"></i><span>(245kb)</span> - <a href="#;" class="link">Lorem ipsum dolor sit amet, consectetur adipisicing</a></li>
			</ul>

		</div>

		<div class="pin-sms-input large pin-sms-input-inline inline-large DivClaveSegura">
			<section>
				<div class="form-group">
					<label class="pin control-label" for="clave-segura">Introduzca su <strong>Clave Segura A9</strong></label>
					<div class="formline formline-right">
						<input name="clave-segura" maxlength="7" minlength="7" class="form-control required number" type="password">
						<button class="btn" type="button"><span>Confirmar</span></button>
					</div>
				</div>
			</section>
		</div>

	</div>


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
</form>