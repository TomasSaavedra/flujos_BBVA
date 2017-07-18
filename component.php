<?php
$root = 'includes/components/';

$src = 'home.php';
if(isset($_GET['src'])){
	$src = $_GET['src'];
}

if(isset($_GET['download'])){
	header('Content-Description: File Transfer');
	header("Content-type: text/html");
	header("Content-disposition: attachment; filename= ".$src."");
	readfile($root . $src);
	
	exit;
}

$file = $root . $src;

function display($file) {
	if($src != '' && file_exists($file)){
		include $file;
	} else {
		echo '<h1 style="font-size: large; padding: 40px; text-align: center; background-color: #ccc; border-radius: 10px;">ND</h1>';
	}
}

function displayAll($file){
?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12"><?php include $file;?></div>
		</div>
		
		<div class="row">
			<div class="col-lg-9 col-sm-9"><?php include $file;?></div>
			<div class="col-lg-3 col-sm-3"><?php include $file;?></div>
		</div>
		
		<div class="row">
			<div class="col-lg-8 col-sm-8"><?php include $file;?></div>
			<div class="col-lg-4 col-sm-4"><?php include $file;?></div>
		</div>
		
		<div class="row">
			<div class="col-lg-6 col-sm-6"><?php include $file;?></div>
			<div class="col-lg-6 col-sm-6"><?php include $file;?></div>
		</div>
		
		<div class="row">
			<div class="col-lg-4 col-sm-4"><?php include $file;?></div>
			<div class="col-lg-4 col-sm-4"><?php include $file;?></div>
			<div class="col-lg-4 col-sm-4"><?php include $file;?></div>
		</div>
		
		<div class="row">
			<div class="col-lg-3 col-sm-3"><?php include $file;?></div>
			<div class="col-lg-3 col-sm-3"><?php include $file;?></div>
			<div class="col-lg-3 col-sm-3"><?php include $file;?></div>
			<div class="col-lg-3 col-sm-3"><?php include $file;?></div>
		</div>
	</div>
<?php 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>BBVA :: Plantillas Pública</title>
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />

<?php include 'includes/css-dev.php'; ?>
<?php include 'includes/js-dev.php'; ?>

<link rel="shortcut icon" href="./img/favicon.ico">
</head>
<body>
	<!-- color bar -->
	<div class="color-bar row hidden-desktop">
		<span class="first">&nbsp;</span>
		<span class="second">&nbsp;</span>
		<span class="third">&nbsp;</span>
		<span class="fourth">&nbsp;</span>
		<span class="fifth">&nbsp;</span>
		<span class="sixth">&nbsp;</span>
	</div>
	
	<!-- desktop header -->
	<header class="desktop-header visible-desktop">
		<div class="container">
			<h1 class="logo">BBVA Plantillas Pública</h1>
			<ul class="top-menu">
				<li><a href="#" class="ico-ayuda">Ayuda urgente</a></li>
				<li><a href="#" class="ico-oficinas">Oficinas y cajeros</a></li>
				<li><a href="#" class="ico-lineabbva">902 224 466</a></li>
				<li class="language-switcher">
					<div class="language-trigger">Castellano</div>
					<div id="language-list" class="hidden">
						<ul>
							<li><a href="#">English</a></li>
						</ul>
					</div>
				</li>
			</ul>
			
			<ul class="brand-menu">
				<li class="active"><a href="#">Lorem ipsum</a></li>
				<li><a href="#">Lorem ipsum</a></li>
				<li><a href="#">Lorem ipsum</a></li>
				<li><a href="#">Lorem ipsum</a></li>
			</ul>
			
			<div class="header-buttons">
				<a href="#" class="btn">Alta clientes</a>
				<a href="#" class="btn success"><i class="icon-16 white ico-acceso-clientes"></i> Acceso clientes</a>
			</div>
			
			<ul class="main-menu">
				<li class="home active"><a href="#"><i class="icon-24 white sprite-G02-Home-24x"></i></a></li>
				<li><a href="#"><i class="icon-24 white ico-cuentas-white"></i> Lorem ipsum</a></li>
				<li><a href="#"><i class="icon-24 white ico-prestamos-white"></i> Lorem</a></li>
				<li><a href="#"><i class="icon-24 white ico-tarjetas-white"></i> Lorem ipsum</a></li>
				<li><a href="#"><i class="icon-24 white ico-seguros-white"></i> Lorem</a></li>
				<li class="search"><form action="content.php"><input type="hidden" name="src" value="<?php echo $src; ?>"> <input type="search" /> <img src="img/search-box.png" alt="Buscar" title="Buscar" /></form></li>
			</ul>
		</div>
	</header>
	
	<!-- tablet/phone header -->
	<header class="tablet-header hidden-desktop">
		<div class="menu-bar">
			<a class="navbar-trigger pull-right">&nbsp;</a>
			<a href="#"><img src="img/logo_bbva.png" class="logo-tablet" alt="BBVA CHILE" title="BBVA CHILE"/></a>
		</div>
		
		<div class="main-menu hidden">
			<div class="header-buttons">
				<form action="content.php">
					<input type="hidden" name="src" value="<?php echo $src; ?>">
					<a href="#" class="btn" data-fulltext="Alta clientes" data-smalltext="Alta">Alta clientes</a>
					<a href="#" class="btn success"><i class="icon-16 white ico-acceso-clientes"></i> Acceso<span class="hidden-phone"> clientes</span></a>
					<input type="search" /> <img src="img/icon-text-search-big.png" alt="Buscar" title="Buscar" />
				</form>
			</div>
		
			<div class="active menu-trigger" data-target="#personas-submenu"><a href="#">Lorem ipsum</a></div>
			<ul id="personas-submenu" class="sub-menu hidden">
				<li class="active"><a href="#"><i class="icon-24 blue sprite-G02-Home-24x"></i> Lorem</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-C13-TransferirCuentaaTarjeta-24x"></i> Lorem ipsum</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-B16-PrestamoPersonal-24x"></i> Lorem</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-B09-Tarjeta-24x"></i> Lorem ipsum</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-B19-Seguros-24x"></i> Lorem</a></li>
			</ul>
			
			<div class="menu-trigger" data-target="#banca-personal-submenu"><a href="#">Lorem ipsum</a></div>
			<ul id="banca-personal-submenu" class="sub-menu hidden">
				<li class="active"><a href="#"><i class="icon-24 blue sprite-G02-Home-24x"></i> Lorem</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-C13-TransferirCuentaaTarjeta-24x"></i> Lorem ipsum</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-B16-PrestamoPersonal-24x"></i> Lorem</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-B09-Tarjeta-24x"></i> Lorem ipsum</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-B19-Seguros-24x"></i> Lorem</a></li>
			</ul>
			
			<div class="menu-trigger" data-target="#banca-premium-submenu"><a href="#">Lorem ipsum</a></div>
			<ul id="banca-premium-submenu" class="sub-menu hidden">
				<li class="active"><a href="#"><i class="icon-24 blue sprite-G02-Home-24x"></i> Lorem</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-C13-TransferirCuentaaTarjeta-24x"></i> Lorem ipsum</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-B16-PrestamoPersonal-24x"></i> Lorem</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-B09-Tarjeta-24x"></i> Lorem ipsum</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-B19-Seguros-24x"></i> Lorem</a></li>
			</ul>
			
			<div class="menu-trigger" data-target="#empresas-submenu"><a href="#">Lorem ipsum</a></div>
			<ul id="empresas-submenu" class="sub-menu hidden">
				<li class="active"><a href="#"><i class="icon-24 blue sprite-G02-Home-24x"></i> Lorem</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-C13-TransferirCuentaaTarjeta-24x"></i> Lorem ipsum</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-B16-PrestamoPersonal-24x"></i> Lorem</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-B09-Tarjeta-24x"></i> Lorem ipsum</a></li>
				<li><a href="#"><i class="icon-24 blue sprite-B19-Seguros-24x"></i> Lorem</a></li>
			</ul>
			
			<div class="acceso-clientes hidden"><a href="#"><i class="icon-acceso-clientes"></i> Acceso clientes</a></div>
		</div>

	</header>

	<!-- body -->
	<div class="content">
		<div class="gray-background">
			<?php displayAll($file);?>
		</div>
		
		<?php displayAll($file);?>
	</div>
	
	<!-- desktop footer -->
	<footer class="desktop-footer visible-desktop">
		<div class="container">
			<div class="row">
				<div class="footer-menu col-lg-3">
					<div>Contacto</div>
					<ul>
						<li><a href="#">Atención de reclamos</a></li>
						<li><a href="#">Línea BBVA 902 22 44 66</a></li>
						<li><a href="#">Oficinas y cajeros BBVA</a></li>
						<li><a href="#">Atención al cliente</a></li>
						<li><a href="#">BBVA en tu móvil</a></li>						
					</ul>
				</div>
				
				<div class="footer-menu col-lg-3">
					<div>Información corporativa</div>
					<ul>
						<li><a href="#">Web Corporativa BBVA.com</a></li>
						<li><a href="#">InformaTara accionistas</a></li>
						<li><a href="#">Empleo en BBVA</a></li>
						<li><a href="#">BBVA Research</a></li>
						<li><a href="#">Sala de Prensa</a></li>						
					</ul>
				</div>
				
				<div class="footer-menu col-lg-3">
					<div>Centro de ayuda</div>
					<ul>
						<li><a href="#">He perdido o me han robado la cartera</a></li>
						<li><a href="#">Han descubierto mis claves</a></li>
						<li><a href="#">Me he quedado sin dinero</a></li>
					</ul>
				</div>
				
				<div class="footer-menu col-lg-3">
					<div>BBVA en redes sociales</div>
					<ul>
						<li><a href="#"><img src="img/social/small/facebook.png" alt="Facebook" /> Facebook</a></li>
						<li><a href="#"><img src="img/social/small/twitter.png" alt="Twitter" /> Twitter</a></li>
						<li><a href="#"><img src="img/social/small/google-plus.png" alt="Google +" /> Google +</a></li>
						<li><a href="#"><img src="img/social/small/blogger.png" alt="Blog BBVA" /> Blog BBVA</a></li>
						<li><a href="#"><img src="img/social/small/youtube.png" alt="Youtube BBVA" /> Youtube BBVA</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<ul>
					<li><a href="#" title="Seguridad">Seguridad</a></li>
					<li><a href="#" title="Aviso legal">Aviso Legal</a></li>
					<li><a href="#" title="Tarifas y otros avisos"><span>Tarifas y otros avisos</span></a></li>
					<li><a href="#" title="Mapa">Mapa</a></li>
					<li><a href="#" title="Atención al cliente">Atención al cliente</a></li>
				</ul>
				<span class="copyright">Banco Bilbao Vizcaya Argentaria S.A. - 2012</span>
			</div>
		</div>
	</footer>
	
	<!-- tablet/phone footer -->
	<footer class="tablet-footer hidden-desktop">
		<ul class="bottom-top-menu">
			<li><a href="#" class="ico-ayuda">Ayuda urgente</a></li>
			<li><a href="#" class="ico-oficinas">Oficinas y cajeros</a></li>
			<li><a href="#" class="ico-lineabbva">Linea BBVA  902 224 466</a></li>
		</ul>
		
		<div class="footer-menu">
			<div class="menu-trigger" data-target="#contacto-submenu">Contacto</div>
			<ul id="contacto-submenu" class="hidden">
				<li><a href="#">Atención de reclamos</a></li>
				<li><a href="#">Línea BBVA 902 22 44 66</a></li>
				<li><a href="#">Oficinas y cajeros BBVA</a></li>
				<li><a href="#">Atención al cliente</a></li>
				<li><a href="#">BBVA en tu móvil</a></li>						
			</ul>

			<div class="menu-trigger" data-target="#informacion-corporativa-submenu">Información corporativa</div>
			<ul id="informacion-corporativa-submenu" class="hidden">
				<li><a href="#">Web Corporativa BBVA.com</a></li>
				<li><a href="#">InformaTara accionistas</a></li>
				<li><a href="#">Empleo en BBVA</a></li>
				<li><a href="#">BBVA Research</a></li>
				<li><a href="#">Sala de Prensa</a></li>						
			</ul>

			<div class="menu-trigger" data-target="#ayuda-submenu">Centro de ayuda</div>
			<ul id="ayuda-submenu" class="hidden">
				<li><a href="#">He perdido o me han robado la cartera</a></li>
				<li><a href="#">Han descubierto mis claves</a></li>
				<li><a href="#">Me he quedado sin dinero</a></li>
			</ul>
		</div>
		
		<div class="row footer-social-menu">
			<div class="footer-social-menu-title">BBVA en redes sociales</div>
			<div class="footer-images">
				<div><a href="#"><img src="img/social/big/ico-facebook.png" alt="Facebook" class="social-icons" /></a></div>
				<div><a href="#"><img src="img/social/big/ico-twitter.png" alt="Twitter" class="social-icons" /></a></div>
				<div><a href="#"><img src="img/social/big/ico-google-plus.png" alt="Google +" class="social-icons" /></a></div>
				<div><a href="#"><img src="img/social/big/ico-blogger.png" alt="Blog BBVA" class="social-icons" /></a></div>
				<div><a href="#"><img src="img/social/big/ico-youtube.png" alt="Youtube BBVA" class="social-icons" /></a></div>
			</div>
		</div>
		
		<div class="row">
			<ul class="bottom-menu">
				<li><a href="#" title="Seguridad">Seguridad</a></li>
				<li><a href="#" title="Aviso legal">Aviso Legal</a></li>
				<li><a href="#" title="Tarifas"><span>Tarifas</span></a></li>
				<li><a href="#" title="Mapa Wenb">Mapa Web</a></li>
				<li><a href="#" title="Contacto">Contacto</a></li>
			</ul>
		</div>
		<div class="copyright">Banco Bilbao Vizcaya Argentaria S.A. - 2012</div>
	</footer>

	</body>
</html>
