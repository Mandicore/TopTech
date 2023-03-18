<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Top-tech</title>
    <link rel="shortcut icon" href="logo-1.png" />
    <link href="css/style-smartphones.css" rel="stylesheet" type="text/css" />
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
    include 'php/header-smartphone.php'
    ?>
<div class="bottom-line"></div>
<a href="samsung.php#start"><div class="samsung">
</div></a>
<a href="Iphone.php#start"><div class="iphone">
</div></a>
<a href="huawei.php"><div class="Huawei">
</div></a>
<?php 
    include 'php/footer.php' ;
    ?>
  <script src="js/changetheme.js"></script>
  <script src="js/loader.js"></script>