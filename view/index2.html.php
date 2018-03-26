<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <title>Suivez votre évolution !</title>
    </head>


    <body>

<?php echo "hello world"; ?>

<table>

  <thead>
    <tr>
      <th>Entraînement</th>
      <th>Contenu de l'entraînement</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($result as $workout) { ?>
      <?php var_dump($result); ?>
    <!-- Insérer les données de l'entrainement sur la vue, voir BDD Table Workout champs "title" & "content" -->
    <tr>
      <td><?php echo $workout["title"]; ?></td>
      <td><?php echo $workout["content"]; ?></td>
    </tr>
  <?php } ?>
  </tbody>

</table>











    </body>
</html>
