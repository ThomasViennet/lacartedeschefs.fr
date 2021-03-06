<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/gtmHead.php';?>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/png" href="images/30x30_logo_la_carte_des_chefs.png">
  <title>Mon compte</title>
  <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
  <?php include 'includes/gtmBody.php';?>
  <?php include 'includes/navTop.php';?>
  <?php include 'includes/navFooter.php';?>

  <header>
    <h1>Mon compte</h1>
    <p class="boldItalic">Marquez l'histoire de la gastronomie.</p>
  </header>

  <p class="colorMain" style="text-align:center;"><?php echo $reponse;?></p>
  <section class="conteneur" style="justify-content:space-evenly;">
    <div class="element" style="width:300px;">
      <h2>Connectez-vous</h2>
      <form method="post" action="?action=connexion">
        <label for="email">Email</label><input type="email" id="email" name="email" placeholder="Email *"><br>
        <label for="password">Mot de passe</label><input type="password" id="password" name="password" placeholder="Mot de passe *"><br>
        <a href="?action=forgetPwd">Mot de passe oublié</a>
        <!-- <div class="g-recaptcha"
        data-sitekey="6Ld31ukUAAAAABk5yCzRpNIFnzjXvWHhnVHaR8Ib">
        </div> -->
        <input type="submit" name="submit" value="Valider" class="button">
      </form>

    </div>

    <div class="element" style="width:300px;">
      <h2>Créez un compte</h2>
      <form method="post" action="?action=cookRegister">
        <label for="email">Email</label><input type="email" id="email" name="email" placeholder="Votre adresse email *"><br>
        <label for="identifiant">Identifiant</label><input type="text" id="identifiant" name="identifiant" placeholder="Choisissez un identifiant *"><br>
        <label for="password">Mot de passe</label><input type="password" id="password" name="password" placeholder="Votre mot de passe *"><br>
        <label for="passwordConfirm">Confirmer mot de passe</label><input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="Confirmer le mot de passe *"><br>
        <ul class="tg-list">
          <li class="tg-list-item">
            <input class="tgl tgl-ios" id="cb2" name="cgu" type="checkbox"/>
            <label class="tgl-btn" for="cb2"></label>
          </li>
        </ul>
        Cochez la case pour accepter nos <a href="?action=cgu" target="_blank">CGU</a> et la <a href="?action=privacy" target="_blank">Politique de confidentialité</a>

        <!-- <div class="g-recaptcha"
        data-sitekey="6Ld31ukUAAAAABk5yCzRpNIFnzjXvWHhnVHaR8Ib">
        </div> -->
        <input type="submit" name="submit" value="Valider" class="button">
      </form>
    </div>
  </section>
  <?php include 'includes/footer.php';?>
</body>
</html>
