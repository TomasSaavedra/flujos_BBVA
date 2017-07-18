<script type="text/javascript" src="js/soho-cuentas.js"></script>

<div class="container">




	<div class="menu-miga">
		<p><a href="?src=S031-cuentas.php">Inicio</a> <a href="?src=S03-cuentas.php">Cuentas</a> <span>Alias</span></p>
	</div>
	<div class="section-tabs">
		<!-- Utility icons -->
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
		</div>
		<!-- title -->
		<h2 class="title-sh">Importar contactos de otro banco</h2>
		<!-- Section tabs  -->
		<hr class="separador">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12">
				<div class="col-lg-2 col-md-2 hidden-xs"></div>
				<div class="col-lg-8 col-md-8 col-xs-12">
					<?php include 'includes/components/movements/cuentas/operations/importar-contactos-otros-bancos.php'; ?>
				</div>
				<div class="col-lg-2 col-md-2 hidden-xs"></div>
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