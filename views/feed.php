<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/gtmHead.php';?>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/png" href="images/30x30_logo_la_carte_des_chefs.png">
  <title>La carte des chefs</title>
</head>

<body>
  <?php include 'includes/gtmBody.php';?>
  <?php include 'includes/navTop.php';?>
  <?php include 'includes/navFooter.php';?>

  <header>
    <h1>Votre carte des chefs</h1>
    <p class="boldItalic">Retrouvez les recettes des chefs que vous suivez.</p>
  </header>

    <?php
    if ($cookSession->nbrFollowing() < 10) {
      $limit = 10-$cookSession->nbrFollowing();
    ?>
      <section>
        <a href="?action=cookList"><h2>Abonnez-vous à des chefs et retrouvez leurs recettes ici.</h2></a>
        <div class="conteneur">
          <?php cookList(5);?>
        </div>
      </section>
    <?php
    }
    ?>
  <section class="conteneur">
    <!-- <p><u>Début de la compétition le dimanche 26 avril 2020</u></p> -->
    <?php echo recipeFeed();?>

  </section>
  <?php include 'includes/footer.php';?>
</body>
</html>
