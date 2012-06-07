<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/header.php";
	} else {
?>
<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>

		<link rel="stylesheet" type="text/css" href="<?php print path("vendors/css/AStyle.css","zan"); ?>">
		
		<link href="<?php print path("vendors/css/frameworks/foundation/stylesheets/foundation.css", "zan"); ?>" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		<script type="text/javascript" src="<?php print path("vendors/css/frameworks/foundation/javascripts/modernizr.foundation.js", "zan"); ?>"></script>
		<script type="text/javascript" src="<?php print path("vendors/css/frameworks/foundation/javascripts/jquery.min.js", "zan"); ?>"></script>
		<script type="text/javascript" src="<?php print path("vendors/css/frameworks/foundation/javascripts/foundation.js", "zan"); ?>"></script>
		<script type="text/javascript" src="<?php print path("vendors/css/frameworks/foundation/javascripts/app.js", "zan"); ?>"></script>

		<script type="text/javascript">
    		$(document).ready(function() {
	          	$('#buttonForModal').click(function() {
	            	$('#myModal').reveal();
	     		});
			});
		</script>

		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<!-- Le styles -->
	</head>

	<body>
		<div style="width: 100%; height: 100px; background: black; color:white">
			<?php 
				if(SESSION('usuario')){
					print "<div style='float:left;  padding:20px'><b>BIENVENIDO<br>".SESSION('nombre')." ".SESSION('apellido_p')." ".SESSION('apellido_m')."</div>";
					?>
						<div style='float:right; padding:20px'>
							<a type="submit" href="<?php print get('webURL').'/default/logout' ?>" class="large red nice button radius">Cerrar Sesión</a>
						</div>
					<?php
				}
			 ?>
		</div>

<?php } ?>