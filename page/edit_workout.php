<?php

require ('../model/workout.php');
require ('../view/edit_workout.html.php');
if (isset($_GET["id"]), ($_GET["title"])){


if (isset($_POST["edit_workout"]))
{
  /*if (isset($_POST["edit_title_workout"] || ($_POST["edit_content_workout"])))
  {*/
    workout::editWorkout();
    $message = "Les données de votre entraînement ont bien été modifiées";
  }
  else {
    $message = "Aucune donnée n'a été modifiée";
  }
}

if(isset ($message))
{
  echo $message;
}











 ?>
