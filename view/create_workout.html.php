<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ton Workout</title>
  </head>
  <body>
    <form action="create_workout.php" method="post">
      <input type="text" name="my_workout_title" placeholder="Nom du workout"><br>
      <textarea name="my_workout_content" placeholder="Insérez des données sur votre workout. Ajoutez par exemple votre temps réalisé sur un 3x500, le nombre de km parcourus dans votre footing, vos charges/répétitions/séries de votre entraînement. Vous pouvez également ajouter des commentaires sur votre ressenti, avez vous bien dormi, bien mangé?"></textarea><br>
      <input type="submit" name="submit_my_workout" value="Envoyer les données du workout">
    </form>
  </body>
</html>
