

<div class="container">
    <div class="menu-miga">
        <p><a href="?src=S02-cuentas.php">Inicio</a> <span>Ahorro e inversión</span></p>
    </div>
    <div class="section-tabs">
        <!-- Utility icons -->
        <div class="utility-icons">
            <!--a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a-->
            <!--a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
                <a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a-->
        </div>
        <!-- title -->
        <h2 class="title-sh">Ahorro e inversión</h2>
         
        <hr class="separador">
        <div class="section-ahorro-inversion">
             
                <div class="banner-column" id="ahorro-lateral"> 
                    <nav class="nav-sidebar">
                        <a href="?src=S18-ahorro-e-inversion.php" class="active">Mis Productos</a>
                        <a href="?src=S21-portal-inversiones.php" >Metas de Ahorro</a>
                        <a href="?src=S18-productos-de-inversion.php">Contratar productos</a>
                    </nav>

                    <aside class="links dated mini-triangled favoritas editable perfil-inversor perfil-inversor-lateral">
                        <header>
                            <h1>Perfil inversor</h1>
                        </header>

                        <section> 
                            <ul>
                                <li>Conservador</li>
                                <li class="active">Moderado</li>
                                <li class="last">Arriesgado</li>
                            </ul>
                            <div class="barra">
                                <span class="barra-azul moderado"></span>
                            </div> 
                        </section>

                        <footer>
                            <a href="includes/components/dialogs/modificar-perfil.html" class="btn modal-trigger">Cambiar Mi Perfil</a> 
                        </footer>
                    </aside>
                </div>

                <div class="content-column" id="ahorro-inversion">  
                     <div class="solicitud-inversion"><!--solicitud-inversion--> 

				 	<div class="head-inversion"><!--head-inversion-->
				 		<button type="button" class="close-icon" data-dismiss="modal" aria-hidden="true"></button>
				 		<h2>Solicitud de inversión</h2>
				 		<h3><span class="font-book">Money Market - Serie A</span> <span class="text-gris font-book">Deuda de corto plazo con duración menor o igual a 90 días</span></h3>
				 	</div><!--Fin head-inversion-->


					<div class="main-wizard <?php echo $step == '1' ? 'init-step1' : ''; ?>">
						<form novalidate id="" class="form-horizontal tooltip-validation transfer-filter">
							<article class="wizard">
								<div class="paso1" data-title="Cuenta origen">
									<?php include('includes/components/movements/ahorro-inversiones/catalogo-productos/solicitud-inversion/remote-step-1.html'); ?>
								</div>
								<div data-title="Cantidad">
				                	<div class="cont-wizard">
									<?php include('includes/components/movements/ahorro-inversiones/catalogo-productos/solicitud-inversion/remote-step-2.html'); ?>
				                    </div>
								</div>

								<div data-title="Otras condiciones" class="ConfirmaPagoContenedor">

				                	<div class="cont-wizard">
									<?php include('includes/components/movements/ahorro-inversiones/catalogo-productos/solicitud-inversion/remote-step-3.html'); ?>
				                    </div>
								</div>
								<div data-title="Confirmación" data-multistep="true">
				                	<div class="cont-wizard">
									<?php include('includes/components/movements/ahorro-inversiones/catalogo-productos/solicitud-inversion/remote-step-4.html'); ?>
				                    </div>
								</div>

								<div data-title="Comprobante">
				                	<div class="cont-wizard">
									<?php include('includes/components/movements/ahorro-inversiones/catalogo-productos/solicitud-inversion/remote-step-5.html'); ?>
				                    </div>

								</div>


							</article>
						</form>
					</div>
				</div><!--Fin solicitud-inversion-->
                </div> 
            
              
        </div>
    </div>
</div>