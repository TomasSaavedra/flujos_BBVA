	<!-- header -->
	<header class="body-header logged">

		<!-- color bar -->
		<div class="color-bar">
			<span class="first">&nbsp;</span> 
			<span class="second">&nbsp;</span> 
			<span class="third">&nbsp;</span> 
			<span class="fourth">&nbsp;</span> 
			<span class="fifth">&nbsp;</span> 
			<span class="sixth">&nbsp;</span>
		</div>

		<div id="header-up" class="container">
			<ul class="top-menu">
				<li class="ejecutivo-btn">
					<a class="showhide-trigger" href="#top-menu-atencion-ejecutivo"><span class="icon-16 blue d02-atencionalcliente"></span><span class="d02-atencionalcliente-text">Mi ejecutivo <strong>Ejecutivo BBVA Contigo</strong></span></a>
					<!-- atencion cliente -->
					<div id="top-menu-atencion-ejecutivo" class="hidden info-box">
						<div class="arrow-top"></div>
						<ul>
							<li>
								<a href="#gestor-phone" class="showhide-trigger gestor-phone">
									<span class="icon-24 blue t01-lineabbva"></span>Teléfono
								</a>
							</li>
							<li>
								<a href="includes/components/movements/perfil/dialogs/email-ejecutivo.html" class="modal-trigger show-operation">
									<span class="icon-24 blue m07-correspondenciavirtual"></span>Envíar e-mail
								</a>
							</li>
							<li>
								<a href="https://www.google.es/maps/place/Bbva/@-33.4245607,-70.6119668,17z/data=!3m1!4b1!4m2!3m1!1s0x9662cf65c7687337:0xe8bd98d4bc5ad3fb" target="_blank">
									<span class="icon-24 blue a01-nuestrobanco"></span>Oficina BBVA 0123 <small>Via de la Ilustración 23</small>
								</a>
							</li>
						</ul>
					</div>
				</li>

				<li>
					<a class="showhide-trigger" href="#top-menu-atencion-cliente">
						<span class="icon-16 blue d02-atencionalcliente"></span>
						<span class="d02-atencionalcliente-text">Atención al cliente</span>
					</a>
					<!-- atencion cliente -->
					<div id="top-menu-atencion-cliente" class="hidden info-box">
						<div class="arrow-top"></div>
						<ul>
							<li>
								<a href="?src=S13-mi-perfil-ingreso-requerimientos.php" class="text-info">
								<span class="icon-24 blue m07-requerimiento"></span>
									Solicitudes y reclamos
								</a>
							</li>
							
							<li>
								<a href="includes/components/movements/tarjetas-debito/dialogs/bloquear-tarjeta-debito.html" class="text-info cursor modal-trigger">
								<span class="icon-24 blue m07-tarjetas-bloquear"></span>
									Bloquear tarjetas
								</a>
							</li>
													<li>
								<a href="http://w3.grupobbva.com/TLGO/tlgo/oficinas?op=svInicio&pais=CHI" class="text-info">
								<span class="icon-24 blue t04-oficinas"></span>
								Sucursales y cajeros
								</a>
							</li>
							
							
							<!--li><a href="#" class="text-error"><span class="icon-24 red d05-ayudaurgente"></span>Emergencias</a></li-->
							
							<li class="separator"></li>
							<li class="gray">
							<a href="#;">
							<span class="icon-24 gray t01-lineabbva pull-left"></span>
							<strong>Línea BBVA</strong>
							<span class="info">600 600 1100</span>
							</a>
							</li>
							<li class="gray"><a href="#;"><span class="icon-24 gray e06-movil pull-left"></span><strong>Desde celular</strong><span class="info">02 2 346 0710</span></a></li>
						</ul>
					</div>
				</li>

				<li>
					<a href="#top-menu-client-profile" class="avatar showhide-trigger"><img src="img/avatar-small.png" alt="Catalina Romero Santos"> Catalina Romero Santos</a>
					<!-- client profile -->
					<div id="top-menu-client-profile" class="hidden info-box">
						<div class="arrow-top"></div>
						<div class="header">
							<img alt="Catalina Romero Santos" src="img/avatar-medium.png">
							<span class="client-name">Catalina Romero Santos</span>
							<span class="client-profile"><a href="?src=S13-mi-perfil.php" class="btn white small">Editar mi perfil</a></span>
						</div>
						<ul>
							<li><a href="?src=S13-mi-perfil-clave-acceso.php">Clave de acceso</a></li>
							<li><a href="?src=S13-mi-perfil.php">Actualización de datos</a></li>
							<li><a href="?src=S13-mi-perfil-notificaciones.php">Notificaciones y alertas</a></li>
						</ul>
						<div class="footer">
							<span>Última conexión:</span>
							<span>27/11/2013 a las 13:34h</span>
						</div>
					</div>
				</li>
				<li><a href="?logout" class="btn small btn-default">Salir</span></a></li>
			</ul>

			<div class="logo-container">
				<a class="navbar-trigger">&nbsp;</a> 
				<a href="?src=S02-posicion-global.php" >
					<img class="logo-desktop" src="img/logo-bbva.jpg" alt="BBVA CHILE" title="BBVA CHILE"/>
					<img class="logo-tablet" src="img/logo_bbva.png" alt="BBVA CHILE" title="BBVA CHILE"/>
				</a>	
			</div>
		</div>
		
		<div class="container">
			<div class="main-menu">
				<div class="header-buttons">
					<form action="content.php">
						<input type="hidden" name="src" value="<?php echo $src; ?>"> 
						<input type="search" class="form-control input-search" /> <img src="img/icon-text-search-big.png" alt="Buscar" title="Buscar" />
					</form>
				</div>
		
				<div class="menu-trigger first-child last-child" data-target="#personas-submenu">
					<a href="#">Personas</a>
				</div>
				<ul id="personas-submenu" class="sub-menu active">
					<li class="<?php echo ($current == 'home' ? 'active': ''); ?> posicion-global">
						<a href="?src=S02-posicion-global-adicional.php">
							<span class="icono-new icono-home"></span>
						</a>
					</li>
					<!--li class="hidden-xs <?php echo ($current == 'on-click' ? 'active': ''); ?>"><a href="?src=S16-on-click.php">Productos a tu medida a un click</a></li-->
					<li class="<?php echo ($current == 'cuentas' ? 'active': ''); ?>">
						<a href="?src=S02-cuentas-adicional.php">Cuentas</a>
					</li>
					<li class="<?php echo ($current == 'tarjetas' ? 'active': ''); ?>">
						<a href="?src=S02-tarjetas-adicional.php">Tarjetas</a>
					</li>
					<li class="<?php echo ($current == 'creditos' ? 'active': ''); ?>">
						<a href="?src=S07-creditos-adicional.php">Créditos</a>
					</li>
					<li class="<?php echo ($current == 'ahorro-inversion' ? 'active': ''); ?> right-spaced ahorro-inversion-btn">
						<a href="?src=S18-ahorro-e-inversion-adicional.php">Ahorro e Inversión</a>
					</li>
					<li class="<?php echo ($current == 'seguros' ? 'active': ''); ?>">
						<a href="?src=S02-seguros-adicional.php">Seguros</a>
					</li>
					<li class="edit-profile">
						<a href="?src=S13-mi-perfil.php">Editar perfil</a>
					</li>
					<li class="search">
						<form action="content.php">
							<input type="hidden" name="src" value="<?php echo $src; ?>"> 
							<input type="search" class="form-control input-search" /> 
								<img src="img/search-box.png" alt="Buscar" title="Buscar" />
						</form>
					</li>
					
					<li class="disconnect salir">
						<a href="?logout">Salir</a>
					</li>

				</ul>
			</div>
		</div>

		<div class="move-to" data-device="tablet,phone" data-element="login-form"></div>
	</header>