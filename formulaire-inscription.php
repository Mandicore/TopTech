<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Top-tech</title>
    <link rel="shortcut icon" href="logo-1.png" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style-connexion.css" rel="stylesheet" type="text/css" />
  </head>
<body>
<div id="Inscription"> 
<div class="popup">
  <div class="login-form">
    <form action="t-inscription.php" method="post">
    <?php 
    if (isset($_GET['reg_err'])){

        $err = htmlspecialchars($_GET['reg_err']);

        switch($err){
          case 'success':
    ?>
    <div class="alert">
      <strong>Succès</strong><p> inscription réussie !</p>
    </div>
    <?php
    break;
    
    case 'email':
        ?>
        <div class="alert">
          <p><strong>Erreur</strong> Email non valide !</p>
        </div>
        <?php
        break;

        case 'email_lenght':
            ?>
            <div class="alert">
              <p><strong>Erreur</strong> Email trop long !</p>
            </div>
            <?php
            break;

            case 'pseudo_lenght':
                ?>
                <div class="alert">
                  <p><strong>Erreur</strong> Pseudo trop long !</p>
                </div>
                <?php
                break;

                case 'already':
                    ?>
                    <div class="alert">
                      <p><strong>Erreur</strong> Compte déjà existant !</p>
                    </div>
                    <?php
                    break;
        }
    }
    ?>
      <h2 class="text-center">Connexion</h2>
      <div class="form-group">
        <input type="text" name="pseudo" class="champs" placeholder="Pseudo" required="required" autocomplete="off">
      </div>
      <div class="form-group">
        <input type="email" name="email" class="champs" placeholder="Email" required="required" autocomplete="off">
      </div>
      <div class="form-group">
      <input type="password" name="password" class="champs" placeholder="Mot de passe" required="required" autocomplete="off">
      </div>
      <div class="form-group">
      <input type="password" name="password_retype" class="champs" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
      </div>
      <div class="form-group">
        <button type="submit" class="btn-ins">Inscription</button>
      </div>
    </form>
  </div>
</div>
  </div> 
</body>