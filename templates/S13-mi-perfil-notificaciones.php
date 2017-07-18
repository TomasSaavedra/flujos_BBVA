<script type="text/javascript" src="js/soho-mi-perfil.js"></script>

<div class="container page-mi-perfil">
	<div class="section-tabs">
		
		<div class="utility-icons">
			<a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
			<a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a> 
			<a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a> 
		</div>

		<!-- title -->
		<h2 class="title-sh">Mi perfil </h2>
		
		<hr class="separador">
		
		<div class="container-perfil" id="perfil-datos"><!--container-perfil datos-->
			
			<div class="nav-perfil"><!--nav-perfil-->
				<button id="nav-perfil-toggle" type="button" class="show-mobile">Notificaciones y alertas<span class="ico"></span></button>
					<nav class="inner-nav">
					<ul class="nav nav-list">
						<li><span class="bg"></span><a href="content.php?src=S13-mi-perfil.php" title="Actualización de datos">Actualización de datos</a> </li>
						<li><span class="bg"></span><a href="content.php?src=S13-mi-perfil-clave-acceso.php" title="Clave de acceso"> Clave de acceso</a></li>
						<li class="active"><span class="bg"></span><a href="content.php?src=S13-mi-perfil-notificaciones.php" title="Notificaciones y alertas"> Notificaciones y alertas</a></li>
						<li><span class="bg"></span><a href="content.php?src=S13-mi-perfil-agenda.php" title="Agenda de contactos"> Agenda de contactos</a></li>
						<li><span class="bg"></span><a href="content.php?src=S11-mi-perfil.php" title="Perfil inversor"> Perfil inversor</a></li>
						<li>
							<span class="bg"></span>
							<a href="content.php?src=S13-mi-perfil-ingreso-requerimientos.php" title=" Consultas y solicitudes"> 
								Solicitudes y reclamos
							</a>
						</li>
					</ul>
					</nav>
			</div><!--Fin nav-perfil-->
			<?php include 'includes/components/movements/perfil/include/notificaciones-alertas.html'; ?>

		</div><!--Fin perfil-->

	</div><!--Fin container-perfil-->

</div>

