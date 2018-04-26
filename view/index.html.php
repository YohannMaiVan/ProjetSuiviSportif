<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" href="./css/home.css">
    <title>Ton outil de suivi sportif!</title>
  </head>
  <body>
    <div id="top" class="navbar">
      <div class="logo">
        <a href="index.php"><img src="./css/images/home.png" width="47px"></a>
      </div>
      <div class="auth">
        <a href="page/inscription.php">S'inscrire</a>
        <a href="page/connexion.php">Se connecter</a>
      </div>
    </div>
    <div class="browse_workouts">

    <?php foreach ($result as $workouts) {  ?>

        <div class="sticker_workout">
            <img src="./css/images/lungesgirl.jpg" alt="lunges_girl" width="120px" height="80px">
            <p>
                <?php echo $workouts["title"];
              /*  var_dump($workouts["id"]);*/ ?>
            </p>

            <p> <?php /* foreach ($result_user as $users){

              echo $users['name'];
            }
              */
              echo $workouts['name']; ?>
            </p>

            <p>
                <form action="page/show_workout.php?title=<?=$workouts["title"];?>&id=<?=$workouts["id"];?>" method="post">
                    <input type="hidden" name="task_id" value="<?php echo $workouts["id"]; ?>">
                    <input type="submit" name="show_workout" value="Afficher le Workout">
                </form>
            </p>

        </div>

     <?php
}

        ?>
</div>

<div class="footer">

  <div class="footer_plus">

    <a href="About Us.php"><img src="./css/images/home.png" height="12px"> About Us </a>
    <a href="Contact Us.php"><img src="./css/images/home.png" height="12px"> Contact Us </a>
    <a title="Retouner en haut de la page" class="back_top_button" href="#top"> ↑ </a>

  </div>

  <div class="stylebar_footer"></div>

  <div class="footer_rights">

    <p>

      &copy; Copyright 2018 - All rights reserved.

    </p>

  </div>

  </body>
</html>
