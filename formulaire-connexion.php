<div id="connexion" class="overlay">
<div class="popup">
  <a href="#" class="cross">&times;</a>
  <div class="login-form">
  <form action="t-connexion.php" method="post">
    <?php
    if (isset($_GET['login_err'])){

      $err = htmlspecialchars($_GET['login_err']);

      switch($err){
        case 'password':
          ?>
          <div class="alert">
            <strong>Erreur</strong><p> Mot de passe incorrect</p>
          </div>
          <?php
          break;

          case 'email':
            ?>
           <div class="alert">
              <strong>Erreur</strong><p> Email incorrect</p>
            </div>
            <?php
            break;

            case 'allready':
             ?>
             <div class="alert">
                <strong>Erreur</strong><p> compte non-existant</p>
              </div>
              <?php
              break;
        }
      }
    ?>
      <h2 class="text-center">Connexion</h2>
      <div class="form-group">
        <input type="email" name="email" class="champs" placeholder="Email" required="required" autocomplete="off">
      </div>
      <div class="form-group">
      <input type="password" name="password" class="champs" placeholder="Mot de passe" required="required" autocomplete="off">
      </div>
      <div class="form-group">
        <button type="submit" class="btn-co">Connexion</button>
      </div>
    </form>
    <p class="inscription-link"><a href="formulaire-inscription.php">Inscription</a></p>
    <p class="inscription-link"><a href="deconnexion.php">Déconnexion</a></p>
  </div>
</div>
  </div> 