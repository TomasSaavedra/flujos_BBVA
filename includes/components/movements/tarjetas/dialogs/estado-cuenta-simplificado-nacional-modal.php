<div id="" class="modal-dialog maxHeight table-color-black">
	<div class="modal-content">
		<div class="modal-box">
			<div id="contenedor-cuenta-simplificado" class="modal-body no-bottom table-line-height">				
				
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		if($('#historico-tarjetas-bbva-nacional').is(':checked')){
		$.ajax({
		   url: 'includes/components/movements/tarjetas/dialogs/S02-estado-cuenta-simplificado.php',
		   success: function(html) {
			  console.log(html)
			  $("#contenedor-cuenta-simplificado").append(html);
		   }
		});
		}else{
		$.ajax({
		   url: 'includes/components/movements/tarjetas/dialogs/S02-estado-cuenta-simplificado-internacional.php',
		   success: function(html) {
			  console.log(html)
			  $("#contenedor-cuenta-simplificado").append(html);
		   }
		});
		}
	});
</script>