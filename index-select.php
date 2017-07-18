<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>BBVA Plantillas Corporativas :: Plantillas</title>

<?php include 'includes/css.php';?>

<style type="text/css">
	h1 small {
		float:right;
	}
	h1 small > label {
		margin-left:20px;
	}
	ul.nav li {
		position: relative;
	}
	
	ul.nav li small {
		position: absolute;
		right:0;
		top:5px;
	}
</style>

<?php include 'includes/js.php';?>

<script type="text/javascript">
	$(function(){
		$('a.loader').click(function(){
			document.location.href = $('input[name="site"]').checkbox('val') + '?src=' + $(this).attr('href');
			return false;
		});
	});
</script>
</head>
<body>
	<div class="container">
		<h1>Plantillas 
			<small>
				<label for="site-content"><input id="site-content" type="radio" name="site" value="content.php" checked="checked">BBVA</label>
			</small>
		</h1>
		<ul class="nav nav-pills nav-stacked">
		<?php
			if ($handle = opendir('templates')) {
				while (false !== ($entry = readdir($handle))) {
					if(strpos($entry, '.') !== 0){
		?>
			<li><a class="loader" href="<?php echo $entry; ?>"><?php echo $entry; ?></a> <small><a href="content.php?src=<?php echo $entry; ?>&download">(download)</a></small></li> 
		<?php 			
					}
				}
			}
		?>
		</ul>
	</div>
</body>
</html>