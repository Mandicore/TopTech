<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ordinateurs</title>
    <link rel="shortcut icon" href="logo-1.png" />
    <link href="css/style-ordinateur.css" rel="stylesheet" type="text/css" />
    <link href="css/style-header.css" rel="stylesheet" type="text/css" />
    <link href="css/style-loader.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>
<body>
<?php
		include 'php/loader.php' ;
	?>
  <button id="button-theme" class="changeTheme" align="right">🌙</button>
  <?php
    include 'php/header-ordinateur.php' ;
    ?>
<div class="bottom-line"></div>
<a href="bureautique.php"><div class="Bureautique">
  <h1 class="h1-bannière-bureautique">Bureautique</h1>
</div></a>
<a href="mac.php"><div class="mac">
  <h1 class="h1-bannière-mac">Les mac</h1>
</div></a>
<a href="gaming.php"><div class="Gaming">
  <h1 class="h1-bannière-gaming">Gaming</h1>
</div></a>
<?php 
    include 'php/footer.php' ;
    ?>
  <script src="js/changetheme.js"></script>
  <script src="js/loader.js"></script>