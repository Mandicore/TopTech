<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Top-tech</title>
    <link rel="shortcut icon" href="logo-1.png" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style-header.css" rel="stylesheet" type="text/css" />
    <link href="css/style-loader.css" rel="stylesheet" type="text/css" />
    <link href="css/style-connexion.css" rel="stylesheet" type="text/css" />
  </head>
<body>
  <?php
		include 'php/loader.php' ;
	?>
  <button id="button-theme" class="changeTheme" align="right">🌙</button>
<!--Header-->
  <header>
  <div class="dropdown-1">
      <div class="header-text">☰</div>
      <div class="content">
        <ul id="header">
           <li><a href="index.php">Accueil</a></li>
           <hr>
           <li><a href="Accueil-smartphones.php">Les Smartphones</a></li>
           <hr>
           <li><a href="Accueil-consoles.php">Les Consoles</a></li>
           <hr >
           <li><a href="Accueil-ordinateurs.php">Les Ordinateurs</a></li>
           <hr>
           <li><a href="#connexion">Connexion</a></li>
           <hr>
           <li><a href="espace-membres.php">Espace Membres</a></li>
       </ul>
      </div>
  </div>
  <div class="button-head"></div>
</header>
<!--fomulaire de connexion-->
<?php
  include 'formulaire-connexion.php';
?>
<!--smartphones-->
<div class="bottom-line"></div>
<h1>Bonjour <?php 
if(empty($_SESSION['user'])){
  echo ', utilisateur non connecté';
}else echo $_SESSION['user'];
 ?> !</h1>
<a href="Accueil-smartphones.php"><div class="smartphone">
  <h1 class="h1-bannière">Les smartphones</h1>
</div></a>
<!--consoles-->
<a href="Accueil-consoles.php"><div class="Consoles">
  <h1 class="h1-bannière-consoles">Les consoles</h1>
</div></a>
<!--ordinateurs-->
<a href="Accueil-ordinateurs.php"><div class="Ordinateurs">
</div></a>
<!--bas de page-->
<?php 
  include 'php/footer.php' ;
?>
<script src="mac-anim/scroll.js"></script>
<script src="js/changetheme.js"></script>
<script src="js/loader.js"></script>