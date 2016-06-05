<?php
	$month=date("m");
	$year=date("Y");
	// tous les juillets (milieu de l'année), le nouvel an augmente +1
	if ($month>6) $year+=1;
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


  <link rel="stylesheet" href="styles/index.css" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
  <script src="scripts/jquery.slidingGallery-1.2.min.js"></script>
  <script src="scripts/index.js"></script>

</head>
<body>
	<!-- POSH -->
	<div id="posH">
		<span id="titre">Online Greeting Cards <?php echo $year ?></span>
		<span id="sous-titre">For <?php echo $year ?>, Christmas and Birthdays, create online your greeting cards.</span>
	</div>

	<!-- GALLERY -->
	<?php $path="./data/images/slider/"; ?>
	<div class="gallery">
		<img src="<?php echo $path; ?>1.jpg" onclick="infos('anniv',this)" />
		<img src="<?php echo $path; ?>2.jpg" onclick="infos('noel',this)" class="start"  />
		<img src="<?php echo $path; ?>3.jpg" onclick="infos('2014',this)" />

		<img src="<?php echo $path; ?>1.jpg" onclick="infos('anniv',this)"  />
		<img src="<?php echo $path; ?>2.jpg" onclick="infos('noel',this)" />
		<img src="<?php echo $path; ?>3.jpg" onclick="infos('2014',this)" />

		<img src="<?php echo $path; ?>1.jpg" onclick="infos('anniv',this)"/>
		<img src="<?php echo $path; ?>2.jpg" onclick="infos('noel',this)" />
		<img src="<?php echo $path; ?>3.jpg" onclick="infos('2014',this)" />
	</div>

	<!-- POSB -->
	<div id="posB">
		<span id="phrase"></span><br>
		Send wishes to: <input type="text" id="name" placeholder="Nom" />
		<input type="hidden" id="evt" />
		<button onclick="openCard()">Send</button>
	</div>

	<!-- BAS DE PAGE : posLink -->
	<?php include("creditLink.php") ?>
  <!-- Built with love using Web Starter Kit -->
</body>
</html>
