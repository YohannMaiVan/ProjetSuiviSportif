<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modifie ton Workout</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="hidden" name="task_id" value="<?php echo $workouts["id"]?>">
      <input type="text" name="edit_title_workout" value="Modifie le titre de ton Workout">
      <input type="text" name="edit_content_workout" value="Modifie le contenu de ton Workout">
      <input type="submit" name="edit_this_workout" value="Save changes">

    </form>

  </body>
</html>
