<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon profil</title>
  </head>
  <body>
    <div align="center">
      <h2>Profil de <?php echo $userinfo['name']; ?></h2>
      <br><br>
      Pseudo = <?php echo $userinfo['name']; ?>
      <br>
      Mail = <?php echo $userinfo['email']; ?>
    </div>
    <?php
    // Si l'utilisateur est connecté
    if ($userinfo['id'] == $_SESSION['id'])
    {
    ?>
    <a href="#">Editer mon profil</a>
    <a href="create_workout.php?id=<?=$_SESSION['id']?>">Créer un Workout</a>
    <a href="deconnexion.php">Se déconnecter</a>

    <?php
    }
    ?>

  </body>
</html>
