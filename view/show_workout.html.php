<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <table>
    <thead>
        <tr>
            <th>Nom du workout</th>
            <th>Contenu de mon workout</th>
        </tr>
    </thead>

    <tbody>





        <?php




       /*foreach ($result as $workouts) */{
    ?>


        <tr>
          <td>
              <?php
        /*      var_dump($workouts["id"]);
              var_dump($my_selected_title);
              var_dump($get_title); */

               echo $my_selected_workout["title"]; ?>
            </td>


            <td>
                <?php echo $my_selected_workout["content"]; ?>
            </td>

            <td>
                <form action="page/edit_workout.php" method="post">
                    <input type="hidden" name="task_id" value="<?php echo $workouts["id"]; ?>">
                    <input type="submit" name="edit_workout" value="Modifier mon Workout">
                </form>
            </td>

            <td>
                <form action="page/delete_workout.php" method="post">
                    <input type="hidden" name="task_id" value="<?php echo $workouts["id"]; ?>">
                    <input type="submit" name="delete_workout" value="Supprimer mon Workout">
                </form>
            </td>
        </tr>

     <?php
  }

        ?>


  </body>
</html>
