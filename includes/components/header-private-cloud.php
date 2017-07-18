<!-- header -->
<header class="body-header logged">

	<!-- color bar -->
	<div class="color-bar">
		<span class="first">&nbsp;</span> <span class="second">&nbsp;</span> <span class="third">&nbsp;</span> <span class="fourth">&nbsp;</span> <span class="fifth">&nbsp;</span> <span class="sixth">&nbsp;</span>
	</div>

	<div id="header-up" class="container">

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
				<li class="<?php echo ($current == 'home' ? 'active': ''); ?> posicion-global"><a href="?src=S02-posicion-global.php"><span class="icono-new icono-home"></span></a></li>
				<!--li class="hidden-xs <?php echo ($current == 'on-click' ? 'active': ''); ?>"><a href="?src=S16-on-click.php">Productos a tu medida a un click</a></li-->
				<li class="<?php echo ($current == 'cuentas' ? 'active': ''); ?>"><a href="?src=S02-cuentas.php">Cuentas</a></li>
				<li class="<?php echo ($current == 'tarjetas' ? 'active': ''); ?>"><a href="?src=S02-tarjetas.php">Tarjetas</a></li>
				<li class="<?php echo ($current == 'creditos' ? 'active': ''); ?>"><a href="?src=S07-creditos.php">Créditos</a></li>
				<li class="<?php echo ($current == 'ahorro-inversion' ? 'active': ''); ?> right-spaced ahorro-inversion-btn"><a href="?src=S02-ahorro-inversion.php">Ahorro e Inversión</a></li>
				<li class="<?php echo ($current == 'seguros' ? 'active': ''); ?>"><a href="?src=S02-seguros.php">Seguros</a></li>
				<li class="edit-profile"><a href="?src=S13-mi-perfil.php">Editar perfil</a></li>

				<li class="search">
					<form action="content.php">
						<input type="hidden" name="src" value="<?php echo $src; ?>"> <input type="search" class="form-control input-search" /> <img src="img/search-box.png" alt="Buscar" title="Buscar" />
					</form>
				</li>
				<li class="disconnect salir"><a href="?logout">Salir</a></li>
			</ul>
		</div>
	</div>

	<div class="move-to" data-device="tablet,phone" data-element="login-form"></div>
</header>