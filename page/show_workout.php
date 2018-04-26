<?php
session_start();
if (isset($_GET['title'], $_GET['id']) AND !empty($_GET['title']) AND !empty($_GET['id']))
{
  $get_id = htmlspecialchars($_GET['id']);
	$get_title = htmlspecialchars($_GET['title']);

	$pdo = new PDO('mysql:host=localhost;dbname=outil_suivi;charset=utf8','root','simplonco');
	$selected_title = $pdo->prepare('SELECT title FROM workouts WHERE id = ?');
	$selected_title->execute(array($get_id));
	$my_selected_title = $selected_title->fetch()['title'];

    if ($get_title == $my_selected_title)
    {

		$selected_workout = $pdo->prepare('SELECT * FROM workouts WHERE id = ?');
		$selected_workout->execute(array($get_id));
		$my_selected_workout = $selected_workout->fetch();
    /*  workout::selectWorkout($id, $title);*/

    }
    require ('../view/show_workout.html.php');
  /*  else
    {
      echo "erreur";
    } */
}
else{
	die("Ce workout n'existe pas");
}
 ?>
