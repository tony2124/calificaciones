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
		
		<link href="<?php print path("vendors/css/frameworks/foundation/stylesheets/foundation.css", "zan"); ?>" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		<script type="text/javascript" src="<?php print path("vendors/css/frameworks/foundation/javascripts/jquery.min.js", "zan"); ?>"></script>
		<script type="text/javascript" src="<?php print path("vendors/css/frameworks/foundation/javascripts/foundation.js", "zan"); ?>"></script>

		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<!-- Le styles -->
	</head>

	<body>
		<div style="width: 100%; height: 100px; background: black"></div>

<?php } ?>