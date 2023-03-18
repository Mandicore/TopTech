<?php
    session_start();

    if(!isset($_SESSION['user']))
        header('Location: index.php#connexion')
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Espace membres</title>
    <link rel="shortcut icon" href="logo-1.png" />
    <link href="css/style-es-membres.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <h1>Bonjour <?php echo $_SESSION['user']; ?> !</h1>
    <a href="index.php"><img src="img/home.png" alt="lien accueil"/></a>
    <a href="deconnexion.php"><img src="img/deconnection.png" alt="lien déconnexion"/></a>
  </body>