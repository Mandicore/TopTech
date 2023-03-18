<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consoles</title>
    <link rel="shortcut icon" href="logo-1.png" />
    <link href="css/style-console.css" rel="stylesheet" type="text/css" />
    <link href="css/style-header-console.css" rel="stylesheet" type="text/css" />
    <link href="css/style-loader.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>
<body>
<?php
		include 'php/loader.php' ;
	?>
  <button id="button-theme" class="changeTheme" align="right">🌙</button>
  <?php
    include 'php/header-console.php' ;
    ?>
<div class="bottom-line"></div>
<a href="playstation.php"><div class="Playstation">
</div></a>
<a href="xbox.php"><div class="Xbox">
</div></a>
<a href="switch.php"><div class="Switch">
</div></a>
<?php 
    include 'php/footer.php' ;
    ?>
</body>
  <script src="js/changetheme.js"></script>
  <script src="js/loader.js"></script>