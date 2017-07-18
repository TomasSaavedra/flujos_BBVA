<script type="text/javascript" src="js/soho-cuentas.js"></script>

<div class="container">




	<div class="menu-miga">
		<p><a href="?src=S02-cuentas.php">Inicio</a> <a href="?src=S02-cuentas.php">Cuentas</a> <span>Alias</span></p>
	</div>
	<div class="section-tabs">
		<!-- Utility icons -->
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
		</div>
		<!-- title -->
		<h2 class="title-sh">Cuentas</h2>
		<!-- Section tabs  -->
		<ul class="nav nav-tabs align-center">
			<li class="active"><a href="#section1">Mis productos</a></li>
			<li><a href="#section2">Catálogo de productos</a></li>
		</ul>

		<hr class="separador">
		<div class="tab-content">
			<div class="tab-pane active" id="section1">
				<div class="content-column">
					<?php include 'includes/components/movements/cuentas/header.html'; ?>
					<?php include 'includes/components/movements/cuentas/tabs.html'; ?>
					<!--?php include 'includes/components/movements/cuentas/table.html'; ?-->
				</div>
				<div class="banner-column">
					<?php include 'includes/components/banners/sabias-que-cuentas.html'; ?>
					<!--?php include 'includes/components/banners/operaciones-favoritas.html'; ?-->
				</div>
			</div>
			<div class="tab-pane" id="section2">
				<iframe name="menuBAR" src="https://www.bbva.cl/personas/cuentas/?mb=si" width="100%" height="790" align="center" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
 $(document).ready(function(){
     var url = $(location).attr('href');
     if(url.indexOf("#")>=0){

         var hash = url.substring(url.indexOf("#")+1);
         if(hash=="abrir_recarga_celular"){
             $('#tab-operaciones-link').trigger('click');
             var start = new Date().getTime();
             while($("#link_recarga_celulares").length==0 && (start- new Date().getTime())> 30000){

             }
             if($("#link_recarga_celulares").length>0){
                 $("#link_recarga_celulares").trigger('click');
             }
         }else if(hash=="pagar_servicios"){
             $('#tab-operaciones-link').trigger('click');
             var start = new Date().getTime();
             while($("#link_recarga_celulares").length==0 && (start- new Date().getTime())> 30000){

             }
             if($(".pagar_servicios_global").length>0){
                 $(".pagar_servicios_global").trigger('click');
             }
         }
     }
 });
</script>