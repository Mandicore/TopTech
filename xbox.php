<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Xbox</title>
    <link rel="shortcut icon" href="logo-1.png" />
    <link href="css/style-console.css" rel="stylesheet" type="text/css" />
    <link href="css/style-header-console.css" rel="stylesheet" type="text/css" />
    <link href="css/style-loader.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style-xbox.css" rel="stylesheet" type="text/css" />
    <link href="css/style-popup-console.css" rel="stylesheet" type="text/css" />
  </head>
<body class="xbox">
<?php
		include 'php/loader.php' ;
	?>
  <?php
    include 'php/header-console.php' ;
    ?>
<div class="bloc" id="start">
  <video autoplay="autoplay" muted loop="infinite" src="video/seriesxtrailer.mp4"></video>
</div>
<h1 class="titre-1">Xbox Series</h1>
<img class="image-1" src="img/series-img.png"/>
<div class="right">
<p class="paragraphe">La Xbox séries X est la 4eme console de Microsoft sortie le 10 novembre 2020 durant la pandémie du covid-19 mais malgré sa c’est une console facile à trouver dans les magasins dédiés. C’est la console actuelle la plus puissante du marcher donc si c’est la puissance est votre critère principal pour acheter une console c’est celle-ci qu’il vous faut. Microsoft propose quelques exclusivités comme la série de jeux Forza ou bien Halo, mais est-il possible de parler d’exclusivités alors que tous ses jeux sont disponibles pour les joueur pc. Mais la vraie raison d’avoir une Xbox est pour le Xbox Game-Pass c’est un service d’abonnement qui permet d’avoir un jeu par mois et il y a une centaine de jeu dans cette sélection et certain des gros jeux sont sur ce service à leur quasi sorti. De plus le Game-Pass propose un coud gaming, c’est-à-dire qu’il est possible de jouer à une sélection de jeux sur un ordinateur peu puissant et sans télécharger le jeu sur votre machine. De plus le prix très attractif de la version « s » (250€) saura séduire le plus grand nombre.</p>
</div>
<img class="exclusivitées" src="img/exclu-xbox.png"/>
<h1 class="titre-1">Les exclusivités</h1>
<div id="achats"></div>
<table>
<tbody>
<tr>
	<td class="case">
    <img class="jacket" src="img/jacket-fh5.png"/>
    <!--popup-->
    <div class="box">
    <a href="#popup-fh5" class="button">Acheter le produit ...</a>
  </div>
  <div id="popup-fh5" class="overlay">
    <div class="popup">
      <h2>Acheter le produit</h2>
      <a href="#achats" class="cross">&times;</a>
      <li><a href="https://www.xbox.com/fr-fr/games/store/forza-horizon-5/9nnx1vvr3knq?activetab=pivot:overviewtab" target="_blank" class="apple-link"><img src="img/logo-xbox.png" alt="lien playstation store" class="apple-link-img"></a></li>
      <hr>
      <li><a href="https://www.micromania.fr/forza-horizon-5-114002.html?gclid=EAIaIQobChMIoZ2W6Or0_AIVJfbVCh3UbgxiEAQYASABEgL1hfD_BwE&gclsrc=aw.ds" target="_blank" class="apple-link"><img src="img/logo-micromania.png" id="img-discount" alt="lien micromania" class="apple-link-img"></a></li>
      <hr>
      <li><a href="https://www.amazon.fr/Microsoft-0889842889338-Forza-Horizon-Standard/dp/B099BWLHRB/ref=sr_1_1?adgrpid=145384932362&gclid=EAIaIQobChMIxuXp-er0_AIVHhkGAB2z-gGQEAAYASAAEgJE8vD_BwE&hvadid=636575296701&hvdev=c&hvlocphy=9055493&hvnetw=g&hvqmt=b&hvrand=8732622092145149954&hvtargid=kwd-1432550229963&hydadcr=10001_2236174&keywords=forza+5+xbox+serie+x&qid=1675272118&sr=8-1" target="_blank" class="apple-link"><img src="img/Amazon-shop.png" alt="lien amazon" class="apple-link-img"></a></li>
    </div>
  </div>
  </td>
	<td class="case">
    <img class="jacket" src="img/jacket-halo.png"/>
    <!--popup-2-->
    <div class="box">
    <a href="#popup-halo" class="button">Acheter le produit ...</a>
  </div>
  <div id="popup-halo" class="overlay">
    <div class="popup">
      <h2>Acheter le produit</h2>
      <h2>Jeu Gratuit !</h2>
      <a href="#achats" class="cross">&times;</a>
      <li><a href="https://www.xbox.com/fr-fr/games/store/halo-infinite/9pp5g1f0c2b6#activetab=pivot:overviewtab" target="_blank" class="apple-link"><img src="img/logo-xbox.png" alt="lien lien microsoft store" class="apple-link-img"></a></li>
      <hr>
      <h2>Version Payante !</h2>
      <li><a href="https://www.micromania.fr/halo-infinite-steelbook-edition-106275.html?gclid=EAIaIQobChMI2rm0kez0_AIVB7btCh3uxACJEAQYASABEgLRyPD_BwE&gclsrc=aw.ds" target="_blank" class="apple-link"><img src="img/logo-micromania.png" id="img-discount" alt="lien micromania" class="apple-link-img"></a></li>
      <hr>
      <li><a href="https://www.amazon.fr/Halo-Infinite-Xbox-Series-X/dp/B099KV6V8H/ref=asc_df_B099KV6V8H/?tag=googshopfr-21&linkCode=df0&hvadid=506977074218&hvpos=&hvnetw=g&hvrand=12690759209213538157&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9055493&hvtargid=pla-1416153469375&psc=1" target="_blank" class="apple-link"><img src="img/Amazon-shop.png" alt="lien amazon" class="apple-link-img"></a></li>
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