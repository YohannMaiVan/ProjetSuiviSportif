<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ton outil de suivi sportif!</title>
  </head>
  <body>

    <table>
    <thead>
        <tr>
            <th>Nom du workout</th>
            <th>Contenu du workout</th>
            <th>Auteur</th>
        </tr>
    </thead>

    <tbody>





        <?php




       foreach ($result as $workouts) {
    ?>


        <tr>
            <td>
                <?php echo $workouts["title"]; ?>
            </td>


            <td>
                <?php echo $workouts["content"]; ?>
            </td>

            <td> <?php /* foreach ($result_user as $users){

              echo $users['name'];
            }
              */
              echo $workouts['name']; ?>
            </td>

            <td>
                <form action="" method="post">
                    <input type="hidden" name="task_id" value="<?php echo $workouts["id"]; ?>">
                    <input type="submit" name="edit_task" value="Edit">
                </form>
            </td>

            <td>
                <form action="" method="post">
                    <input type="hidden" name="task_id" value="<?php echo $workouts["id"]; ?>">
                    <input type="submit" name="delete_task" value="Delete">
                </form>
            </td>

        </tr>

     <?php
}

        ?>

    <form action="view/inscription.html.php">
      <input type="submit" value="S'inscrire">
    </form>
    <form action="./controller/connexion.php">
      <input type="submit" value="Se connecter">
    </form>


  </body>
</html>
