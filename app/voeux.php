<?php
	/* ----- paramsDEFAULT ----- */
	$tabTHEME=array("2014","anniv","noel");
	$theme="hny";
	$leName="Ami internaute ;)";

	/* ----- paramsURL ----- */
	// - $theme
	if (isset($_GET["evt"])){
		$event=trim($_GET["evt"]);
		$event=strtolower($event);
		if (in_array($event, $tabTHEME)){
			$theme=$event;
		}
	}
	$file="./theme/$theme.php";
	if (file_exists($file)){
		include($file);
	}
	// - $leName
	if (isset($_GET["name"])){
		$name=trim($_GET["name"]);
		if (!empty($name)){
			$leName=$name;
		}
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Greeting Cards</title>

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Web Application Manifest -->
  <link rel="manifest" href="manifest.json">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="Online Greeting Cards">
  <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Online Greeting Cards">
  <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#2F3BA2">

  <!-- Color the status bar on mobile devices -->
  <meta name="theme-color" content="#2F3BA2">

	<link rel="stylesheet" href="styles/carte.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="scripts/voeux.js"></script>
</head>
<body>
	<!-- FACEBOOK & TWITTER -->
	<div class="posSocial" >
		<?php include("social-networks.php") ?>
	</div>

	<!-- MAIN TITLE -->
	<div class="mainTitle"><span><?php echo $titleFete; ?></span></div>

	<!-- MUSIC-->
	<audio autoplay loop><source src="<?php echo $music; ?>"></audio>

	<!-- IMAGE -->
	<img class="img" src="<?php echo $img; ?>" />

	<!-- TEXT -->
	<div class="txt">
		<!-- - WISH TITLE -->
		<span class="title"><?php echo $titleFete; ?></span>
		<br>
		<!-- - WISH MESSAGE -->
		<span class="msg"><?php echo $leName; ?></span>
	</div>

	<!-- FOOTER : posLink -->
	<?php include("creditLink.php") ?>
</body>
</html>
