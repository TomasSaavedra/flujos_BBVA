<div class="table-detail bordered">
	<div class="table-detail-border">
		<header class="table-detail-header">
			<div class="table-tab table-tab-small">
				<div class="table-detail-border table-detail-border-small">
					<span class="table-detail-close"><a href="#"><span class="close-text">cerrar</span> <span class="close-icon"></span></a></span>
				</div>
			</div>
			<table class="detail">
				<tbody>
					<tr>
						<td><label for="servicio-pagar" class="ui-marmots-label-check marmots-label-left"><input id="servicio-pagar" name="acepto-condiciones-check" type="checkbox" value="01"></label>INP FONASA</td>
						<td>INPFONASA</td>
						<td>0000000235601234</td>
						<td>$ 9.900</td>
						<td class="xs-view">
							<div class="left">
								<a href="#">INPFONASA</a>
							</div>
							<div class="right">
								INPFONASA<br>
								<small>$ 9.900</small>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</header>
		<div class="table-content">
			<div class="definitions">
				<dl>
					<dd>AFP:</dd>
					<dt>$ 0</dt>
				</dl>
				<dl>
					<dd>Fondo de pensiones:</dd>
					<dt>$ 25.011</dt>
				</dl>
				<dl class="last-row">
					<dd>Seguro de cesantía:</dd>
					<dt>$ 0</dt>
				</dl>
			</div>
		</div>
	</div>
</div>

<script>
	$(".table-detail-close a").on("click", function(){
		var wizard = $("#form-transferencia .wizard");
		$(document).trigger('capgemini.wizard.resize', wizard);
	}) ;
</script>
