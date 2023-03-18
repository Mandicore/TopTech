<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nintendo</title>
    <link rel="shortcut icon" href="logo-1.png" />
    <link href="css/style-console.css" rel="stylesheet" type="text/css" />
    <link href="css/style-header-console.css" rel="stylesheet" type="text/css" />
    <link href="css/style-loader.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style-switch.css" rel="stylesheet" type="text/css" />
    <link href="css/style-popup.css" rel="stylesheet" type="text/css" />
  </head>
<body class="switch">
<?php
		include 'php/loader.php' ;
	?>
  <?php
    include 'php/header-console.php' ;
    ?>
<div class="bloc" id="start">
  <video autoplay="autoplay" muted loop="infinite" src="video/switch-trailer.mp4"></video>
</div>
<h1 class="titre-1">Nintendo Switch</h1>
<img class="image-2" src="img/switch-img.png"/>
<div class="right">
<p class="paragraphe">Après l’échec de leur dernière console la Wii U qui ne s’est vendu qu’à 13 millions d’exemplaires, le 17 mars 2015 Satoru Iwata annonce une nouvelle console de salon sous le nom de code de Nintendo NX. Finalement Nintendo annonce officiellement leur nouvelle console qui est définitivement nommée Nintendo Switch et celle-ci est une console hybride pouvant être jouée en mode portable en accrochant les deux joys cons à l’écran et y jouer sur la télé en le posant sur le doc qui est vendu avec. La console sort le 3 mars 2017 partout dans le monde. Ce fut le succès immédiat grâce à la grande base de fan de Nintendo mais aussi grâce aux jeux qui sont sortis comme Mario kart 8 Deluxe. En 2018 la consoles a fait 15 millions de ventes ce qui est déjà plus que son prédécesseur en moins d’un an. En 2020 il y eu une pandémie mondiale du covid-19 et la marque Nintendo sort seulement 4 jeux dans l’année dont un remake. Aujourd’hui la Nintendo Switch est la console de salon la plus vendue de Nintendo.</p>
</div>
<img class="exclusivitées" src="img/bannière-switch.png"/>
<h1 class="titre-1">Sélection d'exclusivités</h1>
<div id="achats"></div>
<table>
<tbody>
<tr>
	<td class="case">
    <img class="jacket" src="img/jacket-mk8.png"/>
    <!--popup-->
    <div class="box">
    <a href="#popup-mk8" class="button">Acheter le produit ...</a>
  </div>
  <div id="popup-mk8" class="overlay">
    <div class="popup">
      <h2>Acheter le produit</h2>
      <a href="#achats" class="cross">&times;</a>
      <li><a href="https://store.nintendo.fr/fr/mario-kart-8-deluxe-000000000002520347" target="_blank" class="apple-link"><img src="img/logo-nintendo.png" alt="lien nintendo" class="apple-link-img"></a></li>
      <hr>
      <li><a href="https://www.micromania.fr/mario-kart-8-deluxe-75029.html?gclid=EAIaIQobChMIm9Gsr_v0_AIV9BkGAB22vg2gEAQYAyABEgK1FfD_BwE&gclsrc=aw.ds" target="_blank" class="apple-link"><img src="img/logo-micromania.png" id="img-discount" alt="lien micromania" class="apple-link-img"></a></li>
      <hr>
      <li><a href="https://www.amazon.fr/Nintendo-0045496420246-Mario-Kart-Deluxe/dp/B01N223WHL/ref=sr_1_1?adgrpid=145316776682&gclid=EAIaIQobChMI2qOL0fv0_AIVztvVCh0sFw8uEAAYASAAEgKQnvD_BwE&hvadid=636233417732&hvdev=c&hvlocphy=9055493&hvnetw=g&hvqmt=b&hvrand=6914036896197994171&hvtargid=kwd-1898920479116&hydadcr=10033_2153512&keywords=mario+kart+8+deluxe+jeux+switch&qid=1675276599&sr=8-1" target="_blank" class="apple-link"><img src="img/Amazon-shop.png" alt="lien amazon" class="apple-link-img"></a></li>
    </div>
  </div>
  </td>
	<td class="case">
    <img class="jacket" src="img/jacket-zelda.png"/>
    <!--popup-2-->
    <div class="box">
    <a href="#popup-zelda" class="button">Acheter le produit ...</a>
  </div>
  <div id="popup-zelda" class="overlay">
    <div class="popup">
      <h2>Acheter le produit</h2>
      <a href="#achats" class="cross">&times;</a>
      <li><a href="https://www.nintendo.fr/Jeux/Jeux-Nintendo-Switch/The-Legend-of-Zelda-Skyward-Sword-HD-1923575.html" target="_blank" class="apple-link"><img src="img/logo-nintendo.png" alt="lien nintendo" class="apple-link-img"></a></li>
      <hr>
      <li><a href="https://www.micromania.fr/the-legend-of-zelda-breath-of-the-wild-nintendo-switch-75023.html?gclid=EAIaIQobChMIqKO6jvz0_AIVU_lRCh1UrA4JEAQYASABEgJvA_D_BwE&gclsrc=aw.ds" target="_blank" class="apple-link"><img src="img/logo-micromania.png" id="img-discount" alt="lien micromania" class="apple-link-img"></a></li>
      <hr>
      <li><a href="https://www.amazon.fr/Legend-Zelda-Breath-Wild/dp/B01MUAFFPA/ref=sr_1_1?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=17W6EAEGXERWA&keywords=zelda+jeux+switch&qid=1675276742&sprefix=zelda+jeux+switch%2Caps%2C336&sr=8-1" target="_blank" class="apple-link"><img src="img/Amazon-shop.png" alt="lien amazon" class="apple-link-img"></a></li>
    </div>
  </div>
  </td>
</tr>
</tbody>
</table>
<?php 
    include 'php/footer.php' ;
    ?>
</body>
<script src="js/loader.js"></script>