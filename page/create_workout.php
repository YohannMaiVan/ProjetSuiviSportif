<?php
session_start();
require ('../model/config.php');
require ('../view/create_workout.html.php');
$get_user = $_SESSION['id'];

if(isset($_POST['submit_my_workout']))
{
  if(isset($_POST['my_workout_title'], $_POST['my_workout_content']))
  {
      if(!empty($_POST['my_workout_title']) AND !empty($_POST['my_workout_content']))
      {
          $my_workout_title = htmlspecialchars($_POST['my_workout_title']);
          $my_workout_content = htmlspecialchars($_POST['my_workout_content']);

            $ins = $pdo->prepare('INSERT INTO workouts (title, content, created_at, user_id)
            VALUES (?, ?, NOW(), ?)');
            $ins->execute(array($my_workout_title, $my_workout_content, $get_user)); //on passe nos paramètres dans un tableau
            $message = "Les données de votre Workout ont bien été envoyées !";
      }
      else
      {
        $message="Veuillez remplir tous les champs";
      }
  }
}

if(isset ($message))
{
  echo $message;
}

 ?>
