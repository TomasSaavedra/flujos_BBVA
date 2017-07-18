 
<div class="container">

	<h2>Pago automático de cuentas</h2>
	<hr class="separador">
		
	<div id="consulta-pagos">
		<div class="content-column">
			<div id="tabs-container-inter">
				<ul class="tabs-menu">
			        <li class="current"><a href="#tab-1">Consulta pagos</a></li>
			        <li><a href="#tab-2">PAC contratados</a></li>
	    		</ul>

	    		<a href="includes/components/movements/cuentas/dialogs/suscribir-pac.html" class="btn btn-suscribir-pac modal-trigger">Contratar PAC</a>

	    		<div class="tab">
	        		<div id="tab-1" class="tab-inter-content cont-consultas">
	        			<div class="pac-operation operation1">
	        				<img src="img/operacion-pac1.jpg">
	        			</div>
						<!--?php include 'includes/components/movements/pago-automatico/tabs.html'; ?-->
						<!--?php include 'includes/components/movements/pago-automatico/table-consulta-pagos.html'; ?-->
	       			</div>
			        <div id="tab-2" class="tab-inter-content cont-suscritos">
			        	<div class="pac-operation operation2">
			        		<img src="img/operacion-pac2.jpg">
			        	</div>
						<!--?php include 'includes/components/movements/pago-automatico/table-pac-suscritos.html'; ?-->
			        </div>
	   			</div>
			</div>
		</div>
	</div>
	



	<div class="banner-column" id="ahorro-lateral" style="width:236px; float:right;">
	<aside class="simplica-pagos">
	<div class="inner-pagos">
		<header>
			<h1>Simplifica tus pagos con los PAC</h1>
		</header>

		<span class="pull-left"></span>
		<ul class="bullet-verde">
			<li><span class="icon-check"></span>Ahorra <strong>tiempo</strong></li>
			<li><span class="icon-check"></span>Evita cobros por <strong>retratos</strong></li>
			<li><span class="icon-check"></span>Revisa el <strong>detalle</strong> de pagos</li>
			<li><span class="icon-check"></span><strong>Controla</strong> con montos máximos</li>
			<li><span class="icon-check"></span>Recibe <strong>emails</strong> por cada pago</li>
		</ul>
		<p>Suscribe tus PAC y pruebalo! Sólo necesitas el <strong>número de cliente</strong> de tu proveedor de servicio.</p>
<!--		<a href="#" class="btn small">M&aacute;s informaci&ooacute;n</a>-->

	</div>
	
</aside>
		<!--?php include 'includes/components/banners/simplica-tus-pagolo que te dije...s.html'; ?-->
		<!--?php include 'includes/components/banners/pagos-automaticos.html'; ?-->
		<!--?php include 'includes/components/banners/transferencias-programadas.html'; ?-->
		<!--?php include 'includes/components/banners/operaciones-favoritas.html'; ?-->
	</div>
</div>


<script>
	$(document).ready(function() {
	    $("#tabs-container-inter .tabs-menu a").click(function(event) {
	        event.preventDefault();
	        $(this).parent().addClass("current");
	        $(this).parent().siblings().removeClass("current");
	        var tab = $(this).attr("href");
	        $("#tabs-container-inter .tab-inter-content").not(tab).css("display", "none");
	        $(tab).show();
	    });
	});
</script>

